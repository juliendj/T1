<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- link css --}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.icon" )}}" />

    <!-- Vendor css (Require in all Page) -->
    <link href="{{asset( "assets/css/vendor.min.css" )}}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{ asset('assets/css/app.min.css' )}}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{ asset('assets/js/config.js' )}}"></script>
</head>
<body>
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->


       @include('layout.header')
        @include('layout.menu')

        <div class="page-content">
            <div class="card-body">
                {{-- @yield('title') --}}


@yield('content')


        {{-- footer --}}






        @include('layout.footer')
    </div>
    </div>
    </div>







</body>
</html>
