@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">News</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-Language"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">News Search</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">News List</h6>
				<hr/>
                <div class="row col-md-9">
                    <a href="{{ url('admin/client/category/create') }}" class="btn btn-primary btn-create-top">Create News</a>

                </div>

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

					<div class="card-body">



						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered dataTable" style="width:100%">

								<thead>
									<tr>
                                        <th>Image</th>
										<th>title</th>
                                        <th>text</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>



									</tr>
								</thead>
								<tbody>

                                @foreach ($data as $item)

                                <?php $imageFindName=$item->image_small;
                                if($imageFindName==""){   $Language_image= url('assets/admin/assets/images/no_image.jpg'); }
                                else {   $Language_image= url('/assets/images/news').'/'.$item->id.'/'.$item->image_small; } ?>

                                <?php

                                         $statusValue=$item->status;
                                        if($statusValue==1){ $statusSting='<span class="badge bg-success">Active</span>';}
                                        elseif($statusValue==0){ $statusSting='<span class="badge bg-secondary">Not Active</span>';}?>
                                <tr>
                                    <td style="text-align: center;"><img src="{{ $Language_image }}" class="back-end-upload-img"><br>
                                        <a href="<?php echo url('/admin/news/image_upload').'/'. base64_encode($item->id) ;?>" class="btn btn-info" style="margin:10px;">Change Image</a></td>
                                    <td style="">{{ $item->title}}</td>
                                    <td style="">{{ $item->text}}</td>
                                    <td><?php echo $statusSting;?></td>

                                    <td><a href="<?php echo url('/admin/news/edit').'/'. base64_encode($item->id) ;?>" class="btn btn-warning"><i class="bx bx-pencil"></i></a></td>
                                    <td><a href="<?php echo url('/admin/news/delete').'/'. base64_encode($item->id) ;?>" class="btn btn-danger"><i class="bx bx-trash"></i></a></td>

                                 <?php /*  <td style="">{{ $item->created_at->diffForHumans()  }}</td>
                                    <td style="">{{ $item->updated_at->diffForHumans()  }}</td> */?>

                                </tr>
                                @endforeach

								</tbody>
								<tfoot>
									<tr>
                                        <th>Image</th>
										<th>title</th>
                                        <th>text</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>




			</div>
		</div>





@endsection
