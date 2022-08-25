<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\News_notice_list;
use Intervention\Image\Facades\Image;
class AdminNewsController extends Controller
{
    //

    public function search(){

        $data=News_notice_list::get();

        return view("admin.newsSearch")->with(compact("data"));

    }




    public function create(Request $request){


        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:50',
            'text' => 'required|string|min:15|max:150',
            'status' => 'required|integer|between:0,10',

            ]);


            $data= $request->all();
            $newsSave = new News_notice_list;
            $newsSave->title= $data['title'];
            $newsSave->text= $data['text'];
            $newsSave->status= $data['status'];
            $newsSave->save();


            if(!$newsSave){      return redirect('admin/news/create-news')->with('flash_message_error', 'Internal error. Please email to support@ealgeeyesecurity.com.my'); }
            else {   return redirect('admin/news/create-news')->with('flash_message_success', 'NEWS created successfully');}

        }

        return view("admin.newsCreate");


    }



    public function edit(Request $request, $hash_id=null){


        $id= base64_decode($hash_id);


        $newsData = News_notice_list::where('id', $id)->get();

         $role = Auth::user()->role;


            if ('POST' === $request->getMethod()){

              //  dd($request);
              $validatedData = $request->validate([
                'title' => 'required|string|min:5|max:50',
                'text' => 'required|string|min:15|max:150',
                'status' => 'required|integer|between:0,10',

                ]);

                $data = $request->all();


              if(($role>=1) &&($hash_id!='')){


                        $newsEditSave = new News_notice_list;
                        $id= base64_decode($hash_id);
                         $newsEditSave = News_notice_list::where("id", $id)->update(["title" => $data['title'],"text" => $data['text'],"status" => $data['status']]);


                       //  $newsEditSave->save()->where("id", $id);

                        if($newsEditSave){   return redirect("admin/news/search")->with(compact("newsData"))->with('flash_message_success', ' News  updated successfully');  }
                        else {   return redirect("admin/news/search")->with(compact("newsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




            }
            else {  return view("admin.newsEdit")->with(compact("newsData")); }


    }

    public function imageUpload(Request $request, $hash_id=null){

        $News_listData= News_notice_list::where('id','=', base64_decode($hash_id))->get();
        $id= base64_decode($hash_id);

        $savingPath='assets/images/news';

        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
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

            $get_id = $id;

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

                $imageSave = News_notice_list::where("id", $get_id)->update(["image_small" => $thumbImgName,"image_large" => $largeImgName]);

            if($imageSave){
                     return redirect("/admin/news/search")->with('flash_message_success', ' Image uploaded successfully');  }
            else {   return  redirect("/admin/news/search")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

        }

        return view("admin.newsImageUpload")->with(compact("News_listData"))->with('hash_id', $hash_id);

    }



    public function deleteNews(Request $request, $hash_id=null){

        $role = Auth::user()->role;

          if(($role>=1) &&($hash_id!='')){



              $id = base64_decode($hash_id);
              $deleteNews = News_notice_list::where('id', '=', $id)->delete();
             // return $deleteNews;
              if($deleteNews){   return redirect('admin/news/search')->with('flash_message_success', 'News deleted sucessfully');  }
              else {   return redirect('admin/news/search')->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

          }

          return redirect('admin/setting/client-category');


    }

}
