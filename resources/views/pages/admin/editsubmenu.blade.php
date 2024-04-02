@extends('layout.admin-master')

@section('page_title')
Edit Sub Menu
@endsection

@section('content')


<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Edit Sub Menu</h1>
								
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						<!-- Card Row -->
						<div class="card">
							<div class="card-header">
								<h4> Edit Sub Menu</h4>

								@if(session()->has('message'))
									<div class="alert alert-success">
										{{ session()->get('message')}}

									</div>

								@endif	
							</div>
							<div class="card-body">

							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

								<form action="{{ route('updatesubmenu', $edit->id) }}" method="POST">

									@csrf

									<div class="row">


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Select Menu</label>
												<div class="select-ops form-group-inner">
													<select id="menus_id" name="menus_id">
													<option value="" selected >Open this select menu</option>
													@foreach($menus as $menu)
														<option value="{{ $menu->id }}" {{ $menu->id == $edit->menu_id ? 'selected': '' }}>{{ $menu->name}}</option>
														

													@endforeach

													</select>
												</div>
											</div>

											@error('menu_id')

												<p class="alert alert-danger">{{ $message}}</p>

											@enderror

											

										</div> 
									
										
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Sub Menu Name</label>
												<input type="text" class="form-control" name="name" id="name" value="{{ old('name', $edit->name)}}">
											</div>

											<!-- @error('name')

												<p class="alert alert-danger">{{ $message}}</p>

											@enderror -->
										</div>


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Slug Name</label>
												<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', $edit->slug)}}">
											</div>

											<!-- @error('slug')

												<p class="alert alert-danger">{{ $message}}</p>

											@enderror -->
										</div>

										<div class="col-lg-12 col-md-12">
											<button type="submit" class="btn ft--medium btn-primary">Update </button>
										</div>
										

										
									</div> 
								</form>
							</div>
						</div>
						<!-- Card Row End -->
					
                    </div>

                    	


@endsection