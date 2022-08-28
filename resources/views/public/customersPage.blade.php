
   @extends('public.layouts.masterPage')
   @section('title','Home')
   @section('contents')



   <div class="blog-section-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="theme-heading-title text-center  dash-border">
                            <h4 class="subtitle"><img class="bullet bullet-01"
                                    src="./assets/img/shapes/bullet-01.png" alt=""> Our Customers
                                <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                            </h4>
                            <h2 class="title">Eagle Eye Security Clients<br>
                            </h2>
                            <p style="padding:2em;">Currently our company is engaged with assignments mostly in the
                                Klang
                                Valley area but we are planning to expand and open more branches nationwide such as
                                in
                                Penang, Johor, Perak, and Kelantan. Here are some of the assignments that are
                                undertaken by
                                our company </p>

                        </div>
                    </div>
                </div>

                <div class="team-area-page">
                    <div class="container">

                        <?php /*
                        <div class="row">

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">High - End Condo</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/high-end-condo/i-zen@kiarai_logo.gif"
                                                    alt="Security guard services client kiarai logo">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/high-end-condo/kiaramas-logo.gif"
                                                    alt="Security guard services client kiaramas">

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Embassies & High Commissions</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/embassies/mix-client-35-logo_24.gif"
                                                    alt="Security guard embassies">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/embassies/mix-client-35-logo_28.gif"
                                                    alt="Security guard embassies">

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Schools</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/school/montkira_international_school_logo.gif"
                                                    alt="Security guard services client montkira international school">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/school/sree-utma-school.jpg"
                                                    alt="Security guard services client sree utma school">

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Hotels</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/hotels/geo_logo.png"
                                                    alt="Security guard services client geo hotel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/hotels/hotel_royal.png"
                                                    alt="Security guard services client hotel royal">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        */ ?>

                        <div class="row">

                            @foreach ($pageData as $row)



                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">{{ $row->full_name}}</h4>
                                <div class="row">
                                    @foreach ($row->getAllClients as $item)


                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="{{url('assets/images/client')}}/{{ $item->id}}/{{ $item->client_logo_image}}"
                                                    alt="Security guard services {{ $item->client_name}}">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                            @endforeach

                            <?php /*

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Residences</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/residences/aliran_damai_aprtment.png"
                                                    alt="Security guard services client ialiran damai apratment">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/residences/residen-kia-pengr.jpg"
                                                    alt="Security guard services client residen kia pengr">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            */?>
                        </div>


                        <?php /*
                        <div class="row">

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Factory</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/factory/muihua-logo.jpg"
                                                    alt="Security guard services client muihua">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/factory/palling_logo.jpg"
                                                    alt="Security guard services client palling">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Residences</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/residences/aliran_damai_aprtment.png"
                                                    alt="Security guard services client palling">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/residences/residen-kia-pengr.jpg"
                                                    alt="Security guard services client palling">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Commercial</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/commercial/aqua-walk.jpg"
                                                    alt="Security guard services client aqua-walk">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/commercial/gibraltar.jpg"
                                                    alt="Security guard services client gibraltar">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-6  dash-border">
                                <h4 class="title" style="padding:1em;">Others</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/others/bentley_music_academy_logo.gif"
                                                    alt="Security guard services client bentley music academy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-team-inner style-overlay text-center">
                                            <div class="thumb">
                                                <img src="assets/img/clients/others/prabhu_money_transfer_logo.gif"
                                                    alt="Security guard services client prabhu money transfer">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        */ ?>

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
