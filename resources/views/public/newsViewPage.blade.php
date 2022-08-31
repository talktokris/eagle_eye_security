
   @extends('public.layouts.masterPage')

   @foreach ($pageData as $item)

   @section('title')  Eagle Eye Security News &map; Notice : {{ $item->title  }}   @endsection

   @section('keywords')  Eagle Eye Security News &map; Notice , {{ $item->title  }}   @endsection

   @section('description') Eagle Eye Security News -{{ $item->text  }}   @endsection

   @section('contents')


   <div class="blog-section-area">
    <div class="container">



        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="theme-heading-title text-center">
                            <h4 class="subtitle"><img class="bullet bullet-01"
                                    src="{{ url('/assets/img/shapes/bullet-01.png')}}" alt="">Services
                                <img class="bullet" src="{{ url('/assets/img/shapes/bullet.png') }}" alt="">
                            </h4>
                            <h2 class="title">{{ $item->title}}<br>
                            </h2>


                        </div>
                    </div>
                </div>

                <div class="blog-standard-item-01">

                    <div class="content" style="padding-bottom: 3em;">

                        <div class="thumb">
                            <img src="{{ url('/assets/images/news')}}/{{ $item->id}}/{{ $item->image_large}}" alt="{{ $item->title }}">
                        </div>
                        <h2 class="title">{{ $item->title }}</h2>
                        <h6>{{ $item->created_at->diffForHumans() }}</h6>
                        <?php
                        echo $item->text ;
                        ?>



                    </div>
                </div>




            </div>
            <!-- Side bar Start --->
            @include('public/layouts/sidebar')

            <!-- Side bar Start --->
        </div>

    </div>
</div>

@endforeach

    @endsection
