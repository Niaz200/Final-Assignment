@extends('layout.admin-master')

@section('page_title')
applied jobs
@endsection

@section('content')
<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Applied Jobs</h1>
								
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
											<div class="_mp_inner-last">
												<div class="item-shorting-box-right">
													<div class="shorting-by me-2 small">
														<select>
															<option value="0">Short by (Default)</option>
															<option value="1">Short by (Featured)</option>
															<option value="2">Short by (Urgent)</option>
															<option value="3">Short by (Post Date)</option>
														</select>
													</div>
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

										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
                                            <?php
                                                $clas = ["bg-success", "bg-warning"];
                                            ?>

											<!-- Single Item -->
                                                @foreach ($jobs as $key => $job )

                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="jbs-list-box border">
                                                            <div class="jbs-list-head">
                                                                <div class="jbs-list-head-thunner">
                                                                    <div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></a></div>
                                                                    <div class="jbs-list-job-caption">
                                                                        <div class="jbs-job-types-wrap"><span class="label text-success bg-light-success">{{ $job->job_type }}</span></div>
                                                                        <div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">{{ $job->job_title }}</a></h4></div>
                                                                        <div class="jbs-job-mrch-lists">
                                                                            <div class="single-mrch-lists">
                                                                                <span>{{ $job->compa_name }}</span>.<span><i class="fa-solid fa-location-dot me-1"></i>{{ $job->location }}</span>.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="jbs-list-head-middle">
                                                                    <div class="elsocrio-jbs"><span class="text-sm-muted">Apply {{$job->created_at->format('d M Y')}}</span></div>
                                                                </div>
                                                                <div class="jbs-list-head-middle">
                                                                    <div class="elsocrio-jbs"><span class="text-sm-muted text-light  @if($job->status == 'Approved') bg-success @elseif($job->status == 'Pending') bg-warning @else bg-danger @endif    py-2 px-3 rounded">{{ $job->status }}</span></div>
                                                                </div>
                                                                <div class="jbs-list-head-last">
                                                                    <!-- <a href="JavaScript:Void(0);" class="btn btn-md btn-light-danger px-3 me-2"><i class="fa-solid fa-xmark"></i></a> -->
                                                                    <div class="table-card">
                                                                        <form action="{{ route('deleteappliedjob', $job->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                            
                                                                            <button class="btn btn-md btn-light-danger px-3 me-2">

                                                                            <i class="fa-solid fa-xmark"></i>

                                                                            </button>
                                                                            

                                                                        </form>
                                                                    <a href="{{ route('showjob', $job->id) }}" class="btn btn-md btn-light-primary px-3"><i class="fa-solid fa-eye"></i></a>
                                                                </div>
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
															<div class="jbs-list-emp-thumb"><a href="job-detail.html"><figure><img src="assets/img/l-2.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-types-wrap"><span class="label text-success bg-light-success">Full Time</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Product Designer</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Pinterest</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Allahabad</span>.<span>2 Apr 2023</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs"><span class="text-sm-muted">Apply 02 Mar 2022</span></div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs"><span class="text-sm-muted text-light bg-warning py-2 px-3 rounded">Pending</span></div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="btn btn-md btn-light-danger px-3 me-2"><i class="fa-solid fa-xmark"></i></a>
															<a href="job-detail.html" class="btn btn-md btn-light-primary px-3"><i class="fa-solid fa-eye"></i></a>
														</div>
													</div>
												</div>
											</div> -->
											
											
											
										
											
										</div>
									</div>
								</div>
							</div>	
						</div>
						<!-- Header Wrap -->
	
					</div>

@endsection