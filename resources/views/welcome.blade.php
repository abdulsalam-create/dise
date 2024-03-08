@extends('layouts.home')
@section('content')

<section class="section-padding pt-4 md-clr">
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <article class="post-grid mb-5">
                    <a class="post-thumb mb-4 d-block">
                        <img src="images/fashion/bg-fashion.jpg" alt="" class="img-fluid w-100">
                    </a>
                    @foreach($h_banner as $item)

                    <h2 class="mb-1 mt-2 post-title"><a>{{ $item->service_title }}</a></h2>

                    <div class="post-content mt-4">
                        {!! $item->service_desc !!}

                    </div>
                    @endforeach
                </article>



            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="sidebar-wrap mt-5 mt-lg-0">
                        <img class="img img-rounded-corners d-img"
                            src="{{ url($item->img) }}">

                    </div>
                </div>
            </div>
            <a href="{{ route('about') }}" class="m-btn btn btn-primary d-block mt-3">Read my full story here</a>
        </div>

    </div>
</section>





<div class="emptyclr">

</div>
<section class="section-padding pt-4">
    <div class="container">
        <h1 class="text-center">WHERE TO NEXT ?</h1>    
        <div class="row">
            @foreach($w_next as $item)
            <div class="col-lg-4">
                <article class="post-grid mb-5">

                    <a class="post-thumb mb-4 d-block mini-img">
                        <img src="{{ url($item->img)}}" alt="" class="img-fluid"  style=" width: 100%;
                        height: 500px;">
                    </a>


                    <div class="post-content mt-4">
                        {!! $item->over_desc !!}

                        <a href="{{ route('about') }}" class="m-btn btn btn-primary d-block mt-3">Read my full story here</a>

                    </div>
                </article>
            </div>
@endforeach
@foreach($w_next2 as $item)
<div class="col-lg-4">
    <article class="post-grid mb-5">
        <a class="post-thumb mb-4 d-block mini-img">
            <img src="{{ url($item->img)}}" alt="" class="img-fluid"  style=" width: 100%;
            height: 500px;">
                    </a>


        <div class="post-content mt-4">
            <p>Seeking guidance on how to get
                started or level up in your journey
                as a creative entrepreneur. I'm here
                to provide clarity and support, let's
                take the next step together.</p>
            <a href="{{ route('calendly') }}" class="m-btn btn btn-primary d-block mt-3">Book a consultation</a>

        </div>
    </article>
</div>
@endforeach
@foreach($w_next3 as $item)
<div class="col-lg-4">
    <article class="post-grid mb-5">
        <a class="post-thumb mb-4 d-block mini-img">
            <img src="{{ url($item->img)}}" alt="" class="img-fluid"  style=" width: 100%;
            height: 500px;">
                    </a>


        <div class="post-content mt-4">
            <p>Here’s some resources to get you
                started on your creative journey
                ensuring you have the right
                strategies, knowledge and attitude
                most importantly</p>
            <a href="{{ route('resource') }}" class="m-btn btn btn-primary d-block mt-3">Grab a resource</a>

        </div>
    </article>
</div>
@endforeach
     

      


        </div>
</section>

<section class="md-clr">
    <div class="row">
        <div class="col-lg-6">
            <article class="post-grid mb-5 ">

                <h3 class="mb-1 mt-2 post-title text-center" style="margin: 0;"><a>HOLD UP!</a></h3>
                <h3 class="mb-1 mt-2 post-title text-center" style="margin: 0;">DON’T MISS THIS FREE GUIDE</h3>

                <div class="post-content mt-4" style="margin-left:50px;" style="margin-top: 100px">
                    <h1 class="mod-mh1">How To</h1>
                    <h1 class="mod-mh1">Monetise</h1>
                    <h1 class="mod-mh1">Your Creative</h1>
                    <h1 class="mod-mh1">Skills</h1>
                </div>
                <a href="{{ route('resource') }}" class="m-btn btn btn-primary d-block mt-3"
                    style="padding: 20px 20px; text-align: center; line-height: 1;">Start Now</a>
            </article>

        </div>
        <div class="col-lg-6">
            @foreach($m_banner as $item)

            <img class="img img-rounded-corners m-img" src="{{ url($item->img) }}">
            @endforeach
        </div>
    </div>
</section>

{{-- end first bannar shi --}}

<div class="clr">

</div>




