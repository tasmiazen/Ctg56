<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
@stack('css')
<body>
@include('partials.header')



@yield('content')



@include('partials.footer')
</body>
<h2>Simple Page</h2>
</head>
</html>
