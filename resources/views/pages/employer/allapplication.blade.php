@extends('layout.admin-master')

@section('page_title')
all application
@endsection

@section('content')

<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Manage Applicants</h1>
							
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						
						<!-- Header Wrap -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<div class="_mp-inner-content elior">
											<div class="_mp-inner-first">
												<div class="search-inline">
													<input type="text" class="form-control" placeholder="Job title, Keywords etc.">
													<button type="button" class="btn btn-primary">Search</button>
												</div>
											</div>
											
										</div>
									</div>
									<div class="card-body">


											@if(session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message')}}

                                                </div>

                                            @endif
									
										<!-- Row -->
										<div class="row mb-3">
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="duster-flex-row  align-items-center d-flex justify-content-between">
													<div class="duster-flex-first">
														<h6 class="mb-0">Sr. Magento Developer </h6>
													</div>
													<div class="duster-flex-end">
														<ul class="nav nav-pills nav-fill gap-2 p-1 small gray-simple rounded" id="pillNav2" role="tablist">
															<li class="nav-item" role="presentation">
																<button class="nav-link active rounded" id="alls" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">All: 194</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link rounded" id="approveds" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Approved: 66</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link rounded" id="rejecteds" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Rejected: 128</button>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- End Row -->

									
										
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">

										@foreach ($jobs as $key => $job )
									
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">{{ $job->users->name }}</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span> {{ $job->job_title }}</span>.<span><i class="fa-solid fa-location-dot me-1"></i>{{ $job->location }}</span><span>Applied: {{$job->created_at->format('d M Y')}}</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<div class="table-card">
																<form action="{{ route('storeshortlist', $job->id) }}" method="POST">
																	@csrf
																	
																	<!-- <input type="hidden" name="id" value="{{ $job->id }}"> -->
																

																	<button  type="submit" class="border-0 rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></button>

																</form>
																<!-- <a href="{{ route('storeshortlist', $job->id) }};" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a> -->
																<!-- <a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
																<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a> -->

																<a href="{{ route('showuserdetails', $job->id) }}" class="rounded btn-md text-info bg-light-info px-3 me-2"><i class="fa-solid fa-eye"></i></a>

																<form action="{{ route('cancelapplication', $job->id) }}" method="POST">
																	@csrf
																	<!-- <a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a> -->
																	<button  type="submit" class=" border-0 rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></button>
																</form>
															
															</div>
														</div>
													</div>
												</div>
											</div>

										@endforeach
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-6.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Clarence B. Mantooth</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Sr. Content Writer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Canada, USA</span><span>Applied: 10 Jan 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-7.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Geraldine E. Scott</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Shopify Developer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Denver, USA</span><span>Applied: 17 March 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-8.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Donald J. Merrick</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Laravel Developer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>California, USA</span><span>Applied: 20 March 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											 -->
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-9.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Rudolph J. Chalmers</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Team Manager</span>.<span><i class="fa-solid fa-location-dot me-1"></i>New York, USA</span><span>Applied: 26 March 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-10.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Kr. Dhananjay Preet</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Front-End Designer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>California, USA</span><span>Applied: 30 March 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-11.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Jennifer R. Jordan</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>UI/UX Designer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Canada, USA</span><span>Applied: 14 Apr 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-12.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Jennifer R. Joyce</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Content Writer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Liverpool, UK</span><span>Applied: 15 Dec 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-13.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Elizabeth A. Finn</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>WordPress Developer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>New York, USA</span><span>Applied: 10 Nov 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-14.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Jewel E. Gardner</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>PHP Developer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>London, UK</span><span>Applied: 25 Dec 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-15.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Rudolph S. Martin</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Sr. Web Designer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Canada, USA</span><span>Applied: 10 Jan 2023</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
										</div>
										<!-- End All Job List -->
										
									</div>
								</div>
							</div>	
						</div>
						<!-- Header Wrap -->
	
					</div>


                    
@endsection
				