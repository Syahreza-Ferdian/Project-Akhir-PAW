@section('menu-header-text')

<h1 class="mt-5 text-center" id="menu-header" style="padding-bottom: 7rem"><span class="text-light" style="border: 1px solid #E1B168; border-left: none; border-right: none">Our Menu</span></h1>

@endsection

@section('menu-content')
    {{-- APPETIZER MENU --}}
    <div class="container d-flex" style="margin: 10rem auto">
        {{-- GAMBAR MENU APPETIZER - CAROUSEL AUTOPLAY --}}
        <div class="side-picture w-50" data-aos="fade-right">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($data['appetizer'] as $key => $menu)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                            <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " class="d-block mx-auto w-100" alt="" style="object-fit: cover; object-position: inherit; height: 500px; width: auto">
                            <div class="carousel-caption d-none d-md-block pb-0" style="color: black">
                                <h5 class="highlight"><strong>{{ $menu->nama }}</strong></h5>
                                <p class="highlight">{{ $menu->short_desc }}</p>  
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container ps-5" data-aos="fade-left">
            <h3 class="mb-4"><strong>Appetizer</strong></h3>
            @foreach ($data['appetizer'] as $menu)
                <div class="row mb-4">
                    <a href=" {{ route('menu_each', ['id' => $menu->id]) }} " class="btn menu-item">
                        <div class="row">
                            <div class="col col-md-auto">
                                <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " alt="" style="border-radius: 50%; height: 70px; width: 70px; object-fit: cover; object-position: center;">
                            </div>
        
                            <div class="col pt-1">
                                <h5 class="text-start"><strong>{{ $menu->nama }}</strong></h5>
                                <p class="text-start w-75">{{ $menu->short_desc }}</p>
                            </div>

                            <div class="col col-md-auto my-auto">
                                <p><strong class="fw-bolder">IDR {{ number_format($menu->harga / 1000) }}K</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <a href="{{ route('category_each', ['category' => 'appetizer']) }}"><button class="btn px-4 mt-2" style="border: 2px solid; border-color: #E1B168; border-radius: 0%; height: 45px; color: #E1B168; font-family: 'Josefin Sans', sans-serif;">See All Dishes</button></a>
        </div>
    </div>

    <div class="divider">
        <img src="{{ asset('images/menu_picts/divider1.jpg') }}" alt="" style="height: 350px; width: 100%; object-fit: cover; object-position: 0px 75%">
    </div>

    {{-- MAIN COURSE MENU --}}
    <div class="container d-flex" style="margin: 10rem auto">
        <div class="container pe-5" data-aos="fade-left">
            <h3 class="mb-4"><strong>Main Course</strong></h3>
            @foreach ($data['main_course'] as $menu)
                <div class="row mb-4">
                    <a href=" {{ route('menu_each', ['id' => $menu->id]) }} " class="btn menu-item">
                        <div class="row">
                            <div class="col col-md-auto">
                                <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " alt="" style="border-radius: 50%; height: 70px; width: 70px; object-fit: cover; object-position: center;">
                            </div>
        
                            <div class="col pt-1">
                                <h5 class="text-start"><strong>{{ $menu->nama }}</strong></h5>
                                <p class="text-start w-75">{{ $menu->short_desc }}</p>
                            </div>

                            <div class="col col-md-auto my-auto">
                                <p><strong class="fw-bolder">IDR {{ number_format($menu->harga / 1000) }}K</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <a href="{{ route('category_each', ['category' => 'main_course']) }}"><button class="btn px-4 mt-2" style="border: 2px solid; border-color: #E1B168; border-radius: 0%; height: 45px; color: #E1B168; font-family: 'Josefin Sans', sans-serif;">See All Dishes</button></a>
        </div>

        {{-- GAMBAR MENU - CAROUSEL AUTOPLAY --}}
        <div class="side-picture w-50" data-aos="fade-right">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($data['main_course'] as $key => $menu)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                            <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " class="d-block mx-auto w-100" alt="" style="object-fit: cover; object-position: inherit; height: 500px; width: auto">
                            <div class="carousel-caption d-none d-md-block pb-0" style="color: black">
                                <h5 class="highlight"><strong>{{ $menu->nama }}</strong></h5>
                                <p class="highlight">{{ $menu->short_desc }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="divider">
        <img src="{{ asset('images/menu_picts/divider2.jpg') }}" alt="" style="height: 350px; width: 100%; object-fit: cover; object-position: 0px 45%">
    </div>

    {{-- DESSERT MENU --}}
    <div class="container d-flex" style="margin: 10rem auto">
        {{-- GAMBAR MENU - CAROUSEL AUTOPLAY --}}
        <div class="side-picture w-50" data-aos="fade-right">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($data['dessert'] as $key => $menu)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                            <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " class="d-block mx-auto w-100" alt="" style="object-fit: cover; object-position: inherit; height: 500px; width: auto">
                            <div class="carousel-caption d-none d-md-block pb-0" style="color: black">
                                <h5 class="highlight"><strong>{{ $menu->nama }}</strong></h5>
                                <p class="highlight">{{ $menu->short_desc }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container ps-5" data-aos="fade-left">
            <h3 class="mb-4"><strong>Dessert</strong></h3>
            @foreach ($data['dessert'] as $menu)
                <div class="row mb-4">
                    <a href=" {{ route('menu_each', ['id' => $menu->id]) }} " class="btn menu-item">
                        <div class="row">
                            <div class="col col-md-auto">
                                <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " alt="" style="border-radius: 50%; height: 70px; width: 70px; object-fit: cover; object-position: center;">
                            </div>
        
                            <div class="col pt-1">
                                <h5 class="text-start"><strong>{{ $menu->nama }}</strong></h5>
                                <p class="text-start w-75">{{ $menu->short_desc }}</p>
                            </div>

                            <div class="col col-md-auto my-auto">
                                <p><strong class="fw-bolder">IDR {{ number_format($menu->harga / 1000) }}K</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <a href="{{ route('category_each', ['category' => 'dessert']) }}"><button class="btn px-4 mt-2" style="border: 2px solid; border-color: #E1B168; border-radius: 0%; height: 45px; color: #E1B168; font-family: 'Josefin Sans', sans-serif;">See All Dishes</button></a>
        </div>
    </div>


@endsection