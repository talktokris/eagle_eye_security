<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clients_type_list;
use App\Models\Clients_list;
use Intervention\Image\Facades\Image;

class AdminClientsController extends Controller
{
    public function search(){


        $galCatData =Clients_type_list::where('status', 1)->get();
        $galleryDataAll =Clients_list::where('status', 1)->limit(50)->get();
        return view("admin.adminClientSearch")->with(compact("galCatData"))->with(compact("galleryDataAll"));

    }




    public function create(Request $request){

        $News_listData= Clients_type_list::where('status','=',1)->get();
       // $id= base64_decode($hash_id);

        $savingPath='assets/images/client';

        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'image_name'=>'required|mimes:png,jpg,gif,jpeg|max:8048',
                'client_name' => 'required|string|min:5|max:50',
                'client_category' => 'required|string|min:2|max:50',

            ]);

            $data = $request->all();

            $imageName = $data['image_name'];




           // $get_id = $next_ID;
            $maxOriginalNameSize=20;
            $ImageNameOrg=$imageName->getClientOriginalName();
            if(strlen($ImageNameOrg) > $maxOriginalNameSize){ $ImageNewNameSet=substr($ImageNameOrg, 0, $maxOriginalNameSize);
                $ImageNewName= $ImageNewNameSet.'.'.$imageName->getClientOriginalExtension();
             }
            else { $ImageNewName = $ImageNameOrg;}// shorting the image name;

            $getImageName= date('Y-m-d-His').'-'.$ImageNewName;

            /* Saving the images Start */

            $thumbImgName='thumb-'.$getImageName;
            $largeImgName='large-'.$getImageName;

            $data= $request->all();
            $newsSave = new Clients_list;
            $newsSave->client_category= $data['client_category'];
            $newsSave->client_name= $data['client_name'];
            $newsSave->client_logo_image= $thumbImgName;
            $newsSave->status= 1;
            $newsSave->save();

            if(!$newsSave){  $get_id = 1;}
            else{ $get_id = $newsSave->id;}



            $newPath= $savingPath.'/'.$get_id;

          if (!file_exists($newPath)) {  mkdir($newPath, 0777, true);  }

            $img = Image::make($imageName)->fit(500, 500, function ($constraint) {
                    $constraint->upsize();
            });
            $img->save($newPath.'/'.$thumbImgName, 60);



              //  $imageSave = News_notice_list::where("id", $get_id)->update(["image_small" => $thumbImgName,"image_large" => $largeImgName]);

            if($newsSave){
                     return redirect("/admin/client/client-search")->with('flash_message_success', ' Image uploaded successfully');  }
            else {   return  redirect("/admin/client/client-search")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

        }

        return view("admin.clientImageUpload")->with(compact("News_listData"));

    }



    public function deleteGalleryImage($hash_id=null){

        $deleteImagData= Clients_list::where('id','=', base64_decode($hash_id))->get();



        if($hash_id!=''){

            $id = base64_decode($hash_id);


            $img_location= 'assets/images/client/'.$id;

            foreach($deleteImagData as $dRow){

               $imgDelNmOne = $img_location.'/'.$dRow->client_logo_image;
             //  dd($imgDelNmOne);
              if (file_exists($imgDelNmOne)) { unlink($imgDelNmOne);  }


            }



            $deleteTourType = Clients_list::where('id', '=', $id)->delete();


            if($deleteTourType){
                return redirect("/admin/client/client-search")->with('flash_message_success', ' Image deleted successfully');  }
           else {   return  redirect("/admin/client/client-search")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }



        }

    }




}