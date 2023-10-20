@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://choxe.vn/assets/img/next_8_12.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="body-m">
       <main>
        <section class="pb-0">
        @foreach($product as $key => $row)
            <div class="container">
                <nav class="breadcrumb">
                    <ul>
                        <li>Chợ xe<i class="material-icons">navigate_next</i></li>
                        <li>{{$row->company}}<i class="material-icons">navigate_next</i></li>
                        <li>{{$row->type_pro}}<i class="material-icons">navigate_next</i></li>
                        <li>{{$row->name_pro}}<i class="material-icons">navigate_next</i></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section>
            <div class="main-section container">
                <div class="main-content">
                    <div class="card">
                        <div class="card-content">
                        
                           <div class="listing_gallery slick-initialized slick-slider">
                                        <div class="slick-list draggable" style="height: 470.25px;">
                                            <div class="slick-track" style="opacity: 1;">
                                                <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 836px;"><img alt="{{ $row->name_pro }}" src="{{asset('admin_image/' . $row->image)}}" class="image"></div>
                                            </div>
                                        </div>
                            </div>
                            <div class="listing_meta">
                                <span class="location">Hà Nội</span>
                                <span class="published_date">29/06/2023</span>
                            </div>
                            <h1 class="listing_title">{{$row->name_pro}}</h1>
                            <div class="is-flex is-align-items-center is-justify-content-space-between mt-1">
                                <div class="listing_price">{{$row->price_pro}}</div>
                                <div>
                                    <a href="#" class="button btn_add_favorite " data-id="732">Lưu tin</a>
                                </div>
                            </div>
                            <div class="mt-5">
                                <h2>Mô tả</h2>
                                <div class="listing_description is-shorten mt-2">{{$row->decription_pro}}</div>
                            </div>
                            <div class="mt-5">
                                <h2>Chi tiết</h2>
                                <div class="table_attribute_wapper mt-3">
                                    <table class="table table_attribute">
                                        <tbody>
                                            <tr>
                                                <td class="listing_detail">
                                                    <span class="listing_detail_brand">Hãng xe</span>
                                                </td>
                                                <td>{{$row->company}}</td>
                                            </tr>
                                            <tr>
                                                <td class="listing_detail">
                                                    <span class="listing_detail_model">Dòng xe</span>
                                                </td>
                                                <td>{{$row->type_pro}}</td>
                                            </tr>
                                            <tr>
                                                <td class="listing_detail">
                                                    <span class="listing_detail_year">Năm sản xuất</span>
                                                </td>
                                                <td>{{$row->year_created}}</td>
                                            </tr>
                                            <tr>
                                                <td class="listing_detail">
                                                    <span class="listing_detail_odo">Số km đã đi</span>
                                                </td>
                                                <td>{{$row->traveled}}</td>
                                            </tr>
                                            <tr>
                                                <td class="listing_detail">
                                                    <span class="listing_detail_fuel">Nhiên liệu</span>
                                                </td>
                                                <td>{{$row->fuel}}</td>
                                            </tr>
                                     </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar">
                    <div class="card">
                        <div class="card-content">
                            <h2>Liên hệ</h2>
                        <div class="listing_contact">
                            <div class="contact_info">
                                @foreach ($contact as $key => $con)
                                <div class="contact_name">
                                    <span>{{$con->name_con}}</span>
                                    <div class="listing_meta">
                                        <span class="phone">{{$con->tele_con}}</span>
                                        <span class="location">{{$con->address_con}}</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                            <div class=""><a href="#" class="button btn_call is-primary is-fullwidth mt-4">{{$con->tele_con}}</a>
                            </div>@endforeach
                            <a href="/contact" class="button btn_audit is-primary is-outlined is-fullwidth mt-4">Car Audit</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
       </main>
        <footer>
            <section class="footer_section">
                <div class="container">
                    <div class="logo-footer"><img src="./img/logo_white.png" alt=""></div>
                    <div class="footer_content_wrapper">
                        <div class="footer_content">
                            <div>©2022 by ChoXe.net. All rights reserved. Công Ty Cổ Phần Ô Tô Xuyên Việt; Mã số thuế: 56645654645646
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