{{-- <section class="slider pnk-back">
    <h1 class="text-center">READ MORE ON THE BLOG</h1>

    <div class="container ">
        <div class="row no-gutters">
            <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                <div class="slider-item">
                    <div class="slider-item-content">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block s2-img">
                                <img src="{{ asset('frontend/images/fashion/img-1.jpg')}}" alt="" class="img-fluid">
                            </a>


                            <div class="post-content mt-4 pc-mod">
                                <b class="b-mod">5 Reasons Why Every Creative Should Journal</b>
                                <p>Tags</p>

                                <button href="#" class="m-btn btn btn-primary d-block mt-3">Read my full story
                                    here</button>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="slider-item">
                    <div class="slider-item-content">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block s2-img">
                                <img src="{{ asset('frontend/images/fashion/img-1.jpg')}}" alt="" class="img-fluid">
                            </a>


                            <div class="post-content mt-4 pc-mod">
                                <b class="b-mod">5 Reasons Why Every Creative Should Journal</b>
                                <p>Tags</p>

                                <button href="#" class="m-btn btn btn-primary d-block mt-3">Read my full story
                                    here</button>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="slider-item">
                    <div class="slider-item-content">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block s2-img">
                                <img src="{{ asset('frontend/images/fashion/img-1.jpg')}}" alt="" class="img-fluid">
                            </a>


                            <div class="post-content mt-4 pc-mod">
                                <b class="b-mod">5 Reasons Why Every Creative Should Journal</b>
                                <p>Tags</p>

                                <button href="#" class="m-btn btn btn-primary d-block mt-3">Read my full story
                                    here</button>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="slider-item">
                    <div class="slider-item-content">
                        <div class="post-thumb mb-4">
                            <a href="blog-single.html">
                                <img src="images/slider/slider2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>

                        <div class="slider-post-content">
                            <span
                                class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
                            <span class=" text-muted  text-capitalize">September 15, 2019</span>
                        </div>
                    </div>
                </div>

                <div class="slider-item">
                    <div class="slider-item-content">
                        <div class="post-thumb mb-4">
                            <a href="blog-single.html">
                                <img src="images/slider/slider3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>

                        <div class="slider-post-content">
                            <span
                                class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
                            <span class=" text-muted  text-capitalize">September 15, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="section-padding pt-4 pnk-back">
    <div class="container">
      <h1 class="text-center">RECENT BLOGS</h1>
      <div class="row slick-carousel">
        @foreach($allBlog as $item)

        <div class="col-lg-4">
          <article class="post-grid mb-5">
            <a class="post-thumb mb-4 d-block mini-img">
              <img src="{{ url($item->b_img)}}" alt="" class="img-fluid">
            </a>
            <div class="post-content mt-4">
              <h3 style="text-align: center">{{$item->title}}.</h3>
              <button href="#" class="m-btn btn btn-primary d-block mt-3">See More</button>
            </div>
          </article>
        </div>
        @endforeach
        

    
      </div>
    </div>
  </section>




  <section class=" mt-4">
    <h1 class="text-center">Youtube</h1>

    <div class="" style="text-align: center">
        <p style="margin: 0 auto; ">Want free, actionable business advice every week?</p>
        <p style="margin: 0 auto; ">Join the community on YouTube.</p>
        <p style="margin: 0 auto; margin-bottom:10px;"> New videos drop every week!</p>
        <iframe style="margin-bottom: 20px" width="560" height="315"
            src="https://www.youtube.com/embed/Nih4XqEuVIc?si=Uu3ckdqk11rcWRDm" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
</section>
<div class="emptyclr">

</div>
<section class="md-clr">
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <article class="post-grid mb-5 ">
                <div class="news-ctc">
                <div class="post-content mt-4 text-center" style="padding-top: 20px">
                    <h1>Subscribe to My</h1>
                    <h1> Email List</h1>
                </div>
                <div class="post-content mt-4 text-center" style="margin-top: 100px">
                    <p>TIPS, FREEBIES, NEWS</p>
                    <p style="color: #A82324;">STAY UPDATED!</p>
                </div>
            </div>
            <div class="post-content mt-4 text-center" style="margin-top: 100px">

                    <p><i class="ti-email" style="margin-right: 10px"></i>disebuseri@gmail.com</p>
                    <p><i class="ti-location-pin" style="margin-right: 10px"></i>Lagos, Nigeria</p>
            </div>
            </article>
            <div class="post-grid">
            <div class="text-center">
        </div>
        </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
           
            <article class="post-grid mb-5" style="margin: 0;">
                <form action="{{ route('mailing') }}" method="post">
                    @csrf
                <div class="post-content mt-4">
                    <label for="name" class="lbl-mod">Name</label>
                </div>
                <div class="post-content mt-4" style="margin-top: 100px">
                    <input type="text" name="name" id="name" class="form-mod">
                </div>
                <div class="post-content mt-2">
                    <label for="email" style="margin-bottom: 10px" class="lbl-mod">Email</label>
                </div>
                <input type="email" id="email" name="email" class="form-mod">
                <button type="submit" class="m-btn btn btn-primary d-block mt-3"
                    style="padding: 20px 20px; text-align: center; line-height: 1;">Start Now</button>
                </form>
            </article>
        </div>
    

    </div>
    @endsection