<style>
    .header, .navbar {
        font-family: 'Cormorant Infant', serif;
    }
    .header {
        background-color: #292E36;
    }
</style>

<div class="header pb-5">
    <div class="container d-flex pt-5 justify-content-between">
        <button class="btn mt-4 px-4" style="border: 2px solid; border-color: #E1B168; border-radius: 0%; height: 60px"><span class="fs-3 text-light">Hubungi 9819281</span></button>
        
        <img src="{{ asset('images/Logo Makan Mania.png') }}" alt="logo" style="width:17rem;" class="me-5">

        <button class="btn mt-4 px-4" style="background-color: #E1B168; border-radius: 0%; height: 60px" onclick="window.location.href='/reservasi'"><span class="fs-3">Reservation</span></button>
    </div>
</div>

@section('navbar')
    <nav class="navbar navbar-expand-lg sticky-top border border-light border-opacity-25 border-start-0 border-end-0" style="background-color: #292E36">
        <div class="container-fluid d-flex" style="margin-left: 17.5rem">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('home', ['#']) }}"><span class="text-light fs-5">Home</span></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('home', ['#menu']) }}"><span class="text-light fs-5">Menu</span></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#"><span class="text-light fs-5">Order</span></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#"><span class="text-light fs-5">Reservation</span></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('feedback') }}"><span class="text-light fs-5">Feedback</span></a>
                    </li>
                </ul>
            </div>

            <div class="social-icon" style="margin-right: 17.5rem">
                <a href=""><span class="text-light me-3"><i class="fa-brands fa-instagram fa-xl"></i></span></a>
                <a href=""><span class="text-light me-3"><i class="fa-brands fa-facebook fa-xl"></i></span></a>
                <a href=""><span class="text-light me-3"><i class="fa-brands fa-x-twitter fa-xl"></i></span></a>
                <a href=""><span class="text-light me-3"><i class="fa-brands fa-tiktok fa-xl"></i></span></a>
            </div>
        </div>
    </nav>
@endsection