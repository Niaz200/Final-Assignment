@extends('layout.admin-master')

@section('page_title')
Add Post Jobs
@endsection

@section('content')


<div class="dashboard-tlbar d-block mb-4">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="mb-1 fs-3 fw-medium">Post Jobs</h1>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
                        <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-primary">Post Jobs</a></li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>

    <div class="dashboard-widg-bar d-block">

            <form action="{{ route('storepost') }}" method="POST">
                @csrf
                <!-- Card Row -->
                <div class="card">
                    <div class="card-header">
                        <h4>Basic Detail</h4>
                    </div>
                    <div class="card-body">


                            <!-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif -->


                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message')}}

                                </div>

							@endif	
                
                            <div class="row">
                            
                            
                                
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title') }}">
                                    </div>

                                    @error('job_title')

										<p class="alert alert-danger">{{ $message}}</p>

									@enderror

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}">
                                    </div>

                                    @error('company_name')

                                        <p class="alert alert-danger">{{ $message}}</p>

                                    @enderror

                                </div>

                                
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Job Description</label>
                                        <!-- <input type="text" class="form-control"> -->
                                        <textarea class="form-control ht-80" id="job_des" name="job_des" value="{{ old('job_des') }}"></textarea>
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
                                            
                                            <option value="Full Time" {{ old('job_type') == 'full Time' ? 'selected' : '' }}>Full Time</option>
                                            <option value="Part Time" {{ old('job_type') == 'part Time' ? 'selected' : '' }}>Part Time</option>
                                            <option value="Junior" {{ old('job_type') == 'junior' ? 'selected' : '' }}>Junior</option>
                                            <option value="Other" {{ old('job_type') == 'other' ? 'selected' : '' }}>Other</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Job Lavel</label>
                                        <div class="select-ops">
                                            <select  id="job_level" name="job_level">
                                                <!-- <option value="1">Team Leader</option>
                                                <option value="2">Manager</option>
                                                <option value="3">Junior</option>
                                                <option value="4">Senior</option>
                                                <option value="5">Other</option> -->

                                            <option value="" selected >Open this select Job Level</option>
                                            
                                            <!-- <option value="{{ old('team leader','team leader')}}">Team Leader</option>
                                            <option value="{{ old('manager','manager')}}">Manager</option>
                                            <option value="{{ old('junior','junior')}}">Junior</option>
                                            <option value="{{ old('other','other')}}">Other</option> -->

                                            <option value="Team Leader" {{ old('job_type') == 'team leader' ? 'selected' : '' }}>Team Leader</option>
                                            <option value="Manager" {{ old('job_type') == 'manager' ? 'selected' : '' }}>Manager</option>
                                            <option value="Junior" {{ old('job_type') == 'junior' ? 'selected' : '' }}>Junior</option>
                                            <option value="Other" {{ old('job_type') == 'other' ? 'selected' : '' }}>Other</option>
                                            

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <div class="select-ops">
                                            <select id="experience" name="experience">
                                                <!-- <option value="1">Fresher</option>
                                                <option value="2">1+ Years</option>
                                                <option value="3">2+ Years</option>
                                                <option value="4">3+ Years</option>
                                                <option value="5">4+ Years</option>
                                                <option value="6">5+ Years</option> -->

                                                <option value="" selected >Open this select Experience</option>
                                            
                                            <option value="Fresher" {{ old('experience') == 'Fresher' ? 'selected' : '' }}>Fresher</option>
                                            <option value="1+ Years" {{ old('experience') == '1+ Years' ? 'selected' : '' }}>1+ Years</option>
                                            <option value="2+ Years" {{ old('experience') == '2+ Years' ? 'selected' : '' }}>2+ Years</option>
                                            <option value="3+ Years" {{ old('experience') == '3+ Years' ? 'selected' : '' }}>3+ Years</option>
                                            <option value="4+ Years" {{ old('experience') == '4+ Years' ? 'selected' : '' }}>4+ Years</option>
                                            <option value="5+ Years" {{ old('experience') == '5+ Years' ? 'selected' : '' }}>5+ Years</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <div class="select-ops">
                                            <select id="qualification" name="qualification">
                                                <!-- <option value="1">10th Class</option>
                                                <option value="2">12th Class</option>
                                                <option value="3">Bachelore Degree</option>
                                                <option value="4">Master Degree</option>
                                                <option value="5">Post Graduate</option>
                                                <option value="6">Any Other</option> -->
                                                <option value="" selected >Open this select Qualification</option>
                                            
                                                <option value="10th Class" {{ old('qualification') == '10th Class' ? 'selected' : '' }}>10th Class</option>
                                                <option value="12th Class" {{ old('qualification') == '12th Class' ? 'selected' : '' }}>12th Class</option>
                                                <option value="Master Degree" {{ old('qualification') == 'Master Degree' ? 'selected' : '' }}>Master Degree</option>
                                                <option value="Bachelore Degree" {{ old('qualification') == 'Bachelore Degree' ? 'selected' : '' }}>Bachelore Degree</option>
                                                <option value="Post Graduate" {{ old('qualification') == 'Post Graduate' ? 'selected' : '' }}>Post Graduate</option>
                                                <option value="Any Other" {{ old('qualification') == 'Any Other' ? 'selected' : '' }}>Any Other</option>
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
                                                <!-- <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option> -->
                                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Min. Sallary</label>
                                        <input type="text" class="form-control" id="min_salary" name="min_salary" value="{{ old('min_salary') }}">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Max. Sallary</label>
                                        <input type="text" class="form-control" id="max_salary" name="max_salary" value="{{ old('max_salary') }}">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Job Expired Date</label>
                                        <input type="date" class="form-control"  id="job_exp_date" name="job_exp_date" value="{{ old('job_exp_date') }}">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Job Fee Type</label>
                                        <div class="select-ops">
                                            <select id="job_fee_type" name="job_fee_type">
                                                <!-- <option value="1">Normal</option>
                                                <option value="2">Premium</option>
                                                <option value="3">Urgent</option> -->

                                                <option value="" selected >Open this select Job Fee Type</option>
                                        
                                                <option value="Normal" {{ old('job_fee_type') == 'normal' ? 'selected' : '' }}>Normal</option>
                                                <option value="Premium" {{ old('job_fee_type') == 'premium' ? 'selected' : '' }}>Premium</option>
                                                <option value="Urgent" {{ old('job_fee_type') == 'urgent' ? 'selected' : '' }}>Urgent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Requirements</label>
                                        <!-- <input type="text" class="form-control" id="requiremment" name="requiremment" value="{{ old('requiremment[]') }}"> -->
                                        <textarea class="form-control ht-80" id="requiremment" name="requiremment" value="{{ old('requiremment') }}"></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Responsibilities</label>
                                        <!-- <input type="text" class="form-control" id="responsibilities" name="responsibilities" value="{{ old('responsibilities[]') }}"> -->
                                        <textarea class="form-control ht-80" id="responsibilities" name="responsibilities" value="{{ old('responsibilities') }}"></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Skills, Use Commas for saperate</label>
                                        <input type="text" class="form-control" id="skills" name="skills[]" value="{{ old('skills[]') }}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Company Website</label>
                                        <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}">
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Permanent Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
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
                                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>State/City</label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" id="postcode" name="postcode" value="{{ old('postcode') }}">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Company Location</label>
                                        <input type="text" class="form-control"  id="location" name="location" value="{{ old('location') }}">
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
                                <button type="submit" class="btn ft--medium btn-primary">Save & Preview</button>
                            </div>	
                        </div>

            </form>

    </div>

                    	


@endsection