<nav class="navbar bg-secondary navbar-dark">
    <a href="#" class="navbar-brand mx-4 mb-3">
        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Dise's Blog</h3>
    </a>
    <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
            <img class="rounded-circle" src="{{ asset('frontend/img/hero/hm.jpg') }}" alt="s"
                style="width: 50px; height: 50px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
            </div>
        </div>
        <div class="ms-3">
            <h6 class="mb-0">Dise</h6>
         "  <span>Admin</span>
        </div>
    </div>
    <div class="navbar-nav w-100">

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                    class="fa fa-laptop me-2"></i>Homepage</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{ route('all.service') }}" class="dropdown-item">Main Header</a>
                <a href="{{ route('all.vid') }}" class="dropdown-item">Where next</a>

                <a href="{{ route('all.collection') }}" class="dropdown-item">Monetise banner</a>


            </div>
        </div>
        <a href="{{ route('admin.about') }}"
            class="nav-item nav-link {{ request()->routeIs('admin.about') ? 'active' : '' }}"><i
                class="fa fa-th me-2"></i>About</a>
        <a href="{{ route('admin.consult') }}"
            class="nav-item nav-link {{ request()->routeIs('admin.about') ? 'active' : '' }}"><i
                class="fa fa-th me-2"></i>Consultation</a>

        <a href="{{ route('all.blog') }}"
            class="nav-item nav-link {{ request()->routeIs('all.blog') ? 'active' : '' }}"><i
                class="fa fa-table me-2"></i>Blog</a>

        <a href="{{ route('all.shop') }}"
            class="nav-item nav-link {{ request()->routeIs('all.shop') ? 'active' : '' }}"><i
                class="fa fa-th me-2"></i>Mail</a>

        <a href="{{ route('all.cat') }}" class="nav-item nav-link "><i class="fa fa-table me-2"></i>Categories</a>
        <a href="{{ route('all.resource') }}" class="nav-item nav-link "><i class="fa fa-table me-2"></i>Resources</a>

        <a href="{{ route('all.cal') }}" class="nav-item nav-link "><i class="fa fa-table me-2"></i>Calendly Link</a>

        <a href="{{ route('logout.user') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>LogOut</a>

    </div>

</nav>