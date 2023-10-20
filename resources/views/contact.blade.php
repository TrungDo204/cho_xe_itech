@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/contact.css">
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
        <section class="audit_header">
            <div class="container">
                <div class="columns is-mobile">
                    <div class="column is-6 is-align-self-center p-4">
                        <div class="audit_title">TRÁNH MUA NHẦM XE ĐÂM ĐỤNG, NGẬP NƯỚC</div>
                        <div class="mt-5"><b>Dịch vụ Kiểm tra xe ô tô cũ Car Audit của Chợ Xe</b> giúp bạn hiểu rõ hơn về tình trạng chiếc xe bạn định mua</div>
                        <div class="audit_checklist">
                            <div>Thông tin đâm đụng, ngập nước</div>
                            <div>Tình trạng chức năng hoạt động</div>
                            <div>Mức giá tham khảo cho xe</div>
                        </div>
                    </div>
                    <div class="column is-6 p-4">
                        <div class="mt-5 has-text-centered"><img src="./img/logo_cont.jpg" class="image"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="container">
                <div class="columns is-mobile">
                    <div class="column is-6 p-4 is-align-self-center">
                        <div class="audit_title">CAR AUDIT LÀ GÌ?</div>
                        <div class="car_audit_item">
                            <div class="audit_icon"><i class="icon-car-check-white"></i></div>
                            <div class="car_audit_content">Là dịch vụ kiểm tra và thẩm định ô tô cũ của Chợ Xe</div>
                        </div>
                        <div class="car_audit_item">
                            <div class="audit_icon"><i class="icon-medal-white"></i></div>
                            <div class="car_audit_content">Được thực hiện bởi chuyên gia kiểm tra xe nhiều năm kinh nghiệm</div>
                        </div>
                        <div class="car_audit_item">
                            <div class="audit_icon"><i class="icon-car-commitment-white"></i></div>
                            <div class="car_audit_content">Giúp thông tin tình trạng xe rõ ràng và minh bạch</div>
                        </div>
                    </div>
                    <div class="column is-6 p-4">
                        <div class="card is-overflow">
                            <div class="card-content">
                                <form class="form_audit" method="post" action="/contact" >
                                    <div class="h0 has-text-centered mb-4 mt-1">Đăng ký kiểm tra xe</div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="text_input has_inline_label"> 
                                                <input id="name_con" name="name_con" class="input" placeholder="Họ và Tên"  type="text" value="" oninvalid="this.setCustomValidity('Vui lòng nhập họ tên')" oninput="this.setCustomValidity('')" required="">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="text_input has_inline_label">
                                                <input id="tele_con" name="tele_con" class="input" placeholder="Số điện thoại" type="text" value="" oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại')" oninput="this.setCustomValidity('')" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="select_region select_dropdown has_inline_label">
                                                <input type="text" id="address_con" name="address_con" placeholder="Khu vực xe" value="" class="is-hidden-input" style="width: 100%; height: 100%;" oninvalid="this.setCustomValidity('Vui lòng chọn tỉnh/thành phố')" oninput="this.setCustomValidity('')" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="text_input has_inline_label">
                                                <input id="car_model" name="car_con" placeholder="Tên dòng xe cần kiểm tra" class="input" type="text" value="" oninvalid="this.setCustomValidity('Vui lòng nhập dòng xe')" oninput="this.setCustomValidity('')" required="">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="text_input has_inline_label">
                                               
                                                <input id="appointment_date" name="date_con" class="input" type="date" value="" oninvalid="this.setCustomValidity('Vui lòng chọn ngày')" oninput="this.setCustomValidity('')" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="textarea_input has_inline_label is-row-3">
                                                <textarea class="textarea" style="width: 100%; height: 100%;" placeholder="Ghi chú" name="decription_con" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <button type="submit" class="button is-fullwidth is-primary">Gửi yêu cầu</button>
                                        </div>
                                    </div>@csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="has-background-white py-6">
            <div class="container">
                <div class="audit_title has-text-centered">
                    CAR AUDIT GIÚP NGƯỜI MUA
                </div>
                <div class="columns mt-7">
                    <div class="column is-6 is-align-self-center">
                        <div class="audit_subtitle mt-5">Không lo mua phải xe đã mông má, đại tu</div>
                        <div class="mt-3">Car Audit sẽ giúp bạn biết được tình trạng xe</div>
                        <div class="audit_checklist">
                            <div>Thông tin đâm đụng, ngập nước</div>
                            <div>Tình trạng chức năng hoạt động</div>
                            <div>Mức giá tham khảo cho xe</div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="has-text-centered"><img src="img/car_audit1_pc.jpg" class="image"></div>
                    </div>
                </div>
                <div class="columns mt-7">
                    <div class="column is-6">
                        <div class="has-text-centered"><img src="img/car_audit2_pc.jpg" class="image"></div>
                    </div>
                    <div class="column is-6 is-align-self-center">
                        <div class="audit_subtitle mt-5">Đánh giá đúng giá trị thực tế của chiếc xe</div>
                        <div class="mt-3">Sau khi kiểm tra, bạn sẽ được tư vấn về giá trị của chiếc xe</div>
                        <div class="audit_checklist">
                            <div>Mức giá hợp lý cho chiếc xe đó</div>
                            <div>Các chi phí có thể phát sinh sau khi mua</div>
                        </div>
                    </div>
                </div>
                <div class="columns mt-7">
                    <div class="column is-6 is-align-self-center">
                        <div class="audit_subtitle mt-5">An tâm đưa ra quyết định mua xe</div>
                        <div class="mt-3">Car Audit giúp bạn giải quyết những nỗi lo khi mua xe cũ</div>
                        <div class="audit_checklist">
                            <div>An tâm về chất lượng xe</div>
                            <div>Chi phí hợp lí</div>
                            <div>Xe không phát sinh lỗi</div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="has-text-centered"><img src="./img/car_audit3_pc.jpg" class="image"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="audit_process py-6">
            <div class="container">
                <div class="columns is-mobile">
                    <div class="column is-6 p-4">
                        <img src="img/quy_trinh_check_xe.jpg" class="image">
                    </div>
                    <div class="column is-6 is-align-self-center">
                        <div class="audit_title">QUY TRÌNH CHECK XE Ô TÔ CŨ VỚI 8 HẠNG MỤC</div>
                        <div class="mt-3">Và 136 tiêu chí giúp thông tin xe trở nên minh bạch, rõ ràng, đáng tin cậy</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="has-background-white py-6">
            <div class="container">
                <div class="audit_title has-text-centered">CÂU HỎI THƯỜNG GẶP</div>
                <div class="list_question">
                    <div class="card question select_dropdown">
                        <div class="card-content">
                            <div class="question_title">Car Audit của Chợ Xe có kiểm tra được xe đâm đụng, thủy kích không?</div>
                            <div class="answer">Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</div>
                        </div>
                    </div>
                    <div class="card question select_dropdown">
                        <div class="card-content">
                            <div class="question_title">Gói dịch vụ xuống tận nơi kiểm tra hay tôi mang xe đến Garage của Chợ Xe?</div>
                            <div class="answer">Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</div>
                        </div>
                    </div>
                    <div class="card question select_dropdown">
                        <div class="card-content">
                            <div class="question_title">Thời gian kiểm tra 1 chiếc ô tô cũ mất khoảng bao lâu?</div>
                            <div class="answer">Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</div>
                        </div>
                    </div>
                    <div class="card question select_dropdown">
                        <div class="card-content">
                            <div class="question_title">Tôi cần đặt lịch hẹn kiểm tra xe trước bao lâu?</div>
                            <div class="answer">Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</div>
                        </div>
                    </div>
                    <div class="card question select_dropdown">
                        <div class="card-content">
                            <div class="question_title">Nếu tôi không mua được xe thì có mất phí kiểm tra không?</div>
                            <div class="answer">Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</div>
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