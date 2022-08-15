<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/base.css">
        <link rel="stylesheet" href="/css/grid.css">
        <link rel="stylesheet" href="/css/main.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

                <div class="wrapper">
                    <div class="grid wide">
                        <div class="row">
                            <div class="col p-3 t-12 m-12">
                                <div class="row">
                                    <div class="col p-12 t-12 m-12">
                                        <div class="categories">
                                <span class="categories__head">
                                    <i class="fa-solid fa-clone"></i>
                                    Danh mục
                                </span>
                                            <div class="box-categories">
                                                <div class="row">
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660483033464-68ab6fb8b10c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-solid fa-bahai"></i>
                                                            </div>
                                                            <div class="box-categories--text">Thời trang</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660490966948-218f35953796?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-solid fa-award"></i>
                                                            </div>
                                                            <div class="box-categories--text">Điện thoại</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1657299143322-934f44698807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-solid fa-baseball"></i>
                                                            </div>
                                                            <div class="box-categories--text">Điện tử</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660495135008-d072d17c5e6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-brands fa-battle-net"></i>
                                                            </div>
                                                            <div class="box-categories--text">Đồng hồ</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660495135008-d072d17c5e6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-brands fa-battle-net"></i>
                                                            </div>
                                                            <div class="box-categories--text">Đồng hồ</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660494911852-7ce46edd9cc7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-brands fa-black-tie"></i>
                                                            </div>
                                                            <div class="box-categories--text">Giày dép</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660494911852-7ce46edd9cc7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-brands fa-black-tie"></i>
                                                            </div>
                                                            <div class="box-categories--text">Giày dép</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660483033464-68ab6fb8b10c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-solid fa-bahai"></i>
                                                            </div>
                                                            <div class="box-categories--text">Thời trang</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660490966948-218f35953796?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-solid fa-award"></i>
                                                            </div>
                                                            <div class="box-categories--text">Điện thoại</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660477094366-c9210ee38c17?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-brands fa-behance"></i>
                                                            </div>
                                                            <div class="box-categories--text">Ô tô/xe máy</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1657299143322-934f44698807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-solid fa-baseball"></i>
                                                            </div>
                                                            <div class="box-categories--text">Điện tử</div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-2 t-12 m-12">
                                                        <div class="box-categories--item">
                                                            <div class="box-categories--img">
                                                                <img src="https://images.unsplash.com/photo-1660477094366-c9210ee38c17?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80" alt="Items" />
                                                                <div class="blur"></div>
                                                                <i class="fa-brands fa-behance"></i>
                                                            </div>
                                                            <div class="box-categories--text">Ô tô/xe máy</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-12 t-12 m-12 radio-left">
                                        <div class="fillter__sidebar">
                                            <div class="teller">
                                                <p>Bộ Lọc</p>
                                            </div>
                                            <div class="sort">
                                                <p>Sắp Xếp</p>
                                                <div>
                                                    <input type="radio" id="1" class="radio-title" name="drone" value="Giá Cao Đến Thấp"
                                                           checked/>
                                                    <label for="1" >Giá Cao Đến Thấp</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="2" class="radio-title" name="drone" value="Giá Thấp Đến Cao"/>
                                                    <label for="2" >Giá Thấp Đến Cao</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="3" class="radio-title" name="drone" value="Từ A-Z">
                                                    <label for="3" >Từ A-Z</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="4" class="radio-title" name="drone" value="Từ Z-A">
                                                    <label for="4" >Từ Z-A</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="5" id="radio-title " name="drone" value="Khuyến Mãi Nhiều Nhất">
                                                    <label for="5" >Khuyến Mãi Nhiều Nhất</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="6" class="radio-title" name="drone" value="Khuyến Mãi Ít Nhất">
                                                    <label for="6" >Khuyến Mãi Ít Nhất</label>
                                                </div>
                                            </div>
                                            <div class="type sort">
                                                <p>Loại Hình</p>
                                                <div>
                                                    <input type="radio" id="7" class="radio-title" name="drone1" value="TatCa"checked>
                                                    <label for="7" >Tất Cả</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="8" class="radio-title" name="drone1" value="BanChay">
                                                    <label for="8" >Bán Chạy</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="9" class="radio-title" name="drone1" value="GiamSau">
                                                    <label for="9" >Giảm Sâu Friends</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="10" class="radio-title" name="drone1" value="SieuHot">
                                                    <label for="10" >Siêu Hot</label>
                                                </div>
                                            </div>
                                            <div class="evaluate sort">
                                                <p>Đánh Giá</p>
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star fa-color"></i>
                                                </div>
                                            </div>
                                            <div class="range sort">
                                                <p>Khoảng Giá</p>
                                                <div class="range-slide">
                                                    <div class="slide">
                                                        <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                                                        <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                                                        <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                                                    </div>
                                                    <input class="range-input" id="rangeMin" type="range" max="100" min="10" step="5" value="0">
                                                    <input class="range-input" id="rangeMax" type="range" max="100" min="10" step="5" value="100">
                                                </div>
                                                <div class="display">
                                                    <span id="min">10</span>
                                                    <span id="max">100</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-9 t-12 m-12">
                                <div class="row">
                                    <div class="col p-12 t-12 m-12 category">
                                        <div class="cate_header">
                                            <p>danh sách sản phẩm</p>
                                        </div>
                                        <div class="cate_main">
                                            <div class="product_list row">

                                                <div class="product_item p-4">
                                                    <div class="product_cart">
                                                        <div class="cart_header">
                                                            <div class="product_image">
                                                                <img src="images/image1.jpg" alt="">
                                                            </div>
                                                            <div class="shop_info">
                                                                <div class="shop_avatar">
                                                                    <img src="images/avtatar.png" alt="">
                                                                </div>
                                                                <span class="shop_name">Shop 1</span>
                                                            </div>
                                                            <div class="kpi">Bán chạy</div>
                                                        </div>
                                                        <div class="cart_content">
                                                            <p class="product_name">
                                                                Sản phẩm 1
                                                            </p>
                                                            <div class="rate_and_price">
                                                                <div class="rate_star">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="product_price">
                                                                    <span class="old_price">60 </span>
                                                                    <span class="new_price"> $40</span>
                                                                </div>
                                                            </div>
                                                            <div class="addCart">
                                                                <button>Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_item p-4">
                                                    <div class="product_cart">
                                                        <div class="cart_header">
                                                            <div class="product_image">
                                                                <img src="images/image1.jpg" alt="">
                                                            </div>
                                                            <div class="shop_info">
                                                                <div class="shop_avatar">
                                                                    <img src="images/avtatar.png" alt="">
                                                                </div>
                                                                <span class="shop_name">Shop 1</span>
                                                            </div>
                                                            <div class="kpi">Giảm sâu</div>
                                                        </div>
                                                        <div class="cart_content">
                                                            <p class="product_name">
                                                                Sản phẩm 1
                                                            </p>
                                                            <div class="rate_and_price">
                                                                <div class="rate_star">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="product_price">
                                                                    <span class="old_price">60 </span>
                                                                    <span class="new_price"> $40</span>
                                                                </div>
                                                            </div>
                                                            <div class="addCart">
                                                                <button>Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_item p-4">
                                                    <div class="product_cart">
                                                        <div class="cart_header">
                                                            <div class="product_image">
                                                                <img src="images/image1.jpg" alt="">
                                                            </div>
                                                            <div class="shop_info">
                                                                <div class="shop_avatar">
                                                                    <img src="images/avtatar.png" alt="">
                                                                </div>
                                                                <span class="shop_name">Shop 1</span>
                                                            </div>
                                                            <div class="kpi">Siêu hot</div>
                                                        </div>
                                                        <div class="cart_content">
                                                            <p class="product_name">
                                                                Sản phẩm 1
                                                            </p>
                                                            <div class="rate_and_price">
                                                                <div class="rate_star">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="product_price">
                                                                    <span class="old_price">60 </span>
                                                                    <span class="new_price"> $40</span>
                                                                </div>
                                                            </div>
                                                            <div class="addCart">
                                                                <button>Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_item p-4">
                                                    <div class="product_cart">
                                                        <div class="cart_header">
                                                            <div class="product_image">
                                                                <img src="images/image1.jpg" alt="">
                                                            </div>
                                                            <div class="shop_info">
                                                                <div class="shop_avatar">
                                                                    <img src="images/avtatar.png" alt="">
                                                                </div>
                                                                <span class="shop_name">Shop 1</span>
                                                            </div>
                                                            <div class="kpi">Siêu hot</div>
                                                        </div>
                                                        <div class="cart_content">
                                                            <p class="product_name">
                                                                Sản phẩm 1
                                                            </p>
                                                            <div class="rate_and_price">
                                                                <div class="rate_star">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="product_price">
                                                                    <span class="old_price">60 </span>
                                                                    <span class="new_price"> $40</span>
                                                                </div>
                                                            </div>
                                                            <div class="addCart">
                                                                <button>Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_item p-4">
                                                    <div class="product_cart">
                                                        <div class="cart_header">
                                                            <div class="product_image">
                                                                <img src="images/image1.jpg" alt="">
                                                            </div>
                                                            <div class="shop_info">
                                                                <div class="shop_avatar">
                                                                    <img src="images/avtatar.png" alt="">
                                                                </div>
                                                                <span class="shop_name">Shop 1</span>
                                                            </div>
                                                            <div class="kpi">Bán chạy</div>
                                                        </div>
                                                        <div class="cart_content">
                                                            <p class="product_name">
                                                                Sản phẩm 1
                                                            </p>
                                                            <div class="rate_and_price">
                                                                <div class="rate_star">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="product_price">
                                                                    <span class="old_price">60 </span>
                                                                    <span class="new_price"> $40</span>
                                                                </div>
                                                            </div>
                                                            <div class="addCart">
                                                                <button>Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_item p-4">
                                                    <div class="product_cart">
                                                        <div class="cart_header">
                                                            <div class="product_image">
                                                                <img src="images/image1.jpg" alt="">
                                                            </div>
                                                            <div class="shop_info">
                                                                <div class="shop_avatar">
                                                                    <img src="images/avtatar.png" alt="">
                                                                </div>
                                                                <span class="shop_name">Shop 1</span>
                                                            </div>
                                                            <div class="kpi">Giảm sâu</div>
                                                        </div>
                                                        <div class="cart_content">
                                                            <p class="product_name">
                                                                Sản phẩm 1
                                                            </p>
                                                            <div class="rate_and_price">
                                                                <div class="rate_star">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="product_price">
                                                                    <span class="old_price">60 </span>
                                                                    <span class="new_price"> $40</span>
                                                                </div>
                                                            </div>
                                                            <div class="addCart">
                                                                <button>Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-12 t-12 m-12">
                                        <div class="pagination">
                                            <a href="#" class="pagination__item">
                                                <i class="fa-solid fa-angles-left"></i>
                                            </a>
                                            <a href="#" class="pagination__item active">1</a>
                                            <a href="#" class="pagination__item">2</a>
                                            <a href="#" class="pagination__item">3</a>
                                            <a href="#" class="pagination__item">
                                                <i class="fa-solid fa-angles-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart">
                            Giỏ hàng <i class="fa-solid fa-cart-shopping"></i> | 02
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
