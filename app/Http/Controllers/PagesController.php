<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){

        return view("public.homePage");

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

        return view("public.customersPage");

    }

    public function services(){

        return view("public.servicesPage");

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

}