<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '熊猫血的人们')</title>

    <meta name="keywords" content="@yield('keywords', '中国稀有血型之家网站，中国稀有血型总库，中国稀有血型妈妈家园，稀有血型')" />
		<meta name="author" content="vini123" />
		<meta name="description" content="@yield('description', '中国稀有血型之家网站，中国稀有血型总库，中国稀有血型妈妈家园，稀有血型')" />
    <meta name="baidu-site-verification" content="中国稀有血型之家网站，中国稀有血型总库，中国稀有血型妈妈家园，稀有血型" />
		<meta name="baidu_union_verify" content="中国稀有血型之家网站，中国稀有血型总库，中国稀有血型妈妈家园，稀有血型" />

    <link rel="icon" href="{{ asset('favicon.ico') }}" mce_href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.css">

    <!-- Styles -->
    <link href="{{ asset('style/css/common.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body>

    <div style="min-height: 100%;">
        @include('layouts._header')

        <div class="container-fluid">
            <div class="container-page">
            @yield('content')
            </div>
        </div>

        <div  style="height: 60px;"> </div>
    </div>

    @include('layouts._footer')

    <!-- Scripts -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
    <script src="{{ asset('style/js/common.js') }}"></script>
    @yield('script')
</body>
</html>
