@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Clients</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-photo-album"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Clients</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<div class="row">
					<div class="col-xl-9 mx-auto">

						<div class="card">

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


						</div>



					</div>
				</div>



				<h6 class="mb-0 text-uppercase">Clients Logos</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">

                    @foreach ($galleryDataAll as $item)

                    <div class="col">
						<div class="card">
                            <h5 class="card-title" style="padding: 10px;">{{ $item->galley_title }}</h5>
							<img src="{{ url('assets/images/client')}}/{{ $item->id.'/'.$item->client_logo_image }}" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-title">{{ $item->galley_category }}</p>

								<p class="card-text"></p>	<a href="<?php echo url('/admin/client/delete/').'/'. base64_encode($item->id) ;?>" class="btn btn-danger"><i class="bx bx-trash"></i></a>

                            </div>
						</div>
					</div>

                    @endforeach



				</div>
				<!--end row-->




			</div>
		</div>





@endsection
