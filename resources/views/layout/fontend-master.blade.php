<!doctype html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/jobstock-landing-2.2/jobstock/home-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 23:15:16 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
		<link rel="icon" type="image/x-icon" href="{{asset('fontend/assets/img/favicon.png')}}">
		
        <!-- Custom CSS -->
        <link href="{{asset('fontend/assets/css/styles.css')}}" rel="stylesheet">
		
		<!-- Colors CSS -->
        <link href="{{asset('fontend/assets/css/colors.css')}}" rel="stylesheet">
		
    </head>
	
    <body class="green-theme">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-transparent dark">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{asset('fontend/assets/img/logo.png')}}" class="logo" alt="">
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li class="list-buttons">
										<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i class="fas fa-sign-in-alt me-2"></i>Log In</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper">
							<ul class="nav-menu">
							
								<li class="active"><a href="{{ route('home') }}">Home<span class="submenu-indicator"></span></a>
									<!-- <ul class="nav-dropdown nav-submenu">
										<li><a class="active" href="index.html">Home Layout 1</a></li>
										<li><a href="home-2.html">Home Layout 2</a></li>
										<li><a href="home-3.html">Home Layout 3</a></li>
										<li><a href="home-4.html">Home Layout 4</a></li>
										<li><a href="home-5.html">Home Layout 5</a></li>
										<li><a href="home-6.html">Home Layout 6</a></li>
										<li><a href="home-7.html">Home Layout 7</a></li>
										<li><a href="JavaScript:Void(0);">New Homes Layouts<span class="new-update">New</span><span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="home-8.html">Home Layout 8</a></li>                                    
												<li><a href="home-9.html">Home Layout 9</a></li>                                    
												<li><a href="home-10.html">Home Layout 10</a></li>
												<li><a href="home-11.html">Home Layout 11</a></li>
												<li><a href="home-12.html">Home Layout 12</a></li>																								
											</ul>	
										</li>
									</ul> -->
								</li>

								

									@php
                                        $menus = App\Models\Menu::get();;
                                    @endphp

									

								@foreach ($menus as $key => $menu )

								
         
       							
								
									<li><a href="JavaScript:Void(0);">{{ $menu->name}}<span class="submenu-indicator"></span></a>
										<ul class="nav-dropdown nav-submenu">

											@php
												$submenus = App\Models\Submenu::get();;
											@endphp

										@foreach ($menu->submenu as $key => $submenu )

										{{--	<li><a href="{{ route('showalljobs', [$submenu->id, $submenu->slug]) }}">{{ $submenu->name }}<span class="submenu-indicator"></span></a>  --}}
											<li><a href="{{ url($submenu->slug)}}">{{ $submenu->name }}<span class="submenu-indicator"></span></a>
											<!-- <li><a href="JavaScript:Void(0);">{{ $submenu->name }}<span class="submenu-indicator"></span></a> -->
												<!-- <ul class="nav-dropdown nav-submenu">
													<li><a href="grid-style-1.html">Job Grid Style 1</a></li>                                    
													<li><a href="grid-style-2.html">Job Grid Stle 2</a></li>                                    
													<li><a href="grid-style-3.html">Job Grid Style 3</a></li>
													<li><a href="grid-style-4.html">Job Grid Style 4</a></li>
													<li><a href="grid-style-5.html">Job Grid Style 5</a></li>												
													<li><a href="full-job-grid-1.html">Grid Full Style 1</a></li>
													<li><a href="full-job-grid-2.html">Grid Full Style 2</a></li>
													<li><a href="list-style-1.html">Job List Style 1</a></li>
													<li><a href="list-style-2.html">Job List Style 2</a></li>
													<li><a href="list-style-2.html">Job List Style 3</a></li>
													<li><a href="full-job-list-1.html">List Full Style 1</a></li>
													<li><a href="full-job-list-2.html">List Full Style 2</a></li>												
												</ul> -->
											</li>

										@endforeach

										
