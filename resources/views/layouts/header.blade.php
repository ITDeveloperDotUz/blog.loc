<header class="" style="background-image: url({{ $defaultBg }})">
    <h1>Doimo komillikka intil!</h1>
    <!--Navbar -->
    <nav class="navbar-expand-md navbar-dark secondary-color lighten-1">
        <a class="navbar-brand" href="{{ route('home') }}">{{ setting('site.title') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Dropdown
                    </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav mr-2 nav-flex-icons">
                @guest
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('voyager.login') }}">Kirish</a>
                    </li>
                    @if (Route::has('voyager.register'))
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ route('voyager.register') }}">Ro'yxatdan o'tish</a>
                        </li>
                    @endif
                @else
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-envelope"></span>
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-bell"></span>
                    </a>
                </li>
                @endguest
            </ul>

            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item avatar dropdown">
                    <a href="#" class="nav-link" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img id="head-img" src="{{ $profilePhoto }}" class="rounded-circle z-depth-0 header-img"
                             alt="avatar image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                         aria-labelledby="navbarDropdownMenuLink-55">
                        @guest
                            <a class="dropdown-item" href="{{ route('voyager.dashboard') }}">BeTBe4 haqida</a>
                            <a class="dropdown-item" href="{{ route('voyager.dashboard') }}">Bog'lanish</a>

                        @else
                            <a class="dropdown-item" href="{{ route('voyager.dashboard') }}">Shaxsiy kabinet</a>
                            <a class="dropdown-item" href="{{ route('voyager.profile') }}">Mening ma'lumotlarim</a>
                            <form action="{{ route('voyager.logout') }}" id="logout" method="post">
                                @csrf
                                <a onclick="$('#logout').submit()" class="dropdown-item" href="#">Chiqish</a>
                            </form>
                        @endguest
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</header>