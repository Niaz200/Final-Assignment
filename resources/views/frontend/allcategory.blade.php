@extends('layout.fontend-master')

@section('page_title')
show allcategory jobs
@endsection

@section('content')

<section class="py-5" ></section>


<div class="container">
				
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 text-center">
                        <div class="sec-heading center">
                            <h2>Explore Top Categories</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                    </div>
                </div>
            
                <div class="row justify-content-center gx-4 gy-4">

                <?php
                 $classes = ["fa-solid fa-file-invoice text-primary", "fa-solid fa-caravan text-primary","fa-solid fa-person-chalkboard text-primary","fa-solid fa-user-graduate text-primary","fa-solid fa-briefcase-medical text-primary"];
                 ?>

                @foreach ($allcategoris as $key => $categor )
                
                    <!-- Single Item -->
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="category-box light">
                            <div class="category-desc">
                                <div class="category-icon">
                                    <!-- <i class="fa-solid fa-file-invoice text-primary"></i> -->
                                    <i class="<?php echo $classes[$key];?>"></i>
                                    <!-- <i class="fa-solid fa-file-invoice abs-icon"></i> -->
                                </div>
                                <div class="category-detail category-desc-text">
                                    <h4 class="fs-5"><a href="{{ route('categorywisealljob', $categor->id) }}">{{ $categor->name }}</a></h4>
                                    <p>122 Active Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
    </div>                      


@endsection