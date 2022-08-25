<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gallery_type_list;
use App\Models\Gallery_list;
use Intervention\Image\Facades\Image;

class AdminGalleryController extends Controller
{

    public function search(){


        $galCatData =Gallery_type_list::where('status', 1)->get();
        $galleryDataAll =Gallery_list::where('status', 1)->limit(50)->get();
        return view("admin.adminGallerySearch")->with(compact("galCatData"))->with(compact("galleryDataAll"));

    }


    public function galleryType(Request $request){

        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'catagory_name' => 'required|string|min:5|max:50',

            ]);

            $data = $request->all();

            $catagory_name = $data['catagory_name'];

        $galCatData = Gallery_type_list::get();
        $galleryDataAll = Gallery_list::where('galley_category','=', $catagory_name)->get();

        return view("admin.adminGallerySearch")->with(compact("galCatData"))->with(compact("galleryDataAll"));

        }
    }



    public function create(Request $request){

        $News_listData= Gallery_type_list::where('status','=',1)->get();
       // $id= base64_decode($hash_id);

        $savingPath='assets/images/gallery';

        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'galley_title' => 'required|string|min:5|max:50',
                'galley_category' => 'required|string|min:2|max:50',
                'image_name'=>'required|mimes:png,jpg,jpeg|max:8048',

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
            $newsSave = new Gallery_list;
            $newsSave->galley_category= $data['galley_category'];
            $newsSave->galley_title= $data['galley_title'];
            $newsSave->image_small= $thumbImgName;
            $newsSave->image_large= $largeImgName;
            $newsSave->status= 1;
            $newsSave->save();

            if(!$newsSave){  $get_id = 1;}
            else{ $get_id = $newsSave->id;}



            $newPath= $savingPath.'/'.$get_id;

          if (!file_exists($newPath)) {  mkdir($newPath, 0777, true);  }

            $img = Image::make($imageName)->fit(400, 400, function ($constraint) {
                    $constraint->upsize();
            });
            $img->save($newPath.'/'.$thumbImgName, 60);

            $img2 = Image::make($imageName)->fit(1000, 1000, function ($constraint) {
                $constraint->upsize();
            });
            $img2->save($newPath.'/'.$largeImgName, 60);

              //  $imageSave = News_notice_list::where("id", $get_id)->update(["image_small" => $thumbImgName,"image_large" => $largeImgName]);

            if($newsSave){
                     return redirect("/admin/gallery/search")->with('flash_message_success', ' Image uploaded successfully');  }
            else {   return  redirect("/admin/gallery/search")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

        }

        return view("admin.galleryImageUpload")->with(compact("News_listData"));

    }


    public function deleteGalleryImage($hash_id=null){

        $deleteImagData= Gallery_list::where('id','=', base64_decode($hash_id))->get();



        if($hash_id!=''){

            $id = base64_decode($hash_id);



            $img_location= 'assets/images/gallery/'.$id;

            foreach($deleteImagData as $dRow){

               $imgDelNmOne = $img_location.'/'.$dRow->image_large;
             //  dd($imgDelNmOne);
              if (file_exists($imgDelNmOne)) { unlink($imgDelNmOne);  }


               $imgDelNmThree = $img_location.'/'.$dRow->image_small;
               if (file_exists($imgDelNmThree)) { unlink($imgDelNmThree);  }

            }



            $deleteTourType = Gallery_list::where('id', '=', $id)->delete();


            if($deleteTourType){
                return redirect("/admin/gallery/search")->with('flash_message_success', ' Image deleted successfully');  }
           else {   return  redirect("/admin/gallery/search")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }



        }

    }

}