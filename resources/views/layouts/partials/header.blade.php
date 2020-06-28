<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="/home">
                <img src="{{ asset('assets/landing/img/logo.png') }}" class="header-brand-img mr-2" alt="Logo">
                <span class="hidden-sm-down">{{ config('app.name', 'Laravel') }}</span>
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                    <a href="javascript:;" class="btn btn-sm pl-4 pr-4 bg-camp">{{ __('general.help') }}</a>
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <img class="avatar" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}">
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">{{ Auth::user()->name }}</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="dropdown-icon fe fe-user"></i> {{ __('general.profile') }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon fe fe-log-out"></i> {{ __('general.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>