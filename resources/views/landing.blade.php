<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/54ae9d808b.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('header')

    @yield('navbar')
    
    <div class="landing-page">
        <div class="container d-flex" style="margin-bottom: 10rem">
            <div class="rest-desc w-50" style="margin-top: 10rem;">
                <h1 style="font-weight: 700; color: white; font-size: 58px">Welcome to<br>Makan Mania Restaurant</h1>
                <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus nam repudiandae animi laborum corrupti quos eaque aspernatur officia quisquam modi.</p>

                <a href="#menu"><button class="btn px-4 mt-2" style="border: 2px solid; border-color: #E1B168; border-radius: 0%; height: 45px; color:white"><strong>Lihat Menu</strong></button></a>
            </div>

            <div class="outer" style="margin-top: 3rem; margin-left: 11rem">
                <img src="{{ asset('images/front_picture.png') }}" alt="" srcset="" style="width: 29rem; margin-left: 1.6rem; margin-top: 2rem">
            </div>
        </div>

        @include('menu')

        <div id="menu">
            @yield('menu-header-text')
        </div>
    </div>

    @yield('menu-content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>