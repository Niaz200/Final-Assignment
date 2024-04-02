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

									{{--	@foreach ($jobs as $key => $job )
									
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

															

															<a href="{{ route('allshortlistjob', $job->id) }};" class="rounded btn-md text-success bg-light-success px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>

															<a href="JavaScript:Void(0);" class="rounded btn-md text-info bg-light-info px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-warning bg-light-warning px-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Resume"><i class="fa-solid fa-download"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>

										@endforeach --}}


										@foreach ($shortlistjobs as $key => $shortlist )
											
										<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">{{ $shortlist->users->name }}</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>{{ $shortlist->job_title }}</span>.<span><i class="fa-solid fa-location-dot me-1"></i>{{ $shortlist->location }}</span>
																	</div>
																</div>
																<div class="jbs-grid-job-edrs-group mt-1">

																@if($shortlist->users->profile)
															
																	@php


																		$kils=(implode(',', $shortlist->users->profile->skills));

																			
																		$sills= explode(",", $kils);
																		
																	@endphp

																	

																																												
																	
																	@foreach ($sills as  $skill )
																			<span>{{ $skill }}</span>
																		@endforeach  		
																	
																		
																@else
																	<p>Skils Not Added</p>
																@endif 
																		
																	<!-- <span>HTML</span>
																	<span>CSS3</span>
																	<span>Bootstrap</span>
																	<span>Redux</span> -->
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
														
														@if($shortlist->users->profile)
															<div class="elsocrio-jbs sm"><div class="ilop-tr"><i class="fa-solid fa-coins"></i></div><h5 class="jbs-list-pack">{{ $shortlist->users->profile->Total_experience	 }} Exp.</h5></div> 
														@else
															<p>Profile not created</p>
														@endif 

														</div>
														<div class="jbs-list-head-last">
															<div class="table-card">
																<a href="{{ route('showuserdetails', $shortlist->id) }}" class="rounded btn-md text-info bg-light-info px-3 me-2"><i class="fa-solid fa-eye"></i></a>
																<!-- <a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3 me-2"><i class="fa-solid fa-envelope-circle-check"></i></a> -->

																<form action="{{ route('cancelshortlist', $shortlist->id) }}" method="POST">
																	@csrf

																	<button  type="submit" class=" border-0 rounded btn-md text-danger bg-light-danger px-3 me-2"><i class="fa-solid fa-trash-can"></i></button>


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>

										@endforeach
											
										</div>
										<!-- End All Job List -->
										
									</div>
								</div>
							</div>	
						</div>
						<!-- Header Wrap -->
	
					</div>


                    
@endsection
				