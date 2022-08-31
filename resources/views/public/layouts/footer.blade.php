<footer class="footer-area">
    <div class="container">
        <div class="footer-top padding-top-55 padding-bottom-20">


            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6">


                    <div class="footer-widget widget" style="padding:1em;">
                        <div class="about_me_widget style-01">
                            <a href="{{ url("/") }}" class="footer-logo-two" style="width: 80%;"> <img
                                    src="{{ url("/assets/img/logo/white-logo.png")}}" alt="Eagle Eye White logo"></a>
                            <p style="text-align: center; width:100%;">Do you want to be part of eagle eye security
                                professional
                                team </p>
                            <div class="btn-wrap">
                                <a href="{{ url("/apply-job")}}" class="btn-panthar btn-border-base btn-style-white text-white w-100" style="text-align: center;">
                                    <span class="top_left"></span>
                                    <span class="top_right"></span>
                                    <i class="fas fa-paper-plane"></i> Apply for job
                                    <span class="bottom_left"></span>
                                    <span class="bottom_right"></span>
                                </a>


                            </div>
                            <ul class="address-infoo mb-3">
                                <li><i class="icomoon-map-marker"></i>521-A, Batu 3, Jalan Ipoh , Kuala Lumpur, Malaysia
                                </li>
                                <li class="mail-footer"><a href="mailto:info@eagleeyesecurity.com.my"><i
                                            class="icomoon-mail"></i>info@eagleeyesecurity.com.my </a></li>
                            </ul>
                            <ul class="widget-list-items">
                                <li>
                                    <div class="icon">
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>







                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-headline"> Related Links </h4>
                        <ul>
                            <li><a href="http://www.eagleeyecctv.com.my/" target="_blank">Eagle Eye
                                    Systems</a></li>
                            <li><a href="http://www.patrollingservices.com.my/" target="_blank">Patrolling
                                    Services</a>
                            <li><a href="http://www.condosecurity.com.my/" target="_blank">Condo Security Guards</a>
                            </li>
                            <li><a href="http://www.1malaysiasecurity.com.my/" target="_blank">1 Malaysia Security</a>
                            </li>
                            <li><a href="http://www.bodyguards.com.my/" target="_blank">Body Guard Services</a> </li>

                            <li><a href="http://ppkkm.com/" target="_blank">PPKKM</a></li>
                            <li><a href="http://www.moha.gov.my/" target="_blank">KDN</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <h4 class="widget-headline">News &amp; Notice</h4>
                        <ul class="theme-recent-post-wrap news-footer">
                            <?php $numFooter=1 ?>

                            @foreach ($newsData as $newsFooter)

                            <?php   if($numFooter < 5) { ?>

                            <li class="theme-recent-post-item" style="border-bottom: 1px dashed red !important;">
                                <div class="thumb">
                                    <a href="{{ url('/news/view')}}/{{ base64_encode($newsFooter->id)}}">
                                        <img src="{{ asset('assets/images/news')}}/{{ $newsFooter->id}}/{{ $newsFooter->image_small}}"
                                            alt="{{ $newsFooter->title}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="time news-footer-date">{{ $newsFooter->created_at->diffForHumans() }}</span>
                                    <h4 class="title"><a href="{{ url('/news/view')}}/{{ base64_encode($newsFooter->id)}}" class="news-footer-link">{{ $newsFooter->title}}</a></h4>
                                </div>
                            </li>
                            <?php } $numFooter++; ?>
                            @endforeach


                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">

                        <p>Copyright <?php echo date("Y");?> Eagle Eye Security. Designed &amp; Developed By
                            <span>
                                <a href="https://www.digilok.net/" traget="_blank">Digilok.net</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
