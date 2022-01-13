<?php

namespace App\Http\Controllers;

use App\Models\Travaux;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TravauxController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allTravaux(){

        $travaux = Travaux::get();
        return view('backend.travaux.show',compact('travaux'));

    }

    public function addTravaux(Request $request){
        // dd($request);
         if($request->method() == 'GET'){
             return view('backend.travaux.add');
         }else if($request->method() == 'POST'){


            $validateData = $request->validate(

                [
                    'name' => 'string|required|min:4',
                    'technologie' => 'string|required|min:4',
                    'description'=> 'string|required',
                    'image_travaux' => 'required|mimes:png,jpg,jpeg,svg',
                    'lien' => 'required',
                    
                ]);

                $image_travaux = $request->file('image_travaux');
               
                $name_gen_image = hexdec(uniqid()).'.'.$image_travaux->getClientOriginalExtension();
                $last_img = 'backend/media/travaux/image/'.$name_gen_image;
                $up_location_image = 'backend/media/travaux/image/';
                $image_travaux->move($up_location_image,$name_gen_image);
                Travaux::insert([

                    'technologie' =>$request->technologie,
                    'nom'=>$request->name,
                    'description'=>$request->description,
                    'slug' => strtolower(str_replace(' ', '-', $request->name)),
                    'image_travaux'=>$last_img,
                    'lien' =>$request->lien, 
                    'created_at' => Carbon::now()
                    ]);
                    return Redirect()->route('show.travaux');
                
         }
}

    public function editTravaux(Request $request){
        $id = $request->id;
        $t = Travaux::find($id);
       // $slug=$t->slug;
        if($t==null){
            return Redirect()->route('show.travaux');
        }
        if($request->button == "btn_delete"){

            $t=Travaux::find ($id);
            $old_image = $t->image_travaux;
            unlink($old_image);
            Travaux::find($id)->delete();
            return Redirect()->back();
        }else{
           
            return view('backend.travaux.edit',compact('t'));
        }


    }

    public function updateTravaux(Request $request){






        $old_image = $request->old_image;
        $image_travaux = $request->file('image_travaux');
        if($image_travaux){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image_travaux->getClientOriginalExtension());
            $img_name= $name_gen.'.'.$img_ext;
            // dd($img_name);
            $up_location = 'backend/media/travaux/image/';
            $last_img =  $up_location.$img_name;
            $image_travaux->move($up_location,$img_name);
            unlink($old_image);
            Travaux::find($request->id)->update([
                'image_travaux'=>$last_img,
            ]);

        }

        

        Travaux::find($request->id)->update([

            'nom'=>$request->name,
            'description'=>$request->description,
            'technologie' =>$request->technologie,
            'lien' =>$request->lien, 
        
        ]);

        return Redirect()->route('show.travaux');

    }


}