<!-- 											
											<li><a href="JavaScript:Void(0);">Browse Map Jobs<span class="submenu-indicator"></span></a>
												<ul class="nav-dropdown nav-submenu">
													<li><a href="half-map.html">Job Search on Map 01</a></li>                                    
													<li><a href="half-map-2.html">Job Search on Map 02</a></li>                                    
													<li><a href="half-map-3.html">Job Search on Map 03</a></li>
													<li><a href="half-map-list-1.html">Job Search on Map 04</a></li>
													<li><a href="half-map-list-2.html">Job Search on Map 05</a></li>
												</ul>
											</li> -->
											<!-- <li><a href="JavaScript:Void(0);">Browse Candidate<span class="submenu-indicator"></span></a>
												<ul class="nav-dropdown nav-submenu">
													<li><a href="candidate-grid-1.html">Candidate Grid 01</a></li>                                    
													<li><a href="candidate-grid-2.html">Candidate Grid 02</a></li>                                    
													<li><a href="candidate-list-1.html">Candidate List 01</a></li>                                    
													<li><a href="candidate-list-2.html">Candidate List 02</a></li>
													<li><a href="candidate-half-map.html">Candidate Half Map 01</a></li>
													<li><a href="candidate-half-map-list.html">Candidate Half Map 02</a></li>												
												</ul>
											</li> -->
											<!-- <li><a href="JavaScript:Void(0);">Single job Detail<span class="submenu-indicator"></span></a>
												<ul class="nav-dropdown nav-submenu">
													<li><a href="single-layout-1.html">Single Layout 01</a></li>                                    
													<li><a href="single-layout-2.html">Single Layout 02</a></li>                                    
													<li><a href="single-layout-3.html">Single Layout 03</a></li>                                    
													<li><a href="single-layout-4.html">Single Layout 04</a></li>												
													<li><a href="single-layout-5.html">Single Layout 05<span class="new-update">New</span></a></li>												
													<li><a href="single-layout-6.html">Single Layout 06<span class="new-update">New</span></a></li>												
												</ul>
											</li> -->
											<!-- <li><a href="JavaScript:Void(0);">Candidate Detail<span class="submenu-indicator"></span></a>
												<ul class="nav-dropdown nav-submenu">
													<li><a href="candidate-detail.html">Candidate Detail 01</a></li>                                    
													<li><a href="candidate-detail-2.html">Candidate Detail 02</a></li>                                    
													<li><a href="candidate-detail-3.html">Candidate Detail 03</a></li>                                    												
												</ul>
											</li> -->
											<!-- <li><a href="advance-search.html">Advance Search</a></li> -->
											<!-- <li>
												<a href="candidate-dashboard.html">Candidate Dashboard<span class="new-update">New</span></a>                                
											</li> -->
										</ul>
									</li>

								

								@endforeach

							

							

								
								<!-- <li><a href="JavaScript:Void(0);">For Employer<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="JavaScript:Void(0);">Explore Employers<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="employer-grid-1.html">Search Employers 01</a></li>                                    
												<li><a href="employer-grid-2.html">Search Employers 02</a></li>                                    
												<li><a href="employer-list-1.html">Search List Employers 01</a></li>
												<li><a href="employer-half-map.html">Search Employers Map</a></li>
												<li><a href="employer-half-map-list.html">Search List Employers Map</a></li>												
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">Employer Detail<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="employer-detail.html">Employer Detail 01</a></li>                                    
												<li><a href="employer-detail-2.html">Employer Detail 02</a></li>                                    											
											</ul>
										</li>
										<li>
											<a href="employer-dashboard.html">Employer Dashboard<span class="new-update">New</span></a>                                
										</li>
									</ul>
								</li> -->
