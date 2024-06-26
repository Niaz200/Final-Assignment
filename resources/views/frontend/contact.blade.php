@extends('layout.fontend-master')

@section('page_title')
all jobs
@endsection

@section('content')

<section class="py-5" ></section>


    	<!-- ============================ Page Title Start================================== -->
			<section class="bg-cover primary-bg-dark" style="background:url(assets/img/bg2.png)no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title text-light text-center">Get In touch</h2>
							
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Contact Start ================================== -->
			<section>
			
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">

                                @if(session()->has('message'))
									<div class="alert alert-success">
										{{ session()->get('message')}}

									</div>

								@endif	

								<label class="label text-success bg-light-success">Grow Your Business</label>
								<h2>Activate Next Now</h2>
								<p>Please fill the form and we will guide you to the best solution. Our experts will get in touch soon.</p>
							</div>
						</div>
					</div>
				
					<!-- row Start -->
					<div class="row align-items-center justify-content-center">
					
						<div class="col-lg-10 col-md-12">

                        <form action="{{ route('storecontact') }}" method="POST">

								@csrf
							
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control simple" id="name" name="name">
                                        </div>

                                        @error('name')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control simple"  id="email" name="email">
                                        </div>

                                        @error('email')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control simple" id="title" name="title">
                                        </div>

                                        @error('title')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Phone.</label>
                                            <input type="text" class="form-control simple" id="mobile" name="mobile">
                                        </div>

                                        @error('mobile')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control simple" id="message" name="message"></textarea>
                                        </div>

                                        @error('message')

                                            <p class="alert alert-danger">{{ $message}}</p>

                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Submit Request</button>
                                        </div>
                                    </div>
                                </div>
                            
                            </form>
						</div>		
						
					</div>
					<!-- /row -->

								
					
				</div>
						
			</section>
			<!-- ============================ Contact End ================================== -->
			

		

@endsection