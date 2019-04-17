<section class="hero @yield('hero-color', 'is-primary') @yield('hero-size', 'is-small')">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}" class="navbar-item">{{ config('app.name', 'Contentli') }}</a>
                    <span class="navbar-burger burger" data-target="navbarMenuHero">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="navbarMenuHero" class="navbar-menu">
                    <div class="navbar-start">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a href="{{ route('features') }}" class="button is-text {{ Request::is('features') ? 'is-active' : '' }}">Features</a>
                                <a href="{{ route('pricing') }}" class="button is-text {{ Request::is('pricing') ? 'is-active' : '' }}">Pricing</a>
                                <a href="{{ route('documentation') }}" class="button is-text {{ Request::is('documentation*') ? 'is-active' : '' }}">Documentation</a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-end">
                        @if (Auth::guest())
                        {{-- <a class="navbar-item " href="{{ route('login') }}">Login</a> --}}
                        <div class="navbar-item">
                            <div class="buttons">
                                <a href="{{ route('login') }}" class="button is-text {{ Request::is('login') ? 'is-active' : '' }}">
                                    <span>Login</span>
                                </a>
                                <a href="{{ route('pricing') }}" class="button is-link">
                                    <span>Try for free</span>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body">
        <div class="container">
            <p class="title">
                @yield('hero-title')
            </p>
            <p class="subtitle">
                @yield('hero-subtitle')
            </p>
        </div>
    </div>

    <div class="hero-foot">
        <nav class="tabs is-boxed">
            <div class="container">
                <ul>
                    <li class="is-active">
                        <a>Overview</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
