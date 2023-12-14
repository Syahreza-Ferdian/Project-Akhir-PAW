<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/54ae9d808b.js" crossorigin="anonymous"></script>

<style>
    footer {
        font-family: 'Josefin Sans', sans-serif;
    }
</style>

@section('footer')
    <footer class="position-relative" style="max-width: 100%">
        <div class="container-fluid position-absolute text-center pt-5 pb-3 px-0" style="background-color: #1F242C;">
            <div class="container d-flex justify-content-between px-0 align-items-center pt-5">
                <h5 class="text-light">Instagram Feed</h5>

                <img src="{{ asset('images/Logo Makan Mania.png') }}" alt="logo" style="width:17rem">

                <div class="social-icon">
                    <a href=""><span class="text-light me-3"><i class="fa-brands fa-instagram fa-xl"></i></span></a>
                    <a href=""><span class="text-light me-3"><i class="fa-brands fa-facebook fa-xl"></i></span></a>
                    <a href=""><span class="text-light me-3"><i class="fa-brands fa-x-twitter fa-xl"></i></span></a>
                    <a href=""><span class="text-light me-3"><i class="fa-brands fa-tiktok fa-xl"></i></span></a>
                </div>
            </div>

            <div class="container d-flex justify-content-between px-0 align-items-center pt-5">
                <h6 class="text-light py-1" style="letter-spacing: 4px; border: 1px solid #E1B168; border-left: none; border-right: none">CONTACT</h6>

                <h6 class="text-light me-3 py-1" style="letter-spacing: 4px; border: 1px solid #E1B168; border-left: none; border-right: none">WORKING HOURS</h6>
            </div>

            <div class="container d-flex justify-content-between px-0 pt-0">
                <div class="w-25 text-start">
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, quibusdam!</p>
                </div>

                <div class="w-25 text-light text-end me-3">
                    <p class="mb-1"><span style="color: #E1B168">Mon - Fri:</span> 7.00am - 6.00am</p>
                    <p class="mb-1"><span style="color: #E1B168">Sat:</span> 7.00am - 6.00am</p>
                    <p class="mb-1"><span style="color: #E1B168">Sun:</span> 8.00am - 6.00am</p>
                </div>                
            </div>

            <div class="container-fluid px-0 text-light">
                <hr>
                
                <div class="container d-flex justify-content-between align-items-center pt-0 ps-0 pe-0">
                    <p class="mt-0 mb-0">Copyright - Kelompok 5</p>
                    <p class="mt-0 mb-0 me-3">Pengembangan Aplikasi Web TI-C</p>
                </div>
            </div>
        </div>

    </footer>
@endsection