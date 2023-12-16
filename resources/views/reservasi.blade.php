<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reservasi.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Reservation</title>
</head>

<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    @include('header')

    @yield('navbar')


    <div class="full-width-container d-flex justify-content-center align-items-center juduls" style="background-color: #292E36; height: 300px;">
        <h2 class="border-bottom border-top pb-2" style="border-color: #E1B168 !important;">Reservation</h2>
    </div>


    <div class="container justify-content-center isi">
        <h5 class="pb-0.5 pt-0.5" style="border-top: 2px solid #000;border-bottom: 2px solid #000;border-color: #E1B168 !important;width:fit-content;font-size:25px; margin-bottom: 25px;">Reservation</h5>
        <form action="{{ route('submit-form') }}" method="post">
            @csrf <!-- Tambahkan token CSRF untuk keamanan form Laravel -->
            <div class="row inputs1">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <input data-provide="datepicker" type="date" class="form-control" name="date" id="date" data-date-format="yyyy-mm-dd" placeholder="Date" required>
                    </div>
                    <button type="submit" class="btn btn-primary oren">Book a Table</button>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="guests" id="guests" placeholder="Number of Guests" required min="1" max="8">
                    </div>
                    <div class="form-group">
                        <input type="time" class="form-control" name="time" id="time" placeholder="Time" required>
                    </div>
                </div>

                <div class="col-md-1">
                    <img src="{{ asset('images/reservationFormImg/photo1.png') }}" alt="" style="height: 800px; width:auto;">
                </div>

            </div>

        </form>
    </div>

    <div class="container  justify-content-center isi2">


        <h5 class="pb-0.5 pt-0.5" style="border-top: 2px solid #000;border-bottom: 2px solid #000;border-color: #E1B168 !important;width:fit-content;font-size:15px; margin-bottom: 25px;">Why Choose Us!</h5>
        <h1 style="font-family: 'Cormorant Infant';  font-weight:bold; width: 500px;font-size: 40px;">Why We Are The Best</h1>
        <i>
            <p style="width: 650px; font-size: 20px; text-align: justify; margin-bottom: 50px;">Bring the table winwin survival strateges ensure proactive the domination the end of the day going forward new normal that
                has evolved froms generation on the runway heading towards streamlined cloud solution generated content in real times will have multiple touchpoints.</p>
        </i>

        <div class="row">
            <!-- First Container -->
            <div class="col-md-4">
                <div class="container kotak pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images/reservationFormImg/IconPizza.svg') }}" alt="">
                        </div>
                        <div class="col-md-7">
                            <h4>Fresh Food</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Container -->
            <div class="col-md-4">
                <div class="container kotak pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images/reservationFormImg/Track Icon.svg') }}" alt="">
                        </div>
                        <div class="col-md-7">
                            <h4>Fast Delivery</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Third Container -->
            <div class="col-md-4">
                <div class="container kotak pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images/reservationFormImg/Group 51.svg') }}" alt="">
                        </div>
                        <div class="col-md-7">
                            <h4>Maintain Quality</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fourth Container -->
            <div class="col-md-4">
                <div class="container kotak pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images/reservationFormImg/ReloadIcon.svg') }}" alt="">
                        </div>
                        <div class="col-md-7">
                            <h4>24/7 Service</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>







    @include('footer')

    @yield('footer')

    <script src="{{ URL::asset('js/reservasi.js'); }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/t1qEzKw9I8d4OpRE6sJNlTAhDrP3PBlE9L+gM=" crossorigin="anonymous"></script>


</body>

</html>