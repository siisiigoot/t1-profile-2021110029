<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/bootstrap-icons.css') }}">    

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title }} - SigitP</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    @include('partials.navbar')

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        @yield('container')

        @include('partials.footer')


    </div>
    <!-- //CONTENT WRAPPER -->



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>


    <script>
        AOS.init();
    </script>

</body>

</html>