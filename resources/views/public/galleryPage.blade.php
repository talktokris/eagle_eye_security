
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
                            <a href="{{ url('/gallery')}}">
                            <span class="tag-wrap">
                                <span class="tag">
                                    <span class="style-animate-dot-wrap">
                                        <span class="style-animate-dot"></span>
                                    </span>
                                    Latest </span>
                            </span>
                        </a>
                        </li>

                        @foreach ($GalCatData as $itemGalCat)

                        <li  >
                            <a href="{{ url('/gallery')}}/{{$itemGalCat->name_short}}">

                                <span class="tag-wrap">
                                    <span class="tag">
                                        <span class="style-animate-dot-wrap">
                                            <span class="style-animate-dot"></span>
                                        </span>
                                        {{ $itemGalCat->full_name }}
                                    </span>
                                </span>
                            </a>

                        </li>

                        @endforeach


                        <?php /*

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

                        */ ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-item-wrap">

        <?php $numGal=1; ?>

        @foreach ($GalData as $galRow)


        <div class="item gallery-single-item-<?php echo $numGal ;?> event">
            <div class="thumb" style="background-image: url('{{ url('/assets/images/gallery')}}/{{ $galRow->id}}/{{$galRow->image_small}}');">
            </div>
            <a class="popup-btn image-popup-vertical-fit"
                href="{{ url('/assets/images/gallery')}}/{{ $galRow->id}}/{{$galRow->image_large}}">
                <i class="icomoon-plus-sign"></i>
            </a>
        </div>

        <?php $numGal++ ; ?>
        @endforeach

    </div>
</div>



    @endsection
