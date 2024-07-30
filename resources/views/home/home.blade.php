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
            <!-- <div class="row justify-content-center mt-3">
                <div class="col-12 text-center">
                    <div class="p-3 border">3</div>
                </div>
            </div> -->
        </div>
    </div>

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