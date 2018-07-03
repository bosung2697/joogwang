<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('style')
    @include('layouts.partials.header')
    @include('navigation.navigation_style')
    @include('layouts.partials.detailed_style')
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">--}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>주광정밀</title>
</head>
<body>

<div id="wrapper" style="background-color:#ffffff!important;">
    @include('navigation.navigation_bar')
    @yield('content')
    @include('footer.footer')

</div>



<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

@yield('script')
</body>

</html>
