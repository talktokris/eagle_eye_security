
   @extends('public.layouts.masterPage')
   @section('title','Home')
   @section('contents')


   <div class="contact-area padding-top-20 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme-heading-title text-center">
                    <h4 class="subtitle"><img class="bullet bullet-01" src="{{ asset('assets/img/shapes/bullet-01.png') }}"
                            alt=""> Enquiry

                        <img class="bullet" src="{{ asset('assets/img/shapes/bullet.png') }}" alt="">
                    </h4>
                    <h2 class="title">Online enquiry<br>
                    </h2>


                </div>
            </div>
        </div>

    </div>


    <div class="container">
        <div class="theme-heading-title team-page text-center">
            <h5 class="title" style="color: darkred; font-size:1.5em;">Fill up the form if you have any question</h5>
        </div>
        <div class="row justify-content-md-center">

            <div class="col-lg-8 enquery-box" style="padding-top: 15px;" >
                <div class="contact-page-form-two">
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Success Alerts</h6>
                                <div class="text-white">{!! session('flash_message_success') !!} </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Error Alerts</h6>
                                <div class="text-white">{!! session('flash_message_error') !!}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!---- allert message End -->


                    <form class="row needs-validation" method="post" action="{{ url('/enquiry') }}" >
                    @csrf
                        <div class="contact-info-inner">
                            <div class="row" style="padding: 50px;">


								<div class="col-md-3 mb-3">
                                    <div class="single-input-inner style-border">
											<label for="title" class="form-label">Title : </label>
                                            <select name="title" class="form-control" id="title" style="height: 58px;" required="">
                                                <?php if(old('title')){

                                                    ?>
                                                     <option value="<?php echo old('title') ?>"><?php echo  old('title') ?></option>
                                                    <?php  }  ?>
												<option value="Dr">Dr</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>

											</select>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
                                            </div>
								</div>

                                <div class="col-md-9">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Name :</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="validationCustom03" value="{{ old('name') }}" required="">

                                        @error('name')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Email :</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="validationCustom03" value="{{ old('email') }}" required="">

                                        @error('email')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Phone :</label>
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="validationCustom03" value="{{ old('phone') }}" required="">

                                        @error('phone')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Message :</label>

                                        <textarea name="message"  placeholder="Write messgae*" class="form-control @error('message') is-invalid @enderror" required="" >{{ old('message') }}</textarea>

                                        @error('message')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                     </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-wrap">
                                        <button class="btn-panthar btn-border-base panthar-color-text">
                                            <span class="top_left"></span>
                                            <span class="top_right"></span>
                                            SEND NOW
                                            <span class="bottom_left"></span>
                                            <span class="bottom_right"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






    @endsection
