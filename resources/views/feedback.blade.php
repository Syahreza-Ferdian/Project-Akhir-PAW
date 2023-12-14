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

    <div class="accordion accordion-flush konten" id="accordionFlushExample" style="font-family: 'Cormorant Infant', serif; margin: 0 20rem;">
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

    <form style="font-family: 'Cormorant Infant', serif;margin: 0 20rem 5rem 20rem;" id="form_feedback">
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
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @include('footer')

    @yield('footer')


    <script>
        $(document).ready(function (){
            $('#form_feedback').submit(function (e) {
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
                    success: function (response) {
                        if (response.status == 'success') {
                            $('#form_feedback').trigger("reset");
                            
                            Swal.fire({
                                title: "Berhasil",
                                text: "Feedback berhasil disimpan! Terima kasih atas masukan Anda",
                                icon: "success"
                            });

                        }
                    },
                    error: function (error) {
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