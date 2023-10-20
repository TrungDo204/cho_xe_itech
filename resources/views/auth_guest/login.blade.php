@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chợ xe</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="body-m">
        <main>
            <main class="login-form">
                <div class="cotainer">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Login</div>
                                <div class="card-body">
                                    <form action="{{ route('login.post') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
                                            <div class="col-md-6">
                                                <input type="text" id="user_name" class="form-control" name="name" required autofocus>
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" id="password" class="form-control" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember"> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <section>
                <div class="container">
                    <div class="card">
                        <div class="card-conrent pb-0">
                            <h2>Salon oto</h2>
                            <div class="columns is-mobile is-multiline list_salon">
                                <div class="column is-6 list_salon_item">
                                    <div class="list_salon_item_photo">
                                        <a href="#"><img src="/img/car-10.jpg" class="image"></a>
                                    </div>
                                    <div class="list_salon_item_info">
                                        <div class="salon_name">
                                            <a href="#">Chợ Xe Kiểu Mỹ</a>
                                        </div>
                                        <div class="location">135 Nguyễn trãi</div>
                                        <div class="phone">0911442883</div>
                                    </div>
                                </div>
                                <div class="column is-6 list_salon_item">
                                    <div class="list_salon_item_photo">
                                        <a href="#"><img src="/img/car-10.jpg" class="image"></a>
                                    </div>
                                    <div class="list_salon_item_info">
                                        <div class="salon_name">
                                            <a href="#">Chợ Xe Kiểu Mỹ</a>
                                        </div>
                                        <div class="location">135 Nguyễn trãi</div>
                                        <div class="phone">0911442883</div>
                                    </div>
                                </div>
                                <div class="column is-6 list_salon_item">
                                    <div class="list_salon_item_photo">
                                        <a href="#"><img src="/img/car-10.jpg" class="image"></a>
                                    </div>
                                    <div class="list_salon_item_info">
                                        <div class="salon_name">
                                            <a href="#">Chợ Xe Kiểu Mỹ</a>
                                        </div>
                                        <div class="location">135 Nguyễn trãi</div>
                                        <div class="phone">0911442883</div>
                                    </div>
                                </div>
                                <div class="column is-6 list_salon_item">
                                    <div class="list_salon_item_photo">
                                        <a href="#"><img src="/img/car-10.jpg" class="image"></a>
                                    </div>
                                    <div class="list_salon_item_info">
                                        <div class="salon_name">
                                            <a href="#">Chợ Xe Kiểu Mỹ</a>
                                        </div>
                                        <div class="location">135 Nguyễn trãi</div>
                                        <div class="phone">0911442883</div>
                                    </div>
                                </div>
                                <div class="column is-6 list_salon_item">
                                    <div class="list_salon_item_photo">
                                        <a href="#"><img src="/img/car-10.jpg" class="image"></a>
                                    </div>
                                    <div class="list_salon_item_info">
                                        <div class="salon_name">
                                            <a href="#">Chợ Xe Kiểu Mỹ</a>
                                        </div>
                                        <div class="location">135 Nguyễn trãi</div>
                                        <div class="phone">0911442883</div>
                                    </div>
                                </div>
                                <div class="column is-6 list_salon_item "></div>
                                <div class="has-text-centered mb-3">
                                    <a href="#" class="btn_view_more has_right_arrow">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="card">
                    <div class="card-content">
                        <h2 class="h1">Các hãng xe</h2>
                        <div class="columns is-mobile is-multiline mt-3">
                            <div class="column is-2">
                                <a href="https://choxe.vn/mua-ban-xe-toyota.b10" class="brand-item">
                                <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/eOSjSo0gO8zg3aHRY4hpcC5hoLIfgYB47RZLyJF4.png" class="image" alt=""></span>
                                <span class="brand_name">Toyota</span>
                                </a>
                            </div>
                            <div class="column is-2">
                                <a href="https://choxe.vn/mua-ban-xe-hyundai.b3" class="brand-item">
                                    <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/hxYUSrBgsJGbgHENtd1chtBB19r1ksXHzQaPEAwr.png" class="image" alt=""></span>
                                    <span class="brand_name">Hyundai</span>
                                </a>
                            </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-kia.b4" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/uvICoTdobRIpiAXOixCuqkkLZz3s31JrMXLcm4Ap.png" class="image" alt=""></span>
                                        <span class="brand_name">KIA</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-vinfast.b12" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/b1jG5dKj26eRha1W4N18eDTmnRFtpQv4WaYoAQvx.png" class="image" alt=""></span>
                                        <span class="brand_name">VinFast</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-mitsubishi.b6" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/SyCd75asAUtvOi47Xo8hhRwrUMFCzqVyMdTX4v1n.png" class="image" alt=""></span>
                                        <span class="brand_name">Mitsubishi</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-mazda.b22" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/Ivm3NQ38jfj7OB9CnvnrY832QuWVde0VS1zVxD6A.png" class="image" alt=""></span>
                                        <span class="brand_name">Mazda</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-ford.b1" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/HIsRavXij0eXRvpan2rQ6hhK1x0xE5AQZQulMAwh.png" class="image" alt=""></span>
                                        <span class="brand_name">Ford</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-honda.b2" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/EUz8F51M2NxCyY6z4XTb9A2uBGxBRjeUIi6DdrBj.png" class="image" alt=""></span>
                                        <span class="brand_name">Honda</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-suzuki.b9" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/6gUqToXRpeo5wtrKZA7AerqzFRZWvDAOHvedLR8L.png" class="image" alt=""></span>
                                        <span class="brand_name">Suzuki</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-mercedes-benz.b15" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/rflImCxyuFYRqhhufOzm49pxkBlTFElThgyp4gvz.png" class="image" alt=""></span>
                                        <span class="brand_name">Mercedes-Benz</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-bmw.b21" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/GKp6EsreSG6EE6M4FGbwyTqtqW92dgs0gySJrgIm.png" class="image" alt=""></span>
                                        <span class="brand_name">BMW</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-audi.b25" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/B1WGu56r65M1CX2G7MwdsZBlsdtAn8sYkC6I7iz2.png" class="image" alt=""></span>
                                        <span class="brand_name">Audi</span>
                                    </a>
                                </div>
                        </div>
                        <div id="more_brand" class="columns is-multiline is-mobile mb-0 is-hidden">
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-peugeot.b31" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/RUaGWHaM7ITdK32Ym8C2CcQYex1TRltUG0TPNyiB.png" class="image" alt=""></span>
                                        <span class="brand_name">Peugeot</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-isuzu.b36" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20220517/AObF7Z5iuO7k7LnLzHf04yK4afd72Z6KlZO3x6O7.png" class="image" alt=""></span>
                                        <span class="brand_name">Isuzu</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-subaru.b8" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/6Iv4VKqCyIeHqokGF5hfRUkcd8sVhE5l7myc2gm2.png" class="image" alt=""></span>
                                        <span class="brand_name">Subaru</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-nissan.b7" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/66WARwSXjFfhTS8Gd2Ze2bSzW05W4NB1JPE0TXHL.png" class="image" alt=""></span>
                                        <span class="brand_name">Nissan</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-mg.b20" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/bEniM1nfBsq6vBjO61Emk2kRTl0q8doZAV4HBaLm.png" class="image" alt=""></span>
                                        <span class="brand_name">MG</span>
                                    </a>
                                </div>
                                <div class="column is-2">
                                    <a href="https://choxe.vn/mua-ban-xe-lexus.b5" class="brand-item">
                                        <span class="brand_logo"><img src="https://cdn1.otosaigon.com/data/carinfo/20211018/JhRTYkecAKtFQwmBMj6gTy996ZhjdBnYTyytlv77.png" class="image" alt=""></span>
                                        <span class="brand_name">Lexus</span>
                                    </a>
                                </div>
                                
                        </div>
                                    <div class="section_footer mt-2">
                            <a href="#" class="btn_view_more has_down_arrow btn_view_more_brand">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <section class="footer_section">
                <div class="container">
                    <div class="logo-footer"></div>
                    <div class="footer_content_wrapper">
                        <div class="footer_content">
                            <div>©2022 by ChoXe.net. All rights reserved. Công Ty Cổ Phần Ô Tô Xuyên Việt; Mã số thuế: 0304013473
                            </div>
                            <div class="mt-5">Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TPHCM</div>
                            <div class="footer_contact mt-5">
                                <a href="#" class="phone">0362968695</a>
                                <a href="#" class="email">cskh@choxe.vn</a>
                            </div>
                            <div class=""><img src="https://choxe.vn/assets/img/logo-bct.png" class="image"></div>
                        </div>
                        <div class="footer_link">
                            <a href="#">Giới thiệu</a>
                            <a href="#">Quy chế hoạt động</a>
                            <a href="#">Báo giá</a>
                        </div>
                        <div>
                            <a href="#" class="button btn_hotline">Hotline: 0362968695</a>
                            <a href="#" class="button btn_agent mt-4">Dành cho Salon, Môi giới</a>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
</body>
</html>


@endsection

