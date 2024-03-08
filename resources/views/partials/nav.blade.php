<nav class="navbar navbar-expand-lg navigation b_mod">
    <div class="container">
        <a class="navbar-brand d-lg-none" href="index.html"><img src="{{ asset('frontend/images/logo-PSH2.png') }}" alt="" class="img-fluid"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul id="menu" class="menu navbar-nav mx-auto ">
                <li class="nav-item "><a href="{{ route('home') }}" class="nav-link l_mod">Home</a></li>
    
    
    
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link l_mod dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Blog Posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="standard-fullwidth.html">Standard Fullwidth</a>
                        <a class="dropdown-item" href="standard-left-sidebar.html">Standard Left Sidebar</a>
                        <a class="dropdown-item" href="standard-right-sidebar.html">Standard Right Sidebar</a>
                    </div>
                </li> --}}
    
                {{-- <li class="nav-item "><a href="" class="nav-link l_mod">About</a></li> --}}
                {{-- <li class="nav-item "><a href="{{ route('portfolio') }}" class="nav-link l_mod">Portfolio</a></li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle l_mod" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('about') }}">More About me</a>
                        <a class="dropdown-item" href="https://photosbydise.pixieset.com/portfolio/" target="blank">Portfolio</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle l_mod" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Work with me
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('shop') }}">Consultation</a>
                        <a class="dropdown-item" href="{{ route('calendly') }}">Coaching</a>
                        <a class="dropdown-item" href="{{ route('resource') }}">Done for you</a>
                    </div>
                </li>
                <li class="nav-item "><a href="{{ route('blog') }}" class="nav-link l_mod">Blog</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle l_mod" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.teesandessentials.com.ng" target="blank">Tees & Essentials</a>
                        <a class="dropdown-item" href="https://www.emilyssweetsilk.com" target="blank">Emily's Sweet Silk</a>
                    </div>
                </li>
                <li class="nav-item "><a href="{{ route('contact') }}" class="nav-link l_mod">Contact</a></li>
    
    
    
    
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link l_mod dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Post Format
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="post-video.html">Video Formats</a>
                        <a class="dropdown-item" href="post-audio.html">Audio Format</a>
                        <a class="dropdown-item" href="post-link l_mod.html">Quote Format</a>
                        <a class="dropdown-item" href="post-gallery.html">Gallery Format</a>
                        <a class="dropdown-item" href="post-image.html">Image Format</a>
                    </div>
                </li> --}}
    
    
    
            </ul>
        </div>

        {{-- <div class="text-right search d-none d-lg-block">
            <div class="search_toggle"><i class="ti-search"></i></div>
        </div> --}}
    </div>
</nav>