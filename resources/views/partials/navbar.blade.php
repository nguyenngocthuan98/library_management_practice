    <!-- Responsive Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg_tool fixed-top">
        <a class="navbar-brand" href="{{ route('home') }}">{{ trans('partials/navbar.libra') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav_left" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active li_left">
                    <a class="nav-link" href="{{ route('home') }}">{{ trans('partials/navbar.home') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('books.index') }}">{{ trans('partials/navbar.book') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ trans('partials/navbar.category') }}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="#">Fantasy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{-- {{ route('categories.index') }} --}}">{{ trans('partials/navbar.more') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('authors.index') }}" class="nav-link">{{ trans('partials/navbar.author') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('publishers.index') }}" class="nav-link">{{ trans('partials/navbar.publisher') }}</a>
                </li>
                @if (auth()->check() && Auth::user())
                <li class="nav-item">
                    <a href="{{ route('user.borrow.index') }}" class="nav-link">{{ trans('partials/navbar.list_borrow') }}</a>
                </li>
                @endif
                @if (auth()->check() && Auth::user()->role == \App\Models\User::ADMIN)
                <li class="nav-item">
                    <a href="{{ route('admin.home.index') }}" class="nav-link">{{ trans('partials/navbar.ad-manage') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.chart_borrow.index') }}" class="nav-link">{{ trans('partials/navbar.chart') }}</a>
                </li>
                {{-- bell of nitify to admin--}}
                    <li class="nav-item dropdown dropdown-notifications">
                        <a href="#notifications-panel" class="nav-link dropdown-toggle-bell" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell notification-icon text-primary">
                                <i class="ml-1 count-notify" data-count="0"></i>
                            </i>
                        </a>
                        <div class="dropdown-container">
                            <div class="dropdown-toolbar">
                                <div class="dropdown-toolbar-actions">
                                    <a href="#" class="text-primary">{{ trans('partials/navbar.mark-all-read') }}</a>
                                </div>
                                <h3 class="dropdown-toolbar-title">{{ trans('partials/navbar.notifications') }} (<span class="notif-count">{{ config('setting.item-min') }}</span>)</h3>
                            </div>
                            <ul class="dropdown-menu">
                            </ul>
                            <div class="dropdown-footer text-center">
                                <a href="#" class="text-danger">{{ trans('partials/navbar.view-all') }}</a>
                            </div>
                        </div>
                    </li>
                @endif
                {{-- bell of nitify to user--}}
                @if (auth()->check() && Auth::user()->role == \App\Models\User::USER)
                    <li class="nav-item dropdown dropdown-notifications">
                        <a href="#notifications-panel" class="nav-link dropdown-toggle-bell" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell notification-icon text-primary">
                                <i class="ml-1 count-notify" data-count="0"></i>
                            </i>
                        </a>
                        <div class="dropdown-container">
                            <div class="dropdown-toolbar">
                                <div class="dropdown-toolbar-actions">
                                    <a href="#" class="text-primary">{{ trans('partials/navbar.mark-all-read') }}</a>
                                </div>
                                <h3 class="dropdown-toolbar-title">{{ trans('partials/navbar.notifications') }} (<span class="notif-count">{{ config('setting.item-min') }}</span>)</h3>
                            </div>
                            <ul class="dropdown-menu">
                            </ul>
                            <div class="dropdown-footer text-center">
                                <a href="#" class="text-danger">{{ trans('partials/navbar.view-all') }}</a>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
            {{-- trans('partials/navbar. --}}
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ trans('partials/navbar.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ trans('partials/navbar.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i>{{trans('partials/navbar.hi')}} {{ Auth::user()->name }}</i> <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                {{ trans('partials/navbar.logout') }}
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <!-- Responsive Navigation Bar -->
    <main >
            @yield('content')
    </main>