<!-- 								
								<li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="about-us.html">About Us</a></li> 
										<li><a href="404.html">Error Page</a></li>
										<li><a href="checkout.html">Checkout</a></li>										
										<li><a href="blog.html">Blogs Page</a></li>                                    
										<li><a href="blog-detail.html">Blog Detail</a></li>                                    
										<li><a href="privacy.html">Terms & Privacy</a></li> 
										<li><a href="pricing.html">Pricing</a></li>  
										<li><a href="faq.html">FAQ's</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</li> -->
								
								<!-- <li><a href="#">Help</a></li> -->

				
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									@auth

									

										{{-- @if(Request::is('admin*')) --}}
										@if(Auth()->user()->role_id ==1)
											<a href="{{ route('profile')}}" >Profile</a>
										@elseif(Auth()->user()->role_id ==2)
											<a href="{{ route('emprofile')}}" >Profile</a>
										@else
											<a href="{{ route('userprofile')}}" >Profile</a>
										@endif 

										
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
                    					document.getElementById('logout-form').submit();"><i class="fa-solid fa-power-off me-2"></i> Log Out</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
								
									@else
										<a href="{{ route('login')}}" data-bs-toggle="modal" data-bs-target="#login"><i class="fas fa-sign-in-alt me-2"></i>Sign In</a>
									@endauth
								</li>
								<!-- <li class="list-buttons ms-2">
									<a href="signup.html"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload Resume</a>
								</li> -->
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			

            <div >
                @yield('content')
            </div>
			
			
			{{--			
			<!-- ============================ Footer Start ================================== -->
			<footer class="footer skin-light-footer">
			
				<!-- Footer Top Start -->
				<div class="footer-top">
					<div class="container">
						<div class="row align-items-center justify-content-between">
						
							<div class="col-xl-5 col-lg-5 col-md-5">
								<div class="call-action-form rounded m-0">
									<form class="ms-0">
										<div class="newsltr-form gray-style">
											<input type="text" class="form-control" placeholder="Enter Your email">
											<button type="button" class="btn btn-subscribe">Subscribe</button>
										</div>
									</form>
								</div>
							</div>
							
							<div class="col-xl-7 col-lg-7 col-md-7">
								<div class="job-info-count-group lg-ctr">
									<div class="single-jb-info-count">
										<div class="jbs-y7"><h5 class="ctr">12</h5><span class="primary-text-dark">K</span></div>
										<div class="jbs-y5"><p>Job Posted</p></div>
									</div>
									<div class="single-jb-info-count">
										<div class="jbs-y7"><h5 class="ctr">10</h5><span class="primary-text-dark">M</span></div>
										<div class="jbs-y5"><p>Happy Customers</p></div>
									</div>
									<div class="single-jb-info-count">
										<div class="jbs-y7"><h5 class="ctr">76</h5><span class="primary-text-dark">K</span></div>
										<div class="jbs-y5"><p>Freelancers</p></div>
									</div>
									<div class="single-jb-info-count">
										<div class="jbs-y7"><h5 class="ctr">200</h5><span class="primary-text-dark">+</span></div>
										<div class="jbs-y5"><p>Companies</p></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- Footer Top End -->  --}}
				
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-md-4">
								<div class="footer-widget">
									<img src="{{asset('fontend/assets/img/logo.png')}}" class="img-footer" alt="">
									<div class="footer-add">
										<p>Collins Street West, Victoria Near Bank Road<br>Australia QHR12456.</p>
									</div>
									<div class="foot-socials">
										<ul>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>		
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title text-primary">For Clients</h4>
									<ul class="footer-menu">
										<li><a href="JavaScript:Void(0);">Talent Marketplace</a></li>
										<li><a href="JavaScript:Void(0);">Payroll Services</a></li>
										<li><a href="JavaScript:Void(0);">Direct Contracts</a></li>
										<li><a href="JavaScript:Void(0);">Hire Worldwide</a></li>
										<li><a href="JavaScript:Void(0);">Hire in the USA</a></li>
										<li><a href="JavaScript:Void(0);">How to Hire</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title text-primary">Our Resources</h4>
									<ul class="footer-menu">
										<li><a href="JavaScript:Void(0);">Free Business tools</a></li>
										<li><a href="JavaScript:Void(0);">Affiliate Program</a></li>
										<li><a href="JavaScript:Void(0);">Success Stories</a></li>
										<li><a href="JavaScript:Void(0);">Upwork Reviews</a></li>
										<li><a href="JavaScript:Void(0);">Resources</a></li>
										<li><a href="JavaScript:Void(0);">Help & Support</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title text-primary">The Company</h4>
									<ul class="footer-menu">
										<li><a href="JavaScript:Void(0);">About Us</a></li>
										<li><a href="JavaScript:Void(0);">Leadership</a></li>
										<li><a href="JavaScript:Void(0);">Contact Us</a></li>
										<li><a href="JavaScript:Void(0);">Investor Relations</a></li>
										<li><a href="JavaScript:Void(0);">Trust, Safety & Security</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title text-primary">Download Apps</h4>	
									<div class="app-wrap">
										<p><a href="JavaScript:Void(0);"><img src="{{asset('fontend/assets/img/light-play.png')}}" class="img-fluid" alt=""></a></p>
										<p><a href="JavaScript:Void(0);"><img src="{{asset('fontend/assets/img/light-ios.png')}}" class="img-fluid" alt=""></a></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							
							<div class="col-xl-12 col-lg-12 col-md-12">
								<p class="mb-0 text-center">© 2015 - 2023 Job Stock® Themezhub.</p>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="loginmodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-header">
							<div class="mdl-thumb"><img src="{{asset('fontend/assets/img/ico.png')}}" class="img-fluid" width="70" alt=""></div>
							<div class="mdl-title"><h4 class="modal-header-title">Hello, Again</h4></div>
						</div>
						<div class="modal-body">
							<div class="modal-login-form">
								<form method="POST" action="{{ route('login') }}">
									@csrf

									<div class="form-floating mb-4">
										<input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="name@example.com">
										<label>User Name</label>

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-floating mb-4">
										<input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="Password">
										<label>Password</label>

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
									</div>
									
									<div class="modal-flex-item mb-3">
										<div class="modal-flex-first">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
												<label class="form-check-label" for="savepassword">Save Password</label>
											</div>
										</div>
										<div class="modal-flex-last">
											<a href="{{ route('password.request') }}">Forget Password?</a>
										</div>
									</div>
								</form>
							</div>
							<div class="social-login">
								<ul>
									<li><a href="JavaScript:Void(0);" class="btn connect-fb"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
									<li><a href="JavaScript:Void(0);" class="btn connect-google"><i class="fa-brands fa-google"></i>Google+</a></li>
								</ul>
							</div>
						</div>
						<div class="modal-footer">
							<p>Don't have an account yet?<a href="{{ route('register') }}" class="text-primary font--bold ms-1">Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Filter Modal -->
			<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filtermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered filter-popup" role="document">
					<div class="modal-content" id="filtermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-header">
							<h4 class="modal-header-sub-title">Start Your Filter</h4>
						</div>
						<div class="modal-body p-0">
							<div class="filter-content">
								<div class="full-tabs-group">
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Job Match Score</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="msix">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msix">6.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="msixfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msixfive">6.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mseven">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mseven">7.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="msevenfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msevenfive">7.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="meight">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meight">8.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="meightfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meightfive">8.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mnine">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mnine">9.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mninefive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mninefive">9.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mten">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mten">10</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Job Value Score</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vsix">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsix">6.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vsixfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsixfive">6.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vseven">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vseven">7.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vsevenfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsevenfive">7.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="veight">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veight">8.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="veightfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veightfive">8.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vnine">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vnine">9.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vninefive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vninefive">9.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vten">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vten">10</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Place Of Work</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="anywhere" checked>
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="anywhere">Anywhere</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="onsite">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="onsite">On Site</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="remote">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="remote">Fully Remote</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Type Of Contract</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="employee1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="employee1">Employee</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="frelancers1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="frelancers1">Freelancer</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="contractor1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="contractor1">Contractor</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="internship1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="internship1">Internship</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Type Of Employment</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="fulltime">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="fulltime">Full Time</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="parttime">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="parttime">Part Time</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="freelance2" checked>
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="freelance2">Freelance</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="internship2">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="internship2">Internship</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Radius In Miles</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="rg-slider">
												 <input type="text" class="js-range-slider" name="my_range" value="">
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Explore Top Categories</h5></div>
										
										<div class="single-tabs-group-content">
											<ul class="row p-0 m-0">
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-1" class="form-check-input" name="s-1" type="checkbox">
														<label for="s-1" class="form-check-label">IT Computers</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-2" class="form-check-input" name="s-2" type="checkbox">
														<label for="s-2" class="form-check-label">Web Design</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-3" class="form-check-input" name="s-3" type="checkbox">
														<label for="s-3" class="form-check-label">Web development</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-4" class="form-check-input" name="s-4" type="checkbox">
														<label for="s-4" class="form-check-label">SEO Services</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-5" class="form-check-input" name="s-5" type="checkbox">
														<label for="s-5" class="form-check-label">Financial Service</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-6" class="form-check-input" name="s-6" type="checkbox">
														<label for="s-6" class="form-check-label">Art, Design, Media</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-7" class="form-check-input" name="s-7" type="checkbox">
														<label for="s-7" class="form-check-label">Coach & Education</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-8" class="form-check-input" name="s-8" type="checkbox">
														<label for="s-8" class="form-check-label">Apps Developements</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-9" class="form-check-input" name="s-9" type="checkbox">
														<label for="s-9" class="form-check-label">IOS Development</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-10" class="form-check-input" name="s-10" type="checkbox">
														<label for="s-10" class="form-check-label">Android Development</label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Keywords</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Design, Java, Python, WordPress etc...">
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="filt-buttons-updates">
								<button type="button" class="btn btn-dark">Clear Filter</button>
								<button type="button" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		
		<!-- Color Switcher -->
		<div class="style-switcher">
			<div class="css-trigger shadow"><a href="#"><i class="fa-solid fa-paintbrush"></i></a></div>
			<div>
				<ul id="themecolors" class="m-t-20">
					<li><a href="javascript:void(0)" data-skin="green-theme" class="green-theme">1</a></li>
					<li><a href="javascript:void(0)" data-skin="red-theme" class="red-theme">2</a></li>
					<li><a href="javascript:void(0)" data-skin="blue-theme" class="blue-theme">3</a></li>
					<li><a href="javascript:void(0)" data-skin="yellow-theme" class="yellow-theme">4</a></li>
					<li><a href="javascript:void(0)" data-skin="purple-theme" class="purple-theme">5</a></li>
					<li><a href="javascript:void(0)" data-skin="orange-theme" class="orange-theme">6</a></li>
					<li><a href="javascript:void(0)" data-skin="brown-theme" class="brown-theme">7</a></li>
					<li><a href="javascript:void(0)" data-skin="cadmium-theme" class="cadmium-theme">8</a></li>			
				</ul>
			</div>
		</div>
		
		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{asset('fontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('fontend/assets/js/popper.min.js')}}"></script>
		<script src="{{asset('fontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('fontend/assets/js/rangeslider.js')}}"></script>
		<script src="{{asset('fontend/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('fontend/assets/js/slick.js')}}"></script>
		<script src="{{asset('fontend/assets/js/counterup.min.js')}}"></script>
		
		 
		<script src="{{asset('fontend/assets/js/custom.js')}}"></script><script src="{{asset('fontend/assets/js/cl-switch.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/jobstock-landing-2.2/jobstock/home-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 23:15:18 GMT -->
</html>