
   @extends('public.layouts.masterPage')

   @section('title','One Stop Security Solutions Consultation, Security guard company in Malaysia, best security guard company in
   kl, No.# security guard company in kl, best security guard company in Penang, No.1# security guard company in
   Penang Best security guard company in malaysia - Security Company in Malaysia | Security Guards Malaysia | Security Guards | Local Guards Malaysia | Local Guards')

   @section('keywords','Malaysia Security Guard Company,security service,security service company Malaysia, Security Malaysia, security service company in Malaysia,&lt;br /&gt;security service company in kl,&lt;br /&gt;security service company kl')

   @section('description','Eagle Eye Security Sdn Bhd is a principal company (Not franchise). Eagle Eye Security is a leading security services provider company in malaysia. Established 2002, The Security Guard Services in our company are one of the highest quality security services in Malaysia with good pricing available in the market. We are specialized in High End Condominium and Commercial Building for the provision as Private Agency in Malaysia ,Eagle Eye Security provides security, monitoring, consulting and investigative services. Our security solutions are tailored to your business needs')

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
