<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="{{ asset('css/fontawesome.min.css') }}" rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <a href="{!! route('language', ['en']) !!}">{{ trans('English') }}</a>
            <a href="{!! route('language', ['vi']) !!}">{{ trans('Vietnamese') }}</a>
        </nav>
    </div>

    @yield('content')
</body>
</html>
