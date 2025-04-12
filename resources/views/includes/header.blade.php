<div class="main-header">
    <div class="main-header-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
        <img src="{{ asset('import/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand" height="20"/>
        </a>
        <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
        </button>
        </div>
        <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
        </button>
    </div>
    <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
        </nav>

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none" >
            </li>

            <li class="nav-item topbar-user dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                    @if (auth()->user()->image_path == "")
                        <img src="{{asset('import/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle"/>
                    
                    @else
                        <img src="{{ asset('images/'. auth()->user()->image_path) }}" alt="..." class="avatar-img rounded-circle"/>
                    @endif
                </div>
                <span class="profile-username">
                    <span class="op-7">Hi,</span>
                    <span class="fw-bold">{{ auth()->user()->name }}</span>
                </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg">
                                    @if (auth()->user()->image_path == "")
                                        <img src="{{asset('import/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle"/>
                                    
                                    @else
                                        <img src="{{ asset('images/'. auth()->user()->image_path) }}" alt="..." class="avatar-img rounded-circle"/>
                                    @endif
                                <!-- <img
                                    src="{{ asset('images/'. auth()->user()->image_path) }}"
                                    alt="image profile"
                                    class="avatar-img rounded"
                                /> -->
                                </div>
                                <div class="u-text">
                                <h4>{{ auth()->user()->name }}</h4>
                                <p class="text-muted">{{ auth()->user()->email }}</p>
                                <a href="/profile/{{auth()->user()->id}}" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/profile/{{auth()->user()->id}}">My Profile</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" value="Logout" class="dropdown-item" >
                            </form>
                            
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
    </nav>
    <!-- End Navbar -->
</div>