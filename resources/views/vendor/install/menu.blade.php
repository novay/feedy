@php
    $menu = [
        [
            'icon' => 'home',
            'route' => 'install'
        ],
        [
            'icon' => 'list',
            'route' => 'install.requirements'
        ],
        [
            'icon' => 'folder',
            'route' => 'install.permissions'
        ],
        [
            'icon' => 'database',
            'route' => 'install.database'
        ],
        [
            'icon' => 'user',
            'route' => 'install.account'
        ],
        [
            'icon' => 'check',
            'route' => 'install.complete'
        ]
    ];
@endphp

<div class="nav flex-column">
    <ul class="nav nav-pills d-flex justify-content-center mb-4">
        @foreach ($menu as $link)
            <li class="nav-item mx-1">
                @if(Route::currentRouteName() == $link['route'])
                    <a href="{{ route($link['route']) }}" class="btn btn-primary d-flex align-items-center">
                        <i class="fa fa-{{ $link['icon'] }} icon-button fill-current"></i>
                    </a>
                @else
                    <a href="#" class="btn d-flex align-items-center disabled">
                        <i class="fa fa-{{ $link['icon'] }} icon-button fill-current"></i>
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
</div>