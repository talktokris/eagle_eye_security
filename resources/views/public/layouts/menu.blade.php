<?php
$CurrentRoute = Route::currentRouteName();
// dd($CurrentRoute);


if($CurrentRoute=="landing"){   $homePageActive='current-menu-item'; }else {$homePageActive='';}
if(($CurrentRoute=="about-us")||($CurrentRoute=="new-gurads-arrival")||($CurrentRoute=="licenses-certificates")
||($CurrentRoute=="management")||($CurrentRoute=="trademark")||($CurrentRoute=="apply-job")
||($CurrentRoute=="news")||($CurrentRoute=="news-view")||($CurrentRoute=="our-customers")){   $aboutPageActive='current-menu-item'; }else {$aboutPageActive='';}


if($CurrentRoute=="services"){   $servicesPageActive='current-menu-item'; }else {$servicesPageActive='';}
if($CurrentRoute=="objectives"){   $objectivesPageActive='current-menu-item'; }else {$objectivesPageActive='';}
if($CurrentRoute=="gallery"){   $galleryPageActive='current-menu-item'; }else {$galleryPageActive='';}
if($CurrentRoute=="training"){   $trainingPageActive='current-menu-item'; }else {$trainingPageActive='';}
if(($CurrentRoute=="contact")||($CurrentRoute=="enquiry-store")){   $contactPageActive='current-menu-item'; }else {$contactPageActive='';}



      ?>

<nav class="navbar navbar-area navbar-expand-lg navigation-style-01 menu-02 navigation-before">
    <div class="container custom-container">
        <div class="responsive-menu">
            <div class="logo-wrapper">
                <a href="{{ url("/") }}" class="logo">
                    <img src="{{ url("assets/img/logo/logo.png")}}" alt="" />
                </a>
                <a href="index.html" class="logo-white-display"> <img src="{{ url("assets/img/logo/white-logo.png")}}"
                        alt="footer logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#themebuzs_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="themebuzs_main_menu">
            <ul class="navbar-nav">

                <li><a href="{{ url("/") }}"  class="<?php echo $homePageActive;?>"><span>HOME</span> </a></li>
                <li class="menu-item-has-children <?php echo $aboutPageActive;?>">
                    <a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url("/about-us") }}"><span>About Eage Eye Security</span></a></li>
                        <li><a href="{{ url("/assets/docs/company-profile.pdf") }}" target="_blank"><span>Company Profile
                                    Download</span></a></li>
                        <li><a href="{{ url("/new-gurads-arrival") }}"><span>New Arrival of Nepalese Guards</span></a></li>
                        <li><a href="{{ url("/licenses-certificates") }}"><span>Licenses & Certificates</span></a></li>
                        <li><a href="{{ url("/management") }}"><span>Management</span></a></li>
                        <li><a href="{{ url("/trademark") }}"><span>Trademark</span> </a></li>
                        <li><a href="{{ url("/our-customers") }}"><span>Our Customers</span> </a></li>
                        <li><a href="{{ url("/apply-job") }}"><span>Apply for Jobs</span> </a></li>

                    </ul>
                </li>



                <li><a href="{{ url("/services") }}" class="<?php echo $servicesPageActive;?>"><span>Services</span> </a></li>
                <li><a href="{{ url("/objectives") }}" class="<?php echo $objectivesPageActive;?>"><span>Objectives</span> </a></li>
                <li><a href="{{ url("/gallery") }}" class="<?php echo $galleryPageActive;?>"><span>Gallery</span> </a></li>

                <li><a href="{{ url("/training") }}" class="<?php echo $trainingPageActive;?>"><span>Training</span> </a></li>
                <li><a href="http://www.eagleeyecctv.com.my/" target="_blank"><span>System</span> </a></li>

                <li class="menu-item-has-children <?php echo $contactPageActive;?>">
                    <a href="{{ url("/contact") }}">CONTACT</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url("/contact") }}"><span>Contact Information</span> </a></li>
                        <li><a href="{{ url("/enquiry") }}"><span>Online Enquiry</span> </a></li>

                    </ul>
                </li>


            </ul>
        </div>
        <div class="nav-right-content">
            <div class="search-btn" id="search-popupp">
                <?php /* <img src="./assets/icon/search.png" class="header-search" id="search" alt=""> */?>
            </div>
            <div class="btn-wrapp">
                <ul>
                    <li>24/7 <span>Emergency!</span></li>
                    <li><a href="tel:+6018 220 0270<">+6018 220 0270</a> </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
