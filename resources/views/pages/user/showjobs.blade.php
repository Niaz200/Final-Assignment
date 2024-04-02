@extends('layout.admin-master')

@section('page_title')
all job posts
@endsection

@section('content')


<!-- ============================ Header Top Start================================== -->
<section class="bg-cover bg-dark position-relative py-4">
				<div class="position-absolute end-0 top-0 bottom-0 d-lg-block d-none"><img src="assets/img/banner-1.jpg" class="img-fluid rounded-start-pill h-100" alt=""></div>
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-9 col-md-12">
							<div class="bread-wraps breadcrumbs light">
								
							</div>
							
							<div class="jbs-head-bodys-top my-5">
								<div class="jbs-roots-y1 flex-column justify-content-start align-items-start">
									<div class="jbs-roots-y1-last">
										<div class="jbs-urt mb-2"><span class="label text-light primary-2-bg">{{$showjobs->job_type}}</span></div>
										<div class="jbs-title-iop mb-1"><h2 class="m-0 fs-2 text-light">{{$showjobs->job_title}}</h2></div>
										<div class="jbs-locat-oiu text-sm-muted text-light d-flex align-items-center">
											<span><i class="fa-solid fa-location-dot opacity-75 me-1"></i>{{$showjobs->location}}</span>
											<div class="jbs-kioyer-groups ms-3">
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star"></span>
												<!-- <span class="aal-reveis text-light opacity-75">4.6</span> -->
											</div>
										</div>
									</div>
									<div class="jbs-roots-y6 py-3">
										<p class="text-light">We are looking for a experienced Senior Front-End Developer with an advanced level of english to design UI/UX interface for web and mobile apps.</p>
									</div>
									<div class="jbs-roots-y6 py-3">
										<button class="btn btn-primary fw-medium px-lg-5 px-4 me-3" type="button" data-bs-toggle="modal" data-bs-target="#applyjob">{{$showjobs->status}}</button>
										<!-- <button class="btn btn-whites fw-medium px-lg-5 px-4" type="button">Save job</button> -->
									</div>
								</div>
							</div>
							
							<div class="explot-info-details d-inline-flex flex-wrap">
								<div class="single-explot d-flex align-items-center me-md-5 me-3 my-2">
									<div class="single-explot-first">
										<i class="fa-solid fa-business-time text-primary fs-1"></i>
									</div>
									<div class="single-explot-last ps-2">
										<span class="text-light opacity-75">Department</span>
										<p class="text-light fw-bold fs-6 m-0">Software</p>
									</div>
								</div>
								<div class="single-explot d-flex align-items-center me-md-5 me-3 my-2">
									<div class="single-explot-first">
										<i class="fa-solid fa-location-dot text-primary fs-1"></i>
									</div>
									<div class="single-explot-last ps-2">
										<span class="text-light opacity-75">Location</span>
										<p class="text-light fw-bold fs-6 m-0">{{$showjobs->location}}</p>
									</div>
								</div>
								<div class="single-explot d-flex align-items-center">
									<div class="single-explot-first">
										<i class="fa-solid fa-sack-dollar text-primary fs-1"></i>
									</div>
									<div class="single-explot-last ps-2">
										<span class="text-light opacity-75">Sallary</span>
										<p class="text-light fw-bold fs-6 m-0">{{$showjobs->postjobs->min_salary}}-{{$showjobs->postjobs->max_salary}} Tk</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Header Top End ================================== -->
			
			<!-- ================================  Job Detail ========================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							
							<div class="jbs-blocs style_03 b-0 mb-md-4 mb-sm-4">
								<div class="jbs-blocs-body px-4 py-4">
									<div class="jbs-content mb-4">
										<h5>Job Description</h5>
										<p>{{$showjobs->postjobs->job_des}}.</p>
										<!-- <p>Our company is seeking to hire a skilled Web Developer to help with the development of our current projects. Your duties will primarily revolve around building software by writing code, as well as modifying software to fix errors, adapt it to new hardware, improve its performance, or upgrade interfaces. You will also be involved in directing system testing and validation procedures, and also working with customers or departments on technical issues including software system design and maintenance.</p>
										<p class="m-0">We are looking for a Senior Web Developer to build and maintain functional web pages and applications. Senior Web Developer will be leading junior developers, refining website specifications, and resolving technical issues. He/She should have extensive experience building web pages from scratch and in-depth knowledge of at least one of the following programming languages: Javascript, Ruby, or PHP. He/She will ensure our web pages are up and running and cover both internal and customer needs.</p> -->
									</div>
									<div class="jbs-content-body mb-4">
										<h5 class="mb-3">Job Requirements</h5>
										<div class="jbs-content mb-3">
											<h6>Requirements:</h6>
											<ul class="simple-list">


													@php
														$data = $showjobs->postjobs->requiremment;
														$requires = explode("\n",str_replace("\r\n","\n",$data));

													@endphp
													
													@foreach ($requires as  $require )
														<li>{{$require}}</li>
													@endforeach	

												<!-- <li>Candidate must have a Bachelors or Masters degree in Computer. (B.tech, Bsc or BCA/MCA)</li>
												<li>Candidate must have a good working knowledge of Javascript and Jquery.</li>
												<li>Good knowledge of HTML and CSS is required.</li>
												<li>Experience in Word press is an advantage</li>
												<li>Jamshedpur, Jharkhand: Reliably commute or planning to relocate before starting work (Required)</li> -->
											</ul>
										</div>
										
										<div class="jbs-content mb-4">
											<h6>Responsibilities:</h6>
											<ul class="simple-list">

													@php
														$reqrs = $showjobs->postjobs->responsibilities;
														$respons= explode("\n", $reqrs);
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

											$kils=(implode(',', $showjobs->postjobs->skills));
												
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
								<div class="jbs-blox-footer">
									<div class="blox-first-footer">
										<div class="ftr-share-block">
											<ul>
												<li><strong>Share This Job:</strong></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
											</ul>
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