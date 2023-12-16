<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ $data['page_title'] }}</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset(' css/style.css ') }}" />

        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />

        <script
            src="https://kit.fontawesome.com/54ae9d808b.js"
            crossorigin="anonymous"
        ></script>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            .flip-card {
                background-color: transparent;
                width: 400px;
                height: 525px;
                perspective: 1000px;
                margin-top: 20px;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front,
            .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .flip-card-front {
                color: black;
                text-align: center;
            }

            .flip-card-back {
                background-color: #292e36;
                color: white;
                transform: rotateY(180deg);
                padding: 25px;
            }
            .title-page {
                background-color: #292e36;
                text-align: center;
            }
            .border-top-bottom-title {
                border-top: 1px solid #e1b168;
                border-bottom: 1px solid #e1b168;
                padding: 0;
                margin: 80px;
                display: inline-block;
                color: white;
                align-items: center;
                font-size: 60px;
            }
            /* .title-team {
                margin-top: 10rem;
            } */
            .border-top-bottom {
                border-top: 1px solid #e1b168;
                border-bottom: 1px solid #e1b168;
                padding: 0;
                margin-bottom: 10px;
                display: inline-block;
                color: #292e36;
                align-items: center;
                font-size: 20px;
                font-family: "Josefin Sans", sans-serif;
            }
            .main-page-chef{
                margin: 10rem;
            }
            .icon-icon {
                display: flex;
                align-items: center;
            }

            .icon-icon i {
                margin-right: 10px;
            }

            .icon-text {
                margin-top: 14px;
                font-size: 15px;
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>
    <body style="font-family: 'Cormorant Infant', serif">
        @include('header') @yield('navbar')
        <div class="title-page">
                <span class="border-top-bottom-title">Our Chefs & Barista</span>
            </div>
        </div>
        <!-- mulai -->
        <div class="main-page-chef">
            <div class="title-team" style="text-align: center; color: black">
                <span class="border-top-bottom">T E A M</span>
                <h1 style="font-weight: bold;">Meet Our Professional Chefs & Barista</h1>
            </div>
            <br>

            <div class="container control" style="margin-left: 72rem;">
                <form action="{{ route('cari_chef') }}">
                    <div class="input-group input-group w-25">
                        <input type="search" class="form-control" id="cari_chef" placeholder="Cari Chef" name="cari_chef" required value="" style="color: #292e36;">
                        <button type="submit" class="btn btn-primary" style="background-color: #292e36; border-color: #292e36;"><i class="fa-solid fa-magnifying-glass" style="color: #e1b168;"></i></button>
                    </div>
                </form>
            </div>

            <br>
            <div class="row ms-5">
                @forelse($data['chef'] as $chef)
                    <div class="col-md-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="height: 350px">
                                    <img
                                        src="{{ asset('images/' .$chef->picture) }}"
                                        alt="Avatar"
                                        style="width: 400px; height: 400px"
                                    />
                                    <br /><br />
                                    <h2 class="card-title">{{ $chef->nama }}</h2>
                                    <p class="card-text" style="font-family: 'Josefin Sans', sans-serif; font-size: 18px; color: #555555;">{{ $chef->jabatan }}</p>
                                </div>
                                <div class="flip-card-back">
                                    <h1 style="color: #E1B168;">{{ $chef->nama }}</h1>
                                    <p style="font-size: 20px;">
                                        {{ $chef->short_desc }}
                                    </p>
                                    <br>
                                    <div class="icon-icon">
                                        <i class="fa-solid fa-briefcase fa-2xl" style="color: #e1b168;"></i>
                                        <div class="icon-text">
                                            <span style="font-size: 18px;">Experience</span>
                                            <p>{{ $chef->experience }}</p>
                                        </div>
                                    </div>
                                    <div class="icon-icon">
                                        <i class="fa-solid fa-envelope fa-2xl" style="color: #e1b168;"></i>
                                        <div class="icon-text">
                                            <span style="font-size: 18px;">Mail</span>
                                            <p>{{ $chef->email }}</p>
                                        </div>
                                    </div>
                                    <div class="icon-icon">
                                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #e1b168;"></i>
                                        <div class="icon-text">
                                            <span style="font-size: 18px;">Instagram</span>
                                            <p>{{ $chef->instagram }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="container-fluid">
                        <p style="text-align: center; font-size: 20px;"><strong>Data Tidak Ditemukan</strong></p>
                    </div>
                @endforelse
            </div>
        </div>
        <!-- akhir -->

        @include('footer')
        @yield('footer')
        <!-- akhir -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
