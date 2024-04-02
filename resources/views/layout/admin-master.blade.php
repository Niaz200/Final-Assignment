
<!doctype html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/jobstock-landing-2.2/jobstock/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 23:15:37 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
		
        <title>@yield('page_title')</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/img/favicon.png')}}">
		
        <!-- Custom CSS -->
        <link href="{{ asset('dashboard/assets/css/styles.css')}}" rel="stylesheet">
        <link href="{{ asset('dashboard/assets/css/custom.css')}}" rel="stylesheet">
		
		<!-- Colors CSS -->
        <link href="{{ asset('dashboard/assets/css/colors.css')}}" rel="stylesheet">
	
		
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
			<div class="header header-light head-fixed">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{ asset('dashboard/assets/img/logo.png')}}" class="logo" alt="">
							</a>
							<div class="nav-toggle"></div>
							<ul class="mobile_nav dhsbrd">
								<li>
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa-regular fa-comments"></i><span class="noti-status"></span>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<div class="drp_menu_headr bg-primary">
												<h4>Notifications</h4>
											</div>
											<div class="ntf-list-groups">
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-purple"><i class="fa-solid fa-house-medical-circle-check"></i></div>
													<div class="ntf-list-groups-caption"><p class="small"><strong>Kr. Shaury Preet</strong> Replied Your Message</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-warning"><i class="fa-solid fa-envelope"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Mortin Denver Accepted Your Resume <strong class="text-success">On Job Stock</strong></p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-success"><i class="fa-solid fa-sack-dollar"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Your Job #456256 Expired Yesterday <strong>View job</strong></p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-danger"><i class="fa-solid fa-comments"></i></div>
													<div class="ntf-list-groups-caption"><p class="small"><strong>Daniel kurwa</strong> Has Been Approved Your Resume!.</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-info"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Khushi Verma Left A Review On <strong class="text-danger">Your Message</strong></p></div>
												</div>
												<div class="ntf-list-groups-single">
													<a href="#" class="ntf-more">View All Notifications</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img src="{{ asset('dashboard/assets/img/user-5.png')}}" class="img-fluid circle" alt="">
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<div class="drp_menu_headr bg-primary">
												<h4>Hi, Dhananjay</h4>
												<div class="drp_menu_headr-right"><button type="button" class="btn btn-whites">Logout</button></div>
											</div>
											<ul>
												<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1"></span></a></li>                                  
												<li><a href="{{ route('profile') }}"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
												<!-- <li><a href="candidate-resume.html"><i class="fa fa-file"></i>My Resume<span class="notti_coun style-2">7</span></a></li>
												<li><a href="candidate-saved-jobs.html"><i class="fa-solid fa-bookmark"></i>Saved Resume</a></li>
												<li><a href="candidate-messages.html"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
												<li><a href="candidate-change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
												<li><a href="candidate-delete-account.html"><i class="fa-solid fa-trash-can"></i>Delete Account</a></li> -->
											</ul>
										</div>
									</div>
								</li>
							</ul>
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

								{{--

									@php
                                        $menus = App\Models\Menu::get();;
                                    @endphp

							
								
								@foreach ($menus as $key => $menu )
								
									<li><a href="JavaScript:Void(0);">{{ $menu->name }}<span class="submenu-indicator"></span></a>
										<ul class="nav-dropdown nav-submenu">

									@php
                                        $submenus = App\Models\Submenu::get();;
                                    @endphp

										@foreach ($menu->submenu as $key => $submenu )

											<li><a href="JavaScript:Void(0);">{{ $submenu->name }}<span class="submenu-indicator"></span></a>
												<ul class="nav-dropdown nav-submenu">
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
												</ul>
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

								
									--}}
								
								<!-- <li><a href="#">Help</a></li> -->
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right dhsbrd">
								<li>
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa-regular fa-comments"></i><span class="noti-status"></span>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<div class="drp_menu_headr bg-primary">
												<h4>Notifications</h4>
											</div>
											<div class="ntf-list-groups">
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-purple"><i class="fa-solid fa-house-medical-circle-check"></i></div>
													<div class="ntf-list-groups-caption"><p class="small"><strong>Kr. Shaury Preet</strong> Replied Your Message</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-warning"><i class="fa-solid fa-envelope"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Mortin Denver Accepted Your Resume <strong class="text-success">On Job Stock</strong></p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-success"><i class="fa-solid fa-sack-dollar"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Your Job #456256 Expired Yesterday <strong>View job</strong></p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-danger"><i class="fa-solid fa-comments"></i></div>
													<div class="ntf-list-groups-caption"><p class="small"><strong>Daniel kurwa</strong> Has Been Approved Your Resume!.</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-info"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Khushi Verma Left A Review On <strong class="text-danger">Your Message</strong></p></div>
												</div>
												<div class="ntf-list-groups-single">
													<a href="#" class="ntf-more">View All Notifications</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img src="{{ asset('dashboard/assets/img/user-5.png')}}" class="img-fluid circle" alt="">
										</button>
									

										<div class="dropdown-menu pull-right animated flipInX">
											<div class="drp_menu_headr bg-primary">
											@if(isset(Auth::user()->profile->full_name ))
												<h4>Hi,{{ Auth::user()->profile->full_name }}</h4>
											
											@else
											<h4>Hi,{{ Auth::user()->name }}</h4>

											@endif
												
												

											<!-- <h4>Hi,{{ Auth::user()->name }}</h4> -->
												<!-- <div class="drp_menu_headr-right"><button type="button" class="btn btn-whites">Logout</button></div> -->
												<div class="drp_menu_headr-right"><button type="button" class="btn btn-whites">
													<a href="{{ route('logout') }}" onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">Logout</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
													</button>
												</div>
											</div>
											<ul>
												<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1"></span></a></li>                                  
												<li><a href="{{ route('profile') }}"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
												<!-- <li><a href="candidate-resume.html"><i class="fa fa-file"></i>My Resume<span class="notti_coun style-2">7</span></a></li>
												<li><a href="candidate-saved-jobs.html"><i class="fa-solid fa-bookmark"></i>Saved Resume</a></li>
												<li><a href="candidate-messages.html"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
												<li><a href="candidate-change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
												<li><a href="candidate-delete-account.html"><i class="fa-solid fa-trash-can"></i>Delete Account</a></li> -->
											</ul>
										</div>
									</div>
								</li>
								<li class="list-buttons ms-2">
								@if(Request::is('admin*'))
								<a href="{{ route('addpostjob') }}"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Post Job</a>
								@elseif(Request::is('employer*')) 
								<a href="{{ route('addempostjob') }}"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Post Job</a>
								@else
								@endif
									 
								</li>
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
			
			<!-- ======================= dashboard Detail ======================== -->
				<div class="dashboard-wrap bg-light">
					<a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
						<i class="fas fa-bars mr-2"></i>Dashboard Navigation
					</a>
					<div class="collapse" id="MobNav">
						<div class="dashboard-nav">
							<div class="dash-user-blocks pt-5">
								<div class="jbs-grid-usrs-thumb">
									<div class="jbs-grid-yuo">
										<a href="candidate-detail.html"><figure><img src="{{ asset('dashboard/assets/img/l-12.png')}}" class="img-fluid circle" alt=""></figure></a>
									</div>
								</div>
								<div class="jbs-grid-usrs-caption mb-3">
									<div class="jbs-kioyer">
										<span class="label text-light theme-bg">05 Openings</span>
									</div>
									<div class="jbs-tiosk">
										<h4 class="jbs-tiosk-title"><a href="candidate-detail.html">Instagram App</a></h4>
										<div class="jbs-tiosk-subtitle"><span><i class="fa-solid fa-location-dot me-2"></i>Canada</span></div>
									</div>
								</div>
							</div>
							<div class="dashboard-inner">
								<ul data-submenu-title="Main Navigation">
								@if(Request::is('admin*'))
								
									<li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
									<li><a href="{{ route('profile') }}"><i class="fa-regular fa-user me-2"></i>User Profile </a></li> 
									<li><a href="{{ route('addmenu') }}"><i class="fa-solid fa-list me-2"></i>Add Menu </a></li>
									<li><a href="{{ route('allmenu') }}"><i class="fa-solid fa-table-list me-2"></i>All Menu </a></li>
									<li><a href="{{ route('addsubmenu') }}"><i class="fa-solid fa-list me-2"></i>Add SubMenu </a></li>
									<li><a href="{{ route('allsubmenu') }}"><i class="fa-solid fa-table-list me-2"></i>All SubMenu </a></li>
									<li><a href="{{ route('addcategory') }}"><i class="fa-solid fa-list me-2"></i>Add Category </a></li>
									<li><a href="{{ route('allcategory') }}"><i class="fa-solid fa-table-list me-2"></i>All Category </a></li>
									<li><a href="{{ route('allpostjobs') }}"><i class="fa-solid fa-business-time me-2"></i>All Pending Jobs</a></li> 
									<li><a href="{{ route('allapprove') }}"><i class="fa-solid fa-business-time me-2"></i>All Approved Jobs</a></li>
									<li><a href="{{ route('addpostjob') }}"><i class="fa-solid fa-pen-ruler me-2"></i>Submit Jobs</a></li>
								{{--	<li><a href="{{ route('allapplication') }}"><i class="fa-solid fa-user-group me-2"></i>Applicants Jobs</a></li>  --}}
									<!-- <li><a href="employer-shortlist-candidates.html"><i class="fa-solid fa-user-clock me-2"></i>Shortlisted Candidates</a></li> -->
									<li><a href="{{ route('addblogs') }}"><i class="fa-solid fa-wallet me-2"></i>Add Blog</a></li>
									<li><a href="{{ route('allblog') }}"><i class="fa-solid fa-wallet me-2"></i>All Blog</a></li>
									<li><a href="{{ route('allmessage') }}"><i class="fa-solid fa-wallet me-2"></i>All Contacts</a></li>
									<!-- <li><a href="employer-package.html"><i class="fa-solid fa-wallet me-2"></i>Package</a></li>
									<li><a href="employer-messages.html"><i class="fa-solid fa-comments me-2"></i>Messages</a></li>
									<li><a href="employer-change-password.html"><i class="fa-solid fa-unlock-keyhole me-2"></i>Change Password</a></li>
									<li><a href="employer-delete-account.html"><i class="fa-solid fa-trash-can me-2"></i>Delete Account</a></li> -->

								@endif


								@if(Request::is('employer*'))
								
								<li class="active"><a href="{{ route('employer.dashboard') }}"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
								<li><a href="{{ route('emprofile') }}"><i class="fa-regular fa-user me-2"></i>User Profile </a></li> 
							
								<li><a href="{{ route('allempostjobs') }}"><i class="fa-solid fa-business-time me-2"></i>My Pending Jobs</a></li>
								
								
								<li><a href="{{ route('addempostjob') }}"><i class="fa-solid fa-pen-ruler me-2"></i>Submit Jobs</a></li>
								<li><a href="{{ route('allemapprove') }}"><i class="fa-solid fa-business-time me-2"></i>All Approved Jobs</a></li>
								 <li><a href="{{ route('allapplica') }}"><i class="fa-solid fa-user-group me-2"></i>Applicants Jobs</a></li>
								<li><a href="{{ route('allshortlistjob') }}"><i class="fa-solid fa-user-clock me-2"></i>Shortlisted Candidates</a></li>
								{{--<li><a href="{{ route('addblogs') }}"><i class="fa-solid fa-wallet me-2"></i>Add Blog</a></li>
								<li><a href="{{ route('allblog') }}"><i class="fa-solid fa-wallet me-2"></i>All Blog</a></li>
								<li><a href="employer-package.html"><i class="fa-solid fa-wallet me-2"></i>Package</a></li>
								<li><a href="employer-messages.html"><i class="fa-solid fa-comments me-2"></i>Messages</a></li>
								<li><a href="employer-change-password.html"><i class="fa-solid fa-unlock-keyhole me-2"></i>Change Password</a></li>
								<li><a href="employer-delete-account.html"><i class="fa-solid fa-trash-can me-2"></i>Delete Account</a></li>

								--}}

								@endif

								@if(Request::is('user*'))
								
								<li class="active"><a href="{{ route('user.dashboard') }}"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
								<li><a href="{{ route('userprofile') }}"><i class="fa-regular fa-user me-2"></i>User Profile </a></li> 
							
								<li><a href="{{ route('allpending') }}"><i class="fa-regular fa-paper-plane me-2"></i>Applied jobs</a></li>
								
								
								<li><a href="{{ route('alluserapprove') }}"><i class="fa-solid fa-business-time me-2"></i>All Approved Jobs</a></li>
								{{-- <li><a href="employer-applicants-jobs.html"><i class="fa-solid fa-user-group me-2"></i>Applicants Jobs</a></li>
								<li><a href="employer-shortlist-candidates.html"><i class="fa-solid fa-user-clock me-2"></i>Shortlisted Candidates</a></li>
								<li><a href="{{ route('addblogs') }}"><i class="fa-solid fa-wallet me-2"></i>Add Blog</a></li>
								<li><a href="{{ route('allblog') }}"><i class="fa-solid fa-wallet me-2"></i>All Blog</a></li>
								<li><a href="employer-package.html"><i class="fa-solid fa-wallet me-2"></i>Package</a></li>
								<li><a href="employer-messages.html"><i class="fa-solid fa-comments me-2"></i>Messages</a></li>
								<li><a href="employer-change-password.html"><i class="fa-solid fa-unlock-keyhole me-2"></i>Change Password</a></li>
								<li><a href="employer-delete-account.html"><i class="fa-solid fa-trash-can me-2"></i>Delete Account</a></li>

								--}}

								@endif


									<li>
									{{--	<a href="index.html"><i class="fa-solid fa-power-off me-2"></i>Log Out</a> --}}

										<a href="{{ route('logout') }}" onclick="event.preventDefault();
                    					document.getElementById('logout-form').submit();"><i class="fa-solid fa-power-off me-2"></i> Log Out</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
								
									</li>
								</ul>
							</div>					
						</div>
					</div>
				

                    <div class="dashboard-content">

						@yield('content')


						

						<!-- footer -->

						<div class="row">
							<div class="col-md-12">
								<div class="py-3 text-center">© 2015 - 2023 Job Stock® Themezhub.</div>
							</div>
						</div>	
					

                    </div>

				

					
					
		
							
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->

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
		
		<script src="{{ asset('dashboard/assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset('dashboard/assets/js/popper.min.js')}}"></script>
		<script src="{{ asset('dashboard/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('dashboard/assets/js/rangeslider.js')}}"></script>
		<script src="{{ asset('dashboard/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{ asset('dashboard/assets/js/slick.js')}}"></script>
		<script src="{{ asset('dashboard/assets/js/counterup.min.js')}}"></script>
		
		
		<script src="{{ asset('dashboard/assets/js/custom.js')}}"></script><script src="{{ asset('dashboard/assets/js/cl-switch.js')}}"></script>
		
		<!-- Morris.js charts -->
		<script src="{{ asset('dashboard/assets/js/raphael/raphael.min.js')}}"></script>
		<script src="{{ asset('dashboard/assets/js/morris.js/morris.min.js')}}"></script>
		<!-- Custom Chart JavaScript -->
		<script src="{{ asset('dashboard/assets/js/custom/dashboard.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/jobstock-landing-2.2/jobstock/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 23:15:40 GMT -->
</html>