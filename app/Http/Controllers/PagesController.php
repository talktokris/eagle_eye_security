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

use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    //

    public function index(){

        $pageData = Service_list::where('status','=',1)->get();
        $clientData = Clients_list::where('status','=',1)->get();

        return view("public.homePage")->with(compact("pageData"))->with(compact("clientData"));


    }

    public function aboutUs(){

        return view("public.aboutPage");

    }

    public function newArrival(){

        return view("public.arrivalPage");

    }

    public function licenses(){

        return view("public.licensesPage");

    }

    public function management(){

        return view("public.managementPage");

    }

    public function trademark(){

        return view("public.trademarkPage");

    }

    public function customers(){

        $pageData = Clients_type_list::where('status','=',1)->with('getAllClients')->get();

       // print_r($pageData);

        return view("public.customersPage")->with(compact("pageData"));

    }

    public function services(){

        $pageData = Service_list::where('status','=',1)->get();

        return view("public.servicesPage")->with(compact("pageData"));


    }

    public function objectives(){

        return view("public.objectivesPage");

    }

    public function gallery(){

        return view("public.galleryPage");

    }

    public function training(){

        return view("public.trainingPage");

    }

    public function contact(){

        return view("public.contactPage");

    }



    public function enquiryStore(Request $request){


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

        return view("public.enquiryPage");


    }

    public function applyJobsPage(Request $request){

        $countryData= Country_list::where('status','=',1)->get();


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

        return view("public.applyJobsPage")->with(compact("countryData"));


    }


    public function servicesLink($link=null){

       // dd($link);

       if($link !=''){

            $pageData = Service_list::where('link','=',$link)->get();

            return view("public.servicesInfoPage")->with(compact("pageData"));

        } else { echo "Page Not Found";}

    }



}