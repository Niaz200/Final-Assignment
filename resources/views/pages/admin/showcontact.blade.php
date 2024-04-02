@extends('layout.admin-master')

@section('page_title')
show contact
@endsection

@section('content')



<div class="row align-items-center justify-content-center">
					
                    <div class="col-lg-10 col-md-12">

                   

                    <div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>All Information</h5></div>
									<div class="single-cdtsr-body">
										<div class="row align-items-center justify-content-between gy-4">
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="cdtx-infr-box">
													
                                                    <div class="cdtx-infr-icon"><i class="fa-regular fa-user"></i></div>
													<div class="cdtx-infr-captions">
														<h5>{{ $showcontats->name }}</h5>
														<p>Name</p>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="cdtx-infr-box">
                                                <div class="cdtx-infr-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
													<div class="cdtx-infr-captions">
														<h5>{{ $showcontats->email }}</h5>
														<p>Email</p>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="cdtx-infr-box">
                                                <div class="cdtx-infr-icon"><i class="fa-solid fa-layer-group"></i></div>
													<div class="cdtx-infr-captions">
														<h5>{{ $showcontats->title }}</h5>
														<p>Subject</p>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="cdtx-infr-box">
                                                <div class="cdtx-infr-icon"><i class="fa-solid fa-phone-volume"></i></div>
													<div class="cdtx-infr-captions">
														<h5>{{ $showcontats->mobile }}</h5>
														<p>Mobile</p>
													</div>
												</div>
											</div>
										
											
										
										</div>
									</div>
								</div>


                                <div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Message</h5></div>
									<div class="single-cdtsr-body">
										<p>{{ $showcontats->message }}<p>
										<!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
									</div>
								</div>
                     
                    </div>		
                    
                </div>
                <!-- /row -->
			

@endsection