
   @extends('public.layouts.masterPage')
   @section('title','Home')
   @section('contents')


   <div class="contact-area padding-top-20 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme-heading-title text-center">
                    <h4 class="subtitle"><img class="bullet bullet-01" src="{{ asset('assets/img/shapes/bullet-01.png') }}"
                            alt=""> Job

                        <img class="bullet" src="{{ asset('assets/img/shapes/bullet.png') }}" alt="">
                    </h4>
                    <h2 class="title">Job Application<br>
                    </h2>


                </div>
            </div>
        </div>

    </div>


    <div class="container">

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


                    <form class="row needs-validation" method="post" action="{{ url('/apply-job') }}" >
                    @csrf
                        <div class="contact-info-inner">
                            <div class="row" style="padding: 50px;">




                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Full Name :</label>
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


                                <div class="col-md-6 mb-3">
                                    <div class="single-input-inner style-border">
											<label for="title" class="form-label">Nationality : </label>
                                            <select name="nationality" class="form-control" id="nationality" style="height: 58px;" required="">
                                                <?php if(old('nationality')){

                                                    ?>
                                                     <option value="<?php echo old('nationality') ?>"><?php echo  old('nationality') ?></option>
                                                    <?php  }  ?>
                                                    @foreach ($countryData as $item)
                                                    <option value="{{ $item->country_name }}">{{ $item->country_name }}</option>
                                                    @endforeach

											</select>
                                            @error('nationality')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
                                            </div>
								</div>

                                <div class="col-md-6 mb-3">
                                    <div class="single-input-inner style-border">
											<label for="country_live_in" class="form-label">Country Live In : </label>
                                            <select name="country_live_in" class="form-control" id="title" style="height: 58px;" required="">
                                                <?php if(old('country_live_in')){

                                                    ?>
                                                     <option value="<?php echo old('country_live_in') ?>"><?php echo  old('country_live_in') ?></option>
                                                    <?php  }  ?>
                                                    @foreach ($countryData as $item)
                                                    <option value="{{ $item->country_name }}">{{ $item->country_name }}</option>
                                                    @endforeach

											</select>
                                            @error('country_live_in')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
                                            </div>
								</div>
                                <div class="col-md-2 mb-3">
                                    <div class="single-input-inner style-border">
											<label for="sex" class="form-label">Gender : </label>
                                            <select name="sex" class="form-control" id="sex" style="height: 58px;" required="">
                                                <?php if(old('sex')){

                                                    ?>
                                                     <option value="<?php echo old('sex') ?>"><?php echo  old('sex') ?></option>
                                                    <?php  }  ?>
												<option value="Male">Male</option>
                                                <option value="Female">Female</option>


											</select>
                                            @error('sex')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
                                            </div>
								</div>
                                <div class="col-md-4">
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

                                <div class="col-md-3">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Height :</label>
                                        <input type="text" name="height" class="form-control @error('height') is-invalid @enderror" id="validationCustom03" value="{{ old('height') }}" required="">

                                        @error('height')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="single-input-inner style-border">
                                        <label for="weight" class="form-label"> Weight :</label>
                                        <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror" id="validationCustom03" value="{{ old('weight') }}" required="">

                                        @error('weight')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Education :</label>

                                        <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" id="validationCustom03" value="{{ old('education') }}">


                                        @error('education')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                     </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Tranings :</label>

                                        <input type="text" name="tranings" class="form-control @error('tranings') is-invalid @enderror" id="validationCustom03" value="{{ old('tranings') }}">


                                        @error('tranings')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                     </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Skills :</label>

                                        <input type="text" name="skills" class="form-control @error('skills') is-invalid @enderror" id="validationCustom03" value="{{ old('skills') }}">

                                        @error('skills')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                     </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Known Languages :</label>

                                        <input type="text" name="languages" class="form-control @error('languages') is-invalid @enderror" id="validationCustom03" value="{{ old('languages') }}">

                                        @error('languages')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                     </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="single-input-inner style-border">
                                        <label for="validationCustom03" class="form-label"> Last Worked Job :</label>

                                        <input type="text" name="experince_post" class="form-control @error('experince_post') is-invalid @enderror" id="validationCustom03" value="{{ old('experince_post') }}">

                                        @error('experince_post')
                                        <div class="invalid-feedback">
                                    {{ $message }}
                                        </div>
                                        @enderror
                                     </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="single-input-inner style-border">
                                            <label for="title" class="form-label">Experince : </label>
                                            <select name="experince_year" class="form-control" id="experince_year" style="height: 58px;" required="">
                                                <?php if(old('experince_year')){

                                                    ?>
                                                     <option value="<?php echo old('experince_year') ?>"><?php echo  old('experince_year') ?></option>
                                                    <?php  }  ?>
                                                    <option value="No Experience">No Experience</option>
                                                    <option value="Less than 1 year">Less than 1 year</option>
                                                    <option value="1 year Experience"> 1 year Experience</option>
                                                    <option value="2 years Experience"> 2 years Experience</option>
                                                    <option value="3 years Experience"> 3 years Experience</option>
                                                    <option value="4 years Experience"> 4 years Experience</option>
                                                    <option value="5 years Experience"> 5 years Experience</option>
                                                    <option value="More than 5 years"> More than 5 years</option>

                                            </select>
                                            @error('experince_year')
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
