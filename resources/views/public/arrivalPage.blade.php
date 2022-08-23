
   @extends('public.layouts.masterPage')
   @section('title','Home')
   @section('contents')



   <div class="blog-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="padding-bottom:2em;">

                <div class="row dash-border">
                    <div class="col-lg-12">
                        <div class="theme-heading-title text-center">
                            <h4 class="subtitle"><img class="bullet bullet-01"
                                    src="./assets/img/shapes/bullet-01.png" alt="">Approval
                                <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                            </h4>
                            <h2 class="title ">New Security Guard Approval<br>
                            </h2>


                        </div>
                    </div>
                </div>

                <div class="blog-standard-item-01">
                    <h3 class="title small-heading-sub">New Security Guard Approval </h3>
                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit"
                            href="assets/docs/approval/New_Arrival1_large.jpg">
                            <img src="assets/docs/approval/New_Arrival1_large.jpg"
                                alt="Security Guard Approval Malaysia">
                        </a>
                    </div>


                </div>


                <div class="blog-standard-item-01">

                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit"
                            href="assets/docs/approval/New_Arrival2_large.jpg">
                            <img src="assets/docs/approval/New_Arrival2_large.jpg"
                                alt="Gurkha Security Guard Approval Malaysia">
                        </a>
                    </div>


                </div>


                <div class="blog-standard-item-01">

                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit"
                            href="assets/docs/approval/New_Arrival3_large.jpg">
                            <img src="assets/docs/approval/New_Arrival3_large.jpg"
                                alt="Nepali Security Guard Approval Malaysia">
                        </a>
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
