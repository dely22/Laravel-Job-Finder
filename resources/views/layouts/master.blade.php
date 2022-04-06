<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <link href="{{ url::asset(css/bootstrap.min.css) }}" rel="stylesheet"> --}}

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/boxicons.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">

    <title>About Us</title>
</head>
<body class="bg-light">


    @include('includes.header')

    @include('includes.login')


    @include('includes.register')

    @yield('content')

    @include('includes.footer')


<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.min.js"></script>

</body>
</html>


