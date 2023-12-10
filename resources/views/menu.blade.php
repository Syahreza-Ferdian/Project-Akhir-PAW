@section('menu-header-text')

<h1 class="mt-5 text-center" id="menu-header" style="padding-bottom: 7rem"><span class="text-light" style="border: 1px solid #E1B168; border-left: none; border-right: none">Our Menu</span></h1>

@endsection

@section('menu-content')
    <div class="container d-flex" style="margin: 10rem auto">
        {{-- GAMBAR MENU APPETIZER - CAROUSEL AUTOPLAY --}}
        <div class="side-picture w-50">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($data['appetizer'] as $key => $menu)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                            <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " class="d-block mx-auto w-100" alt="">
                            <div class="carousel-caption d-none d-md-block pb-0" style="color: white;">
                                <h5><strong>{{ $menu->nama }}</strong></h5>
                                <p>{{ $menu->short_desc }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container ps-5">
            <h3 class="mb-4"><strong>Appetizer</strong></h3>
            @foreach ($data['appetizer'] as $menu)
                <div class="row mb-5">
                    <a href="" class="btn menu-item">
                        <div class="row">
                            <div class="col col-md-auto">
                                <img src=" {{ asset('images/menu_picts/' . $menu->picture) }} " alt="" style="border-radius: 50%; height: 70px; width: 70px; object-fit: cover; object-position: center;">
                            </div>
        
                            <div class="col">
                                <h5 class="text-start">{{ $menu->nama }}</h5>
                                
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($data['appetizer'] as $item)
        <p>{{ $item->nama }}</p>
    @endforeach --}}
@endsection