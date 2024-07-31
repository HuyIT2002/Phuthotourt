@extends('main')

@section('content')
<div class="container-2" id="scrollContainer">
    <div class="row justify-content-center align-items-center">
        <div class="content-a" id="content-a">
            <div class="header-section d-flex flex-column align-items-center">
                <div class="header-text d-flex flex-column align-items-center">
                    <div class="company-name text-center text-white">
                        CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ
                    </div>
                    <div class="brand-name">
                        PHUTHOTOURIST
                    </div>
                </div>
                <div class="establishment-date text-white">
                    Ngày thành lập 01/01/2019
                </div>
            </div>

            <div class=" image-container">
                <div class=" image-item">
                    <img class="img-fluid" src="{{ asset('/public/images/home/2.png') }}" alt="Placeholder Image 2" />
                    <div class="text-overlay">
                        Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022
                    </div>
                </div>
                <div class=" image-item">
                    <img class="img-fluid" src="{{ asset('/public/images/home/3.png') }}" alt="Placeholder Image 3" />
                    <div class="text-overlay">
                        Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022
                    </div>
                </div>
                <div class=" image-item">
                    <img class="img-fluid" src="{{ asset('/public/images/home/5.png') }}" alt="Placeholder Image 5" />
                    <div class="text-overlay">
                        Hơn 1000 bánh chưng lộc
                        cho khách dâng hương
                        tượng vua Hùng tại Đầm Sen
                    </div>
                </div>
                <div class=" image-item">
                    <img class="img-fluid" src="{{ asset('/public/images/home/4.png') }}" alt="Placeholder Image 4" />
                    <div class="text-overlay">
                        Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022
                    </div>
                </div>
                <div class=" image-item">
                    <img class="img-fluid" src="{{ asset('/public/images/home/1.png') }}" alt="Placeholder Image 1" />
                    <div class="text-overlay">
                        Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-container d-inline-flex flex-column justify-content-center align-items-center"
        onclick="scrollToContentB()">
        <div class="custom-box position-relative">
            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Group 6">
                    <path id="Vector" d="M24.5 12L13 22L1.5 12" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path id="Vector_2" d="M24.5 2L13 12L1.5 2" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                </g>
            </svg>
        </div>
    </div>
    <div class="content-section content-b" id="contentB">
        <div class="header-section d-flex flex-column align-items-center">
            <div class="container-custom-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 mb-2 text-center custom-col">
                        <div class="box-1">
                            <div class="box-content">
                                <div class="header-section-box-1">
                                    <div class="header-title">VỀ CHÚNG TÔI</div>
                                    <div class="header-subtitle">
                                        Chúng tôi cung cấp dịch vụ du lịch<br />
                                        đáp ứng mọi nhu cầu của bạn!
                                    </div>
                                    <div class="header-line"></div>
                                </div>
                                <div class="description-section">
                                    <div class="description-text">
                                        <span>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Phuthotourist), là một đơn vị
                                            thành viên của Saigontourist. Phuthotourist được biết đến với các sản
                                            phẩm<br /></span>
                                        <span>du lịch nổi tiếng tại TP.HCM (Quận 11) như<br /></span>
                                        <div class="description-container">
                                            <div class="description-content">
                                                <span>+ Công viên Văn hóa Đầm Sen<br /></span>
                                                <span>+ Khu du lịch sinh thái Vàm Sát<br /></span>
                                                <span>+ Khách sạn Ngọc Lan<br /></span>
                                                <span>+ Khách sạn Phú Thọ<br /></span>
                                                <span>+ Trung tâm chăm sóc sức khỏe & giải trí Đầm Sen (Damsen
                                                    Plaza)<br /></span>
                                                <span>+ Nhà hàng Thủy Tạ Đầm Sen<br /></span>
                                                <span>+ Trung tâm Dịch vụ Du lịch Đầm Sen (Damsen Travel)<br /></span>
                                                <span>+ Liên kết với Công viên nước Đầm Sen (Đầm Sen Water Park).</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-section">
                                    <div class="button-text">Xem chi tiết</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2 text-center custom-col">
                        <div class="box-2">
                            <div class="custom-image-wrapper">
                                <img class="img-1" src="{{ asset('/public/images/home/6.png') }}"
                                    alt="Placeholder Image 6" />
                                <img class="img-2" src="{{ asset('/public/images/home/7.png') }}"
                                    alt="Placeholder Image 7" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 text-center">
                    <div class="box-3">
                        <div class="box-main-container">
                            <div class="inner-box">
                                <div class="background-blue">
                                    <svg width="550" height="466" viewBox="0 0 550 466" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M609.559 160.542C609.559 328.861 473.109 465.31 304.79 465.31C136.471 465.31 0.0214844 328.861 0.0214844 160.542C0.0214844 -7.77727 136.471 -144.227 304.79 -144.227C473.109 -144.227 609.559 -7.77727 609.559 160.542Z"
                                            fill="#0054A6" />
                                    </svg>
                                </div>
                                <div class="background-white">
                                    <svg width="550" height="466" viewBox="0 0 550 466" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M304.79 451.613C465.544 451.613 595.861 321.296 595.861 160.542C595.861 -0.212357 465.544 -130.529 304.79 -130.529C144.036 -130.529 13.7189 -0.212357 13.7189 160.542C13.7189 321.296 144.036 451.613 304.79 451.613ZM304.79 465.31C473.109 465.31 609.559 328.861 609.559 160.542C609.559 -7.77727 473.109 -144.227 304.79 -144.227C136.471 -144.227 0.0214844 -7.77727 0.0214844 160.542C0.0214844 328.861 136.471 465.31 304.79 465.31Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="bordered-box">
                                    <svg width="729" height="209" viewBox="0 0 729 209" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M346.638 3.4917L3.77344 186.353L297.113 94.9223L613.311 205.401L959.985 22.5397L662.835 117.78L346.638 3.4917Z"
                                            fill="white" stroke="#0054A6" stroke-width="6.84873"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                        <div
                            class="info-share-container d-flex flex-column justify-content-start align-items-center gap-16">
                            <div class="title-1">CHIA SẺ THÔNG TIN</div>
                            <div class="title-2">Bài viết mới</div>
                            <div class="separator"></div>
                            <div class="description">Hãy cùng chúng tôi chia sẻ những bài viết mới với các thông tin
                                về những sản phẩm du lịch</div>
                        </div>
                        <div class="container mt-5">
                            <div class="row justify-content-center negative-margin-top">
                                <div class="col-md-4">
                                    <div class="card" style="width: 362px; height: 542px;">
                                        <img src="{{ asset('/public/images/home/8.png') }}"
                                            class="card-img-top card-img-custom" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="text-muted">Admin</span>
                                                <div class="ms-2"
                                                    style="width: 8px; height: 8px; background: #03A600; border-radius: 50%;">
                                                </div>
                                            </div>
                                            <h5 class="card-title text-custom-primary text-container">Thông báo kết quả
                                                lựa chọn nhà
                                                thầu 2
                                                màn hình Led P4 Outdoor Fullcolor</h5>
                                            <p class="card-text text-muted text-container">Công ty Cổ phần Dịch vụ Du
                                                lịch Phú Thọ
                                                thông báo đến các nhà thầu tham gia chào hàng cạnh tranh Gói thầu: Cung
                                                cấp, lắp đặt 02 màn...</p>
                                            <div class="d-flex gap-2 mb-3">
                                                <span class="badge  text-custom-primary custom-badge-container">Sự
                                                    kiện</span>
                                                <span class="badge  text-custom-primary custom-badge-container">Thông
                                                    báo</span>
                                                <span class="badge  text-custom-primary custom-badge-container">Tin
                                                    tức</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-muted">10N lượt xem</span>
                                                <div class="mx-2"
                                                    style="width: 3px; height: 3px; background: #858585; border-radius: 50%;">
                                                </div>
                                                <span class="text-muted">20/02/2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 362px; height: 542px;">
                                        <img src="{{ asset('/public/images/home/9.png') }}"
                                            class="card-img-top card-img-custom" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="text-muted">Admin</span>
                                                <div class="ms-2"
                                                    style="width: 8px; height: 8px; background: #03A600; border-radius: 50%;">
                                                </div>
                                            </div>
                                            <h5 class="card-title text-custom-primary text-container">Thông báo kết quả
                                                lựa chọn nhà
                                                thầu 2
                                                màn hình Led P4 Outdoor Fullcolor</h5>
                                            <p class="card-text text-muted text-container">Công ty Cổ phần Dịch vụ Du
                                                lịch Phú Thọ
                                                thông báo đến các nhà thầu tham gia chào hàng cạnh tranh Gói thầu: Cung
                                                cấp, lắp đặt 02 màn...</p>
                                            <div class="d-flex gap-2 mb-3">
                                                <span class="badge  text-custom-primary custom-badge-container">Sự
                                                    kiện</span>
                                                <span class="badge  text-custom-primary custom-badge-container">Thông
                                                    báo</span>
                                                <span class="badge  text-custom-primary custom-badge-container">Tin
                                                    tức</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-3 move-up">
                                                <span class="text-muted">10N lượt xem</span>
                                                <div class="mx-2"
                                                    style="width: 3px; height: 3px; background: #858585; border-radius: 50%;">
                                                </div>
                                                <span class="text-muted">20/02/2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 362px; height: 542px;">
                                        <img src="{{ asset('/public/images/home/10.png') }}"
                                            class="card-img-top card-img-custom" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="text-muted">Admin</span>
                                                <div class="ms-2"
                                                    style="width: 8px; height: 8px; background: #03A600; border-radius: 50%;">
                                                </div>
                                            </div>
                                            <h5 class="card-title text-custom-primary text-container">Thông báo kết quả
                                                lựa chọn nhà
                                                thầu 2
                                                màn hình Led P4 Outdoor Fullcolor</h5>
                                            <p class="card-text text-muted text-container">Công ty Cổ phần Dịch vụ Du
                                                lịch Phú Thọ
                                                thông báo đến các nhà thầu tham gia chào hàng cạnh tranh Gói thầu: Cung
                                                cấp, lắp đặt 02 màn...</p>
                                            <div class="d-flex gap-2 mb-3">
                                                <span class="badge  text-custom-primary custom-badge-container">Sự
                                                    kiện</span>
                                                <span class="badge  text-custom-primary custom-badge-container">Thông
                                                    báo</span>
                                                <span class="badge  text-custom-primary custom-badge-container">Tin
                                                    tức</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-muted">10N lượt xem</span>
                                                <div class="mx-2"
                                                    style="width: 3px; height: 3px; background: #858585; border-radius: 50%;">
                                                </div>
                                                <span class="text-muted">20/02/2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="button-container button-wrapper">
                                <div class="button-text-2">Xem bài viết chi tiết</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-custom-3">
                <div class="row justify-content-center mt-3">
                    <div class="col-12 text-center">
                        <div class="container-box">
                            <div class="box-4">
                                <div class=" d-flex flex-column justify-content-start align-items-center
                                gap-16">
                                    <div class="title-3">LĨNH VỰC HOẠT ĐỘNG</div>
                                    <div class="title-2">Các dịch vụ trọng tâm</div>
                                    <div class="separator-1"></div>
                                    <div class="description-1">3 dịch vụ trọng tâm của Phuthotourist là vui chơi giải
                                        trí,
                                        nhà hàng – khách sạn, và dịch vụ lữ hành</div>
                                </div>
                            </div>
                        </div>
                        <div class="container  my-4">
                            <div class="row g-4 justify-content-center container-custom-margin">
                                <div class="col-md-4">
                                    <div class="card card-custom">
                                        <img src="{{ asset('/public/images/home/12.png') }}"
                                            class="card-img-top card-img-top-custom" alt="Card image">
                                        <div class="card-body card-body-custom">
                                            <h5 class="card-title card-title-custom">Vui chơi giải trí</h5>
                                            <p class="card-text card-text-custom">Với 2 khu giải trí nổi tiếng
                                                TP.HCM là Công viên văn hóa Đầm Sen, và khu du lịch sinh thái Vàm
                                                Sát (H.Cần Giờ)...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-custom">
                                        <img src="{{ asset('/public/images/home/13.png') }}"
                                            class="card-img-top card-img-top-custom" alt="Card image">
                                        <div class="card-body card-body-custom">
                                            <h5 class="card-title card-title-custom">Nhà hàng – Khách sạn</h5>
                                            <p class="card-text card-text-custom">Với hệ thống khách sạn Phú Thọ và Ngọc
                                                Lan đạt chuẩn 3 sao, chuyên tiếp đón các đoàn thể thao....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-custom">
                                        <img src="{{ asset('/public/images/home/14.png') }}"
                                            class="card-img-top card-img-top-custom" alt="Card image">
                                        <div class="card-body card-body-custom">
                                            <h5 class="card-title card-title-custom">Dịch vụ Lữ hành</h5>
                                            <p class="card-text card-text-custom">VTổ chức các tour trong và ngoài nước
                                                với Trung tâm Dịch vụ du lịch Đầm Sen. Ngoài ra Trung tâm còn thế mạnh
                                                là tổ chức...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')
</div>


@endsection
<script>
function scrollToContentB() {
    const contentB = document.getElementById("contentB");
    contentB.scrollIntoView({
        behavior: 'smooth'
    });
}
</script>