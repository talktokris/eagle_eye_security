
   @extends('public.layouts.masterPage')

   @section('title','One Stop Security Solutions Consultation, Security guard company in Malaysia, best security guard company in
   kl, No.# security guard company in kl, best security guard company in Penang, No.1# security guard company in
   Penang Best security guard company in malaysia - Security Company in Malaysia | Security Guards Malaysia | Security Guards | Local Guards Malaysia | Local Guards')

   @section('keywords','Malaysia Security Guard Company,security service,security service company Malaysia, Security Malaysia, security service company in Malaysia,&lt;br /&gt;security service company in kl,&lt;br /&gt;security service company kl')

   @section('description','Eagle Eye Security Sdn Bhd is a principal company (Not franchise). Eagle Eye Security is a leading security services provider company in malaysia. Established 2002, The Security Guard Services in our company are one of the highest quality security services in Malaysia with good pricing available in the market. We are specialized in High End Condominium and Commercial Building for the provision as Private Agency in Malaysia ,Eagle Eye Security provides security, monitoring, consulting and investigative services. Our security solutions are tailored to your business needs')

   @section('contents')



   <div class="service-area margin-bottom-90">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="theme-heading-title text-center">
                    <h4 class="subtitle"><img class="bullet bullet-01" src="./assets/img/shapes/bullet-01.png"
                            alt=""> Services
                        <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                    </h4>
                    <h2 class="title" style="padding-bottom:1em;">Eagle Eye Security Services<br>
                    </h2>


                </div>
            </div>
        </div>

        <div class="section-wrapper">

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="theme-heading-title">

                        <p>We commenced operations in 2002 as a specialized security guard services company in
                            Malaysia. Over a period of time, being in the business of providing physical security to
                            our customers, and with a view to meet the increasing levels of customer expectations
                            and requirements, we felt the need to expand our basic security service of manned
                            guarding and venture into related areas. This addition to the portfolio, over time,
                            helped us evolve into a total security solutions provider.</p>
                    </div>
                </div>

            </div>





            <div class="service-wrapper">
                <div class="row">
                    @foreach ($pageData as $item)


                    <div class="col-md-6 col-lg-3">
                        <div class="service-single-item-list">
                            <div class="service-single-item">
                                <div class="thumb">
                                    <img src="{{ url('assets/images/services/')}}/{{ $item->id}}/{{ $item->image_mid}}" alt="{{ $item->title}}">
                                </div>
                                <div class="details">
                                    <h4 class="title"><a href="{{ url('/services')}}/{{ $item->link}}">{{ $item->title_short}}</a></h4>
                                    <a class="read-btn" href="{{ url('/services')}}/{{ $item->link}}"><i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="service-wrapperr">

                        <p>Setup as Security firm almost 20 years ago, today the company has grown into a "Total
                            Security Solutions Provider" offering manned guarding (MG), security guards (SG) gurkha
                            guards (GG) premium local guards (PLG) body guards (BG) investigations (C&I), electronic
                            security systems (ESS) and security system (SS) to over 150 corporate customers across 5
                            states in Malaysia.</p>
                        <p>The Security guard Services in our company are one of the highest quality security
                            services in malaysia with good pricing available in the market. The services include</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    @endsection
