@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Client Category</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-news"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">New Client Category</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">

						<h6 class="mb-0 text-uppercase">Create Client Category </h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
                                    <!---- allert message Start -->
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


									<form class="row needs-validation" method="post" action="{{ url('admin/client/category/create') }}" >
                                    @csrf
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03" class="form-label">Client Name :</label>
                                            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="validationCustom03" value="{{ old('full_name') }}" required="">

                                            @error('full_name')
                                            <div class="invalid-feedback">
                                        {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

										<div class="col-md-4 mb-3">
											<label for="validationTextarea" class="form-label">Status : </label>
                                            <select name="status" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('status')){
                                                    if(old('status')==0){ $status_string='Not Active';}
                                                    elseif(old('status')==1){ $status_string='Active';}
                                                    else { $status_string='';}
                                                    ?>
                                                     <option value="<?php echo old('status') ?>"><?php echo $status_string ?></option>
                                                    <?php  }  ?>
												<option value="1">Active</option>
                                                <option value="0">Not Active</option>



											</select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>




										<div class="mb-3">
											<button class="btn btn-primary" type="submit">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--end row-->
			</div>
		</div>





@endsection
