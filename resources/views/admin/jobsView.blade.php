@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Jobs</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-news"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Job Application </li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">

						<h6 class="mb-0 text-uppercase">Job Application Resume </h6>
						<hr/>
                        <div class="card">
							<div class="card-body">
                                @foreach ($data as $item)
								<table class="table mb-0">



									<tbody>
										<tr>
											<th scope="row">Name : </th>
											<td>{{ $item->name }}</td>
										</tr>

                                        <tr>
											<th scope="row">Email : </th>
											<td>{{ $item->email }}</td>
										</tr>
                                        <tr>
											<th scope="row">Phone : </th>
											<td>{{ $item->phone }}</td>
										</tr>

                                        <tr>
											<th scope="row">Sex : </th>
											<td>{{ $item->sex }}</td>
										</tr>


                                        <tr>
											<th scope="row">Nationality : </th>
											<td>{{ $item->nationality }}</td>
										</tr>


                                        <tr>
											<th scope="row">Height : </th>
											<td>{{ $item->phone }}</td>
										</tr>

                                        <tr>
											<th scope="row">Weight : </th>
											<td>{{ $item->weight }}</td>
										</tr>

                                        <tr>
											<th scope="row">Country Live In : </th>
											<td>{{ $item->country_live_in }}</td>
										</tr>

                                        <tr>
											<th scope="row">Education: </th>
											<td>{{ $item->education }}</td>
										</tr>
                                        <tr>
											<th scope="row">Skill: </th>
											<td>{{ $item->skills }}</td>
										</tr>
                                        <tr>
											<th scope="row">Languages: </th>
											<td>{{ $item->languages }}</td>
										</tr>
                                        <tr>
											<th scope="row">Last Worked Job : </th>
											<td>{{ $item->experince_post }}</td>
										</tr>
                                        <tr>
											<th scope="row">Experince: </th>
											<td>{{ $item->experince_year }}</td>
										</tr>




									</tbody>
								</table>
                                @endforeach
							</div>
						</div>

					</div>
				</div>
				<!--end row-->
			</div>
		</div>





@endsection
