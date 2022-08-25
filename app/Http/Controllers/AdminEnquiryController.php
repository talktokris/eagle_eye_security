<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEnquiryController extends Controller
{
    //


    public function enquiry(){

        return view("admin.adminDashboard");

    }


    public function job(){

        return view("admin.adminDashboard");

    }
}
