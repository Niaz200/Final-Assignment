@extends('layout.admin-master')

@section('page_title')
all menu
@endsection

@section('content')


<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">All Menu</h1>
								
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
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
													  <th scope="col">Id</th>
													  <th scope="col">Menu Name</th>
													  
													  <th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>

												@foreach ($menus as $key => $menu )
													<tr>
														<td>{{  $key + 1 }}</td>
														<td>{{ $menu->name }}</td>
														
														<td class="px-6 py-4">
															<div class="table-card">

																<form action="{{ route('delete', $menu->id) }}" method="POST">
																@csrf
																@method('DELETE')
																	<!-- <a href="JavaScript:Void(0);" class="btn btn-md btn-light-danger px-3 me-2"><i class="fa-solid fa-xmark"></i></a> -->
																	<button class="btn btn-md btn-light-danger px-3 me-2">

																	<i class="fa-solid fa-xmark"></i>

																	</button>
																	

																</form>	
																	<!-- <a href="JavaScript:Void(0);" class="btn btn-md btn-light-success px-3"><i class="fa-solid fa-eye"></i></a> -->
																	<a href="{{ route('menuedit', $menu->id) }}" class="btn btn-md btn-light-success px-3"><i class="fa-solid fa-edit"></i></a>

															</div>
														</td>
													</tr>
													
													
													@endforeach
													
																									
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<!-- Header Wrap -->
	
					</div>


@endsection