<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry_list;
use App\Models\Jobs_apply_list;
class AdminEnquiryController extends Controller
{
    //


    public function enquiry(){


        $data=Enquiry_list::get();

        return view("admin.enquirySearch")->with(compact("data"));


    }


    public function job(){

        $data=Jobs_apply_list::get();

        return view("admin.jobApplySearch")->with(compact("data"));;

    }

    public function jobView($hash_id=null){

        $id= base64_decode($hash_id);

        $data=Jobs_apply_list::where('id','=',$id)->get();

        return view("admin.jobsView")->with(compact("data"));;

    }
}