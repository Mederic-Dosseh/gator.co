<?php

use Illuminate\Support\Facades\Http;

class Paiement {
    

    public function paytech_paiement(array $data){


        extract($data);
        $jsonResponse = (new PayTech(env('API_KEY_PAYTECH'),env('API_KEY_PAYTECH_SECRET')))->setQuery([
            'item_name' => $nom,
            'item_price' => $prix,
            'command_name' => "Paiement  de  {$nom} ",
        ])->setCustomeField([
            'item_id' => $ref,
            'time_command' => time(),
            'ip_user' => $_SERVER['REMOTE_ADDR'],
            'lang' => $_SERVER['HTTP_ACCEPT_LANGUAGE']
        ])
            ->setTestMode(false)
            ->setCurrency('XOF')
            ->setRefCommand(uniqid())
            ->setNotificationUrl([
                'ipn_url' =>     'https://localhost:7000/paiement/paytech/ipn', //only https
                'success_url' => 'http://localhost:7000/paiement/'.$ref.'/success',
                'cancel_url' =>  'http://localhost:7000/paiement/'.$ref.'/cancel',
            ])->send();

     
     //dd($jsonResponse);
     if($jsonResponse['success']==1){

      header("Location:".$jsonResponse['redirect_url']);

       
        
        
     }else{
        dd($jsonResponse);
     }
        
    }


    public function paygate(array $data){
        extract($data);
        $url_success = env('APP_URL')."/paiement/$transaction_id/success/";
        header("Location:https://paygateglobal.com/v1/page?token=".env('PAYGATE_TOKEN')."&amount=$montant&description=$nom&identifier=$transaction_id&url=$url_success");    
    }
}
    