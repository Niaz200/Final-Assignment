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
							
							<h2 class="ipt-title text-light text-center">All Blogs</h2>
							
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Blog List Start ================================== -->
			<section class="gray-simple">
				<div class="container">
				
					<!-- row Start -->
					<div class="row gx-4 gy-4">
					
                    @foreach ($allblogs as $key => $allblog )
						
						<!-- Single blog Grid -->
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="jobstock-grid-blog">
								<div class="jobstock-grid-blog-thumb">
									<img src="{{ asset('images/' . $allblog->image) }}" class="img-fluid" alt="">
								</div>
								<div class="jobstock-grid-blog-body">
									<div class="jobstock-grid-body-header">
										<div class="jobstock-grid-posted bg-primary"><span>{{$allblog->created_at->format('d M Y')}}</span></div>
										<div class="jobstock-grid-title"><h4><a href="blog-detail.html">{{$allblog->title}}</a></h4></div>
									</div>
									<div class="jobstock-grid-body-middle">
										<p>{{Str::limit($allblog->description, 150)}}</p>
									</div>
									<div class="jobstock-grid-body-footer">
										<a href="{{ route('showsingleblog', $allblog->id) }}" class="btn btn-blog-link">Continue Reading</a>
									</div>
								</div>
							</div>
						</div>


                    @endforeach
						
						
						
						
					
						
					</div>
					<!-- /row -->

					<!-- Pagination -->
					<!-- <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<nav aria-label="Page navigation example">
								  <ul class="pagination">
									<li class="page-item">
									  <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									  </a>
									</li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
									<li class="page-item active"><a class="page-link" href="JavaScript:Void(0);">3</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
									<li class="page-item">
									  <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									  </a>
									</li>
								  </ul>
							</nav>
						</div>
					</div>					 -->
					
				</div>	
			</section>
			<!-- ============================ Blog List End ================================== -->
			

		

@endsection