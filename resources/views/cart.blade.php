<!doctype html>
<html lang=en>

<head>
    <title>Transaction</title>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/cart_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://kit.fontawesome.com/54ae9d808b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    @include('header')

    @yield('navbar')

    <div class="menu-header" style="background-color: #292E36; font-family: 'Cormorant Infant', serif;">
        <h1 class="text-center" style="padding: 4rem 0"><span class="text-light"
                style="border: 1px solid #E1B168; border-left: none; border-right: none">Keranjang Pesanan</span></h1>
    </div>

    <main>
        <form id="form_transaksi">
            @csrf
            <section class=sec_1>
                <div class=order_wrapper>
                    <div class=left>
                        <div class=order_list>

                            <div class=order_header>
                                <h2>
                                    <i class="fa fa-clipboard order-symbol" aria-hidden="true"></i>
                                    YOUR ORDER
                                </h2>
                            </div>
                            <div class="order_main">
                                <div class="table_1">
                                    <table>
                                        <tr>
                                            <th style="width: 61rem">ITEMS</th>
                                            <th id=price>PRICE</th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="table_2">
                                    <table>

                                        @foreach ($cartItems as $item)
                                        <tr>
                                            <td style="width: 58rem">{{ $item['menu']->nama }} (x{{ $item['quantity']
                                                }})</td>
                                            <td>Rp {{ number_format($item['price'], 2) }}</td>
                                        </tr>
                                        @endforeach
                                        {{-- @if (session('orders'))
                                        @foreach (session('orders') as $order)

                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="2">Anda belum memilih pilihan menu</td>
                                        </tr>
                                        @endif --}}
                                    </table>
                                </div>
                                <div class="table_3">
                                    <table>
                                        <hr style="color: #E1B168;">
                                        <tr>
                                            <td style="width: 58rem">TOTAL :</td>
                                            <td>Rp {{ number_format($totalPrice, 2) }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <hr style="color: #E1B168;">
                            </div>
                        </div>
                    </div>
                    <div class=right>
                    </div>
                </div>
                <section class=sec_7>
                    <div class=title_5>
                        <div class=number_5>
                            <p class=number_3_text>1. Masukan data anda</p>
                        </div>
                    </div>
                    <div class=input_name_wrapper>
                        <div class=input_name>
                            <p class=full_name>
                                Nama Lengkap
                            </p>
                        </div>
                        <div class=input_form>
                            <div>
                                <input name="name" id="name" required value="" placeholder="">
                                <label for="name"></label>
                            </div>
                        </div>
                    </div>
                    <div class=input_noMeja_wrapper>
                        <div class=input_noMeja>
                            <p class=full_name>
                                Nomor Meja
                            </p>
                        </div>
                        <div class=input_form>
                            <div>
                                <input name="meja" id="noMeja" required value="" placeholder="">
                                <label for="meja"></label>
                            </div>
                        </div>
                    </div>

                </section>
                <section class=sec_6>
                    <div class=title_2>
                        <div class=number_2>
                            <p class=number_3_text>2. Pilih pembayaran</p>
                        </div>
                    </div>
                </section>
                <section class=sec_8>
                    <div class=cashier>
                        <label class=cashier>
                            <input type="radio" required name="payment" value="kasir">
                            <div class=payment_wrapper>
                                <img class=cashier_img src={{ asset('images/cart/cash-machine.png') }} alt=cashier>
                            </div>
                        </label>
                    </div>
                    <div class=qris_wrapper>
                        <label class=qris>
                            <input type="radio" required name="payment" value="kasir">
                            <div class=payment_wrapper>
                                <img class=qris_img src={{ asset('images/cart/qris.png') }} alt=qris>
                            </div>
                        </label>
                    </div>
                </section>
                <section class="sec_10 {{ session('success') ? 'active' : '' }}">
                    <div class=check_text_wrapper>
                        <input type="checkbox">
                        <label>
                            <p class=check_text>
                                I agree to the
                                <a href=#>Terms & Conditions</a>
                            </p>
                        </label>
                    </div>
                    <div class=button_order_2>
                        <button class=place_order id="place_order" type="submit">PLACE ORDER</button>
                        <button class=print_a_quote>PRINT A QUOTE</button>
                    </div>

                </section>
            </section>
        </form>
    </main>

    @include('footer')

    @yield('footer')

    <script>
        $('#form_transaksi').submit(function (e) {
            e.preventDefault();
            var uniqueID = generateUniqueID();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '/place-order',
                data: {
                    noMeja: $('#noMeja').val(),
                    name: $('#name').val(),
                    unique_id: uniqueID,
                    _token: $('meta[name="csrf-token"]').attr('content'),
                },
                success: function (response) {
                    Swal.fire({
                        title: "Berhasil!",
                        text: `Pesanan Anda Telah Diterima. Silahkan tunjukan id anda kepada kasir. ID Pesanan: ${uniqueID}`,
                        icon: "success"
                    }).then(() => {
                        location.reload();
                    });
                },
                error: function (error) {
                    console.error('Error placing order:', error);
                }
            });
        });

        function generateUniqueID() {
            const timestamp = new Date().getTime() % 10000;
            const randomNumber = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;
            const uniqueID = `${timestamp}-${randomNumber}`;

            return uniqueID;
        }


    </script>

</body>
</html>