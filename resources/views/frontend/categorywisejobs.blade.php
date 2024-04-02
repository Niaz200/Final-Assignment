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
							
							<h2 class="ipt-title text-center">All Jobs</h2>
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
					
						
						
						<!-- Sidebar End -->
						
						<!-- Job List Wrap -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							
							<!-- Shorting Box -->
							<div class="row justify-content-center mb-4">
								<div class="col-lg-12 col-md-12">
									<div class="item-shorting-box">
										<div class="item-shorting clearfix">
											<div class="left-column"><h4 class="m-sm-0 mb-2">Showing 1 - 10 of 20 Results</h4></div>
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


                                
							@foreach ($allcatjobs as $key => $postjob )
								
                                <!-- Single Item -->
                                <div class="col-xl-10 col-lg-12 col-md-12">
                                    <div class="jbs-list-box border">
                                        <div class="jbs-list-head">
                                            <div class="jbs-list-head-thunner">
                                                <div class="jbs-list-emp-thumb jbs-verified"><a href="{{ route('showsinglejobs', $postjob->id) }}"><figure><img src="{{asset('fontend/assets/img/l-1.png')}}" class="img-fluid" alt=""></figure></a></div>
                                                <div class="jbs-list-job-caption">
                                                    <div class="jbs-job-employer-wrap"><span>{{ $postjob->company_name }}</span></div>
                                                    <div class="jbs-job-title-wrap"><h4><a href="{{ route('showsinglejobs', $postjob->id) }}" class="jbs-job-title">{{ $postjob->job_title }}</a></h4></div>
                                                </div>
                                            </div>
                                            <div class="jbs-list-head-last">
                                                <!-- <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4 ">Quick Apply</a> -->
                                                <span class="fw-medium label-light-success px-4 py-2 rounded mb-2">{{ $postjob->min_salary }}tk</span>
                                            
                                            </div>

                                        
                                            
                                        </div>

                                        <div class="jbs-list-head">
                                            
                                            <div class="jbs-list-caption">

                                                <div class="jbs-grid-job-edrs-group mt-2">
    
                                                @php

                                                    $kils=(implode(',', $postjob->skills));
                                                        
                                                        $sills= explode(",", $kils);
                                                    @endphp


                                                                                                        
                                                    @foreach ($sills as  $skill )
                                                        <span>{{ $skill }}</span>
                                                    @endforeach
                                                    <!-- <span>CSS3</span>
                                                    <span>Bootstrap</span>
                                                    <span>Redux</span> -->
                                                </div>


                                                

                                                
                                            </div>

                                            

                                            
                                            <form action="{{ route('stoteapply') }}" method="POST">

                                                @csrf
                                                <input type="hidden" name="id" value="{{ $postjob->id }}">
                                                <input type="hidden" name="employer_id" value="{{ $postjob->user_id }}">
                                                <input type="hidden" name="job_title" value="{{ $postjob->job_title}}">
                                                <input type="hidden" name="job_type" value="{{ $postjob->job_type }}">
                                                <input type="hidden" name="location" value="{{ $postjob->location }}">
                                                <input type="hidden" name="compa_name" value="{{ $postjob->company_name }}">
                                    
                                                <div class="jbs-list-head-last">
                                                <a href="{{ route('showsinglejobs', $postjob->id) }}" class="btn btn-md btn-gray px-3 me-2">View Detail</a>
                                                    <button href="JavaScript:Void(0);" type="submit" class="btn btn-md btn-primary px-4 ">Quick Apply</button>
                                            
                                            </div>

                                            
                                            </form>

                                        </div>


                                        <div class="jbs-list-caption">

                                                

                                                <div class="jbs-info-ico-style mt-2">
                                                    <div class="jbs-single-y1 style-1"><span><i class="fa-solid fa-location-dot"></i></span>{{ $postjob->location }}</div>
                                                    <div class="jbs-single-y1 style-2"><span><i class="fa-solid fa-clock"></i></span>{{ $postjob->job_type }}</div>
                                                    <div class="jbs-single-y1 style-3"><span><i class="fa-solid fa-coins"></i></span>{{ $postjob->experience }} exp.</div>
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
												<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></a></div>
												<div class="jbs-list-job-caption">
													<div class="jbs-job-types-wrap"><span class="label text-success bg-light-success">Full Time</span></div>
													<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Product Designer</a></h4></div>
													<div class="jbs-job-mrch-lists">
														<div class="single-mrch-lists">
															<span>Tripadvisor</span>.<span><i class="fa-solid fa-location-dot me-1"></i>California</span>.<span>07 Apr 2023</span>
														</div>
													</div>
												</div>
											</div>
											<div class="jbs-list-head-middle">
												<div class="elsocrio-jbs"><div class="ilop-tr"><i class="fa-solid fa-sack-dollar"></i></div><h5 class="jbs-list-pack">$85K - 95K<span class="patype">\PA</span></h5></div>
											</div>
											<div class="jbs-list-head-last">
												<a href="job-detail.html" class="btn btn-md btn-gray px-3 me-2">View Detail</a>
												<a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-3">Quick Apply</a>
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
			

		

@endsection