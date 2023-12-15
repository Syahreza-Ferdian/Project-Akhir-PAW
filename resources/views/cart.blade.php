<!doctype html>
<html lang=en>

<head>
    <title>Transaction</title>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/cart_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://kit.fontawesome.com/54ae9d808b.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('header')

    @yield('navbar')

    <main>
        <form>
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
                            <div class="order_main" >
                                <div class="table_1">
                                    <table>
                                        <tr>
                                            <th>ITEMS</th>
                                            <th id=price>PRICE</th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="table_2">
                                    <table>
                                        <tr>
                                            <th>Nama Makanan</th>
                                            <th>Jumlah</th>
                                        </tr>

                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td>{{ $item['menu']->nama }} (x{{ $item['quantity'] }})</td>
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
                            </div>
                        </div>
                    </div>
                    <div class=right>
                    </div>
                </div>
                <section class=sec_7>
                    <div class=title_5>
                        <div class=number_5>
                            <p class=number_3_text>1</p>
                        </div>
                    </div>
                    </div>
                    <div class=input_name_wrapper>
                        <div class=input_name>
                            <p class=full_name>
                                Full Name
                            </p>
                        </div>
                        <div class=input_form>
                            <div>
                                <input name="name" id="name" required value="" placeholder="">
                                <label for="name"></label>
                            </div>
                        </div>
                    </div>
                    <div class=input_noMeja>
                        <div class=input_email_wrapper>
                            <div class=email_name>
                                <p class=full_name>
                                    No Meja
                                </p>
                            </div>
                            <div class=meja_form>
                                <div>
                                    <input type="meja" name="name" required id="NoMeja" value=""
                                        placeholder="">
                                    <label for="email"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=sec_6>
                    <div class=title_2>
                        <div class=number_2>
                            <p class=number_3_text>2</p>
                        </div>
                    </div>
                </section>
                <section class=sec_8>
                    <div class=cashier>
                        <label class=cashier>
                            <input hidden required type=radio name=payment>
                            <div class=payment_wrapper>
                                <img class=cashier_img src={{ asset('images/cart/cash-machine.png') }} alt=visa_master>
                            </div>
                        </label>
                    </div>
                    <div class=qris_wrapper>
                        <label class=qris>
                            <input hidden required type=radio name=payment>
                            <div class=payment_wrapper>
                                <img class=qris_img src={{ asset('images/cart/qris.png') }} alt=paypal>
                            </div>
                        </label>
                    </div>
                </section>
                <section class=sec_10>
                    <div class=check_text_wrapper>
                        <input type=checkbox>
                        <label>
                            <p class=check_text>
                                I agree to the
                                <a href=#>Terms & Conditions</a>
                            </p>
                        </label>
                    </div>
                    <div class=button_order_2>
                        <button class=place_order>PLACE ORDER</button>
                        <button class=print_a_quote>PRINT A QUOTE</button>
                    </div>
                </section>
            </section>
        </form>
    </main>
</body>

</html>
