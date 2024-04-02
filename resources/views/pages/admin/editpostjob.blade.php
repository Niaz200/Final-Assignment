@extends('layout.admin-master')

@section('page_title')
edit post jobs
@endsection

@section('content')


    <div class="dashboard-tlbar d-block mb-4">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="mb-1 fs-3 fw-medium">Post Jobs</h1>
                    
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">

                <form action="{{ route('updatepostjob',$edit->id) }}" method="POST">
                    @csrf
                    <!-- Card Row -->
                    <div class="card">

                                @if(session()->has('message'))
									<div class="alert alert-success">
										{{ session()->get('message')}}

									</div>

								@endif	

                        <div class="card-header">
                            <h4>Basic Detail</h4>
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

                              
                              
                    
                                <div class="row">
                                
                                
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" class="form-control" id="job_title" name="job_title"  value="{{ old('job_title', $edit->job_title)}}">
                                        </div>

                                        @error('job_title')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror

                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $edit->company_name)}}" >
                                        </div>

                                        @error('company_name')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror

                                    </div>

                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Job Description</label>
                                            <!-- <input type="text" class="form-control"> -->
                                            <textarea class="form-control ht-80" id="job_des" name="job_des"  >{{ old('job_des', $edit->job_des)}}</textarea>
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
                                                        
                                                        
                                                            @foreach($cates as $categor)
                                                                <option value="{{ $categor->id }}" {{ $categor->id == $edit->cats_id ? 'selected': '' }} > {{  $categor->name }}   </option>
                                                                

                                                            @endforeach
                                                            
                                                            
                                                </select>

                                            </div>
                                        </div>

                                        @error('cats_id')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Job Type</label>
                                            <div class="select-ops">
                                                <select id="job_type" name="job_type">
                                                    <!-- <option value="1">Full Time</option>
                                                    <option value="2">Part Time</option>
                                                    <option value="3">Freelance</option>
                                                    <option value="4">Internship</option>
                                                    <option value="5">Contract</option> -->


                                                <option value="" selected >Open this select Job Type</option>
                                                
                                               
                                                <option value="Full Time" @if (old('job_type', $edit->job_type) == 'Full Time') selected @endif>Full Time</option>
                                                <option value="Part Time" @if (old('job_type', $edit->job_type) == 'Part Time') selected @endif>Part Time</option>
                                                <option value="Junior"  @if (old('job_type', $edit->job_type) == 'Junior') selected @endif>Junior</option>
                                                <option value="Other"  @if (old('job_type', $edit->job_type) == 'Other') selected @endif>Other</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Job Lavel</label>
                                            <div class="select-ops">
                                                <select  id="job_level" name="job_level">
                                                    

                                                <option value="" selected >Open this select Job Level</option>
                                                
                                                

                                                <option value="Team Leader" @if (old('job_level', $edit->job_level) == 'Team Leader') selected @endif>Team Leader</option>
                                                <option value="Manager" @if (old('job_level', $edit->job_level) == 'Manager') selected @endif>Manager</option>
                                                <option value="Junior"  @if (old('job_level', $edit->job_level) == 'Junior') selected @endif>Junior</option>
                                                <option value="Other"  @if (old('job_level', $edit->job_level) == 'Other') selected @endif>Other</option>
                                                

                                                </select>
                                            </div>  


                                           
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <div class="select-ops">
                                                <select id="experience" name="experience">
                                                   

                                                    <option value="" selected >Open this select Experience</option>
                                                

                                                    <option value="Fresher" @if (old('experience', $edit->experience) == 'Fresher') selected @endif>Fresher</option>
                                                    <option value="1+ Years" @if (old('experience', $edit->experience) == '1+ Years') selected @endif>1+ Years</option>
                                                    <option value="2+ Years"  @if (old('experience', $edit->experience) == '2+ Years') selected @endif>2+ Years</option>
                                                    <option value="3+ Years"  @if (old('experience', $edit->experience) == '3+ Years') selected @endif>3+ Years</option>
                                                    <option value="4+ Years"  @if (old('experience', $edit->experience) == '4+ Years') selected @endif>4+ Years</option>
                                                    <option value="5+ Years"  @if (old('experience', $edit->experience) == '5+ Years') selected @endif>5+ Years</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <div class="select-ops">
                                                <select id="qualification" name="qualification">
                                                   
                                                    <option value="" selected >Open this select Qualification</option>
                                                

                                                    
                                                    <option value="10th Class" @if (old('qualification', $edit->qualification) == '10th Class') selected @endif>10th Class</option>
                                                    <option value="12th Class" @if (old('qualification', $edit->qualification) == '12th Class') selected @endif>12th Class</option>
                                                    <option value="Master Degree"  @if (old('qualification', $edit->qualification) == 'Master Degree') selected @endif>Master Degree</option>
                                                    <option value="Bachelore Degree"  @if (old('qualification', $edit->qualification) == 'Bachelore Degree') selected @endif>Bachelore Degree</option>
                                                    <option value="Post Graduate"  @if (old('qualification', $edit->qualification) == 'Post Graduate') selected @endif>Post Graduate</option>
                                                    <option value="Any Other"  @if (old('qualification', $edit->qualification) == 'Any Other') selected @endif>Any Other</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="select-ops">
                                                <select id="gender" name="gender">
                                                    <option value="" selected >Open this select Gender</option>
                                                 

                                                    <option value="male" @if (old('gender', $edit->gender) == 'male') selected @endif>male</option>
                                                    <option value="female" @if (old('gender', $edit->gender) == 'female') selected @endif>female</option>
                                                    <option value="other"  @if (old('gender', $edit->gender) == 'other') selected @endif>other</option>
                                                
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Min. Sallary</label>
                                            <input type="number" class="form-control" id="min_salary" name="min_salary"  value="{{ old('min_salary', $edit->min_salary)}}" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Max. Sallary</label>
                                            <input type="number" class="form-control" id="max_salary" name="max_salary"  value="{{ old('max_salary', $edit->max_salary)}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Job Expired Date</label>
                                            <input type="date" class="form-control"  id="job_exp_date" name="job_exp_date"  value="{{ old('job_exp_date', $edit->job_exp_date)}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Job Fee Type</label>
                                            <div class="select-ops">
                                                <select id="job_fee_type" name="job_fee_type">
                                                 
                                                    <option value="" selected >Open this select Job Fee Type</option>

                                                    <option value="Normal" @if (old('job_fee_type', $edit->job_fee_type) == 'Normal') selected @endif>Normal</option>
                                                    <option value="Premium" @if (old('job_fee_type', $edit->job_fee_type) == 'Premium') selected @endif>Premium</option>
                                                    <option value="Urgent"  @if (old('job_fee_type', $edit->job_fee_type) == 'Urgent') selected @endif>Urgent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <!-- <input type="text" class="form-control" id="requiremment" name="requiremment" value="{{ old('requiremment[]') }}"> -->
                                            <textarea class="form-control ht-80" id="requiremment" name="requiremment" value="{{ old('requiremment') }}">{{  $edit->requiremment }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Responsibilities</label>
                                            <!-- <input type="text" class="form-control" id="responsibilities" name="responsibilities" value="{{ old('responsibilities[]') }}"> -->
                                            <textarea class="form-control ht-80" id="responsibilities" name="responsibilities" value="{{ old('responsibilities') }}">{{  $edit->responsibilities }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Skills, Use Commas for saperate</label>
                                            <input type="text" class="form-control" id="skills" name="skills[]"  value="@if(isset($edit['skills'])) {{ (implode(',', $edit->skills)) }} @endif">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Company Website</label>
                                            <input type="text" class="form-control" id="website" name="website" value="{{ old('website', $edit->website)}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $edit->address)}}">
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Temporary Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div> -->
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control" id="country" name="country"  value="{{ old('country', $edit->country)}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>State/City</label>
                                            <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $edit->state)}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control" id="postcode" name="postcode" value="{{ old('postcode', $edit->postcode)}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Company Location</label>
                                            <input type="text" class="form-control"  id="location" name="location"  value="{{ old('location', $edit->location)}}">
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
                            <button type="submit" class="btn ft--medium btn-primary">Update</button>
                        </div>	
                    </div>

                </form>

        </div>

@endsection