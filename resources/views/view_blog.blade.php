@extends('layouts.home')
@section('content')
@foreach ($allBlog as $item)

<div class="header-logo py-5 d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" class="img-fluid w-100"></a>
            </div>
        </div>
    </div>
</div>


<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..." />
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->

<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="single-post">
                    <div class="post-header mb-5 text-center">
                        <div class="meta-cat">
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                href="#">{{ $item->category->title }}</a>
                          
                        </div>
                        <h2 class="post-title mt-2">
                            {{ $item->title }} </h2>

                        <div class="post-meta">
                            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by Dise</span>
                            <span class="text-uppercase font-sm letter-spacing-1">{{ $item->created_at->format('F d, Y')
                                }}</span>
                        </div>
                        <div class="post-featured-image mt-5">
                            <img src="{{ url($item->b_img) }}" class="img-fluid w-100" style="height: 600px"
                                alt="featured-image">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="entry-content">
                            {!! $item->b_desc !!}
                            <h2 class="mt-4 mb-3">{{ $item->b_title1 }}</h2>
                            {!! $item->b_desc1 !!}

                            <blockquote>
                                <i class="ti-quote-left mr-2"></i>A wise girls knows her limit to touch the
                                sky.Repellat sapiente neque iusto praesentium adipisci.The question gave me an idea,
                                so I answered quickly before Perry could say anything.<i
                                    class="ti-quote-right ml-2"></i>
                            </blockquote>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="{{ url($item->f_img) }}" alt="post-ads" class="img-fluid mr-4 w-100">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="{{ url($item->f_img2) }}" alt="post-ads" class="img-fluid mr-4 w-100">
                                </div>
                            </div>
                            <h3 class="mt-5 mb-3">{{ $item->b_conc }}</h3>

                            {!! $item->b_conc_d !!}

                        </div>




                        <div
                            class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

                            <span class="single-comment-o"><i class="fa fa-comment-o"></i>{{ $ccount }} comment</span>

                           

                            <div class="list-posts-share">
                                
                                {{-- <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a> --}}
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <nav class="post-pagination clearfix border-top border-bottom py-4">
                    @if($previousPost)
                    <div class="prev-post">
                        <a href="{{ route('blog.view', $previousPost->id) }}">
                            <span class="text-uppercase font-sm letter-spacing">Previous</span>
                            <h4 class="mt-3"> {{ $previousPost->title }}</h4>
                        </a>
                    </div>
                    @endif

                    @if($nextPost)
                    <div class="next-post">
                        <a href="{{ route('blog.view', $nextPost->id) }}">
                            <span class="text-uppercase font-sm letter-spacing">Next</span>
                            <h4 class="mt-3">{{ $nextPost->title }}</h4>
                        </a>
                    </div>
                    @endif
                </nav>
                <div class="related-posts-block mt-5">
                    <h3 class="news-title mb-4 text-center">
                        You May Also Like
                    </h3>
                    <div class="row">
                        @foreach($items as $item)

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper mb-4 mb-lg-0">
                                <a href="blog-single.html">
                                    <img class="img-fluid" src="{{ url($item->b_img) }}" alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="blog-single.html">{{ $item->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>

                <div class="comment-area my-5">
                    <h3 class="mb-4 text-center">{{ $ccount }} Comments</h3>
                    <div class="comment-area-box media">
                        @foreach($testimonial as $item)
                        <div class="media-body ml-4">
                            <h4 class="mb-0">{{ $item->name }}</h4>
                            <span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>{{ $item->created_at->format('F d, Y') }} </span>

                            <div class="comment-content mt-3">
                                <p>{{ $item->comments }}</p>
                            </div>
                            
                        </div>
                        @endforeach
                        {{-- <div class="pagination mt-5 pt-4">
                            <ul class="list-inline">
                                @if ($items->onFirstPage())
                                    <li class="list-inline-item disabled"><a href="#" class="active">1</a></li>
                                @else
                                    <li class="list-inline-item"><a href="{{ $items->previousPageUrl() }}" class="prev-posts"><i class="ti-arrow-left"></i></a></li>
                                @endif
                        
                                @php
                                    $links = $items->toArray()['links'];
                                    $currentPage = $items->currentPage();
                                    $lastPage = $items->lastPage();
                                @endphp
                        
                                @for ($i = 1; $i <= $lastPage; $i++)
                                    <li class="list-inline-item {{ ($i == $currentPage) ? 'active' : '' }}"><a href="{{ $items->url($i) }}">{{ $i }}</a></li>
                                @endfor
                        
                                @if ($items->hasMorePages())
                                    <li class="list-inline-item"><a href="{{ $items->nextPageUrl() }}" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                                @else
                                    <li class="list-inline-item disabled"><a href="{{ $items->nextPageUrl() }}" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                                @endif
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <form class="comment-form mb-5 gray-bg p-5" action="{{ route('testimonial.save') }}" method="POST" id="comment-form">
                    @csrf
                    <h3 class="mb-4 text-center">Leave a comment</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                                placeholder="Comment"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
                            </div>
                        </div>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact"
                        value="Submit Message">
                </form>

            </div>
        </div>
    </div>
</section>
@endforeach
@endsection