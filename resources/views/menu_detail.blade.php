<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $data['detail_menu']->nama }} | Makan Mania</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/54ae9d808b.js" crossorigin="anonymous"></script>

    {{-- STAR RATING --}}
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

    <style>
        .konten {
            font-family: 'Josefin Sans', sans-serif;
        }
        #number-order::-webkit-inner-spin-button, #number-order::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #my_tab li button, #my_tab {
            border: none;
            color: #C4C4C4;
        }
        
        #my_tab .active {
            color: black;
        }

        #add_review_btn {
            transition: 0.3s;
        }

        #add_review_btn:hover {
            color: white;
            box-shadow: inset 12.25rem 0 0 0 #292E36;
            transition: 0.3s ease-in;
        }
    </style>
</head>
<body>
    @include('header')

    @yield('navbar')

    <div class="menu-header" style="background-color: #292E36; font-family: 'Cormorant Infant', serif;">
        <h1 class="text-center" style="padding: 4rem 0"><span class="text-light" style="border: 1px solid #E1B168; border-left: none; border-right: none">Our Menu</span></h1>
    </div>

    <div class="container d-flex konten" style="margin-top: 8rem">
        <img src=" {{ asset('images/menu_picts/' . $data['detail_menu']->picture) }} " alt="" style="object-fit: cover; object-position: center; height: 500px; width: 550px">

        <div class="container ms-4">
            <strong style="font-size: 50px; font-family: 'Cormorant Infant', serif;"> {{ $data['detail_menu']->nama }} </strong>
            
            <input id="rating" name="input" class="rating rating-loading" data-size='xs' data-show-clear='false' data-show-caption='false' data-readonly="true" value="{{ $data['rating_menu'] }}">

            <h4 style="margin-top: -0.5rem"><strong>IDR {{ number_format($data['detail_menu']->harga/1000) }}K</strong></h4>

            <hr>

            <div class="container ps-0">
                <p class="fs-5">{{ $data['detail_menu']->short_desc }}</p>
            </div>

            <div class="d-flex pt-3">
                <div class="input-group" style="width: auto; height: 50px;">
                    <button class="btn btn-danger fw-bold" onclick="decrease()">-</button>
                    <input type="number" name="" id="number-order" class="form-control text-center fw-bold" value="1" style="max-width: 4rem;">
                    <button class="btn btn-success fw-bold" onclick="increase()">+</button>
                </div>

                <button class="btn px-4 fw-bold ms-3" style="border: 2px solid #E1B168; border-radius: 0%;">Add to Cart</button>
            </div>

            <div class="container fs-5 ps-0 pt-5">
                <p class="fw-bold mb-2"><span style="color: #E1B168">#no: </span><span>{{ $data['detail_menu']->id }}</span></p>
                <p class="fw-bold mb-2"><span style="color: #E1B168" >CATEGORY: </span><span >{{ $data['detail_menu']->category->nama_kategori }}</span></p>
                <p class="fw-bold mb-2"><span style="color: #E1B168" >TAGS: </span><span >{{ $data['detail_menu']->tags }}</span></p>
            </div>
        </div>
    </div>

    <div class="container konten" style="margin-top: 6rem; margin-bottom: 15rem">
        <ul class="nav nav-tabs fw-bold fs-6" role="tablist" id="my_tab">
            <li class="nav-item active" role="presentation">
                <button class="nav-link px-0 active" data-bs-toggle="tab" data-bs-target="#desc_pane" role="tab">DESCRIPTION</button>
            </li>
            <li class="nav-item ps-5" role="presentation">
                <button class="nav-link px-0" data-bs-toggle="tab" data-bs-target="#review_pane" role="tab">REVIEWS (<span id="review_count">{{ $data['total_review'] }}</span>)</button>
            </li>
        </ul>

        <div class="tab-content">
            {{-- DESC TAB --}}
            <div class="tab-pane fade show active" id="desc_pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0" style="font-weight: 400">
                <hr>
                <h2 class="mt-4">Description</h2>
                <p style="width: 90%; color: #555555">{{ $data['detail_menu']->long_desc }}</p>
                <hr>
            </div>

            {{-- REVIEW TAB --}}
            <div class="tab-pane fade" id="review_pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="container mt-4" style="margin-left: -0.7rem">
                    <div class="container ps-0 mb-3 d-flex justify-content-between">
                        <div class="prev_next_btn">
                            <button class="btn @if($data['review']->isEmpty()) d-none @endif" type="button" data-bs-target="#review_cards" data-bs-slide="prev" style="border: 2px solid #E1B168"><i class="fa fa-arrow-left"></i></button>
                            <button class="btn @if($data['review']->isEmpty()) d-none @endif" type="button" data-bs-target="#review_cards" data-bs-slide="next" style="border: 2px solid #E1B168"><i class="fa fa-arrow-right"></i></button>
                        </div>

                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#new_review" id="add_review_btn" style="border: 2px solid #E1B168; border-radius: 0%">Tambah Ulasan Baru</button>
                    </div>
                        <div id="review_cards" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @forelse ($data['review']->chunk(3) as $review_chunk)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="row pb-4 mt-2">
                                            @foreach ($review_chunk as $review)
                                                <div class="col-md-4">
                                                    <div class="card" style="box-shadow: 0 4px 10px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.23);">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <img src="https://ui-avatars.com/api/?name={{ $review->poster_name }}&background=random" alt="" class="rounded-circle">
                                                                </div>

                                                                <div class="col ms-2">
                                                                    <h5 class="mt-1">{{$review->poster_name}}</h5>
                                                                    <p class="mt-0" style="color: #555555">{{ date('d-m-Y h:i:s', strtotime($review->posted_at)) }}</p>
                                                                </div>
                                                            </div>

                                                            <input id="rating" name="input" class="rating rating-loading" data-size='sm' data-show-clear='false' data-show-caption='false' data-readonly="true" value="{{ $review->rating }}">

                                                            <p>{{$review->message}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @empty
                                    <div class="carousel-item active">
                                        <div class="row pb-4 mt-2">
                                            <div class="col w-100" id="review_empty_msg">
                                                <div class="card" style="border: none">
                                                    <div class="card-body">
                                                        <div class="container ps-0 text-center mt-5">
                                                            <h3 style="color: #555555" class="fs-5">Belum ada user yang memberikan review</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                </div>
            </div>

            
            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="new_review" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Tambahkan Ulasan Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form_review">
                                @csrf
                                <input type="hidden" name="posted_at" value="{{ now() }}">
                                <input type="hidden" name="menu_id" value="{{ $data['detail_menu']->id }}">

                                <div class="mb-3">
                                    <label for="name_input" class="form-label">Nama Anda (Opsional)</label>
                                    <input type="text" class="form-control" id="name_input" aria-describedby="name_additional" name="name">
                                    <div id="name_additional" class="form-text">Jika Anda memilih untuk mengosongi nama, nama akan secara otomatis di-set 'Anonim'</div>
                                </div>

                                <div class="mb-3">
                                    <label for="review_input" class="form-label">Pesan Ulasan</label>
                                    <textarea class="form-control" id="review_input" name="review" required rows="10"></textarea>
                                </div>

                                <label for="rating_input" class="control-label">Berikan Rating Menu Ini</label>
                                <input id="rating_input" name="rating_input" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-show-clear="false" required>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')

    @yield('footer')

    <script>
        $(document).ready(function () {
            $('#rating_input').rating();

            $('#form_review').submit(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '/add-review', 
                    data: $('#form_review').serialize(),
                    success: function (response) {
                        if (response.review) {
                            $('#form_review').trigger("reset");
                            
                            var review = response.review;
                            var lastItem = $('#review_cards .carousel-item:last');

                            if (lastItem.find('.row.pb-4.mt-2 .col-md-4').length < 3) {
                                lastItem.find('.row.pb-4.mt-2').append(`
                                    <div class="col-md-4">
                                        <div class="card" style="box-shadow: 0 4px 10px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.23);">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <img src="https://ui-avatars.com/api/?name=${review.poster_name}&background=random" alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <h5 class="mt-1">${review.poster_name}</h5>
                                                        <p class="mt-0" style="color: #555555">${review.posted_at}</p>
                                                    </div>
                                                </div>
                                                <input id="rating_${review.id}" name="input" class="rating rating-loading" data-size='sm' data-show-clear='false' data-show-caption='false' data-readonly="true" value="${review.rating}">
                                                <p>${review.message}</p>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            } else {
                                $('#review_cards .carousel-inner').append(`
                                    <div class="carousel-item">
                                        <div class="row pb-4 mt-2">
                                            <div class="col-md-4">
                                                <div class="card" style="box-shadow: 0 4px 10px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.23);">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-2">
                                                                <img src="https://ui-avatars.com/api/?name=${review.poster_name}&background=random" alt="" class="rounded-circle">
                                                            </div>
                                                            <div class="col ms-2">
                                                                <h5 class="mt-1">${review.poster_name}</h5>
                                                                <p class="mt-0" style="color: #555555">${review.posted_at}</p>
                                                            </div>
                                                        </div>
                                                        <input id="rating_${review.id}" name="input" class="rating rating-loading" data-size='sm' data-show-clear='false' data-show-caption='false' data-readonly="true" value="${review.rating}">
                                                        <p>${review.message}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            }

                            $(`#rating_${review.id}`).rating();

                            $('.btn-primary').removeClass('d-none');

                            var review_count = $('#review_count');
                            var currentTotalReview = parseInt(review_count.text());
                            review_count.text(`${currentTotalReview + 1}`);

                            $('#review_empty_msg').addClass('d-none');

                            $('#new_review').modal('hide');

                            $('#review_cards').carousel('next');
                        } else {
                            console.log('Gagal menambahkan ulasan.');
                        }
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });


        function increase() {
            var dom = document.getElementById('number-order');
            var currentVal = parseInt(dom.value);

            dom.value = currentVal + 1;
        }

        function decrease() {
            var dom = document.getElementById('number-order');
            var currentVal = parseInt(dom.value);

            dom.value = currentVal > 0 ? currentVal - 1 : 0;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>