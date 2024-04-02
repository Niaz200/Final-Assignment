@extends('layout.admin-master')

@section('page_title')
edit blog
@endsection

@section('content')


<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Edit Blog</h1>
								
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						<!-- Card Row -->
						<div class="card">
							<div class="card-header">
								<h4>Add New Blog</h4>

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

								<form action="{{ route('updateblogs',$editblogs->id) }}" method="POST" enctype="multipart/form-data">

									@csrf

									<div class="row">
									
										
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Title</label>
												<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $editblogs->title)}}">
											</div>

											<!-- @error('name')

												<p class="alert alert-danger">{{ $message}}</p>

											@enderror -->
										</div>


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Description</label>
												<!-- <input type="text" class="form-control"> -->
												<textarea class="form-control ht-80" id="description" name="description">{{ old('description', $editblogs->description)}}</textarea>
											</div>
										</div>

									
										<input type="hidden" name="old_img" value="{{ $editblogs->image }}">

										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Old Image</label>
												<img id="old_image" src="{{ asset('images/' . $editblogs->image) }}" alt="Image" style="height: 80px; width: 80px;" class="w-64">
												
											</div>
										</div>


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<label>Image</label>
												<input type="file" id="images" name="images" >
												
											</div>
										</div>

										<div class="col-lg-12 col-md-12">
											<button type="submit" class="btn ft--medium btn-primary">Save </button>
										</div>
										

										
									</div> 
								</form>
							</div>
						</div>
						<!-- Card Row End -->
					
                    </div>

                    	


@endsection