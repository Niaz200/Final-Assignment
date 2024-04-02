@extends('layout.fontend-master')

{{-- @section('page_title')
Dashboard
@endsection

 --}}


@section('content')

	
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero-header pb-0" style="background:#ecf3f1 url({{asset('fontend/assets/img/slider-6.html')}}) no-repeat;">
				<div class="bnnr-slack-elior-thumb d-sm-none d-lg-block d-none z-1"><img src="{{asset('fontend/assets/img/new-prn.png')}}" class="img-fluid" alt=""></div>
				<div class="position-absolute top-0 end-0 z-0">
					<img src="{{asset('fontend/assets/img/shape-3-soft-light-gray.svg')}}" alt="SVG" width="450">
				</div>
				<div class="position-absolute top-0 start-0 me-10 z-0">
					<img src="{{asset('fontend/assets/img/shape-1-soft-light-gray.svg')}}" alt="SVG" width="350">
				</div>
				<div class="container position-relative z-2">
					<div class="row">
						<div class="col-xl-7 col-lg-8 col-md-12">
							<div class="simple-search-wrap mb-5">


									@if(session()->has('message'))
										<div class="alert alert-success">
											{{ session()->get('message')}}

										</div>

									@endif	

								<div class="hero-search-2">
									<h2 class="text-xl text-primary">Find</h2>
									<h1 class="mb-4">Great Job Opportunity<br>You Deserve</h1>
									<!-- <div class="full-search-2 mt-5">
										<div class="hero-search-content">
											
											<div class="row classic-search-box m-0 gx-2">
													
												<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
													<div class="form-group briod">
														<div class="input-with-icon">
															<input type="text" class="form-control" placeholder="Skills, Designations, Keyword">
															<i class="fa-solid fa-magnifying-glass text-primary"></i>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
													<div class="form-group">
														<div class="input-with-icon">
															<select class="form-control">
															<option value="1">Job Category</option>
															<option value="2">Accounting & Finance</option>
															<option value="3">Automotive Jobs</option>
															<option value="4">Business Services</option>
															<option value="5">Education Training</option>
															<option value="6">Software Application</option>
															<option value="7">Restaurant & Food</option>
															<option value="8">Healthcare</option>
															<option value="9">Transportation</option>
															<option value="10">Telecommunications</option>
														</select>
														<i class="fa-solid fa-briefcase text-primary"></i>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
													<div class="fliox-search-wiop">
														<div class="form-group">
															<button type="submit" class="btn btn-primary full-width">Find Job</button>
														</div>
													</div>
												</div>
														
											</div>
											
										</div>
									</div> -->
								</div>
							</div>
							
							
							
						</div>
						<div class="col-xl-5 col-lg-4 col-md-12">
							<div class="bnnr-slack-thumb d-lg-none d-sm-block mt-sm-5">
								<img src="{{asset('fontend/assets/img/new-prn.png')}}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Our Partners Start ================================== -->
			<section class="primary-bg-dark min">
				<div class="container">
					
					<div class="row justify-content-center mb-2">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center mb-4">
								<h5 class="text-light opacity-75 fw-medium">The fastedt-growing companies use Job Stock</h5>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center justify-content-center row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-3 gx-3 gy-3">
						<div class="col">
							<figure class="single-brand thumb-figure">
								<img src="{{asset('fontend/assets/img/brand/layar-white.svg')}}" class="img-fluid" alt="">
							</figure>
						</div>
						
						<div class="col">
							<figure class="single-brand thumb-figure">
								<img src="{{asset('fontend/assets/img/brand/mailchimp-white.svg')}}" class="img-fluid" alt="">
							</figure>
						</div>
						
						<div class="col">
							<figure class="single-brand thumb-figure">
								<img src="{{asset('fontend/assets/img/brand/forbes-white.svg')}}" class="img-fluid" alt="">
							</figure>
						</div>
						
						<div class="col">
							<figure class="single-brand thumb-figure">
								<img src="{{asset('fontend/assets/img/brand/fitbit-white.svg')}}" class="img-fluid" alt="">
							</figure>
						</div>
						
						<div class="col">
							<figure class="single-brand thumb-figure">
								<img src="{{asset('fontend/assets/img/brand/vidados-white.svg')}}" class="img-fluid" alt="">
							</figure>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Our Partners End ================================== -->

			
			
