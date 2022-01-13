<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allService(){

        $services = Service::all();

        return view('backend.service.show',compact('services'));

    }
    public function addService(Request $request){
       // dd($request);
        if($request->method() == 'GET'){
            return view('backend.service.add');
        }else if($request->method() == 'POST'){
            $validateData = $request->validate(

                [
                    'name_service' => 'unique:services|string|required|min:4',
                    'description_service'=> 'string|required',
                    'image_service' => 'required|mimes:png,jpg,jpeg,svg',
                    'icon_service' => 'required|mimes:png,jpg,jpeg,svg'
                ],
                [
                    'name_service.required' => ' Champ requis',
                ]
            );

            $image_service = $request->file('image_service');
            $icon_service = $request->file('icon_service');
            $name_gen_image = hexdec(uniqid()).'.'.$image_service->getClientOriginalExtension();
            $name_gen_icon = hexdec(uniqid()).'.'.$icon_service->getClientOriginalExtension();
         //   Image::make($image_service)->save('backend/media/service/image/'.$name_gen_image);
          //  Image::make($icon_service)->save('backend/media/service/icon/'.$name_gen_icon);
            $last_img = 'backend/media/service/image/'.$name_gen_image;
            $last_icon = 'backend/media/service/icon/'.$name_gen_icon;
            $up_location_image = 'backend/media/service/image/';
            $up_location_icon = 'backend/media/service/icon/';
            $image_service->move($up_location_image,$name_gen_image);
            $icon_service->move($up_location_icon,$name_gen_icon);
            service::insert([

                'name_service'=>$request->name_service,
                'description_service'=>$request->description_service,
                'image_service'=>$last_img,
                'icon_service'=>$last_icon,
                'created_at' => Carbon::now()
                ]);
                return Redirect()->route('show.service');

        }
        return Redirect()->back();


    }

    public function editService(Request $request){
            $id = $request->id;
            $service = service::find($id);
            if($service==null){
                return Redirect()->route('show.service');
            }
            if($request->button == "btn_delete"){

                $service=service::find ($id);
                $old_image = $service->image_service;
                $old_icon = $service->icon_service;
                unlink($old_image);
                unlink($old_icon);
                service::find($id)->delete();
                return Redirect()->back();
            }
                return view('backend.service.edit',compact('service'));
            


    }

    public function updateService(Request $request){



       

        $old_image = $request->old_image;
        $image_service = $request->file('image_service');
        $old_icon = $request->old_icon;
        $icon_service = $request->file('icon_service');

        if($image_service){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image_service->getClientOriginalExtension());
            $img_name= $name_gen.'.'.$img_ext;
            // dd($img_name);
            $up_location = 'backend/media/service/image/';
            $last_img =  $up_location.$img_name;
            $image_service->move($up_location,$img_name);
            unlink($old_image);
            service::find($request->id)->update([
                'image_service'=>$last_img,
            ]);

        }

        if($icon_service){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($icon_service->getClientOriginalExtension());
            $img_name= $name_gen.'.'.$img_ext;
            // dd($img_name);
            $up_location = 'backend/media/service/icon/';
            $last_icon =  $up_location.$img_name;
            $icon_service->move($up_location,$img_name);
            unlink($old_icon);
            service::find($request->id)->update([
                'icon_service'=>$last_icon,
            ]);
        }

        service::find($request->id)->update([

            'name_service'=>$request->name_service,
            'description_service'=>$request->description_service,
        ]);

        return Redirect()->route('show.service');

    }


}
