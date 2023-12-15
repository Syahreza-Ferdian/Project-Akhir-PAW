<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data['page_title'] }} Category | Makan Mania</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css'); }}">

    <script src="https://kit.fontawesome.com/54ae9d808b.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('header')

    @yield('navbar')

    <div class="menu-header" style="background-color: #292E36; font-family: 'Cormorant Infant', serif;">
        <h1 class="text-center" style="padding: 4rem 0"><span class="text-light" style="border: 1px solid #E1B168; border-left: none; border-right: none">{{ $data['page_title'] }} Menu</span></h1>
    </div>

    <div class="container control mt-5">
        <div class="input-group input-group w-25">
            <input type="search" class="form-control" id="cari_menu" placeholder="Cari Menu" name="cari_menu" required value="">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass fa"></i></button>
        </div>
    </div>

    <div class="container">
        {{-- {{ $data['cari'] }} --}}
        <div class="row">
            <div class="col">
                {{-- <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " alt="" > --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>