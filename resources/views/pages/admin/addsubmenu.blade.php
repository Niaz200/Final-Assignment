@extends('layout.admin-master')

@section('page_title')
add submenu
@endsection

@section('content')

                    <div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Add Sub Menu</h1>
								
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						<!-- Card Row -->
						<div class="card">
							<div class="card-header">
								<h4>Add New SubMenu</h4>

								@if(session()->has('message'))
									<div class="alert alert-success">
										{{ session()->get('message')}}

									</div>

								@endif	
								
							</div>
							<div class="card-body">
								<form action="{{ route('storesubmenu') }}" method="POST">

									@csrf

									<div class="row">
									
								

                                        <div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Select Menu</label>
												<div class="select-ops form-group-inner">
													<select id="menus_id" name="menus_id">
													<option value="" selected >Open this select menu</option>
													@foreach($menus as $menu)
														<option value="{{ $menu->id }}">{{ $menu->name}}</option>
														

													@endforeach

													</select>
												</div>
											</div>

											@error('menu_id')

												<p class="alert alert-danger">{{ $message}}</p>

											@enderror

											 <!-- @error('menu_id')
													<p class="text-red-500">{{ $message }}</p>
													@enderror -->

										</div> 


										<!-- @error('menu_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->


										<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Expected Sallary</label>
												<select class="form-control">
													<option value="1">$500 - $1000 PA</option>
													<option value="2">$200 - $5000 PA</option>
													<option value="3">$5000 - $10000 PA</option>
													<option value="4">$10000 - $20000 PA</option>
													<option value="5">$20000 - $40000 PA</option>
													<option value="6">$40000 - $50000 PA</option>
													<option value="7">$50000 - $100000 PA</option>
												</select>
											</div>
										</div> -->

										   <!-- Category Field -->
										   <!-- <div class="mb-4">
												<label for="category" class="block text-sm font-medium">Category</label>
												<select id="category" name="category"
													class="mt-1 p-2 w-full bg-gray-800 text-white rounded-md shadow-sm focus:outline-none focus:border-blue-300">
													<option value="technology" {{ old('category') == 'technology' ? 'selected' : '' }}>Technology</option>
													<option value="lifestyle" {{ old('category') == 'lifestyle' ? 'selected' : '' }}>Lifestyle</option>
													<option value="travel" {{ old('category') == 'travel' ? 'selected' : '' }}>Travel</option>
													<option value="fashion" {{ old('category') == 'fashion' ? 'selected' : '' }}>Fashion</option>
													<option value="mobile" {{ old('category') == 'fashion' ? 'selected' : '' }}>Fashion</option>
													<option value="fan" {{ old('category') == 'fashion' ? 'selected' : '' }}>Fashion</option>
													<option value="cow" {{ old('category') == 'fashion' ? 'selected' : '' }}>Fashion</option>
													<option value="cloth" {{ old('category') == 'fashion' ? 'selected' : '' }}>Fashion</option>
													<option value="women" {{ old('category') == 'fashion' ? 'selected' : '' }}>Fashion</option>
												</select>
												
													@error('category')
													<p class="text-red-500">{{ $message }}</p>
													@enderror
											</div>
                  -->


                                        <div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Sub Menu Name</label>
												<input type="text" class="form-control" name="name" id="name">
											</div>

											@error('name')

												<p class="alert alert-danger">{{ $message}}</p>

											@enderror
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Slug Name</label>
												<input type="text" class="form-control" name="slug" id="slug">
											</div>

											@error('slug')

												<p class="alert alert-danger">{{ $message}}</p>

											@enderror
										</div>

                                     
                                        <!-- 
                                        <div class="col-xl-6 col-lg-6 col-md-12">
											<div class="form-group">
												<label>Education</label>
												<div class="select-ops">
													<select>
														<option value="1">High School</option>
														<option value="2">Intermidiate</option>
														<option value="3">Bachelore Degree</option>
														<option value="4">Master Degree</option>
														<option value="5">Post Graduate</option>
													</select>
												</div>
											</div>
										</div> -->

<!-- 
										<div class="form-group">
												<label>Job Category</label>
												<div class="form-group-inner">
													<select>
														<option value="0">Choose category</option>
														<option value="1">Health & Medical</option>
														<option value="2">Bank & Advisory</option>
														<option value="3">Design & UI</option>
														<option value="4">Development</option>
														<option value="5">Automotive Jobs</option>
														<option value="6">Software & Consultancy</option>
														<option value="7">Other Services</option>
													</select>
												</div>
											</div> -->

                                    

                                        <div class="col-lg-12 col-md-12">
						                    <button type="submit" class="btn ft--medium btn-primary">Save </button>
							            </div> 


										
									</div> 
                                    

                                    	
								</form>
                                
                        
							</div>
                            
						</div>



                        
						<!-- Card Row End -->
						
						<!-- Submit Busston -->
						<!-- <div class="row">
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="btn ft--medium btn-primary">Save </button>
							</div>	
						</div> -->

                    </div>
                   

@endsection