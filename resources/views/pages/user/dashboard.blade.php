@extends('layout.admin-master')

@section('page_title')
Dashboard
@endsection

@section('content')


<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Candidate Dashboard</h1>
								
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						<!-- Row Start -->
						<div class="row align-items-center gx-4 gy-4 mb-4">
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-success bg-light-success">
											<i class="fa-solid fa-business-time"></i>	
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">{{$Totalapplied}}</h5>
											<p>Applied jobs</p>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-warning bg-light-warning">
											<i class="fa-solid fa-bookmark"></i>	
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">523</h5>
											<p>Saved Jobs</p>
										</div>
									</div>
								</div>
							</div> -->
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-danger bg-light-danger">
											<i class="fa-solid fa-eye"></i>
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">{{$Totalapproved}}</h5>
											<!-- <p>Viewed Jobs</p> -->
											<p>Approved Jobs</p>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-info bg-light-info">
											<i class="fa-sharp fa-solid fa-comments"></i>
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">523</h5>
											<p>Total Review</p>
										</div>
									</div>
								</div>
							</div> -->
						</div>
						<!-- Row End -->
						
					
						
						<!-- Row Start -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="mb-0">Shortlisted Jobs</h4>
									</div>

                                    @if(session()->has('message'))
										<div class="alert alert-success">
											{{ session()->get('message')}}

										</div>

									@endif	


									<div class="card-body px-4 py-4">
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
									

                                        @foreach ($postjobs as $key => $postjob )



											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-types-wrap"><span class="label text-success bg-light-success">{{ $postjob->job_type }}</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">{{ $postjob->job_title }}</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>{{ $postjob->company_name }}</span>.<span><i class="fa-solid fa-location-dot me-1"></i>{{ $postjob->location }}</span>.<span>{{$postjob->created_at->format('d M Y')}}</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs"><div class="ilop-tr"><i class="fa-solid fa-sack-dollar"></i></div><h5 class="jbs-list-pack">{{ $postjob->min_salary }}tk - {{ $postjob->max_salary }}tk</h5></div>
														</div>
														<div class="table-card">
															<a href="{{ route('showsinglejobs', $postjob->id) }}" class="btn btn-md btn-outline-secondary px-3 me-2">View Detail</a>

                                                            
					
                                                            <form action="{{ route('stoteapply') }}" method="POST">

                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $postjob->id }}">
                                                                <input type="hidden" name="employer_id" value="{{ $postjob->user_id }}">
                                                                <input type="hidden" name="job_title" value="{{ $postjob->job_title}}">
                                                                <input type="hidden" name="job_type" value="{{ $postjob->job_type }}">
                                                                <input type="hidden" name="location" value="{{ $postjob->location }}">
                                                                <input type="hidden" name="compa_name" value="{{ $postjob->company_name }}">

                                                                <div class="jbs-list-head-last">
                                                                    <button href="JavaScript:Void(0);" type="submit" class="btn btn-md btn-primary px-3 ">Quick Apply</button>

                                                                </div>


                                                                </form>

                                                              
															<!-- <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-3">Quick Apply</a> -->
														</div>
													</div>
												</div>
											</div>
											
											
									
									
										@endforeach
									
											
											
											
									
										
											
										
											
											<!-- Single Item -->
											<!-- <div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-10.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-types-wrap"><span class="label text-success bg-light-success">Full Time</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Technical Content Writer</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Skype</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Canada, USA</span>.<span>10 March 2022</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs"><div class="ilop-tr"><i class="fa-solid fa-sack-dollar"></i></div><h5 class="jbs-list-pack">$80K - 100K<span class="patype">\PA</span></h5></div>
														</div>
														<div class="jbs-list-head-last">
															<a href="job-detail.html" class="btn btn-md btn-outline-secondary px-3 me-2">View Detail</a>
															<a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-3">Quick Apply</a>
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
						<!-- Row End -->
	
					</div>

@endsection