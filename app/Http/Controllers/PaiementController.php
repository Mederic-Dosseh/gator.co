<?php

namespace App\Http\Controllers;

use App\Models\Paiement as ModelsPaiement;
use Illuminate\Http\Request;
use Paiement;
class PaiementController extends Controller
{
    public function  checkout(){
        return  view('paiement.checkout');
    }

    public function allPaiement() {
        $paiements = ModelsPaiement::all();
        return  view('backend.show_paiement',compact('paiements'));
    }

    public function payAction(Request $request){
        
       $request->validate([
        'email' => 'email|required',
        'nom' => 'string|required',
        'montant' => 'required',
        'paymethode' => 'required',
          ]); 
       $uniqueid=uniqid();
      // dd($request);

        $paiement = new \App\Models\Paiement();
        $paiement->email = $request->email;
        $paiement->montant = $request->montant;
        $paiement->nom_client= $request->nom;
        $paiement->pay_method=$request->paymethode;
        $paiement->note=$request->note;
        $paiement->transaction_id=$uniqueid;
        $paiement->status='en attente';
        $paiement->save();


    if($request->paymethode == "paytech"){
        $data=[
            'email' => $request->email,
            'prix'=>  100,// $request->montant,
            'ref'=>$uniqueid,
            'nom'=> $request->nom,
           ];
        $paiement = new Paiement();
        $paiement->paytech_paiement($data);
        //die('zebi');
    }

    if($request->paymethode == "paygate"){
        $data=[
          'email' => $request->email,
          'montant'=> $request->montant,
          'nom'=> $request->nom,
          'transaction_id'=>$uniqueid,
      ];
      $paiement = new Paiement();
      $paiement->paygate($data);
    }

    

   /* if($request->paymethode == "paypal"){
        dd($request);
    }

    dd('aucun if');*/


    }

    public function  paySuccess(Request $request){
        dd($request);
      
        return  view('paiement.success');
    }
    public function  payCancel(Request $request){
        dd($request);
        return  view('paiement.cancell');
    }

    public function  ipn(Request $request){
        //$paiement = ModelsPaiement::where("transaction_id","616ca7d5ead54")->first();
        if($request->pay_method == "paytech"){
            $type_event = $request->type_event;
            $tel_paiement = $request->client_phone;
            //$custom_field = json_decode($request->custom_field, true);
            $ref_command = $request->ref_command;
            $item_price =  $request->item_price;
            $payment_method = $request->payment_method;
           // $env = $request->env;
            $token = $request->token;
            $api_key_sha256 = $request->api_key_sha256;
            $api_secret_sha256 = $request->api_secret_sha256;
            if(hash('sha256', env('API_KEY_PAYTECH_SECRET')) === $api_secret_sha256 && hash('sha256', env('API_KEY_PAYTECH')) === $api_key_sha256)
            {
                $paiement = ModelsPaiement::where("transaction_id",$ref_command)->first();
                $paiement->montant = $item_price;
                $paiement->pay_method= $payment_method;
                $paiement->transaction_numero =$token;
                if($type_event=="sale_complete"){
                    $paiement->status='payé';
                }else{
                    $paiement->status='en attente';
                }
                $paiement->tel_paiement=$tel_paiement;
                $paiement->update();              
            }
            else{
                return  redirect('checkout');
            }
           
        }else if($request->pay_method == "paygate"){

            $ref_paygate = $request->tx_reference;
            $ref_commande = $request->identifier;
            $item_price =  $request->amount;
            $payment_method = $request->payment_method;
            $tel_paiement = $request->phone_number;

            $paiement = ModelsPaiement::where("transaction_id",$ref_commande)->first();
            $paiement->montant = $item_price;
            $paiement->pay_method= $payment_method;
            $paiement->transaction_numero =$ref_paygate;
            if($item_price>0){
                $paiement->status='payé';
            }else{
                $paiement->status='en attente';
            }
            $paiement->tel_paiement=$tel_paiement;
            $paiement->update();  
        }

    }


}