<!-- ============================ Explore Categories City ================================== -->
<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Explore Top Categories</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
				
					<div class="row justify-content-center gx-4 gy-4">

                    <?php
                     $classes = ["fa-solid fa-file-invoice text-primary", "fa-solid fa-caravan text-primary","fa-solid fa-person-chalkboard text-primary","fa-solid fa-user-graduate text-primary","fa-solid fa-briefcase-medical text-primary"];
                     ?>

                    @foreach ($categoris as $key => $categor )
					
						<!-- Single Item -->
						<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
							<div class="category-box light">
								<div class="category-desc">
									<div class="category-icon">
										<!-- <i class="fa-solid fa-file-invoice text-primary"></i> -->
										<i class="<?php echo $classes[$key];?>"></i>
										<!-- <i class="fa-solid fa-file-invoice abs-icon"></i> -->
									</div>
									<div class="category-detail category-desc-text">

										<h4 class="fs-5"><a href="{{ route('categorywisealljob', $categor->id) }}">{{ $categor->name }}</a></h4>
										<p>122 Active Jobs</p>
									</div>
								</div>
							</div>
						</div>

                    @endforeach
						
						
						<!-- Single Item -->
						<!-- <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
							<div class="category-box light">
								<div class="category-desc">
									<div class="category-icon">
										<i class="fa-solid fa-caravan text-primary"></i>
										<i class="fa-solid fa-caravan abs-icon"></i>
									</div>
									<div class="category-detail category-desc-text">
										<h4 class="fs-5"><a href="browse-jobs-grid.html">Automotive Jobs</a></h4>
										<p>78 Active Jobs</p>
									</div>
								</div>
							</div>
						</div> -->
						
						<!-- Single Item -->
						<!-- <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
							<div class="category-box light">
								<div class="category-desc">
									<div class="category-icon">
										<i class="fa-solid fa-person-chalkboard text-primary"></i>
										<i class="fa-solid fa-person-chalkboard abs-icon"></i>
									</div>
									<div class="category-detail category-desc-text">
										<h4 class="fs-5"><a href="browse-jobs-grid.html">Business & Tech</a></h4>
										<p>25 Active Jobs</p>
									</div>
								</div>
							</div>
						</div> -->
						
						<!-- Single Item -->
						<!-- <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
							<div class="category-box light">
								<div class="category-desc">
									<div class="category-icon">
										<i class="fa-solid fa-user-graduate text-primary"></i>
										<i class="fa-solid fa-user-graduate abs-icon"></i>
									</div>
									<div class="category-detail category-desc-text">
										<h4 class="fs-5"><a href="browse-jobs-grid.html">Education Training</a></h4>
										<p>212 Active Jobs</p>
									</div>
								</div>
							</div>
						</div>
						 -->
						<!-- Single Item -->
						<!-- <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
							<div class="category-box light">
								<div class="category-desc">
									<div class="category-icon">
										<i class="fa-solid fa-briefcase-medical text-primary"></i>
										<i class="fa-solid fa-briefcase-medical abs-icon"></i>
									</div>
									<div class="category-detail category-desc-text">
										<h4 class="fs-5"><a href="browse-jobs-grid.html">Healthcare</a></h4>
										<p>90 Active Jobs</p>
									</div>
								</div>
							</div>
						</div> -->
						
					
						
					
					
					
					</div>
				
				</div>
			</section>
			<!-- ============================ Explore Categories City ================================== -->


			<!-- ============================ Call To Action ================================== -->
			<section class="bg-cover" style="background:#ffffff url({{asset('fontend/assets/img/form-bg-2.png')}})no-repeat;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
							
							<div class="call-action-wrap">
								<div class="sec-heading center">
									<h2 class="lh-base mb-3">Recent Published Jobs</h2>
									
								</div>
								<div class="call-action-buttons mt-3">

									<?php
										$class = ["btn btn-lg btn-dark", "btn btn-lg btn-primary","btn btn-lg btn-dark","btn btn-lg btn-primary","btn btn-lg btn-primary"];
									?>

									@foreach ($postjobs as $key => $posts )

										<a href="{{ route('showsinglejobs', $posts->id) }}" class="<?php echo $class[$key];?> fw-medium px-xl-4 px-lg-4 me-2">{{ $posts->job_title }}</a>

									@endforeach
