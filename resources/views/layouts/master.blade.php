<html>
<head>
    <title> @yield('title') </title>
    <meta	name="viewport"	content="width=device-width,	initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/bower_components/components-font-awesome/css/fontawesome-all.min.css') }}">
    <!-- import template -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/blue-light-2.css') }}">

    <script src="{{ url('/bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ url('/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/general-navbar.js') }}"></script>
    @yield('styles')
</head>
<body>
    @include('shared.navbar')
    @include('auth.login-modal')
    @include('auth.register-modal')
    <div class="container content">
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @yield('content')
        @yield('scripts')
    </div>
</body>
</html>
