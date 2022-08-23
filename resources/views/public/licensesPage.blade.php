
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
                                    src="./assets/img/shapes/bullet-01.png" alt="">Licenses
                                <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                            </h4>
                            <h2 class="title">Licenses &
                                Certificatest<br>
                            </h2>


                        </div>
                    </div>
                </div>



                <div class="blog-standard-item-01 dash-border" style="padding-bottom:2em;">
                    <h3 class="title small-heading-sub">BPNS Certificate of Security Guard</h3>
                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit"
                            href="assets/docs/licenses/BPNS-2015-large.jpg">
                            <img src="assets/docs/licenses/BPNS-2015-large.jpg"
                                alt="BPNS Certificate of Security Guard in Malaysia">
                        </a>
                    </div>


                </div>


                <div class="blog-standard-item-01 dash-border" style="padding-bottom:2em;">
                    <h3 class="title small-heading-sub">KDN Certificate of Security Guard</h3>
                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit" href="assets/docs/licenses/KDN1_large.jpg">
                            <img src="assets/docs/licenses/KDN1_large.jpg"
                                alt="KDN Certificate of Security Guard in Malaysia">
                        </a>
                    </div>


                </div>

                <div class="blog-standard-item-01 dash-border" style="padding-bottom:2em;">
                    <h3 class="title small-heading-sub">KKM Certificate of Security Guard</h3>
                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit"
                            href="assets/docs/licenses/KKM-2015-large.jpg">
                            <img src="assets/docs/licenses/KKM-2015-large.jpg"
                                alt="KKM Certificate of Security Guard in Malaysia">
                        </a>
                    </div>


                </div>

                <div class="blog-standard-item-01 dash-border" style="padding-bottom:2em;">
                    <h3 class="title small-heading-sub">PPKKM Certificate of Security Guard</h3>
                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit"
                            href="assets/docs/licenses/PPKKM-2015-large.jpg">
                            <img src="assets/docs/licenses/PPKKM-2015-large.jpg"
                                alt="PPKKM Certificate of Security Guard in Malayisa">
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