<!-- 
										<a href="JavaScript:Void(0);" class="btn btn-lg btn-primary fw-medium px-xl-4 px-lg-4 me-2">Join Our Team</a>
										<a href="JavaScript:Void(0);" class="btn btn-lg btn-dark fw-medium px-xl-4 px-lg-4 me-2">Upload resume</a>
										<a href="JavaScript:Void(0);" class="btn btn-lg btn-primary fw-medium px-xl-4 px-lg-4 me-2">Join Our Team</a>
										<a href="JavaScript:Void(0);" class="btn btn-lg btn-primary fw-medium px-xl-4 px-lg-4">Join Our Team</a> -->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			
			
			
			
			
			<!-- ============================ Featured Jobs Start ================================== -->
			<!-- ============================ All List Wrap ================================== -->
			<section>
				<div class="container">


					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Featured Jobs</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
						
							
							
							<!-- Start All List -->
							<div class="row justify-content-center gx-3 gy-4">


							@foreach ($postjobs as $key => $postjob )
								
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


								<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
							
									<div class="call-action-wrap">
												
										
											<div class="call-action-buttons mt-3">
												<!-- <a href="#" class="btn btn-lg btn-dark fw-medium px-xl-5 px-lg-4 me-2">See All</a> -->
												<a href="{{ route('showalljobs') }}" class="btn btn-lg btn-dark fw-medium px-xl-5 px-lg-4 me-2">See All</a>
												
											</div>
										
									</div>
							
								</div>

								
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
						
					</div>
				</div>		
			</section>
			<!-- ============================ All List Wrap ================================== -->
			<!-- ============================ Featured Jobs End ================================== -->
			
			
			
			
			
			<!-- ================================= Blog Grid ================================== -->
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Trending News By Job Stock</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					
					<div class="row g-xl-3 g-lg-3 g-md-3 g-3">

						@foreach ($blogs as $key => $blog )
							
							<!-- Single blog Grid -->
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
								<div class="jobstock-grid-blog">
									<div class="jobstock-grid-blog-thumb">
										<img src="{{ asset('images/' . $blog->image) }}" class="img-fluid" alt="">
									</div>
									<div class="jobstock-grid-blog-body">
										<div class="jobstock-grid-body-header">
											<div class="jobstock-grid-posted bg-primary"><span>{{$blog->created_at->format('d M Y')}}</span></div>
											<div class="jobstock-grid-title"><h4><a href="blog-detail.html">{{ $blog->title }}</a></h4></div>
										</div>
										<div class="jobstock-grid-body-middle">
											<p>{{ Str::limit($blog->description, 150) }}</p>
										</div>
										<div class="jobstock-grid-body-footer">
											<!-- <a href="{{ route('showsingleblog', $blog->id) }}" class="btn btn-blog-link">Continue Reading</a> -->
											<a href="{{ route('showsingleblog', $blog->id) }}" class="btn btn-blog-link">Continue Reading</a>
										</div>
									</div>
								</div>
							</div>


						@endforeach
							
					
						
						
					</div>
					
				</div>		
			</section>
			<!-- ================= Blog Grid End ================= -->
			
			



@endsection