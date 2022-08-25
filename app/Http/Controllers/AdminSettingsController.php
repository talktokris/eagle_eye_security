<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Gallery_type_list;
use App\Models\Clients_type_list;


class AdminSettingsController extends Controller
{
    public function gallery(){


        $data= Gallery_type_list::get();

        return view("admin.settingGallery")->with(compact("data"));


    }

    public function createGallery(Request $request){


        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'full_name' => 'required|string|min:5|max:150',
            'status' => 'required|integer|between:0,10',

            ]);


         //   $user_id = Auth::user()->id;
           // $email = Auth::user()->email;




            $name_short =str_replace(" ","-",$data['full_name']);
            $name_short =str_replace("&","n",$name_short);
         //  dd($name_short);
            $data= $request->all();
            $newsSave = new Gallery_type_list;
            $newsSave->name_short= $name_short;
            $newsSave->full_name= $data['full_name'];
            $newsSave->status= $data['status'];
            $newsSave->save();


            if(!$newsSave){      return redirect('admin/gallery/category/create')->with('flash_message_error', 'Internal error. Please email to support@ealgeeyesecurity.com.my'); }
            else {   return redirect('admin/gallery/category/create')->with('flash_message_success', 'Gallery category created successfully');}

        }

        return view("admin.settingCreateGallery");


    }



    public function deleteGallery(Request $request, $hash_id=null){

      $role = Auth::user()->role;

        if(($role>=1) &&($hash_id!='')){



            $id = base64_decode($hash_id);
            $deleteNews = Gallery_type_list::where('id', '=', $id)->delete();
           // return $deleteNews;
            if($deleteNews){   return redirect('admin/setting/gallery-category')->with('flash_message_success', 'Gallery Catagory deleted sucessfully');  }
            else {   return redirect('admin/setting/gallery-category')->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

        }

        return redirect('admin/setting/gallery-category');


    }





    public function client(){

        $data= Clients_type_list::get();

        return view("admin.settingClinets")->with(compact("data"));

    }


    public function createClient(Request $request){

        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'full_name' => 'required|string|min:5|max:150',
            'status' => 'required|integer|between:0,10',

            ]);


         //   $user_id = Auth::user()->id;
           // $email = Auth::user()->email;




            $name_short =str_replace(" ","-",$data['full_name']);
            $name_short =str_replace("&","n",$name_short);
         //  dd($name_short);
            $data= $request->all();
            $newsSave = new Clients_type_list;
            $newsSave->name_short= $name_short;
            $newsSave->full_name= $data['full_name'];
            $newsSave->status= $data['status'];
            $newsSave->save();


            if(!$newsSave){      return redirect('admin/gallery/category/create')->with('flash_message_error', 'Internal error. Please email to support@ealgeeyesecurity.com.my'); }
            else {   return redirect('admin/gallery/category/create')->with('flash_message_success', 'Gallery category created successfully');}

        }

        return view("admin.settingCreateClinet");


    }



    public function deleteClient(Request $request, $hash_id=null){

      $role = Auth::user()->role;

        if(($role>=1) &&($hash_id!='')){



            $id = base64_decode($hash_id);
            $deleteNews = Clients_type_list::where('id', '=', $id)->delete();
           // return $deleteNews;
            if($deleteNews){   return redirect('admin/setting/client-category')->with('flash_message_success', 'Client category deleted sucessfully');  }
            else {   return redirect('admin/setting/client-category')->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

        }

        return redirect('admin/setting/client-category');


    }



}
