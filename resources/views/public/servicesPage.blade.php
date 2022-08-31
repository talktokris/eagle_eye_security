
   @extends('public.layouts.masterPage')

   @section('title','Security guards Malysia | local guards | gurkha guards | security company in Malaysia| Malaysia | Kl | Nepalese guard in malaysia | Nepalese guard company in malaysia | Security Guard | Best Security Guards | Malaysia security guards services | Elite Gurkha Guards | Security guards |Malaysia security guard | Gurkha guard business in Malaysia | Guard Services | Nepalese security guard company in malaysia | Nepalese ex-soldiers, security guard company in malaysia, Reliable Security Guard, Best Gurkha Guards, Guard Services in Kuala Lumpur, Guard Service and Security, Enforce Security Services, Guard and Patrol Service, Professional Security Services in Kuala Lumpur | Security in Kuala Lumpur, Malaysia | Security Services Companies | Private Security | K.L Security Systems | SECURITY GUARD SERVICES | Eagle Eye Security Systems | Personal Security and Bodyguards | Kuala Lumpur | gurkha security in selangor | Reliable Security Guards Business in Klang | Eagle Eye Security in Selangor | Top security guard company in malaysia | Top guard company in malaysia | Malaysia Security Guard Suppliers | Top gurkha security company in malaysia | Ex-Gurkha, Gurkha Security Service | Quality Guard Services | Sarawak Security Guards Company, Johor Security Guards Company, Penang Security Guards Company | Security Guard Company in Malaysia | Security Company in Malaysia | Top Security Company in Malaysia | Armed security guard malaysia | Nepal guard company | Nepali security guard company in Malysia | Security Guard KL')

   @section('keywords','Security,eagle,eye,Service,eagleeye,Malaysia,bodyguard,gurkhasguad,gurkha,body,company,Nepali,Nepalese,service,local,security system,condos,industries,complex,shopping,mega,mall,housings,embassy,government,recruitment,agencies,Fully,licenced,security,guards,guard,sia,approved,contractor,status,malaysia,malaysian,kuala lumpur,kuala lumpur,seleangor,penang,johor bahru,body guard services,security guard services,security guard service,body guard services,body guard executive protection,bodyguard jobs,Malaysian body guard services,bodyguard services,bodyguards,bodyguard,personal body guard security jobs,protection services,protective services,executive protection services,bodyguard service,bodyguard training,executive protection jobs,security guards service,security guards services,executive protection training,security guard companies,guard card,armed guard,personal bodyguard,international security companies,close protection,bodyguard companies,private security,security,private security companies,private bodyguard,personal bodyguards,vip bodyguard,celebrity bodyguards,security service,bodyguards for hire,how to become a bodyguard,private security jobs,security guarding services,security services,surveillance services,bodyguard school, personal protection,executive protection companies,personal protection services,executive bodyguard,security guard company,security officers,executive protection specialist,bodyguard agencies,executive security,security guard,security guard jobs,security jobs,armed guards,security guards,personal security services,professional bodyguard,security companies in nyc,vip protection,security officer,security officer jobs,security companies,security guards companies,patrol services,hire a bodyguard,corporate security services,armed security jobs,security solutions,bodyguard employment,corporate security,personal security companies,private military,executive security services,security company,bodyguard agency,security uniforms,private security contractors,personal bodyguard services,a bodyguard,security guards company,bodyguarding,security guard companies in nyc,triple canopy security,bodyguard schools,armed security,private security firms,how to be a bodyguard,private security guards,security guard equipment,armed guard jobs,executive protection schools,corporate security jobs,bodyguard careers,protection services inc,female bodyguards,personal bodyguard jobs,bodyguard company,armed security guard jobs,armed security guard,eagle eye security,eagle eye malaysia,security guard malaysia, security guard company malaysia,security service malaysia,local guards malaysia,local security guards Malaysia,local body guards in Malaysia,malaysian security guards,security jobs malaysia, security system  malaysia,security  home,security housing, security  condos,security industries,security hopping complex,security jobs for malaysian,security shopping mall,security shopping mega mall,security in housings,security in embassy,security in government sector,security guard recruitment agencies,security guards housing,security guardas in condos,security guards in industries,in shopping complex,security in shopping mall,security in shopping mega mall,Apartment local guards security in malaysia,Apartment gurkha guards security in malaysia,Apartment gurkha guards,Apartment local guards,Apartment local guards in KL,Apartment local guards Kuala Lumpur,Apartment local guards in selengor,Apartment local guards Penang,Apartment local guards in jhor baru,Apartment local guards in JB,condominium gurkha guards,condominium local guards,ex-army gurkha guards in malaysia,ex-army gurkha guards in Kuala Lumpur,ex-army gurkha guards in KL,ex-army gurkha guards in Selengor,ex-army gurkha guards in penang,ex-army gurkha guards in Jhor baru,ex-army nepali guards in malaysia,ex-police nepali guards,ex-police nepali guards,ex-police nepali guards in apartment Malaysia,ex-police nepali guards condominium,ex-police nepali guards condominium in malaysia,fully trained security guard,fully trained security guard company in malaysia,fully trained security gurkha guard,trained security gurkha guards in malaysia,trained security gurkha guards,trained security local guards in malaysia,trained security local guards,K9,Eagle K9,doberman,K9 training,dog training,dog,guard dog,EagleeyeK9,Eagle Eye K9 Security Services,Eagle Eye K9 Security Services in Malaysia,Eagle Eye K9 Security Services in KL,Eagle Eye K9 Security Service in Kuala Lumpur,Eagle Eye K9 Security Services in selengor,nepali top security guards malaysia,Nepal security guard, nepali top security guards,urkha Security Services,Top Security Guard,Ex Gurkha Security Guards From Nepal,Nepal Security Guards,Nepali Security Guards,security guard company in malaysia,security company in malaysia,armed security guard malaysia,nepalese guard in malaysia,nepalese security guard company in malaysia,nepalese security malaysia,Nepali security guard company in malysia,security guard kl, security company in selangor, security company in penang, security company in pj')

   @section('description','Eagle Eye Security Sdn Bhd is a principal company (Not franchise). security guard recruitment agencies in malaysia,  elite unarmed guard in malaysia, malaysia body guards, body guards in malaysia, malaysia Guard Dogs th Handler, Dogs th Handlers guards in malaysia, security in shopping complex, security jobs for malaysian, security in shopping mall, security in shopping mega mall. security in housings, security in embassy,  security in government sector,malaysia, Local guards malaysia, security guards malaysia, malaysian security guards, security jobs in malaysia, security system, security system in malaysia, security guards in home, security guards in housing, security guards in condos, security guards in industries, nepali top security guards malaysia, Nepal security guard, nepali top security guards , Gurkha Security Services, Top Security Guard, Ex Gurkha Security Guards From Nepal,Nepal Security Guards, Nepali Security Guards, Security Guard KL, security company in selangor, security company in penang, security company in pj, eagle,eye,eagleeye,bodyguard,gurkhasguad,gurkha,body,company,Nepali,Nepalese,service,local,security system,condos,industries,complex,shopping,mega,mall,housings,embassy,government,recruitment,agencies,Fully,licenced,security,guards,guard,sia,approved,contractor,status,malaysia,malaysian,kuala lumpur,kuala lumpur,seleangor,penang,johor bahru,body guard services,security guard services,security guard service,body guard services,body guard executive protection,bodyguard jobs,Malaysian body guard services,bodyguard services,bodyguards,bodyguard,personal body guard security jobs,protection services,protective services,executive protection services,bodyguard service,bodyguard training,executive protection jobs,security guards service,security guards services,executive protection training,security guard companies,guard card,armed guard,personal bodyguard,international security companies,close protection,bodyguard companies,private security,security,private security companies,private bodyguard,personal bodyguards,vip bodyguard,celebrity bodyguards,security service,bodyguards for hire,how to become a bodyguard,private security jobs,security guarding services,security services,surveillance services,bodyguard school, personal protection,executive protection companies,personal protection services,executive bodyguard,security guard company,security officers,executive protection specialist,bodyguard agencies,executive security,security guard,security guard jobs,security jobs,armed guards,security guards,personal security services,professional bodyguard,security companies in nyc,vip protection,security officer,security officer jobs,security companies,security guards companies,patrol services,hire a bodyguard,corporate security services,armed security jobs,security solutions,bodyguard employment,corporate security,personal security companies,private military,executive security services,security company,bodyguard agency,security uniforms,private security contractors,personal bodyguard services,a bodyguard,security guards company,bodyguarding,security guard companies in nyc,triple canopy security,bodyguard schools,armed security,private security firms,how to be a bodyguard,private security guards,security guard equipment,armed guard jobs,executive protection schools,corporate security jobs,bodyguard careers,protection services inc,female bodyguards,personal bodyguard jobs,bodyguard company,armed security guard jobs,armed security guard,eagle eye security,eagle eye malaysia,security guard malaysia, security guard company malaysia,security service malaysia,local guards malaysia,local security guards Malaysia,local body guards in Malaysia,malaysian security guards,security jobs malaysia, security system  malaysia,security  home,security housing, security  condos,security industries,security hopping complex,security jobs for malaysian,security shopping mall,security shopping mega mall,security in housings,security in embassy,security in government sector,security guard recruitment agencies,security guards housing,security guardas in condos,security guards in industries,in shopping complex,security in shopping mall,security in shopping mega mall,Apartment local guards security in malaysia,Apartment gurkha guards security in malaysia,Apartment gurkha guards,Apartment local guards,Apartment local guards in KL,Apartment local guards Kuala Lumpur,Apartment local guards in selengor,Apartment local guards Penang,Apartment local guards in jhor baru,Apartment local guards in JB,condominium gurkha guards,condominium local guards,ex-army gurkha guards in malaysia,ex-army gurkha guards in Kuala Lumpur,ex-army gurkha guards in KL,ex-army gurkha guards in Selengor,ex-army gurkha guards in penang,ex-army gurkha guards in Jhor baru,ex-army nepali guards in malaysia,ex-police nepali guards,ex-police nepali guards,ex-police nepali guards in apartment Malaysia,ex-police nepali guards condominium,ex-police nepali guards condominium in malaysia,fully trained security guard,fully trained security guard company in malaysia,fully trained security gurkha guard,trained security gurkha guards in malaysia,trained security gurkha guards,trained security local guards in malaysia,trained security local guards,K9,Eagle K9,doberman,K9 training,dog training,dog,guard dog,EagleeyeK9,Eagle Eye K9 Security Services,Eagle Eye K9 Security Services in Malaysia,Eagle Eye K9 Security Services in KL,Eagle Eye K9 Security Service in Kuala Lumpur,Eagle Eye K9 Security Services in selengor,nepali top security guards malaysia,Nepal security guard, nepali top security guards,urkha Security Services,Top Security Guard,Ex Gurkha Security Guards From Nepal,Nepal Security Guards,Nepali Security Guards,armed security guard malaysia,security guard kl,Secrity Company in Pj, Secrity Company in Selangor')

   @section('contents')



   <div class="service-area margin-bottom-90">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="theme-heading-title text-center">
                    <h4 class="subtitle"><img class="bullet bullet-01" src="./assets/img/shapes/bullet-01.png"
                            alt=""> Services
                        <img class="bullet" src="./assets/img/shapes/bullet.png" alt="">
                    </h4>
                    <h2 class="title" style="padding-bottom:1em;">Eagle Eye Security Services<br>
                    </h2>


                </div>
            </div>
        </div>

        <div class="section-wrapper">

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="theme-heading-title">

                        <p>We commenced operations in 2002 as a specialized security guard services company in
                            Malaysia. Over a period of time, being in the business of providing physical security to
                            our customers, and with a view to meet the increasing levels of customer expectations
                            and requirements, we felt the need to expand our basic security service of manned
                            guarding and venture into related areas. This addition to the portfolio, over time,
                            helped us evolve into a total security solutions provider.</p>
                    </div>
                </div>

            </div>





            <div class="service-wrapper">
                <div class="row">
                    @foreach ($pageData as $item)


                    <div class="col-md-6 col-lg-3">
                        <div class="service-single-item-list">
                            <div class="service-single-item">
                                <div class="thumb">
                                    <img src="{{ url('assets/images/services/')}}/{{ $item->id}}/{{ $item->image_mid}}" alt="{{ $item->title}}">
                                </div>
                                <div class="details">
                                    <h4 class="title"><a href="{{ url('/services')}}/{{ $item->link}}">{{ $item->title_short}}</a></h4>
                                    <a class="read-btn" href="{{ url('/services')}}/{{ $item->link}}"><i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="service-wrapperr">

                        <p>Setup as Security firm almost 20 years ago, today the company has grown into a "Total
                            Security Solutions Provider" offering manned guarding (MG), security guards (SG) gurkha
                            guards (GG) premium local guards (PLG) body guards (BG) investigations (C&I), electronic
                            security systems (ESS) and security system (SS) to over 150 corporate customers across 5
                            states in Malaysia.</p>
                        <p>The Security guard Services in our company are one of the highest quality security
                            services in malaysia with good pricing available in the market. The services include</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    @endsection
