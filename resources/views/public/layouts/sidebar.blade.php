<div class="col-lg-4">
    <div class="widget-area">

        <div class="widget widget_recent_posts wow animate__animated animate__fadeInRight animate__delay-1s">
            <h4 class="widget-headline style-02 news-heading-side">News &amp; Notice</h4>
            <ul class="theme-recent-post-wrap">
                @foreach ($newsData as $newsRow)


                <li class="theme-recent-post-item" style="border-bottom: 1px dashed red !important;">
                    <div class="thumb">
                        <a href="#">
                            <img src="{{ asset('assets/images/news') }}/{{ $newsRow->id }}/{{ $newsRow->image_small }}"
                                alt="How much does it cost to rent a private jet?">
                        </a>
                    </div>
                    <div class="content">
                        <span class="time">{{ $newsRow->created_at->diffForHumans(); }}</span>
                        <h4 class="title"><a href="{{ url('/news/view')}}/{{ base64_encode($newsRow->id) }}">{{ $newsRow->title }}</a></h4>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <div class="widget widget_archive wow animate__animated animate__fadeInRight animate__delay-2s">
            <h3 class="widget-headline style-02 news-heading-side">Related Links </h3>
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
</div>
