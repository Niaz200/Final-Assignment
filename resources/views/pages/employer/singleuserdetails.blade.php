@extends('layout.admin-master')

@section('page_title')
all job posts
@endsection

@section('content')




<!-- <div class="clearfix"></div> -->
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Header Information Start================================== -->
			
			<section class="gray-simple">
				@if($userdetails->users->profile)
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="cndt-head-block">
									
									<div class="cndt-head-left">
										<div class="cndt-head-thumb">
											<figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></figure>
										</div>
										<div class="cndt-head-caption">
											<div class="cndt-head-caption-top">
												<div class="cndt-yior-1"><span class="label text-sm-muted text-success bg-light-success">Featured</span></div>
												<div class="cndt-yior-2"><h4 class="cndt-title">{{ $userdetails->users->profile->full_name }}</h4></div>
												<div class="cndt-yior-3">
													<span><i class="fa-solid fa-user-graduate me-1"></i>{{ $userdetails->users->profile->job_title }}</span>
													<span><i class="fa-solid fa-location-dot me-1"></i>{{ $userdetails->users->profile->city }},{{ $userdetails->users->profile->country }}</span>
													<!-- <span><i class="fa-solid fa-sack-dollar me-1"></i>$2500/PA{{ $userdetails->users->profile->full_name }}</span> -->
													<span><i class="fa-solid fa-cake-candles me-1"></i>Age:{{ $userdetails->users->profile->age  }}</span>
												</div>
											</div>
											<div class="cndt-head-caption-bottom">
												<div class="cndt-yior-skills">
													@php

														$kils=(implode(',', $userdetails->users->profile->skills));
														
														$sills= explode(",", $kils);
													@endphp


																										
													@foreach ($sills as  $skill )
														<span>{{ $skill }}</span>
													@endforeach

													<!-- <span>Design</span>
													<span>Python</span>
													<span>Java</span>
													<span>PHP</span>
													<span>WordPress</span> -->
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="cndt-head-right">
										<button type="button" class="btn btn-primary">Download CV<i class="fa-solid fa-download ms-2"></i></button>
										<button type="button" class="btn btn-outline-primary ms-2"><i class="fa-solid fa-bookmark"></i></button>
									</div> -->
								
								</div>
							</div>
						</div>
					</div>

				@else

				<p>Profile Not Created</p>
				@endif 	
				
			</section>
			<!-- ============================ Header Information End ================================== -->
			
			<!-- ============================ Full Candidate Details Start ================================== -->

			<section>
				@if($userdetails->users->profile)
					<div class="container">
						<!-- row Start -->
						<div class="row">

							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="cdtsr-groups-block">
									
									<div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>About Candidate</h5></div>
										<div class="single-cdtsr-body">
											<p>{{ $userdetails->users->profile->info  }}.<p>
											
											<!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
											
										</div>
										
															
														
									</div>
									
									<div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>All Information</h5></div>
										<div class="single-cdtsr-body">
											<div class="row align-items-center justify-content-between gy-4">
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
														<div class="cdtx-infr-captions">
															<h5>{{ $userdetails->users->email  }}</h5>
															<p>Mail Address</p>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-solid fa-phone-volume"></i></div>
														<div class="cdtx-infr-captions">
															<h5>+88{{ $userdetails->users->profile->mobile  }}</h5>
															<p>Phone No.</p>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-regular fa-user"></i></div>
														<div class="cdtx-infr-captions">
															<h5>{{ $userdetails->users->profile->gender  }}</h5>
															<p>Gender</p>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-solid fa-cake-candles"></i></div>
														<div class="cdtx-infr-captions">
															<h5>{{ $userdetails->users->profile->age  }}</h5>
															<p>Age</p>
														</div>
													</div>
												</div>
												<!-- <div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-solid fa-wallet"></i></div>
														<div class="cdtx-infr-captions">
															<h5>$750/month</h5>
															<p>Offerd Sallary</p>
														</div>
													</div>
												</div> -->
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-solid fa-briefcase"></i></div>
														<div class="cdtx-infr-captions">
															<h5>{{ $userdetails->users->profile->Total_experience  }}</h5>
															<p>Experience</p>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-solid fa-user-graduate"></i></div>
														<div class="cdtx-infr-captions">
															<h5>{{ $userdetails->users->profile->education  }}</h5>
															<p>Qualification</p>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="cdtx-infr-box">
														<div class="cdtx-infr-icon"><i class="fa-solid fa-layer-group"></i></div>

														@php

															$works=(implode(',', $userdetails->users->profile->work_type));

															
														@endphp



															<div class="cdtx-infr-captions">
																<h5>{{$works}}</h5>
																<p>Work Type</p>
															</div>

													
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- <div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>Resumes</h5></div>
										<div class="single-cdtsr-body">
											<div class="resumes-groups-blox">
												
												<div class="single-resumes-blocks">
													<div class="single-resumes-left">
														<div class="single-resumes-icons"><i class="fa-solid fa-file-word"></i></div>
														<div class="single-resumes-captions"><h5>Daniel-Resume.doc-2022<span>1 Year ago</span></h5></div>
													</div>
													<div class="single-resumes-right">
														<button type="button" class="btn btn-md btn-light-success">Download<i class="fa-solid fa-circle-down ms-1"></i></button>
													</div>
												</div>
												
												<div class="single-resumes-blocks">
													<div class="single-resumes-left">
														<div class="single-resumes-icons"><i class="fa-solid fa-file-word"></i></div>
														<div class="single-resumes-captions"><h5>Daniel-Resume.doc-2023<span>10 Days ago</span></h5></div>
													</div>
													<div class="single-resumes-right">
														<button type="button" class="btn btn-md btn-light-success">Download<i class="fa-solid fa-circle-down ms-1"></i></button>
													</div>
												</div>
												
											</div>
										</div>
									</div> -->
									
									<!-- <div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>All Experience</h5></div>
										<div class="single-cdtsr-body">
											<div class="experinc-usr-groups">
											
												<div class="single-experinc-block">
													<div class="single-experinc-lft">
														<div class="experinc-thumbs"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></div>
													</div>
													<div class="single-experinc-rght">
														<div class="experinc-emp-title"><h5>Linked In</h5><span class="label text-success bg-light-success">Full Time</span></div>
														<div class="experinc-post-title">
															<h6>Sr. Web Designer</h6>
															<div class="experinc-infos-list"><span class="exp-start">5 Years 1 Month</span><span class="work-exp-date">May 2010 - Jun 2015</span></div>
														</div>
													</div>
												</div>
												
												<div class="single-experinc-block">
													<div class="single-experinc-lft">
														<div class="experinc-thumbs"><figure><img src="assets/img/l-2.png" class="img-fluid" alt=""></figure></div>
													</div>
													<div class="single-experinc-rght">
														<div class="experinc-emp-title"><h5>Dribbble Ltd.</h5><span class="label text-warning bg-light-warning">Part Time</span></div>
														<div class="experinc-post-title">
															<h6>Sr. Product Designer</h6>
															<div class="experinc-infos-list"><span class="exp-start">2 Years 3 Month</span><span class="work-exp-date">Aug 2015 - Jan 2017</span></div>
														</div>
													</div>
												</div>
												<div class="single-experinc-block">
													<div class="single-experinc-lft">
														<div class="experinc-thumbs"><figure><img src="assets/img/l-3.png" class="img-fluid" alt=""></figure></div>
													</div>
													<div class="single-experinc-rght">
														<div class="experinc-emp-title"><h5>Google Inc.</h5><span class="label text-success bg-light-success">Full Time</span></div>
														<div class="experinc-post-title">
															<h6>Sr. Team Leader</h6>
															<div class="experinc-infos-list"><span class="exp-start">4 Years 7 Month</span>.<span class="work-exp-date">Feb 2017 - Dec 2022</span></div>
														</div>
													</div>
												</div>
											
											</div>
										</div>
									</div> -->
									
									<!-- <div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>Educations</h5></div>
										<div class="single-cdtsr-body">
											<div class="educations-usr-groups">
											
												<div class="single-educations-block">
													<div class="single-educations-lft">
														<div class="educations-thumbs"><figure><img src="assets/img/l-4.png" class="img-fluid" alt=""></figure></div>
													</div>
													<div class="single-educations-rght">
														<div class="educations-emp-title"><h5>Swami Vivekanand University</h5></div>
														<div class="educations-post-title">
															<h6>Bachlor Degree in Computer Science</h6>
														</div>
														<div class="educations-infos-list"><span class="exp-start">Jun 2008</span><span class="work-exp-date">Meeruth, UP</span></div>
													</div>
												</div>
												
												<div class="single-educations-block">
													<div class="single-educations-lft">
														<div class="educations-thumbs"><figure><img src="assets/img/l-5.png" class="img-fluid" alt=""></figure></div>
													</div>
													<div class="single-educations-rght">
														<div class="educations-emp-title"><h5>Shatrapati Shiva Ji Maharaja University</h5></div>
														<div class="educations-post-title">
															<h6>Master Degree in Computer Science</h6>
														</div>
														<div class="educations-infos-list"><span class="exp-start">Jun 2013</span><span class="work-exp-date">Faizabad, UP</span></div>
													</div>
												</div>
											
											</div>
										</div>
									</div> -->
									
									<div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>Candidate Skills</h5></div>
										<div class="single-cdtsr-body">
											<div class="cndts-all-skills-list">

												@php

													$kils=(implode(',', $userdetails->users->profile->skills));

													$sills= explode(",", $kils);
												@endphp


																								
												@foreach ($sills as  $skill )
												<span>{{ $skill }}</span>
												@endforeach

												<!-- <span>Java</span>
												<span>Python</span>
												<span>Bootstrap</span>
												<span>HTML5</span>
												<span>UI/UX</span>
												<span>Laravel</span>
												<span>WordPress</span> -->
											</div>
										</div>
									</div>
									
									<!-- <div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>Portfolio</h5></div>
										<div class="single-cdtsr-body">
											<div class="row gx-3 gy-3">
											
												<div class="col-xl-4 col-lg-4 col-md-6 col-6">
													<div class="cndts-prt-block">
														<div class="cndts-prt-thumb">
															<img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="">
														</div>
														<div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
													</div>
												</div>
												
												<div class="col-xl-4 col-lg-4 col-md-6 col-6">
													<div class="cndts-prt-block">
														<div class="cndts-prt-thumb">
															<img src="assets/img/blog-2.jpg" class="img-fluid rounded" alt="">
														</div>
														<div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
													</div>
												</div>
												
												<div class="col-xl-4 col-lg-4 col-md-6 col-6">
													<div class="cndts-prt-block">
														<div class="cndts-prt-thumb">
															<img src="assets/img/blog-3.jpg" class="img-fluid rounded" alt="">
														</div>
														<div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
													</div>
												</div>
											
											</div>
										</div>
									</div> -->
									
									<div class="single-cdtsr-block">
										<div class="single-cdtsr-header"><h5>Language</h5></div>
										<div class="single-cdtsr-body">
											<div class="row gy-4">


												@php

												$languages=(implode(',', $userdetails->users->profile->language));

												$language= explode(",", $languages);
												@endphp


																							
												@foreach ($language as  $langu )
										
												

											
													<div class="col-xl-4 col-lg-4 col-md-6 col-6">
														<div class="cndts-lgs-blocks">
															<div class="cndts-lgs-ico"><h6>JP</h6></div>
															<div class="cndts-lgs-captions">
																<h5>{{ $langu }}</h5>
																<!-- <p>Basic</p> -->
															</div>
														</div>
													</div>


												@endforeach
												
												<!-- <div class="col-xl-4 col-lg-4 col-md-6 col-6">
													<div class="cndts-lgs-blocks">
														<div class="cndts-lgs-ico"><h6>EN</h6></div>
														<div class="cndts-lgs-captions">
															<h5>English</h5>
															<p>Advance</p>
														</div>
													</div>
												</div> -->
												
												<!-- <div class="col-xl-4 col-lg-4 col-md-6 col-6">
													<div class="cndts-lgs-blocks">
														<div class="cndts-lgs-ico"><h6>FR</h6></div>
														<div class="cndts-lgs-captions">
															<h5>French</h5>
															<p>Medium</p>
														</div>
													</div>
												</div> -->
											
											</div>
										</div>
									</div>
									

								
								</div>
							</div>
							
							<div class="col-xl-4 col-lg-4 col-md-12">
								<!-- <div class="sidefr-usr-block mb-4">
									<div class="sidefr-usr-header">
										<h4 class="sidefr-usr-title">Contact Dhananjay Preet</h4>
									</div>
									<div class="sidefr-usr-body">
										<form>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Email Address">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Phone.">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Subject">
											</div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Your Message"></textarea>
											</div>
											<div class="form-group m-0">
												<button type="button" class="btn btn-primary fw-medium full-width">Send Message</button>
											</div>
										</form>
									</div>
								</div> -->
								
								<div class="sidefr-usr-block">
									<div class="cndts-share-block">
										<div class="cndts-share-title">
											<h5>Share Profile</h5>
										</div>
										<div class="cndts-share-list">
											<ul>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus-g"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
						<!-- /row -->					
					</div>	

				@else

					<p>Profile Not Created</p>
				@endif 
			</section>
			<!-- ============================ Full Candidate Details End ================================== -->						
			
			

			


@endsection