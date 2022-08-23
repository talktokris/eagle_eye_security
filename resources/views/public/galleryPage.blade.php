
   @extends('public.layouts.masterPage')
   @section('title','Home')
   @section('contents')




   <div class="gallary-area margin-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme-heading-title text-center">
                    <h4 class="subtitle"><img class="bullet bullet-01" src="./assets/img/shapes/bullet-01.png"
                            alt="">Gellery
                        <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                    </h4>
                    <h2 class="title">Eagle Eye Security Gellery<br>
                    </h2>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="container text-center">
                <div class="gallery-menu filter-button-group">
                    <ul>
                        <li class="active" data-filter="*">
                            <span class="tag-wrap">
                                <span class="tag">
                                    <span class="style-animate-dot-wrap">
                                        <span class="style-animate-dot"></span>
                                    </span>
                                    All </span>
                            </span>
                        </li>
                        <li data-filter=".corporate" class="">
                            <span class="tag-wrap">
                                <span class="tag">
                                    <span class="style-animate-dot-wrap">
                                        <span class="style-animate-dot"></span>
                                    </span>
                                    Corporate
                                </span>
                            </span>
                        </li>
                        <li data-filter=".office" class="">
                            <span class="tag-wrap">
                                <span class="tag">
                                    <span class="style-animate-dot-wrap">
                                        <span class="style-animate-dot"></span>
                                    </span>
                                    Office
                                </span>
                            </span>
                        </li>
                        <li data-filter=".bank" class="">
                            <span class="tag-wrap">
                                <span class="tag">
                                    <span class="style-animate-dot-wrap">
                                        <span class="style-animate-dot"></span>
                                    </span>
                                    bank
                                </span>
                            </span>
                        </li>
                        <li data-filter=".event" class="">
                            <span class="tag-wrap">
                                <span class="tag">
                                    <span class="style-animate-dot-wrap">
                                        <span class="style-animate-dot"></span>
                                    </span>
                                    event
                                </span>
                            </span>
                        </li>
                        <li data-filter=".bodyguard">
                            <span class="tag-wrap">
                                <span class="tag">
                                    <span class="style-animate-dot-wrap">
                                        <span class="style-animate-dot"></span>
                                    </span>
                                    bodyguard
                                </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-item-wrap">
        <div class="item gallery-single-item-1 bodyguard event">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-01.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/high-angle-safety-team-work.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
        <div class="item gallery-single-item-2 bodyguard event">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-02.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/side-view-security-guards-specialist.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
        <div class="item gallery-single-item-3 bank corporate">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-03.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/police-officer-making-stop-gesture.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
        <div class="item gallery-single-item-4 bodyguard corporate">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-04.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/security-woman-stopping-photographers-1.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
        <div class="item gallery-single-item-5 bank office">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-05.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/cops-black-uniform-body-armor.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
        <div class="item gallery-single-item-6 bodyguard event office">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-06.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/serious-female-police-officer-is-posing-camera-against-black-background-with-red-blue.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
        <div class="item gallery-single-item-7 bodyguard corporate office">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-07.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/two-male-police-officers-uniform-sunglasses-standing-back-back-policemen-protect-law-cops-work-city-street-order-justice-control.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
        <div class="item gallery-single-item-8 bank bodyguard event">
            <div class="thumb" style="background-image: url('./assets/img/section-img/gallary/gallary-08.png');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="https://themebuzs.com/wp/panthar/wp-content/uploads/2022/01/elegant-woman-medical-face-mask-passing-through-metal-detector-scanner-airport-terminal.png">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>
    </div>
</div>



    @endsection
