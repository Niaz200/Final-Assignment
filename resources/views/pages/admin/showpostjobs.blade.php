@extends('layout.admin-master')

@section('page_title')
all job posts
@endsection

@section('content')




			<!-- ================================  Job Detail ========================== -->
			<section class="gray-simple py-5" >
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
							
							<div class="jbs-dts-block styl-02">
								<div class="jbs-head-block">
									<div class="jbs-head-tops bg-cover" style="background:url({{asset('fontend/assets/img/blog-4.jpg')}}) no-repeat;">
										<div class="ht-200"></div>
									</div>
									<div class="jbs-head-bodys">
										<div class="jbs-head-bodys-top">
											<div class="jbs-roots-y1">
												<div class="jbs-roots-y1-first"><div class="jbs-roots-thumb"><figure><img src="{{asset('fontend/assets/img/l-4.png')}}" class="img-fluid" alt=""></figure></div></div>
												<div class="jbs-roots-y1-last">
													<div class="jbs-urt"><span class="label text-success bg-light-success">{{$showjobs->job_type}}</span></div>
													<div class="jbs-title-iop"><h2 class="m-0"> {{$showjobs->job_title}}</h2></div>
													<div class="jbs-locat-oiu text-sm-muted"><span><i class="fa-solid fa-location-dot me-1"></i>{{$showjobs->location}}</span></div>
												</div>
											</div>
											<div class="jbs-roots-y2">
												<div class="jbs-roots-action-groups">

														<div class="jbs-roots-action-btns">
															<!-- <button type="button" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#applyjob">Quick Apply</button> -->
															
															<!-- <button type="button" class="btn btn-md btn-gray ms-2"><i class="fa-solid fa-heart me-2"></i>Approved</button> -->
															<form method="POST" action="{{ route('approvepostjob',$showjobs->id) }}" >
                                                       			 @csrf
                                                        
																<button type="submit" class="btn btn-md btn-gray ms-2"><i class="fa-solid fa-heart me-2"></i>@if($showjobs->status=='pending')Pending @else Approved @endif</button>
                                                    		</form>
															<!-- <a href="{{ route('approvepostjob', $showjobs->id) }}" class="btn btn-md btn-gray ms-2"> <i class="fa-solid fa-heart me-2"></i>@if($showjobs->status=='pending')Pending @else Approved @endif</a> -->
														</div>

											
													<div class="jbs-roots-action-info">
														<!-- <span class="text-sm-muted me-2">74 applicants</span>. -->
														<span class="text-sm fw-medium text-success ms-2">Posted {{ $showjobs->created_at->diffForHumans()}}</span>
													</div>
												</div>
											</div>
										</div>
										<div class="jbs-head-bodys-foot">
											<div class="jbs-info-detail-yelos">
												<div class="signle-jbs-info-yelos">
													<div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Job Type</span></div>
													<div class="signle-yelos-title"><h6 class="m-0 text-primary">{{$showjobs->job_type}}</h6></div>
												</div>
												<div class="signle-jbs-info-yelos">
													<div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Experience</span></div>
													<div class="signle-yelos-title"><h6 class="m-0 text-primary">{{$showjobs->experience}}</h6></div>
												</div>
												<div class="signle-jbs-info-yelos">
													<div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Sallary</span></div>
													<div class="signle-yelos-title"><h6 class="m-0 text-primary">Tk {{ $showjobs->min_salary}}-{{$showjobs->max_salary}}/month</h6></div>
												</div>
												<div class="signle-jbs-info-yelos">
													<div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Role</span></div>
													<div class="signle-yelos-title"><h6 class="m-0 text-primary">{{ ucwords($showjobs->job_level)}}</h6></div>
												</div>
											</div>
										</div>										
									</div>
								</div>
								
								<div class="jbs-dts-body">
									<div class="jbs-dts-body-content">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="job-description-tab" data-bs-toggle="tab" data-bs-target="#job-description-tab-pane" type="button" role="tab" aria-controls="job-description-tab-pane" aria-selected="true">Job Description</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="job-requirements-tab" data-bs-toggle="tab" data-bs-target="#job-requirements-tab-pane" type="button" role="tab" aria-controls="job-requirements-tab-pane" aria-selected="false">Job Requirements</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="company-review-tab" data-bs-toggle="tab" data-bs-target="#company-review-tab-pane" type="button" role="tab" aria-controls="company-review-tab-pane" aria-selected="false">Company Review</button>
											</li>
										</ul>
										<div class="tab-content py-4 px-5" id="myTabContent">
											<!-- Job Description -->
											<div class="tab-pane fade show active" id="job-description-tab-pane" role="tabpanel" aria-labelledby="job-description-tab" tabindex="0">
												<div class="row">
													<div class="col-xl-9 col-lg-10 col-md-12">
														<div class="jbs-content">
															<p>{{$showjobs->job_des}}</p>
															<!-- <p>Our company is seeking to hire a skilled Web Developer to help with the development of our current projects. Your duties will primarily revolve around building software by writing code, as well as modifying software to fix errors, adapt it to new hardware, improve its performance, or upgrade interfaces. You will also be involved in directing system testing and validation procedures, and also working with customers or departments on technical issues including software system design and maintenance.</p> -->
															<!-- <p class="m-0">We are looking for a Senior Web Developer to build and maintain functional web pages and applications. Senior Web Developer will be leading junior developers, refining website specifications, and resolving technical issues. He/She should have extensive experience building web pages from scratch and in-depth knowledge of at least one of the following programming languages: Javascript, Ruby, or PHP. He/She will ensure our web pages are up and running and cover both internal and customer needs.</p> -->
														</div>
													</div>
												</div>
											</div>
											
											<!-- Job Requirements -->
											<div class="tab-pane fade" id="job-requirements-tab-pane" role="tabpanel" aria-labelledby="job-requirements-tab" tabindex="0">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="jbs-content mb-4">
															<h6>Requirements:</h6>
															<ul class="simple-list">

													{{--		@php
																$data = $showjobs->requiremment;
																$requires= explode(',', $data);  
																
															@endphp

															--}}

															@php
																$data = $showjobs->requiremment;
																$requires = explode("\n",str_replace("\r\n","\n",$data));

															@endphp
															
															@foreach ($requires as  $require )
																<li>{{$require}}</li>
															@endforeach	

															
																
																<!-- <li>Candidate must have a good working knowledge of Javascript and Jquery.</li>
																<li>Good knowledge of HTML and CSS is required.</li>
																<li>Experience in Word press is an advantage</li>
																<li>Jamshedpur, Jharkhand: Reliably commute or planning to relocate before starting work (Required)</li> -->
															</ul>
														</div>
														
														<div class="jbs-content mb-4">
															<h6>Responsibilities:</h6>
															<ul class="simple-list">

															@php
																$abs = $showjobs->responsibilities;
																$respons= explode("\n", $abs);
															@endphp
															
															@foreach ($respons as  $respon )
																<li>{{$respon}}</li>
															@endforeach	
															
															

																<!-- <li>Write clean, maintainable and efficient code.</li>
																<li>Design robust, scalable and secure features.</li>
																<li>Collaborate with team members to develop and ship web applications within tight timeframes.</li>
																<li>Work on bug fixing, identifying performance issues and improving application performance</li>
																<li>Write unit and functional testcases.</li>
																<li>Continuously discover, evaluate, and implement new technologies to maximise development efficiency. Handling complex technical iss</li> -->
															</ul>
														</div>
														
														<div class="jbs-content">
															<h6>Qualifications and Skills</h6>
															<ul class="colored-list">

															@php

															$kils=(implode(',', $showjobs->skills));
																
																$sills= explode(",", $kils);
															@endphp

															@foreach ($sills as  $skill )
																<li>{{$skill}}</li>
															@endforeach
																<!-- <li>Bachelor's degree</li>
																<li>BCA/MCA</li>
																<li>BSC IT/Msc IT</li>
																<li>Or any other equivalent degree</li> -->
															</ul>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Company Review -->
											<div class="tab-pane fade" id="company-review-tab-pane" role="tabpanel" aria-labelledby="company-review-tab" tabindex="0">
												<div class="row">
													<div class="col-xl-9 col-lg-12 col-md-12">
														
														<div class="single-cdtsr-block pt-4 pb-2">
															<div class="single-cdtsr-body">
																<div class="row align-items-center justify-content-between gy-4">
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>themezhub@gmail.com</h5>
																				<p>Mail Address</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-solid fa-phone-volume"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>855 606 8472</h5>
																				<p>Phone No.</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-regular fa-user"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>Employees</h5>
																				<p>500-1000</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-solid fa-cake-candles"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>07 Apr 1992</h5>
																				<p>Build</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-solid fa-wallet"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>$750/month</h5>
																				<p>Offerd Sallary</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-solid fa-briefcase"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>Software</h5>
																				<p>Company Type</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-solid fa-user-graduate"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>Master Degree</h5>
																				<p>Qualification</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<div class="cdtx-infr-box">
																			<div class="cdtx-infr-icon"><i class="fa-solid fa-layer-group"></i></div>
																			<div class="cdtx-infr-captions">
																				<h5>Fulltime, Remote, Freelance</h5>
																				<p>Work Type</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- =============================== Job Detail ================================== -->

			


@endsection