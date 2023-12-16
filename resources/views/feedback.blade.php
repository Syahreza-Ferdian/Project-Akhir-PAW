<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $data['page_title'] }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

    <style>
        .konten {
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>

    {{-- STAR RATING --}}
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

</head>

<body>
    @include('header')

    @yield('navbar')

    <div class="menu-header konten" style="background-color: #292E36; font-family: 'Cormorant Infant', serif;">
        <h1 class="text-center" style="padding: 4rem 0"><span class="text-light" style="border: 1px solid #E1B168; border-left: none; border-right: none">FAQ</span></h1>
    </div>

    <div class="container konten text-center" style="font-family: 'Cormorant Infant', serif; margin-top: 2rem; margin-bottom: 2rem">
        <h4 class="text-center" style="padding: 4rem 0 1px 0 ; color: black;"><span class="text-black" style="border: 1px solid #E1B168; border-left: none; border-right: none; text-align: center;">Question</span></h4>
        <strong style="font-size: 50px;">Frequently Asked Question</strong>
    </div>

    <div class="accordion accordion-flush konten" id="accordionFlushExample" style="font-family: 'Cormorant Infant', serif; margin: 0 25rem;">
        @foreach($data['questions'] as $pertanyaan)
        <div class="accordion-item border mb-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pert_{{ $pertanyaan->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                    {{ $pertanyaan->question }}
                </button>
            </h2>
            <div id="pert_{{ $pertanyaan->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">{{ $pertanyaan->answer }}</div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="container text-center" style="margin-top: 2rem; margin-bottom: 2rem; font-family: 'Cormorant Infant', serif">
        <h4 class="text-center" style="padding: 4rem 0 1px 0 ; color: black;"><span class="text-black" style="border: 1px solid #E1B168; border-left: none; border-right: none; text-align: center;">Mail Us</span></h4>
        <strong style="font-size: 50px;">Have a Question?</strong>
    </div>

    <form style="font-family: 'Cormorant Infant', serif;margin: 0 25rem 8rem 25rem;" id="form_feedback">
        @csrf
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" name="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputSubject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="exampleInputSubject" name="subject">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="exampleInputPhone" name="phone">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputMessage" class="form-label">Message</label>
            <textarea type="text" class="form-control" id="exampleInputMessage" rows="7" name="message"></textarea>
        </div>
        <label for="rating_input" class="control-label">Berikan Rating Pelayanan dan Kinerja Restoran Kami</label>
        <input id="rating_input" name="rating_input" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-show-clear="false" required>
        <button type="submit" class="btn border" style="background-color: #292E36; color: white">Submit</button>
    </form>

    <div class="card" style="font-family: 'Cormorant Infant', serif;margin: 0 25rem 3rem 25rem; text-align: right; padding: 1rem 2rem 1rem 0;">
        <div class="row">
            <div class="col ms-2">
                <h5 class="mt-1">Rating Restoran</h5>
            </div>
        </div>
        <div class="row" style="margin-left: 40rem;">
            <div class="col ms-5 mt-2">
                <h5>({{ $data['jml_feedback'] }} Ulasan)</h5>
            </div>
            <div class="col">
                <input id="rating" name="input" class="rating rating-loading" data-size='sm' data-show-clear='false' data-show-caption='false' data-readonly="true" value="{{ $data['average'] }}">
            </div>
        </div>
    </div>
    <div class="card-body border" style="font-family: 'Cormorant Infant', serif;margin: 0 25rem 0 25rem; padding-top: 14px; padding-left: 2rem;">
        <h3>Ulasan :</h3>
    </div>
    @foreach ($data['feedback'] as $review)
    <div class="card-body border" style="font-family: 'Cormorant Infant', serif;margin: 0 25rem 0 25rem; padding-top: 14px; padding-left: 2rem;">
        <div class="row">
            <div class="col ms-2">
                <h5 class="mt-1">{{$review->nama}}</h5>
                <p class="mt-0" style="color: #555555">{{ date('d-m-Y h:i:s', strtotime($review->posted_at)) }}</p>
            </div>
        </div>
        <input id="rating" name="input" class="rating rating-loading" data-size='sm' data-show-clear='false' data-show-caption='false' data-readonly="true" value="{{ $review->rating }}">
        <p>{{$review->message}}</p>
    </div>
    @endforeach
    <div style="margin-bottom: 4rem;"></div>

    @include('footer')

    @yield('footer')


    <script>
        $(document).ready(function() {
            $('#form_feedback').submit(function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '/new-feedback',
                    data: $('#form_feedback').serialize(),
                    success: function(response) {
                        if (response.status == 'success') {
                            $('#form_feedback').trigger("reset");

                            Swal.fire({
                                title: "Berhasil",
                                text: "Feedback berhasil disimpan! Terima kasih atas masukan Anda",
                                icon: "success"
                            });

                        }
                    },
                    error: function(error) {
                        Swal.fire({
                            title: "Gagal",
                            text: "Gagal Menambahkan Feedback",
                            icon: "error"
                        });
                        console.error(error);
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>