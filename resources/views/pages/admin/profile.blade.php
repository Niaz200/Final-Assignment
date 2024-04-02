@extends('layout.admin-master')

@section('page_title')
profile
@endsection

@section('content')



	<div class="dashboard-tlbar d-block mb-4">
		<div class="row">
			<div class="colxl-12 col-lg-12 col-md-12">
				<h1 class="mb-1 fs-3 fw-medium">Update Profile</h1>
			
			</div>
		</div>
	</div>
	
	<div class="dashboard-widg-bar d-block">
	
		@if(session()->has('message'))
			<div class="alert alert-success">
				{{ session()->get('message')}}

			</div>

		@endif	
		
		<!-- Card Row -->
		<div class="card">
			<div class="card-header">
				<h4>Basic Detail</h4>
			</div>

					<form action="{{ route('createprofile') }}" method="POST">

						@csrf
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
					
								<div class="row">
							
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Employer Name</label>
											<input type="text" class="form-control" name="full_name" value="{{$data->full_name ?? ''}}">
										</div>
									</div>
									
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Email ID</label>
											<input type="text" class="form-control" name="email" value="{{Auth::user()->email }}">
										</div>
									</div>
									
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Phone No.</label>
											<input type="text" class="form-control" name="mobile" value="{{$data->mobile ?? ''}}">
										</div>
									</div>
									
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Website</label>
											<input type="text" class="form-control" name="website" value="{{$data->website ?? ''}}">
										</div>
									</div>
									
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Total Experience</label>
											<input type="text" class="form-control" name="Total_experience" value="{{$data->Total_experience ?? ''}}">
										</div>
									</div>

								
									
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Job Category</label>
											<div class="select-ops">
												<!-- <select>
													<option value="1">Web & Application</option>
													<option value="2">Banking Services</option>
													<option value="3">UI/UX Design</option>
													<option value="4">IOS/App Application</option>
													<option value="5">Education</option>
												</select> -->
								
												
												<select id="cats_id" name="cats_id">
												
													<option value="" selected >Open this select Category</option>
													
													
														@foreach($categos as $categor)
															<option value="{{ $categor->id }}" @if(isset($data['cats_id'])) {{ $categor->id == $data->cats_id ? 'selected': '' }} @endif> {{  $categor->name }}   </option>
															

														@endforeach


														@error('cats_id')

															<p class="alert alert-danger">{{ $message}}</p>

														@enderror
													
													
												</select>

												
											</div>
										</div>
									</div>  
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Age</label>
											<input type="text" class="form-control" name="age" value="{{$data->age ?? ''}}">
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Gender</label>
											<input type="text" class="form-control" name="gender" value="{{$data->gender ?? ''}}">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Education</label>
											<input type="text" class="form-control" name="education" value="{{$data->education ?? ''}}">
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Job Title</label>
											<input type="text" class="form-control" name="job_title" value="{{$data->job_title ?? ''}}">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Work Type</label>
											<input type="text" class="form-control" name="work_type[]" value="@if(isset($data['work_type'])) {{ (implode(',', $data->work_type)) }} @endif"> 
											
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Birthday</label>
											<input type="date" class="form-control" name="birthday" value="{{$data->birthday ?? ''}}">
											
										</div>
									</div>
									
									{{--<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Company Name</label>
											<input type="text" class="form-control" name="company_name" value="{{$data->company_name}}">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Company Location</label>
											<input type="text" class="form-control" name="company_location" value="{{$data->company_location}}">
										</div>
									</div> --}} 

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Language</label>
											
											<input type="text" class="form-control" name="language[]" value="@if(isset($data['language'])) {{ (implode(',', $data->language)) }} @endif">
											
										</div>
									</div>


									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Skills</label>
											
											<input type="text" class="form-control" name="skills[]" value="@if(isset($data['skills'])) {{ (implode(',', $data->skills)) }} @endif">
											
										</div>
									</div>

								
									
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label>About Company</label>
											<textarea class="form-control ht-80" name="info" >{{$data->info ?? ''}}</textarea>
										</div>
									</div>
									
								</div> 
							
							</div>
						</div>
						<!-- Card Row End -->
			
		
			
						<!-- Card Row -->
						<div class="card">
							<div class="card-header">
								<h4>Contact Detail</h4>
							</div>
							<div class="card-body">
							
									<div class="row">
									
										
										<div class="col-xl-6 col-lg-6 col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="address" value="{{$data->address ?? ''}}">
											</div>
										</div>
										
								
										
										<div class="col-xl-6 col-lg-6 col-md-12">
											<div class="form-group">
												<label>Country</label>
												<input type="text" class="form-control" name="country" value="{{$data->country ?? ''}}">
											</div>
										</div>
										
										<div class="col-xl-6 col-lg-6 col-md-12">
											<div class="form-group">
												<label>State/City</label>
												<input type="text" class="form-control" name="city" value="{{$data->city ?? ''}}">
											</div>
										</div>
										
										<div class="col-xl-6 col-lg-6 col-md-12">
											<div class="form-group">
												<label>Zip Code</label>
												<input type="text" class="form-control" name="postcode" value="{{$data->postcode ?? ''}}">
											</div>
										</div>
										
										<!-- <div class="col-xl-6 col-lg-6 col-md-12">
											<div class="form-group">
												<label>Latitude</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-xl-6 col-lg-6 col-md-12">
											<div class="form-group">
												<label>longitude</label>
												<input type="text" class="form-control">
											</div>
										</div> -->
										
									</div> 
								
							</div>
						</div>
						<!-- Card Row End -->
					
				
				
						<!-- Submit Busston -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="btn ft--medium btn-primary">Save Profile</button>
							</div>	
						</div>


					</form>
		
	</div>
					
                    
					
					
					


                    	


@endsection