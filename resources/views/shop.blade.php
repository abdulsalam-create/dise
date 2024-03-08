<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dise Buseri</title>
    <meta name='robots' content='max-image-preview:large' />
{{-- 
    <link rel='stylesheet' id='convertkit-broadcasts-css'
        href='https://kievachrisamusan.com/wp-content/plugins/convertkit/resources/frontend/css/broadcasts.css?ver=2.1.2'
        media='all' />
    <link rel='stylesheet' id='convertkit-product-css'
        href='https://kievachrisamusan.com/wp-content/plugins/convertkit/resources/frontend/css/product.css?ver=2.1.2'
        media='all' />


    <link rel='stylesheet' id='qi-addons-for-elementor-style-css'
        href='https://kievachrisamusan.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href='https://kievachrisamusan.com/wp-content/themes/hello-elementor/style.min.css?ver=2.7.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='https://kievachrisamusan.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.7.1' media='all' /> --}}

        <link rel="stylesheet" href="{{ asset('frontend/css/front-lite.css') }}" media="all">



   
        <link rel="stylesheet" href="{{ asset('frontend/css/post-5.css') }}" media="all">

 
    {{-- <link rel='stylesheet' id='elementor-pro-css'
        href='https://kievachrisamusan.com/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.19.3'
        media='all' /> --}}

        
    {{-- <link rel='stylesheet' id='elementor-global-css'
        href='https://kievachrisamusan.com/wp-content/uploads/elementor/css/global.css?ver=1682276732' media='all' /> --}}
        <link rel="stylesheet" href="{{ asset('frontend/css/frnt3.css') }}" media="all">

        <link rel="stylesheet" href="{{ asset('frontend/css/post732.css') }}" media="all">
        <link rel="stylesheet" href="{{ asset('frontend/css/global.css') }}" media="all">

  

        {{-- to remove --}}
    {{-- <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://kievachrisamusan.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='https://kievachrisamusan.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='https://kievachrisamusan.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='https://kievachrisamusan.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3'
        media='all' /> --}}

        {{-- to end remove --}}
   

    {{-- <link rel="canonical" href="https://kievachrisamusan.com/express-consult/" />
    <link rel='shortlink' href='https://kievachrisamusan.com/?p=732' />
    <link rel="alternate" type="application/json+oembed"
        href="https://kievachrisamusan.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkievachrisamusan.com%2Fexpress-consult%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://kievachrisamusan.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkievachrisamusan.com%2Fexpress-consult%2F&#038;format=xml" /> --}}

    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Themify -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/magnific-popup/magnific-popup.css') }}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  
        <script src="{{ asset('frontend/js/custom.js') }}"></script>
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-732 wp-custom-logo qodef-qi--no-touch qi-addons-for-elementor-1.5.8 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-732">


    <div class="header-logo  d-none d-lg-block md-clr">{{--removed the py-5 class--}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/images/logo-PSH.png') }}" alt="" class="img-fluid w-100"></a>
				</div>
			</div>
		</div>
	</div>
    <header class="header-top bg-grey justify-content-center md-clr">
		@include('partials.nav')

	</header>
    <hr>
    @foreach($consult as $item)
    <div data-elementor-type="wp-page" data-elementor-id="732" class="elementor elementor-732"
        data-elementor-post-type="page">

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-8ce05d9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="8ce05d9" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aaf467c"
                    data-id="aaf467c" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f48495e elementor-widget elementor-widget-image"
                            data-id="f48495e" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="683" height="1024"
                                src="{{$item->i_img}}"
                                    sizes="(max-width: 683px) 100vw, 683px" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bc222b2"
                    data-id="bc222b2" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-261f88b e-transform elementor-widget elementor-widget-heading"
                            data-id="261f88b" data-element_type="widget"
                           
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">{{ $item->h }}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-70be07d elementor-widget elementor-widget-heading"
                            data-id="70be07d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">{{ $item->h_0 }}</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d1c6e5b elementor-widget elementor-widget-text-editor"
                            data-id="d1c6e5b" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                {{-- <p>→ You are super-stressed because you have to keep “hustling” to get visible on social
                                    media so you can land high-ticket clients.<br /><br />→ You have been told that you
                                    need a “funnel” and you tried building one but there hasn’t been any significant
                                    difference in your sales so far.<br /><br />→ The current income from your business
                                    cannot pay all your bills and you worry that you’ll end up looking like a
                                    failure.<br /><br />→ You feel stuck and tired of your current level and you need
                                    clear direction on the steps you need to take to attract premium clients?</p> --}}
                                    {!! $item->h_desc !!}
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-19809f6 elementor-widget elementor-widget-qi_addons_for_elementor_typeout_text"
                            data-id="19809f6" data-element_type="widget"
                            data-widget_type="qi_addons_for_elementor_typeout_text.default">
                            <div class="elementor-widget-container">
                                <div class="qodef-shortcode qodef-m  qodef-qi-typeout-text"
                                    data-strings="[&quot;{{ $item->h_2 }} &quot;]" data-cursor="|">
                                    <h2 class="qodef-m-text">
                                        {{ $item->h_1 }} <span class="qodef-typeout-holder">
                                            <span class="qodef-typeout"></span>
                                        </span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0568f91 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="0568f91" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fad765a"
                    data-id="fad765a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-01f005e elementor-widget elementor-widget-text-editor"
                            data-id="01f005e" data-element_type="widget" data-widget_type="text-editor.default">
                            {{-- <div class="elementor-widget-container"> --}}
                                {{-- <p>It’s perfectly normal to feel out of depth when it comes to online
                                    marketing.<br />Afterall, even though you’re an expert in what you do, you are not a
                                    growth strategist!</p>
                                <p><strong><em>This is where I come in…</em></strong></p>
                                <p>In this 60-minute intensive strategy session, you will talk to me about what
                                    you&#8217;re working on, show me where you&#8217;re stuck or pick my brain about an
                                    idea you have.</p>
                                <p>And then together, we will brainstorm and review your current marketing systems and
                                    you will walk away with a clear strategy &amp; action plan.</p> --}}
                                    {!! $item->h_0_desc !!}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f8df643 elementor-hidden-mobile"
                    data-id="f8df643" data-element_type="column" style="background-image: url({{$item->i_img}}); background-size: cover; background-position: center center;"
                    >
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f5e631d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="f5e631d" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dfaf88e"
                    data-id="dfaf88e" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a2a8654 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline"
                            data-id="a2a8654" data-element_type="widget"
                            data-settings="{&quot;marker&quot;:&quot;underline&quot;,&quot;highlighted_text&quot;:&quot;Expect&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                            data-widget_type="animated-headline.default">
                            <div class="elementor-widget-container">
                                <link rel="stylesheet"
                                    href="https://kievachrisamusan.com/wp-content/plugins/elementor-pro/assets/css/widget-animated-headline.min.css">
                                <h3 class="elementor-headline">
                                    <span class="elementor-headline-plain-text elementor-headline-text-wrapper">{{$item->h_3}} </span>
                                    <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                        
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-57e002b elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default"
            data-id="57e002b" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-wide">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee1b26c"
                    data-id="ee1b26c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ce492e5 elementor-position-left elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                            data-id="ce492e5" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <link rel="stylesheet"
                                    href="https://kievachrisamusan.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon elementor-animation-">
                                            <i aria-hidden="true" class="fas fa-calendar-day"></i> </span>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                        <h3 class="elementor-icon-box-title">
                                            {{-- <span>
                                                You book your session using the button below </span> --}}
                                                {!!$item->h_1_desc!!}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-a31019f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="a31019f" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-wide">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6af49af"
                    data-id="6af49af" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b176e60 elementor-widget elementor-widget-text-editor"
                            data-id="b176e60" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                               {!! $item->h_2_desc !!}
                            </div>
                        </div>
                     
                        <div class="elementor-element elementor-element-e213fc7 elementor-widget elementor-widget-heading"
                            data-id="e213fc7" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">{{ $item->h_4 }}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6c7a78c elementor-align-justify elementor-widget elementor-widget-button"
                            data-id="6c7a78c" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-md"
                                        href="{{ route('calendly') }}">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Book your slot now</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0191831 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="0191831" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d45f810"
                    data-id="d45f810" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8439cd0 elementor-widget elementor-widget-heading"
                            data-id="8439cd0" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">{{ $item->h_5 }}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4f0d148 elementor-widget elementor-widget-testimonial"
                            data-id="4f0d148" data-element_type="widget" data-widget_type="testimonial.default">
                            <div class="elementor-widget-container">
                                
                                <div class="elementor-testimonial-wrapper">
                                    <div class="elementor-testimonial-content" style="font-weight: bolder">{!! $item->h_3_desc !!}</div>

                                    <div
                                        class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                        <div class="elementor-testimonial-meta-inner">
                                            <div class="elementor-testimonial-image">
                                                <img decoding="async" width="1416" height="2000"
                                                src="{{$item->i_img2}}" style="border-radius: 5px"
                                                    sizes="(max-width: 1416px) 100vw, 1416px" />
                                            </div>

                                            <div class="elementor-testimonial-details">
                                                <div class="elementor-testimonial-name">{{ $item->h_6 }}</div>
                                                <div class="elementor-testimonial-job">{{ $item->h_7 }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8d4f46d elementor-align-justify elementor-widget elementor-widget-button"
                            data-id="8d4f46d" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                        href="{{ route('calendly') }}">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">I’m Ready To Work With You</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
    </div>
    <div data-elementor-type="footer" data-elementor-id="137" class="elementor elementor-137 elementor-location-footer"
        data-elementor-post-type="elementor_library">   
    </div>
    @endforeach




    <script
        src="https://kievachrisamusan.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.4.3"
        id="qi-addons-for-elementor-script-js"></script>
 
  
    <script
        src="https://kievachrisamusan.com/wp-content/plugins/qi-addons-for-elementor/inc/shortcodes/typeout-text/assets/js/plugins/typed.js?ver=1"
        id="typed-js"></script>



  




    <!-- initialize jQuery Library -->
    <script src="{{ asset('frontend/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/js/popper.min.js') }}"></script>
    <!-- Owl caeousel -->
    <script src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/magnific-popup/magnific-popup.js') }}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('frontend/plugins/instafeed-js/instafeed.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Make sure jQuery is included before fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


</body>

</html>
