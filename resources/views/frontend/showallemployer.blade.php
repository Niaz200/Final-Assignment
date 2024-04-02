@extends('layout.fontend-master')

@section('page_title')
all jobs
@endsection

@section('content')

<section class="py-5" ></section>

			<!-- ============================ Page Title Start================================== -->
			<div class="page-title primary-bg-dark" style="background:url(assets/img/bg2.png) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title  text-center">Employer List </h2>
							<div class="breadcrumbs light">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ All List Wrap ================================== -->
			<section>
				<div class="container">
					<div class="row">
					
						
						
						<!-- Job List Wrap -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Shorting Box -->
							<div class="row justify-content-center mb-4">
								<div class="col-lg-12 col-md-12">
									<div class="item-shorting-box">
										<div class="item-shorting clearfix">
											<div class="left-column"><h4 class="m-0">Showing 1 - 10 of 20 Results</h4></div>
										</div>
										<div class="item-shorting-box-right">
											<div class="shorting-by me-2 small">
												<select>
													<option value="0">Short by (Default)</option>
													<option value="1">Short by (Featured)</option>
													<option value="2">Short by (Urgent)</option>
													<option value="3">Short by (Post Date)</option>
												</select>
											</div>
											<div class="shorting-by small">
												<select>
													<option value="0">10 Per Page</option>
													<option value="1">20 Per Page</option>
													<option value="2">50 Per Page</option>
													<option value="3">10 Per Page</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Shorting Wrap End -->
							
							<!-- Start All List -->
							<div class="row justify-content-start gx-3 gy-4">

                                @foreach ($allemploys as $key => $allemploy )

                               
                              
                                @if($allemploy->profile)
						
                                        <!-- Single Item -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                            <div class="emplors-list-box border">
                                                <div class="emplors-list-head mb-0">
                                                    <div class="emplors-list-head-thunner">
                                                        <div class="emplors-list-emp-thumb"><a href="employer-detail.html"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></a></div>
                                                        <div class="emplors-list-job-caption">

                                                            @php
                                                            $totaljobs = App\Models\Postjobs::where('user_id', $allemploy->id)->count();
                                                            @endphp

                                                            <div class="emplors-job-types-wrap mb-1"><span class="label text-light bg-success">0{{$totaljobs}} Openings </span></div>

                                                      
                                                                <div class="emplors-job-title-wrap mb-1"><h4><a href="employer-detail.html" class="emplors-job-title">{{$allemploy->profile->full_name}}</a></h4></div>

                                                            <div class="emplors-job-mrch-lists">
                                                                <div class="single-mrch-lists">
                                                                    <!-- <span>Software & Consultancy</span>.<span><i class="fa-solid fa-location-dot me-1"></i>London, UK</span>.<span>Est: 1992</span> -->
                                                                    <span>Software & Consultancy</span>.<span><i class="fa-solid fa-location-dot me-1"></i>{{$allemploy->profile->city}}</span>.<span>Est: {{ date('Y', strtotime($allemploy->profile->birthday))}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emplors-list-head-last">
                                                        <a href="{{ route('employer-details', $allemploy->id) }}" class="btn btn-md btn-light-primary px-3">View Company</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                   
								
                                    @else
                                                           
                                        <h5>Profile not created</h5>
                                                           
                                                              
                                    @endif
								
                                @endforeach
								
								
								<!-- Single Item -->
								<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-12">
									<div class="emplors-list-box border">
										<div class="emplors-list-head mb-0">
											<div class="emplors-list-head-thunner">
												<div class="emplors-list-emp-thumb"><a href="employer-detail.html"><figure><img src="assets/img/l-10.png" class="img-fluid" alt=""></figure></a></div>
												<div class="emplors-list-job-caption">
													<div class="emplors-job-types-wrap mb-1"><span class="label text-light bg-success">07 Openings</span></div>
													<div class="emplors-job-title-wrap mb-1"><h4><a href="employer-detail.html" class="emplors-job-title">Skype - California</a></h4></div>
													<div class="emplors-job-mrch-lists">
														<div class="single-mrch-lists">
															<span>Chat & Calling App</span>.<span><i class="fa-solid fa-location-dot me-1"></i>London, UK</span>.<span>Est: 1985</span>
														</div>
													</div>
												</div>
											</div>
											<div class="emplors-list-head-last">
												<a href="employer-detail.html" class="btn btn-md btn-light-primary px-3">View Company</a>
											</div>
										</div>
									</div>
								</div> -->
								
							</div>
							<!-- End All Job List -->
							
							<!-- Pagination -->
							<!-- <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<nav aria-label="Page navigation example">
										  <ul class="pagination">
											<li class="page-item">
											  <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											  </a>
											</li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
											<li class="page-item active"><a class="page-link" href="JavaScript:Void(0);">3</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
											<li class="page-item">
											  <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											  </a>
											</li>
										  </ul>
									</nav>
								</div>
							</div> -->
					
						</div>
						<!-- Job List Wrap End-->
						
					</div>
				</div>		
			</section>
			<!-- ============================ All List Wrap ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			<section class="bg-cover primary-bg-dark" style="background:url(assets/img/footer-bg-dark.png)no-repeat;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
							
							<div class="call-action-wrap">
								<div class="sec-heading center">
									<h2 class="lh-base mb-3 text-light">Find The Perfect Job<br>on Job Stock That is Superb For You</h2>
									<p class="fs-6 text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
								</div>
								<div class="call-action-buttons mt-3">
									<a href="JavaScript:Void(0);" class="btn btn-lg btn-dark fw-medium px-xl-5 px-lg-4 me-2">Upload resume</a>
									<a href="JavaScript:Void(0);" class="btn btn-lg btn-whites fw-medium px-xl-5 px-lg-4 text-primary">Join Our Team</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			

		

@endsection