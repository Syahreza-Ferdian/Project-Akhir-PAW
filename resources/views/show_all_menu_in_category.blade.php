<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data['page_title'] }} | Makan Mania</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css'); }}">

    <script src="https://kit.fontawesome.com/54ae9d808b.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>
</head>
<body>
    @include('header')

    @yield('navbar')

    <div class="menu-header" style="background-color: #292E36; font-family: 'Cormorant Infant', serif;">
        <h1 class="text-center" style="padding: 4rem 0"><span class="text-light" style="border: 1px solid #E1B168; border-left: none; border-right: none">{{ $data['page_title'] }}</span></h1>
    </div>

    <div class="container control mt-5">
        <form action="{{ route('cari_menu', ['category' => $data['category']]) }}" method="GET">
            <div class="input-group input-group w-25">
                <input type="search" class="form-control" id="cari_menu" placeholder="Cari Menu (Nama Menu/Tags)" name="cari_menu" required value="">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass fa"></i></button>
            </div>
        </form>
    </div>

    <div class="container mt-4">
        {{ $data['menu']->links() }}
    </div>

    <div class="container mt-5">
        @forelse ($data['menu'] as $menu)
            <a href="{{ route('menu_each', ['id' => $menu->id]) }}" class="btn menu-item text-start">
                <div class="row mb-5 mt-5">
                    <div class="col">
                        <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " alt="" style="width: 600px; height: 350px; object-fit: cover; object-position: center">
                    </div>
                    <div class="col mt-3">
                        <h1 style="font-family: 'Cormorant Infant', serif;">{{ $menu->nama }}</h1>
                        <p style="font-family: 'Josefin Sans', sans-serif;">{{ $menu->long_desc }}</p>
                        <div class="points" style="font-family: 'Cormorant Infant', serif;">
                            <span class="fw-bolder">CATEGORY: </span> {{ $menu->category->nama_kategori }} <br>
                            <span class="fw-bolder">TAGS:</span> {{ $menu->tags }} <br>
                            <span class="fw-bolder">RATING: </span> <input id="rating" name="input" class="rating rating-loading" data-size='sm' data-show-clear='false' data-show-caption='true' data-readonly="true" value="{{ $data['rating'][$menu->id] }}">
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <div class="row mb-5 mt-5">
                <h5 style="color: #555555" class="text-center">Data Tidak Ditemukan</h5>
            </div>
        @endforelse
        
        <div class="page-control mt-5">
            {{$data['menu']->links()}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>