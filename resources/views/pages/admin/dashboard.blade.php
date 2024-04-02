@extends('layout.admin-master')

@section('page_title')
Dashboard
@endsection

@section('content')
 
<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Admin Dashboard</h1>
								
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
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
											<h5 class="ctr">{{$totalpostjobs}}</h5>
											<p>Pending jobs</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-warning bg-light-warning">
											<i class="fa-solid fa-bookmark"></i>	
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">{{$totalapprovedjobs}}</h5>
											<p>Approved jobs</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-danger bg-light-danger">
											<i class="fa-solid fa-user-clock"></i>
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">{{$totalcat}}</h5> 
											<p>Total Category</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-info bg-light-info">
											<i class="fa-sharp fa-solid fa-comments"></i>
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">{{$totalblog}}</h5>
											<p>Total Blog</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row End -->
						
						
						
						<!-- Header Wrap -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h6 class="mb-0">Recent Posted Jobs</h6>
									</div>
									<div class="card-body">
										
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">


                                   @foreach ($allpendingjobs as $key => $allpendingjob )
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>{{ $allpendingjob->company_name }}</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">{{ $allpendingjob->job_title }}</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-warning label">{{ $allpendingjob->created_at->diffForHumans() }}</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">{{ $allpendingjob->created_at->format('d M Y') }}</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">{{  date('d-M-Y', strtotime($allappro->job_exp_date))}}</span></p>
														</div>
														<div class="jbs-list-head-last">
                                                            <div class="table-card">
                                                              {{--  <a href="{{ route('editjobpost', $allpendingjob->id) }}" class="rounded btn-md text-success bg-light-success px-3 me-2"><i class="fa-solid fa-pencil"></i></a>  --}}
                                                                <a href="{{ route('showpost', $allpendingjob->id) }}" class="btn btn-md btn-light-success px-3 me-2"><i class="fa-solid fa-eye"></i></a>
                                                                <!-- <a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a> -->

                                                                
                                                                    <form action="{{ route('deljobpost', $allpendingjob->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    
                                                                        <button class="border-0 rounded btn-md text-danger bg-light-danger px-3 ">

                                                                        <i class="fa-solid fa-trash-can"></i>

                                                                        </button>
                                                                        

                                                                    </form>	
                                                            </div>

														</div>
													</div>
												</div>
											</div>
											
                                        @endforeach	
											
											
											
											
											
											
											
									
											
										</div>
										<!-- End All Job List -->
							
									</div>
								</div>
							</div>	
						</div>
						<!-- Header Wrap -->
	
					</div>
							
					</div>

@endsection