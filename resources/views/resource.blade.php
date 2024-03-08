@extends('layouts.home')
@section('content')
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="dancing-script-l-head">Resources </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section-padding">
    <div class="container">
        <div class="row">
            @foreach($resource as $post)

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="category-item">
                    <div class="category-img">
                        <a href="{{ route('download', $post->id) }}"><img src="{{ url($post->img)}}" style="height: 200px" alt="" class="img-fluid w-100"></a>
                    </div>
                    <div class="content">
                        <h4><a href="{{ route('download', $post->id) }}">{{ $post->name }}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>

{{-- <section class="section-padding pt-4"> 
    <div class="container">
        <div class="row">


            <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    @foreach($allBlog as $post)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="{{ route('blog.view', $post->id) }}">
                                    <img src="{{ url($post->b_img) }}" alt="" class="img-fluid w-100" style="height: 250px; width: 75% !important;">
                                </a>
                                <span class="letter-spacing cat-name font-extra text-uppercase font-sm text-color">{{ $post->category->title }}</span>
                                <h3 class="post-title mt-1"><a href="">{{ $post->title }}</a></h3>
                                <span class="text-muted letter-spacing text-uppercase font-sm">{{ $post->created_at->format('F d, Y') }}</span>
                                <div class="post-content mt-4">
                                    <a href="{{ route('blog.view', $post->id) }}" class="btn btn-grey mt-3">Read more</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            
                {{-- <div class="pagination mt-5 pt-4">
                    {{ $post->links() }}
                </div> 
            </div>
            
         
            <div class="col-lg-12">
                <div class="subscribe-home py-4 px-4 mb-5 bg-grey">
                    <div class="form-group row align-items-center mb-0">
                        <label for="colFormLabel" class="col-form-label col-sm-12 h4 col-lg-4">Subscribe for Newsletter</label>
                        <div class="col-sm-6 col-lg-3">
                            <input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel" placeholder="Full Name">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel2" placeholder="Email Address">
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="btn btn-dark">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section> --}}
@endsection