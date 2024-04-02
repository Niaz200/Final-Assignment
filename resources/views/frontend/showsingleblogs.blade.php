@extends('layout.fontend-master')

@section('page_title')
show single jobs
@endsection

@section('content')

<section class="py-5" ></section>

<!-- ============================ Page Title Start================================== -->
<div class="page-bg">
				<div class="blog-thumb"><img src="{{ asset('images/' . $blogs->image) }}" class="img-fluid" alt=""></div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Agency List Start ================================== -->
			<section class="gray-simple">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<!-- Blog Detail -->
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="blog-details single-post-item format-standard mb-4">
								<div class="post-details">
									
									<div class="post-top-meta mb-2">
										<span class="pst-cats label text-success bg-light-success me-2">Updates</span>
										<span class="pst-date label text-danger bg-light-danger">{{$blogs->created_at->format('d M Y')}}</span>
									</div>
									<h3 class="post-title lh-base">{{$blogs->title}}?</h3>
									<p>{{$blogs->description}}.</p>
									<!-- <div class="alert alert-success">
										<span class="icon"><i class="fas fa-quote-left"></i></span>
										<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tem
										ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p>
										<h5 class="name">- Rosalina Pong</h5>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
										exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
										dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qu
										voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
										inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
										ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
										magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
										dolorem. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
										culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
										iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
										eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
										explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos qui ratione voluptatem.</p> -->
									<!-- <div class="post-bottom-meta">
										<div class="post-tags">
											<h4 class="pbm-title">Related Tags</h4>
											<ul class="list">
												<li><a href="#">organic</a></li>
												<li><a href="#">Foods</a></li>
												<li><a href="#">tasty</a></li>
											</ul>
										</div>
									</div> -->
								</div>
								
								<div class="pst-foot-roiu">								
									<div class="post-share">
										<ul class="list">
											<li><i class="fa-solid fa-share-nodes"></i></li>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-tumblr"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<!-- Blog Comment -->
							<!-- <div class="blog-details single-post-item format-standard">
								<div class="post-details">
								
									<div class="comment-area">
										<div class="all-comments">
											<h3 class="comments-title">05 Comments</h3>
											<div class="comment-list">
												<ul>
													<li class="single-comment">
														<article>
															<div class="comment-author">
																<img src="assets/img/user-1.png" class="img-fluid circle" alt="">
															</div>
															<div class="comment-details">
																<div class="comment-meta">
																	<div class="comment-left-meta">
																		<h4 class="author-name">Rosalina Kelian <span class="selected"><i class="fas fa-bookmark"></i></span></h4>
																		<div class="comment-date">19th May 2018</div>
																	</div>
																	<div class="comment-reply">
																		<a href="#" class="reply"><span class="icona"><i class="ti-back-left"></i></span> Reply</a>
																	</div>
																</div>
																<div class="comment-text">
																	<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																		perspiciatis unde omnis iste natus error.</p>
																</div>
															</div>
														</article>
														<ul class="children">
															<li class="single-comment">
																<article>
																	<div class="comment-author">
																		<img src="assets/img/user-2.png" class="img-fluid circle" alt="">
																	</div>
																	<div class="comment-details">
																		<div class="comment-meta">
																			<div class="comment-left-meta">
																				<h4 class="author-name">Rosalina Kelian</h4>
																				<div class="comment-date">19th May 2018</div>
																			</div>
																			<div class="comment-reply">
																				<a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
																			</div>
																		</div>
																		<div class="comment-text">
																			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																				perspiciatis unde omnis iste natus error.</p>
																		</div>
																	</div>
																</article>
																<ul class="children">
																	<li class="single-comment">
																		<article>
																			<div class="comment-author">
																				<img src="assets/img/user-3.png" class="img-fluid circle" alt="">
																			</div>
																			<div class="comment-details">
																				<div class="comment-meta">
																					<div class="comment-left-meta">
																						<h4 class="author-name">Rosalina Kelian</h4>
																						<div class="comment-date">19th May 2018</div>
																					</div>
																					<div class="comment-reply">
																						<a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
																					</div>
																				</div>
																				<div class="comment-text">
																					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																						perspiciatis unde omnis iste natus error.</p>
																				</div>
																			</div>
																		</article>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="single-comment">
														<article>
															<div class="comment-author">
																<img src="assets/img/user-4.png" class="img-fluid circle" alt="">
															</div>
															<div class="comment-details">
																<div class="comment-meta">
																	<div class="comment-left-meta">
																		<h4 class="author-name">Rosalina Kelian</h4>
																		<div class="comment-date">19th May 2018</div>
																	</div>
																	<div class="comment-reply">
																		<a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
																	</div>
																</div>
																<div class="comment-text">
																	<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																		perspiciatis unde omnis iste natus error.</p>
																</div>
															</div>
														</article>
													</li>
												</ul>
											</div>
										</div>
										<div class="comment-box submit-form">
											<h3 class="reply-title">Post Comment</h3>
											<div class="comment-form">
												<form action="#">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-12">
															<div class="form-group">
																<input type="text" class="form-control" placeholder="Your Name">
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12">
															<div class="form-group">
																<input type="text" class="form-control" placeholder="Your Email">
															</div>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<textarea name="comment" class="form-control" cols="30" rows="6" placeholder="Type your comments...."></textarea>
															</div>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<a href="#" class="btn btn-primary">Submit Now</a>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							
							
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="pg-side-groups">
								
								<div class="pg-side-block">
									<div class="pg-side-block-head">
										<div class="pg-side-left">
											<div class="pg-side-thumb"><img src="assets/img/team-6.jpg" class="img-fluid circle" alt=""></div>
										</div>
										<div class="pg-side-right">
											<div class="pg-side-right-caption">
												<h4>{{$blogs->user->name}}</h4>
												<span><i class="fa-solid fa-location-dot me-2"></i>{{$blogs->user->profile->country}}</span>
											</div>
										</div>
									</div>
									<div class="pg-side-block-body">
										<div class="pg-side-block-info">
											<div class="vl-elfo-group">
												<div class="vl-elfo-icon"><i class="fa-solid fa-phone-volume"></i></div>
												<div class="vl-elfo-caption"><h6>Call Us</h6><p>+88{{$blogs->user->profile->mobile}}</p></div>
											</div>
											<div class="vl-elfo-group">
												<div class="vl-elfo-icon"><i class="fa-regular fa-envelope"></i></div>
												<div class="vl-elfo-caption"><h6>Drop A Mail</h6><p>{{$blogs->user->email}}</p></div>
											</div>
											<div class="vl-elfo-group">
												<div class="vl-elfo-icon"><i class="fa-solid fa-globe"></i></div>
												<div class="vl-elfo-caption"><h6>Website</h6><p>{{$blogs->user->profile->website}}</p></div>
											</div>
										</div>
										<!-- <div class="pg-side-block-buttons">
											<div class="single-button"><a href="JavaScript:Void(0);" class="btn fw-medium btn-primary full-width"><i class="fa-solid fa-comments me-2"></i>Send A Message</a></div>
										</div> -->
									</div>
								</div>
							
							</div>
						</div>
						
					</div>
					<!-- /row -->					
					
				</div>
						
			</section>
			<!-- ============================ Agency List End ================================== -->
			
			
			


@endsection