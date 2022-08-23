
   @extends('public.layouts.masterPage')
   @section('title','Home')
   @section('contents')



   <div class="blog-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="theme-heading-title text-center">
                            <h4 class="subtitle"><img class="bullet bullet-01"
                                    src="./assets/img/shapes/bullet-01.png" alt="">Management
                                <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                            </h4>
                            <h2 class="title">Eagle Eye Security Management<br>
                            </h2>


                        </div>
                    </div>
                </div>


                <div class="blog-standard-item-01">

                    <div class="content">

                        <div class="thumb">
                            <img src="assets/img/management1.jpg" alt="Eagle Eye Security Management">
                        </div>
                        <h2 class="title"> Management Team </h2>
                        <p> Management Team

                            We have dynamic individuals with the highest level of disciplines, standard and caliber
                            leading the management team and they are supported by a group of selected, qualified and
                            dedicated supporting personnel to assist the day by day operations, administration,
                            accounts and finance, business development, marketing, recruitment, training and
                            implementation of work to fulfill the needs of every client.
                        </p>
                        <h2 class="title"> Security Team </h2>
                        <p>
                            Our security personnel are selected carefully Recruitment are made from RELA members,
                            Ex-servicemen Association, Perhebat, Jabatan Tenaga Rakyat, individuals with experience
                            in security Dan Nepalese Ex-Army for our Gurkha Guards. During recruitment, they have to
                            undergo vetting and screening test before being accepted into our company as we have a
                            high level of standard in selecting our security personnel. After Recruitment, they
                            still have to undergo a short training course in order to be competent in carrying out
                            their duties with full responsibility accordingly with the need and the specification of
                            work of our clients.
                        </p>

                    </div>
                </div>




            </div>
            <!-- Side bar Start --->
            @include('public/layouts/sidebar')

            <!-- Side bar Start --->
        </div>

    </div>
</div>



    @endsection
