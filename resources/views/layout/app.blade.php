<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flatpicker.css')}}">
    <link href="{{asset('assets/https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel='stylesheet' href='{{asset('assets/https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css')}}'>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
    <header class="page-header wow fadeInDown" data-wow-delay="0.1s">
        <div class="container">
            <div class="header-flex">
                <a href="{{url('/')}}" class="header-logo">
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                </a>
            </div>
        </div>
    </header>

    <script src="{{asset('assets/https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js')}}"
     integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
     crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/flatpicker.js')}}"></script>
    <script src="{{asset('assets/js/common.js')}}"></script>
</body>
</html>