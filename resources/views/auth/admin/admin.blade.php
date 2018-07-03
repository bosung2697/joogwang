<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @yield('style')
    @include('layouts.partials.header_admin')
    @include('layouts.partials.admin_style')
    {{--<link href="{{ asset('css/NanumSquare-master/nanumsquare.css') }}" rel="Stylesheet">--}}
</head>
<body>
<div id="wrapper">
    <div class="navbar">
        <div class="navbardiv grid-item"><a href="{{ url('admin') }}"
                                            id="appname">{{ config('app.name','Laravel') }}</a></div>
        <div id="userdate" class="grid-item">| {{ \Illuminate\Support\Facades\Auth::user()->name }}님 안녕하세요
            / {{ \Carbon\Carbon::now() }}</div>
        <div class="navbardiv grid-item">
            <a href="{{ route('admin.logout') }}"
               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <div class="navsubbar">
        <div class="grid-item  aboutus-selector {{ $_SERVER['REQUEST_URI'] === '/admin/awards' ? 'active' : ''}}"
             style="-ms-grid-column: 3"
             onclick="location.href='/admin/awards';">About Us
        </div>
        <div class="grid-item newsroom-selector {{ $_SERVER['REQUEST_URI'] === '/admin/newsroom' ? 'active' : ''}}"
             style="-ms-grid-column: 1"
             onclick="location.href='/admin/newsroom';">PR
        </div>
        <div class="grid-item product-selector {{ $_SERVER['REQUEST_URI'] === '/admin/productintro' ? 'active' : ''}}"
             onclick="location.href='/admin/productintro';" style="-ms-grid-column: 5">Product
        </div>
    </div>

    <div class="navlayout">
        <div class="grid-item">
            @component('components.admin.aboutus')
            @endcomponent
            @component('components.admin.pr')
            @endcomponent
            @component('components.admin.product')
            @endcomponent
        </div>
        <div class="grid-item">
            @yield('content')
        </div>
    </div>
</div>
@yield('script')
</body>
</html>