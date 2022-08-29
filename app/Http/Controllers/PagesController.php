<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

use App\Models\Enquiry_list;
use App\Models\Jobs_apply_list;
use App\Models\Country_list;
use App\Models\Service_list;
use App\Models\Clients_list;
use App\Models\Clients_type_list;
use App\Models\News_notice_list;
use App\Models\Gallery_list;
use App\Models\Gallery_type_list;

use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    //

    public function index(){

        $pageData = Service_list::where('status','=',1)->orderBy('id', 'DESC')->get();
        $clientData = Clients_list::where('status','=',1)->orderBy('id', 'DESC')->get();
        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();


        return view("public.homePage")->with(compact("pageData"))->with(compact("clientData"))->with(compact("newsData"));


    }

    public function aboutUs(){


        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.aboutPage")->with(compact("newsData"));



    }

    public function newArrival(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.arrivalPage")->with(compact("newsData"));

    }

    public function licenses(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.licensesPage")->with(compact("newsData"));


    }

    public function management(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.managementPage")->with(compact("newsData"));


    }

    public function trademark(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.trademarkPage")->with(compact("newsData"));


    }

    public function customers(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        $pageData = Clients_type_list::where('status','=',1)->with('getAllClients')->orderBy('id', 'DESC')->get();

       // print_r($pageData);

        return view("public.customersPage")->with(compact("pageData"))->with(compact("newsData"));;

    }

    public function services(){

        $pageData = Service_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.servicesPage")->with(compact("pageData"));


    }

    public function objectives(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.objectivesPage")->with(compact("newsData"));


    }

    public function gallery(){


        $GalData = Gallery_list::where('status','=',1)->orderBy('id', 'DESC')->limit(20)->get();
        $GalCatData = Gallery_type_list::where('status','=',1)->orderBy('id', 'DESC')->get();


        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.galleryPage")->with(compact("newsData"))->with(compact("GalData"))->with(compact("GalCatData"));


    }

    public function galleryView($gal_cat=null){


        $GalData = Gallery_list::where([['status','=',1],['galley_category','=',$gal_cat]])->orderBy('id', 'DESC')->get();
        $GalCatData = Gallery_type_list::where('status','=',1)->orderBy('id', 'DESC')->get();


        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.galleryPage")->with(compact("newsData"))->with(compact("GalData"))->with(compact("GalCatData"));


    }

    public function training(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.trainingPage")->with(compact("newsData"));


    }

    public function contact(){

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        return view("public.contactPage")->with(compact("newsData"));


    }



    public function enquiryStore(Request $request){

        $pageData = Service_list::where('status','=',1)->orderBy('id', 'DESC')->get();
        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();



        if($request->isMethod('post')){
            $data=$request->all();


        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:10',
            'name' => 'required|string|min:15|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|min:7|max:15',
            'message' => 'required|string|min:15|max:150',

            ]);


            $data= $request->all();
            $newsSave = new Enquiry_list;
            $newsSave->title= $data['title'];
            $newsSave->name= $data['name'];
            $newsSave->email= $data['email'];
            $newsSave->phone= $data['phone'];
            $newsSave->message= $data['message'];
            $newsSave->save();


            if(!$newsSave){      return redirect('/enquiry')->with('flash_message_error', 'Internal error. Please email to support@ealgeeyesecurity.com.my'); }
            else {   return redirect('/enquiry')->with('flash_message_success', 'your enquiry has been submitted successfully');}

        }

        return view("public.enquiryPage")->with(compact("pageData"))->with(compact("newsData"));;


    }

    public function applyJobsPage(Request $request){

        $countryData= Country_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();



        if($request->isMethod('post')){
            $data=$request->all();

            $validatedData = $request->validate([
                    'name' => 'required|string|min:2|max:10',
                    'email' => 'required|email|max:150',
                    'phone' => 'required|string|min:7|max:15',
                    'sex' => 'required|string|min:3|max:150',
                    'nationality' => 'required|string|min:5|max:150',
                    'height' => 'required|string|min:2|max:150',
                    'weight' => 'required|string|min:2|max:150',
                    'country_live_in' => 'required|string|min:5|max:150',
                    'education' => 'nullable|string|min:2|max:150',
                    'tranings' => 'nullable|string|min:2|max:150',
                    'skills' => 'nullable|string|min:2|max:150',
                    'languages' => 'nullable|string|min:2|max:150',
                    'experince_post' => 'nullable|string|min:2|max:150',
                    'experince_year' => 'nullable|string|min:2|max:150'
                    ]);

            $data= $request->all();
            $newsSave = new Jobs_apply_list;
            $newsSave->name= $data['name'];
            $newsSave->email= $data['email'];
            $newsSave->phone= $data['phone'];
            $newsSave->sex= $data['sex'];
            $newsSave->nationality= $data['nationality'];
            $newsSave->height= $data['height'];
            $newsSave->weight= $data['weight'];
            $newsSave->country_live_in= $data['country_live_in'];
            $newsSave->education= $data['education'];
            $newsSave->tranings= $data['tranings'];
            $newsSave->skills= $data['skills'];
            $newsSave->languages=$data['languages'];
            $newsSave->experince_post= $data['experince_post'];
            $newsSave->experince_year= $data['experince_year'];
            $newsSave->status= 1;
            $newsSave->save();

            if(!$newsSave){       dd($newsSave);     return redirect('/apply-job')->with('flash_message_error', 'Internal error. Please email to support@ealgeeyesecurity.com.my'); }
            else {   return redirect('/apply-job')->with('flash_message_success', 'your job application been submitted successfully. You will be get back you as soon as possible');}

        }

        return view("public.applyJobsPage")->with(compact("countryData"))->with(compact("newsData"));;


    }


    public function servicesLink($link=null){

       // dd($link);

       $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

       if($link !=''){

            $pageData = Service_list::where('link','=',$link)->orderBy('id', 'DESC')->get();

            return view("public.servicesInfoPage")->with(compact("pageData"))->with(compact("newsData"));

        } else { echo "Page Not Found";}

    }



    public function newsView($hash_id=null){

        // dd($link);

        $id= base64_decode($hash_id);

        $newsData = News_notice_list::where('status','=',1)->orderBy('id', 'DESC')->get();

        if($hash_id !=''){

             $pageData = News_notice_list::where('id','=',$id)->orderBy('id', 'DESC')->get();

             return view("public.newsViewPage")->with(compact("pageData"))->with(compact("newsData"));

         } else { echo "Page Not Found";}

     }



}