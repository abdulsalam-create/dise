@extends('layouts.home')
@section('content')


<section class="section-padding pt-4" style="margin-top:150px;">
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
                </div> --}}
               

                <div class="pagination mt-5 pt-4">
                    <ul class="list-inline">
                        @if ($allBlog->onFirstPage())
                            <li class="list-inline-item disabled"><a href="#" class="active">1</a></li>
                        @else
                            <li class="list-inline-item"><a href="{{ $allBlog->previousPageUrl() }}" class="prev-posts"><i class="ti-arrow-left"></i></a></li>
                        @endif
                
                        @php
                            $links = $allBlog->toArray()['links'];
                            $currentPage = $allBlog->currentPage();
                            $lastPage = $allBlog->lastPage();
                        @endphp
                
                        @for ($i = 1; $i <= $lastPage; $i++)
                            <li class="list-inline-item {{ ($i == $currentPage) ? 'active' : '' }}"><a href="{{ $allBlog->url($i) }}">{{ $i }}</a></li>
                        @endfor
                
                        @if ($allBlog->hasMorePages())
                            <li class="list-inline-item"><a href="{{ $allBlog->nextPageUrl() }}" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                        @else
                            <li class="list-inline-item disabled"><a href="{{ $allBlog->nextPageUrl() }}" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                        @endif
                    </ul>
                </div>
                
                
                
                
            </div>
            
         
      
        </div>
    </div>
</section>
@endsection