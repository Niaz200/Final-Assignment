@extends('layout.fontend-master')

@section('page_title')
show single jobs
@endsection

@section('content')

<section class="py-5" ></section>


    <!-- ============================ Header Information Start================================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="emplr-head-block">
								
								<div class="emplr-head-left">
									<div class="emplr-head-thumb">
										<figure><img src="assets/img/l-1.png" class="img-fluid rounded" alt=""></figure>
									</div>

										@php
                                            $totaljobs = App\Models\Postjobs::where('user_id', $emplodetails->id)->count();
                                        @endphp

									<div class="emplr-head-caption">
										<div class="emplr-head-caption-top">
											<div class="emplr-yior-1"><span class="label text-sm-muted text-success bg-light-success">{{$totaljobs}} Openings</span></div>
											<div class="emplr-yior-2"><h4 class="emplr-title">{{$emplodetails->profile->full_name}}</h4></div>
											<div class="emplr-yior-3">
												<span><i class="fa-solid fa-building-shield me-1"></i>{{$emplodetails->profile->job_title}}</span>
												<span><i class="fa-solid fa-location-dot me-1"></i>{{$emplodetails->profile->city}}, {{$emplodetails->profile->country}}</span>
												<span class="text-light opacity-75"><i class="fa-solid fa-star me-1"></i>4.2 (412 Reviews)</span>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="emplr-head-right">
									<button type="button" class="btn btn-primary">Follow Now</button>
									<button type="button" class="btn btn-outline-primary ms-2" data-bs-toggle="modal" data-bs-target="#review"><i class="fa-solid fa-star me-2"></i>Write Review</button>
								</div> -->
							
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Header Information End ================================== -->
			
			<!-- ============================ Full Candidate Details Start ================================== -->
			<section>
				<div class="container">
					<!-- row Start -->
					<div class="row">

						<div class="col-xl-8 col-lg-8 col-md-12">
							<div class="cdtsr-groups-block">
								
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>About Company</h5></div>
									<div class="single-cdtsr-body">
										<p>{{$emplodetails->profile->info}}<p>
										<!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
									</div>
								</div>
								
								<!-- <div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Our Award</h5></div>
									<div class="single-cdtsr-body">
										<div class="row gx-3 gy-4">
										
											<div class="col-xl-3 col-lg-3 col-md-3">
												<div class="escort-award-wrap">
													<div class="escort-award-thumb">
														<figure><img src="assets/img/award-1.png" class="img-fluid" alt=""></figure>
													</div>
													<div class="escort-award-caption">
														<h6>FIFFA Award</h6>
														<label>May 2014</label>
													</div>
												</div>
											</div>
											
											<div class="col-xl-3 col-lg-3 col-md-3">
												<div class="escort-award-wrap">
													<div class="escort-award-thumb">
														<figure><img src="assets/img/award-2.png" class="img-fluid" alt=""></figure>
													</div>
													<div class="escort-award-caption">
														<h6>COMPRA Award</h6>
														<label>Dec 2017</label>
													</div>
												</div>
											</div>
											
											<div class="col-xl-3 col-lg-3 col-md-3">
												<div class="escort-award-wrap">
													<div class="escort-award-thumb">
														<figure><img src="assets/img/award-4.png" class="img-fluid" alt=""></figure>
													</div>
													<div class="escort-award-caption">
														<h6>ICCPR Award</h6>
														<label>Apr 2022</label>
													</div>
												</div>
											</div>
											
											<div class="col-xl-3 col-lg-3 col-md-3">
												<div class="escort-award-wrap">
													<div class="escort-award-thumb">
														<figure><img src="assets/img/award-3.png" class="img-fluid" alt=""></figure>
													</div>
													<div class="escort-award-caption">
														<h6>XICAGO Award</h6>
														<label>Jull 2022</label>
													</div>
												</div>
											</div>
										
										</div>
									</div>
								</div> -->
								
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Company Services</h5></div>
									<div class="single-cdtsr-body">
										<div class="cndts-all-skills-list">

										@php

											$kils=(implode(',', $emplodetails->profile->skills));

											$sills= explode(",", $kils);
										@endphp


																						
											@foreach ($sills as  $skill )
											<span>{{ $skill }}</span>
											@endforeach
										
										

											<!-- <span>Java Developements</span>
											<span>HTML To WordPress</span>
											<span>PHP Developements</span>
											<span>UI/UX Design</span>
											<span>Laravel</span>
											<span>Magento 2.0</span> -->
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
								
								
								
								<!-- Company Review -->
								
							
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-12">

							<div class="eflorio-wrap-block mb-4">
								<div class="eflorio-wrap-group">
									<div class="eflorio-wrap-body">
										<div class="eflorio-list-groups">
										
											<div class="single-eflorio-list">
												<div class="eflorio-list-icons"><i class="fa-solid fa-envelope-circle-check text-primary"></i></div>
												<div class="eflorio-list-captions">
													<label>Email Address</label>
													<h6>{{$emplodetails->email}}</h6>
												</div>
											</div>
											
											<div class="single-eflorio-list">
												<div class="eflorio-list-icons"><i class="fa-solid fa-phone-volume text-primary"></i></div>
												<div class="eflorio-list-captions">
													<label>Contact No.</label>
													<h6>{{$emplodetails->profile->mobile}}</h6>
												</div>
											</div>
											
											<!-- <div class="single-eflorio-list">
												<div class="eflorio-list-icons"><i class="fa-solid fa-layer-group text-primary"></i></div>
												<div class="eflorio-list-captions">
													<label>Category</label>
													<h6>Applications</h6>
												</div>
											</div> -->
											
											<!-- <div class="single-eflorio-list">
												<div class="eflorio-list-icons"><i class="fa-solid fa-user-group text-primary"></i></div>
												<div class="eflorio-list-captions">
													<label>Company Size</label>
													<h6>1000-1500</h6>
												</div>
											</div> -->
											
											<div class="single-eflorio-list">
												<div class="eflorio-list-icons"><i class="fa-solid fa-map-location-dot text-primary"></i></div>
												<div class="eflorio-list-captions">
													<label>Location</label>
													<h6>{{$emplodetails->profile->city}}, {{$emplodetails->profile->country}}</h6>
												</div>
											</div>
											
											<div class="single-eflorio-list">
												<div class="eflorio-list-icons"><i class="fa-solid fa-building-circle-check text-primary"></i></div>
												<div class="eflorio-list-captions">
													<label>Established</label>
													<h6>{{ date('Y', strtotime($emplodetails->profile->birthday))}}</h6>
												</div>
											</div>
										
										</div>
									</div>
									<div class="eflorio-wrap-footer">
										<div class="eflorio-footer-body">
											<button  href="{{$emplodetails->profile->website}}" type="button" class="btn btn-primary fw-medium full-width">View Website</button>
										</div>
									</div>
								</div>
							</div>
							
							<!-- <div class="sidefr-usr-block">
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
							</div> -->
							
						</div>
						
					</div>
					<!-- /row -->					
				</div>	
			</section>
			<!-- ============================ Full Candidate Details End ================================== -->						
			


@endsection