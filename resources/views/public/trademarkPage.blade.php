
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
                                    src="./assets/img/shapes/bullet-01.png" alt=""> Trademark
                                <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                            </h4>
                            <h2 class="title" style="padding-bottom:1em;">Trademark Certificate<br>
                            </h2>


                        </div>
                    </div>
                </div>



                <div class="blog-standard-item-01" style="padding-bottom:2em;">
                    <div class="thumbnail">
                        <a class="popup-btn image-popup-vertical-fit" href="assets/docs/trademark/trademark.jpg">
                            <img src="assets/docs/trademark/trademark.jpg" alt="blog">
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
