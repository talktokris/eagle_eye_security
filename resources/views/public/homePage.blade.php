
   @extends('public.layouts.masterPage')

   @section('title','One Stop Security Solutions Consultation, Security guard company in Malaysia, best security guard company in
   kl, No.# security guard company in kl, best security guard company in Penang, No.1# security guard company in
   Penang Best security guard company in malaysia - Security Company in Malaysia | Security Guards Malaysia | Security Guards | Local Guards Malaysia | Local Guards')

   @section('keywords','Malaysia Security Guard Company,security service,security service company Malaysia, Security Malaysia, security service company in Malaysia,&lt;br /&gt;security service company in kl,&lt;br /&gt;security service company kl')

   @section('description','Eagle Eye Security Sdn Bhd is a principal company (Not franchise). Eagle Eye Security is a leading security services provider company in malaysia. Established 2002, The Security Guard Services in our company are one of the highest quality security services in Malaysia with good pricing available in the market. We are specialized in High End Condominium and Commercial Building for the provision as Private Agency in Malaysia ,Eagle Eye Security provides security, monitoring, consulting and investigative services. Our security solutions are tailored to your business needs')

   @section('contents')



       <!-- service area  -->
    <div class="service-area">
        <div class="container">
            <div class="section-wrapper">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="theme-heading-title">
                            <h4 class="subtitle">Our Premium Services <img class="bullet" src="./assets/img/shapes/bullet.png"
                                    alt=""> </h4>
                            <h2 class="title"> Eagle Eye Security <br>
                                Fast Efficient and Reliable</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-wrapperr">
                            <p>Entering the new millennium and the challenges of globalization, service providers in
                                developing nations are faced with the challenge to compete and excel in a liberalized
                                market place. Service providers are to increase and regenerate their products in line
                                with the expectations of the customers. In the new century, private security
                                organizations are moving towards a new professionalism.</p>
                            <a class="btn_01" href="{{ url('about-us')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row"  style="padding-bottom: 30px;">
                @foreach ($pageData as $item)
                <?php if(($item->id) <=4) { ?>
                <div class="col-md-6 col-lg-3">
                    <div class="service-single-item-list">
                        <div class="service-single-item-2">
                            <div class="thumbs">
                                <img src="{{url('assets/images/services')}}/{{$item->id}}/{{$item->image_mid}}" alt="">

                            </div>
                            <div class="details">
                                <h4 class="title"><a href="{{url('/services')}}/{{ $item->link}}">{{ $item->title_short}}</a></h4>
                                <a class="read-btn" href="{{url('/services')}}/{{ $item->link}}"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                @endforeach

            </div>
        </div>
    </div>
    <!-- service area end -->



    <!-- team area  -->
    <div class="team-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <div class="theme-heading-title text-center"  style="padding-bottom: 50px;">
                            <h4 class="subtitle"><img class="bullet bullet-01"
                                    src="{{url('assets/img/shapes/bullet-01.png')}}" alt=""> Contact US
                                <img class="bullet" src="{{ url('assets/img/shapes/bullet.png')}}" alt="">
                            </h4>
                        </div>
                    </div>
                    <div class="request-form">
                        <div role="form">
                            <form class="row homeForm" method="post" action="{{ url('/') }}" >
                                <div class="widget-footer-subscribe pt-1 pb-1" style="width:100%;">

                                <div class="row">
                                    <div class="col-lg-6">

                                        @if(Session::has('flash_message_success'))
                                        <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                                            <div class="d-flex align-items-center">
                                                <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 text-white">Success Alerts</h6>
                                                    <div class="text-white">{!! session('flash_message_success') !!} </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif

                                        @if(Session::has('flash_message_error'))
                                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                            <div class="d-flex align-items-center">
                                                <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 text-white">Error Alerts</h6>
                                                    <div class="text-white">{!! session('flash_message_error') !!}</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        <!---- allert message End -->
                                        <div class="single-input-inner mb-3">

                                            <select name="title" class="form-control " id="title" style="height: 58px;" required="">
                                                                <?php if(old('title')){

                                                                    ?>
                                                                    <option value="<?php echo old('title') ?>"><?php echo  old('title') ?></option>
                                                                    <?php  }  ?>
                                                                <option value="Dr">Dr</option>
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Miss">Miss</option>

                                                            </select>
                                                            @error('title')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror

                                        </div>

                                        <div class="single-input-inner mb-3">

                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="validationCustom03" placeholder="Full Name " value="{{ old('name') }}" required="">

                                                @error('name')
                                                <div class="invalid-feedback">
                                            {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                        <textarea name="message"  placeholder="Write messgae*" class="form-control @error('message') is-invalid @enderror" required="" >{{ old('message') }}</textarea>



                                    </div>

                                    <div class="col-lg-6">
                                        <div class="single-input-inner mb-3">
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="validationCustom03" placeholder="Email Address " value="{{ old('email') }}" required="">

                                            @error('email')
                                            <div class="invalid-feedback">
                                        {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="single-input-inner mb-3">
                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="validationCustom03" placeholder="Phone Number" value="{{ old('phone') }}" required="">

                                            @error('phone')
                                            <div class="invalid-feedback">
                                        {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="btn-wrap">
                                            <button class="btn-panthar btn-border-base btn-style-white text-white w-100">
                                                <span class="top_left"></span>
                                                <span class="top_right"></span>
                                                <i class="fas fa-paper-plane"></i> Send
                                                <span class="bottom_left"></span>
                                                <span class="bottom_right"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>


                                </div>
                            </form>
                        </div>
                    </div>

                </div>



                <div class="col-lg-4">

                    <div class="col-lg-12">
                        <div class="theme-heading-title text-center" style="padding-bottom: 50px;">
                            <h4 class="subtitle"><img class="bullet bullet-01"
                                    src="{{url('assets/img/shapes/bullet-01.png')}}" alt=""> Top Products
                                <img class="bullet" src="{{ url('assets/img/shapes/bullet.png')}}" alt="">
                            </h4>
                        </div>
                    </div>
                    <div class="footer-widget widget">
                        <ul class="theme-recent-post-wrap news-footer" >



                            <li class="theme-recent-post-item" style="border-bottom: 1px dashed red !important;">
                                <div class="thumb newImg">
                                    <a href="{{ url("/assets/images/security_VMS_catalog.pdf")}}" target="_blank">
                                        <img src="{{ url("/assets/images/security_vms.png")}}" alt="Visitor Managment System">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="{{ url("/assets/images/security_VMS_catalog.pdf")}}"  target="_blank" class="news-footer-link">Visitor Management System</a></h4>
                                </div>
                            </li>


                            <li class="theme-recent-post-item" style="border-bottom: 1px dashed red !important;">
                                <div class="thumb newImg">
                                    <a href="{{ url("/assets/images/security_Guard_Tour_system.pdf")}}"  target="_blank">
                                        <img src="{{ url("/assets/images/security_digital_guard_tour.png")}}" alt="Digital Guard Tour System">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="{{ url("/assets/images/security_Guard_Tour_system.pdf")}}"  target="_blank" class="news-footer-link">Digital Guard Tour System</a></h4>
                                </div>
                            </li>

                            <li class="theme-recent-post-item" style="border-bottom: 1px dashed red !important;">
                                <div class="thumb newImg">
                                    <a href="{{ url("/assets/images/security_CCTV_catalog.pdf")}}"  target="_blank">
                                        <img src="{{ url("/assets/images/security-ip-camera.png")}}" alt="Digital Guard Tour System">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="{{ url("/assets/images/security_CCTV_catalog.pdf")}}"  target="_blank" class="news-footer-link">Digital Guard Tour System</a></h4>
                                </div>
                            </li>



                        </ul>

                    </div>
                </div>


            </div>


        </div>
    </div>
    <!-- team area start -->


    <!-- service area start --->
    <div class="security-area margin-bottom-80">
        <div class="container">
            <div class="theme-heading-title text-center">
                <h4 class="subtitle">
                    <img class="bullet bullet-01" src="./assets/img/shapes/bullet-01.png" alt="">
                    OUR SECURITY <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                </h4>
                <h2 class="title">PROFESSIONAL SECURITY</h2>
                <p>Eagle Eye Security services we are highly committed to our services and we know
                    our prestigious clients and their businesses like no one else. We pride ourselves on knowledge,
                    because the more we know, the better we can serve and protect you. A key strength of Eagle Eye
                    security services lies in being part of the EESB trained and experience security gurds. The success
                    of eagle eye security has been underpinned by superior performance and the strength of our
                    relationships.

                </p>
            </div>
            <div class="security-wrapper">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="security-left-text">
                            <h2 class="security-left-title">We perform <span>over 400 Successful</span>
                                Security services every year</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="security-center">
                            <div class="security-icon">
                                <img src="./assets/icon/security.png" alt="">
                            </div>
                            <img src="./assets/img/section-img/security/security-01.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="security-right">
                            <div class="content-wrapper-right">
                                <h6 class="smalltitle" style="margin-bottom: 5px;">
                                    Effective integrated security </h6>
                                <p> Eagle Eye Security Sdn Bhd core
                                    strengths of outstanding service, corporate stability and experienced, specialist
                                    staff, we have continued to grow by focusing on what we do best providing innovative
                                    and integrated services across the our services - We can assure our prestigious
                                    clients and their family and their company that our services are done 100%, thereby
                                    exceeding clients satisfaction.
                                </p>
                                <div class="service-list-right d-flex">
                                    <div class="list-item-wrap list-item-wrap-two"
                                        style="padding-top: 15px !important;ß">
                                        <ul>
                                            <li>
                                                <span class="style-dot "></span> <span class="style-bar "></span>
                                                <div class="content text-white d-inline-block">Security Guards
                                                </div>
                                                <span class="detail-content"> </span>
                                            </li>
                                            <li>
                                                <span class="style-dot "></span> <span class="style-bar "></span>
                                                <div class="content text-white d-inline-block">Local Security </div>
                                                <span class="detail-content"> </span>
                                            </li>

                                            <li>
                                                <span class="style-dot "></span> <span class="style-bar "></span>
                                                <div class="content text-white d-inline-block">Female Guards
                                                </div>
                                                <span class="detail-content"> </span>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="list-item-wrap list-item-wrap-two">
                                        <ul>
                                            <li>
                                                <span class="style-dot "></span> <span class="style-bar "></span>
                                                <div class="content text-white d-inline-block">Bodyguards
                                                </div>
                                                <span class="detail-content"> </span>
                                            </li>
                                            <li>
                                                <span class="style-dot "></span> <span class="style-bar "></span>
                                                <div class="content text-white d-inline-block">Private Security </div>
                                                <span class="detail-content"> </span>
                                            </li>
                                            <li>
                                                <span class="style-dot "></span> <span class="style-bar "></span>
                                                <div class="content text-white d-inline-block">Security Consulting
                                                </div>
                                                <span class="detail-content"> </span>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- servcie area end ---->


       <!-- history area  -->

    <div class="history-area margin-bottom-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-12">
                    <div class="history-wrapper">
                        <div class="theme-heading-title">
                            <h4 class="subtitle text-white">Our Specialization <img class="bullet"
                                    src="./assets/img/shapes/bullet-svgrepo-com.png" alt=""> </h4>
                            <h2 class="title text-white home-text" style="color: wheat !important;">We are specialized
                                on providing Local Security
                                Guards, Gurkha
                                Security Guards,
                                Female Security Guards and more
                            </h2>

                            <div class="btn-wrap">
                                <a href="about_us.php" class="btn-panthar btn-border-base btn-style-white text-white">
                                    <span class="top_left"></span>
                                    <span class="top_right"></span>
                                    <span style="color:#fff !important;">
                                        Find All Services ..</span>
                                    <span class="bottom_left"></span>
                                    <span class="bottom_right"></span>
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="awards-wrapper">
                        <div class="awards-box">
                            <div class="media contact-info-box icon-box-item">
                                <div class="media-left icon-wrap ">
                                    <div class="icon-wrap-inner">
                                        <div class="icon">
                                            <i aria-hidden="true" class="icomoon icomoon-dimond"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body content align-self-center">
                                </div>
                            </div>
                            <div class="awards-content">
                                <h4 class="awards-title">Local Guards in Malaysia</h4>
                                <p class="awards-dis">We provide various kinds of security services as local security
                                    guards, Gurkha security guards, Body guards, Guard Dogs with Handlers, Central
                                    Security Monitoring System with Four hundred fully trained and disciplined guards,
                                    including those ex-Malaysian Armed /Police personnel are currently deployed at the
                                    premises of our clients. Those personnel are given training on all aspects of
                                    security requirement while in services with our establishment.</p>
                            </div>
                        </div>
                        <div class="awards-box">
                            <div class="media contact-info-box icon-box-item">
                                <div class="media-left icon-wrap ">
                                    <div class="icon-wrap-inner">
                                        <div class="icon">
                                            <i aria-hidden="true" class="icomoon icomoon-dimond"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body content align-self-center">
                                </div>
                            </div>
                            <div class="awards-content">
                                <h4 class="awards-title">Gurkha Guards in Malaysia</h4>
                                <p class="awards-dis">Our company is providing security services in many reigns of in
                                    Malaysia as Rawang, Penang, Klang and Kuala Lumpur. We are approved by the Malaysian
                                    Ministry of Home Affairs, Kuala Lumpur to recruit ex-British Army Gurkha, to recruit
                                    ex-British Army Gurkha from Nepal to be deployed as security guards in Malaysia.
                                    These Gurkha Guards are well trained in all aspect of security service, they are
                                    well disciplined, trustworthy and very committed to the tasks entrusted to hem.
                                    Majority of them speak fairly good English.</p>
                            </div>
                        </div>
                    </div>
                    <div class="awards-wrapper">
                        <div class="awards-box border-0 mobile-sc-lgs">
                            <div class="media contact-info-box icon-box-item">
                                <div class="media-left icon-wrap ">
                                    <div class="icon-wrap-inner">
                                        <div class="icon">
                                            <i aria-hidden="true" class="icomoon icomoon-dimond"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body content align-self-center">
                                </div>
                            </div>
                            <div class="awards-content">
                                <h4 class="awards-title">Bodyguards in Malaysia</h4>
                                <p class="awards-dis">We will provide you with top notch professional bodyguard services
                                    in Malaysia or overseas. We require one week advance notice. The person that can
                                    save your life must be someone you really trust, Security professional will ensure
                                    you get only the best professionals in the business! Executive Protection is our
                                    specialty. We manage a team of highly skilled specialists. Together we will address
                                    the selected security plan for the best possible outcome. The skilled professionals
                                    included Security Specialists and Security Consultants, Together we come up with a
                                    solid security plan for you.</p>
                            </div>
                        </div>
                        <div class="awards-box border-0">
                            <div class="media contact-info-box icon-box-item">
                                <div class="media-left icon-wrap ">
                                    <div class="icon-wrap-inner">
                                        <div class="icon">
                                            <i aria-hidden="true" class="icomoon icomoon-dimond"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body content align-self-center">
                                </div>
                            </div>
                            <div class="awards-content">
                                <h4 class="awards-title">
                                    Female Guards in Malaysia</h4>
                                <p class="awards-dis">We have a complete range of female security guard solutions and
                                    services, delivered by a team of professional and fully licensed and vetted female
                                    guards.What could be better? If you need a woman's touch where your security is
                                    concerned whether it relates to child care even the need for discretion, we can
                                    help. Our female staff can offer services matching the exact standard of our male
                                    team. Constantly investing in our staff makes for a stronger service, with our
                                    annual skill checks and rigorous vetting system, we can be sure we are offering our
                                    customers the best.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history area end -->




    <!-- get a quote area  -->
    <div class="get-quote margin-bottom-120 ">
        <div class="container">
            <div class="row align-items-center get-flex-reverse">
                <div class="col-md-12">
                    <div class="quote-message">
                        <p style="padding:1em;">As the leader in security services provider, we can help you to
                            customize
                            your personal or commercial premises to meet your safety needs.
                        </p>
                        <div class="btn-wrap d-inline-block">
                            <a class="btn btn-border-base" href="{{ url('/enquiry')}}">
                                <span class="top_left"></span>
                                <span class="top_right"></span>
                                <span>
                                    GET A QUOTE</span>
                                <span class="bottom_left"></span>
                                <span class="bottom_right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quote-slider">
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot dot-zero"></span>
                    </span>
                    <p class="d-inline-block">Compassion</p>
                </div>
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot dot-zero"></span>
                    </span>
                    <p class="d-inline-block">Commitment</p>
                </div>
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot"></span>
                    </span>
                    <p class="d-inline-block">Excellence</p>
                </div>
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot"></span>
                    </span>
                    <p class="d-inline-block">Team Work</p>
                </div>
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot"></span>
                    </span>
                    <p class="d-inline-block">Value</p>
                </div>
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot"></span>
                    </span>
                    <p class="d-inline-block">Ethnicity</p>
                </div>
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot"></span>
                    </span>
                    <p class="d-inline-block">Excellence</p>
                </div>
                <div class="single-core-value single-core-01">
                    <span class="style-animate-dot-wrap">
                        <span class="style-animate-dot"></span>
                    </span>
                    <p class="d-inline-block">Commitment</p>
                </div>
            </div>
        </div>
    </div>
    <!-- get a quote area  end-->









    <!-- solutions area  -->
    <div class="solutions-area margin-bottom-120">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="theme-heading-title text-center">
                        <h4 class="subtitle"><img class="bullet bullet-01" src="./assets/img/shapes/bullet-01.png"
                                alt=""> Eagle Eye Systems
                            <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                        </h4>
                        <h2 class="title">Protect Your Home Or Business <br>
                            With Our Eagle Eye Security Systems</h2>
                        <p class="solution-para">From large enterprises to local business security platforms, from
                            simple camera solutions
                            for small offices to complex enterprise class video systems for large campuses.</p>
                        <div class="cta-area">
                            <div class="text">
                                <h3><a href="http://www.eagleeyecctv.com.my/" target="_blank">DISCOVER MORE INFO</a>
                                </h3>
                            </div>
                            <div class="icon-box-wrapper  d-flex">
                                <div class="icon-box-icon">
                                    <span class="icon animation-">
                                        <a href="tel:02%2001061245741"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="62" height="62" viewBox="0 0 62 62">
                                                <g id="Groupdfdf_4219" data-name="Group 4219"
                                                    transform="translate(-984 -5761)">
                                                    <g id="Ellipse_256" data-name="Ellipse 256"
                                                        transform="translate(984 5761)" fill="#fff" stroke="#ba1111"
                                                        stroke-width="1">
                                                        <circle cx="31" cy="31" r="31" stroke="none"></circle>
                                                        <circle cx="31" cy="31" r="30.5" fill="none"></circle>
                                                    </g>
                                                    <circle id="Ellifdaapse_257" data-name="Ellipse 257" cx="24" cy="24"
                                                        r="24" transform="translate(991 5768)" fill="#ba1111"></circle>
                                                    <g id="phone-call-svgrepo-com"
                                                        transform="translate(1001.262 5778.262)">
                                                        <g id="Grouafdafp_4218" data-name="Group 4218"
                                                            transform="translate(0 0)">
                                                            <path id="Path_12089" data-name="Path 12089"
                                                                d="M22.53,43.186a2.764,2.764,0,0,0-2-.919,2.858,2.858,0,0,0-2.028.913l-1.874,1.868c-.154-.083-.308-.16-.457-.237-.213-.107-.415-.208-.587-.314a20.367,20.367,0,0,1-4.88-4.448,12.015,12.015,0,0,1-1.6-2.526c.486-.445.937-.907,1.376-1.352.166-.166.332-.338.5-.5a2.721,2.721,0,0,0,0-4.1L9.353,29.944c-.184-.184-.374-.374-.552-.563-.356-.368-.729-.747-1.115-1.1A2.807,2.807,0,0,0,5.7,27.406a2.9,2.9,0,0,0-2.016.872l-.012.012L1.656,30.324A4.339,4.339,0,0,0,.369,33.081a10.4,10.4,0,0,0,.759,4.4,25.533,25.533,0,0,0,4.537,7.567,27.907,27.907,0,0,0,9.293,7.276,14.478,14.478,0,0,0,5.219,1.542c.125.006.255.012.374.012a4.468,4.468,0,0,0,3.422-1.471c.006-.012.018-.018.024-.03A13.481,13.481,0,0,1,25.032,51.3c.255-.243.516-.5.771-.765a2.958,2.958,0,0,0,.9-2.052,2.85,2.85,0,0,0-.913-2.034Zm2.123,6.244c-.006,0-.006.006,0,0-.231.249-.468.474-.723.723a15.593,15.593,0,0,0-1.145,1.186,2.859,2.859,0,0,1-2.23.943c-.089,0-.184,0-.273-.006a12.862,12.862,0,0,1-4.626-1.388A26.342,26.342,0,0,1,6.9,44.034a24.075,24.075,0,0,1-4.27-7.11,8.467,8.467,0,0,1-.664-3.712,2.722,2.722,0,0,1,.818-1.761l2.022-2.022a1.348,1.348,0,0,1,.9-.421,1.268,1.268,0,0,1,.866.415l.018.018c.362.338.706.688,1.067,1.061.184.19.374.38.563.575L9.845,32.7a1.132,1.132,0,0,1,0,1.838c-.172.172-.338.344-.51.51-.5.51-.973.984-1.488,1.447-.012.012-.024.018-.03.03a1.21,1.21,0,0,0-.308,1.346l.018.053a13,13,0,0,0,1.915,3.125l.006.006a21.766,21.766,0,0,0,5.266,4.792,8.1,8.1,0,0,0,.729.4c.213.107.415.208.587.314.024.012.047.03.071.042a1.286,1.286,0,0,0,.587.148,1.268,1.268,0,0,0,.9-.409l2.028-2.028a1.342,1.342,0,0,1,.9-.445,1.208,1.208,0,0,1,.854.433l.012.012,3.268,3.268A1.173,1.173,0,0,1,24.653,49.431Z"
                                                                transform="translate(-0.344 -25.781)" fill="#fff">
                                                            </path>
                                                            <path id="Path_12090" data-name="Path 12090"
                                                                d="M245.6,87.513a7.632,7.632,0,0,1,6.215,6.215.8.8,0,0,0,.789.664,1.059,1.059,0,0,0,.136-.012.8.8,0,0,0,.658-.925,9.228,9.228,0,0,0-7.519-7.519.8.8,0,0,0-.925.652A.792.792,0,0,0,245.6,87.513Z"
                                                                transform="translate(-230.439 -80.83)" fill="#fff">
                                                            </path>
                                                            <path id="Paajth_12091" data-name="Path 12091"
                                                                d="M262.087,12.394A15.2,15.2,0,0,0,249.705.012a.8.8,0,1,0-.261,1.577A13.573,13.573,0,0,1,260.51,12.655a.8.8,0,0,0,.789.664,1.058,1.058,0,0,0,.136-.012A.786.786,0,0,0,262.087,12.394Z"
                                                                transform="translate(-234.043 0)" fill="#fff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></a> </span>
                                </div>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">
                                        <span>
                                            Call Now </span>
                                    </h3>
                                    <p class="icon-box-description">
                                        <a href="tel:+60340413200">+603 4041 3200 </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="media intro-icon-box icon-box-item">
                        <div class="media-left icon-wrap">
                            <div class="icon">
                                <i aria-hidden="true" class="icomoon icomoon-policeman"></i>
                            </div>
                        </div>
                        <div class="media-body content align-self-center">
                            <a class="icon-box-anchor">
                                <h3 class="titlee">HIRE PREMIUM SECURITY SERVICES</h3>
                            </a><a class="read-more-url" href="{{ url('/enquiry')}}">Get Quote <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="media intro-icon-box icon-box-item">
                        <div class="media-left icon-wrap">
                            <div class="icon">
                                <i aria-hidden="true" class="icomoon icomoon-team"></i>
                            </div>
                        </div>
                        <div class="media-body content align-self-center">
                            <a class="icon-box-anchor">
                                <h3 class="titlee">HIGHLY TRAINED OPERATION TEAM</h3>
                            </a><a class="read-more-url" href="{{ url('/enquiry')}}">Get Quote <span></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- solutions area  end-->


    <!-- Top Clients area  -->
    <div class="service-area ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="text-align:center; margin-bottom:2em;">
                    <h3 style="color:red;">Our Top Clients</h3>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="brand-area">


                    <div class="brand-active">

                        @foreach ($clientData as $row)


                        <div class="brand-item-single">
                            <div class="brand-items">
                                <img src="{{ url('assets/images/client')}}/{{$row->id}}/{{$row->client_logo_image}}"
                                    alt="securiy gurds in K avenue malayasia">
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Clients area  end -->




    @endsection
