@extends('main')

@section('content')
<div class="container-2" id="scrollContainer">
    <div class="container-fluid d-flex justify-content-center align-items-center position-relative">
        <div class="content d-flex flex-column justify-content-center align-items-center position-relative">
            <div class="rotated-box position-relative">
                <svg width="386" height="106" viewBox="0 0 386 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_bdi_272_68691)">
                        <path
                            d="M380.038 44.0196C382.357 46.9349 382.357 51.0651 380.038 53.9804L347.423 94.9804C345.905 96.8883 343.6 98 341.162 98L44.1071 98C41.6415 98 39.3137 96.8631 37.7978 94.9186L5.83453 53.9186C3.58023 51.027 3.58023 46.973 5.83453 44.0813L37.7978 3.08133C39.3137 1.13685 41.6415 -1.54409e-05 44.1071 -1.53492e-05L341.162 -4.30359e-06C343.6 -4.21294e-06 345.905 1.1117 347.423 3.01963L380.038 44.0196Z"
                            fill="white" fill-opacity="0.7" shape-rendering="crispEdges" />
                        <path
                            d="M379.256 44.6422C381.285 47.1931 381.285 50.807 379.256 53.3578L346.64 94.3578C345.312 96.0273 343.295 97 341.162 97L44.1071 97C41.9497 97 39.9129 96.0052 38.5865 94.3038L6.6232 53.3038C4.65066 50.7736 4.65066 47.2264 6.6232 44.6962L38.5865 3.69616C39.9129 1.99474 41.9497 0.999985 44.1071 0.999985L341.162 0.999996C343.295 0.999996 345.312 1.97274 346.64 3.64217L379.256 44.6422Z"
                            stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_bdi_272_68691" x="0.144043" y="-4" width="386.633" height="110"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_272_68691" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="effect1_backgroundBlur_272_68691"
                                result="effect2_dropShadow_272_68691" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_272_68691"
                                result="shape" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="5" dy="5" />
                            <feGaussianBlur stdDeviation="8" />
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="shape" result="effect3_innerShadow_272_68691" />
                        </filter>
                    </defs>
                </svg>
                <div class="title-box">Bài viết</div>
            </div>
        </div>
    </div>
    <div class="content-section-1">
        <div class="header-section-1">
            <div class="container-custom-4">
                <div class="background-container">
                    <div class="background-container">
                        <div class="overlay"></div>
                        <div class="carousel-container">
                            <div class="carousel-item" id="slide-4">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-4.png') }}" alt="Slide 4" />
                                <div class="text-container-custom-3">
                                    <h1 class="title-container-custom-3">Thông báo mời chào giá cạnh tranh cung cấp nước
                                        đá chế tác Băng
                                        Đăng</h1>
                                    <p class="description-container-custom-3">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY
                                        CỔ PHẦN DỊCH VỤ
                                        DU LỊCH PHÚ THỌ tổ
                                        chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng
                                        tại Công viên Văn
                                        hóa Đầm Sen.</p>
                                </div>
                            </div>
                            <div class="carousel-item" id="slide-3">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-3.png') }}" alt="Slide 3" />
                                <div class="text-container-custom-3">
                                    <h1 class="title-container-custom-3">Thông báo mời chào giá cạnh tranh cung cấp nước
                                        đá chế tác Băng
                                        Đăng</h1>
                                    <p class="description-container-custom-3">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY
                                        CỔ PHẦN DỊCH VỤ
                                        DU LỊCH PHÚ THỌ tổ
                                        chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng
                                        tại Công viên Văn
                                        hóa Đầm Sen.</p>
                                </div>
                            </div>
                            <div class="carousel-item" id="slide-2">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-2.png') }}" alt="Slide 2" />
                                <div class="text-container-custom-3">
                                    <h1 class="title-container-custom-3">Thông báo mời chào giá cạnh tranh cung cấp nước
                                        đá chế tác Băng
                                        Đăng</h1>
                                    <p class="description-container-custom-3">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY
                                        CỔ PHẦN DỊCH VỤ
                                        DU LỊCH PHÚ THỌ tổ
                                        chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng
                                        tại Công viên Văn
                                        hóa Đầm Sen.</p>
                                </div>
                            </div>
                            <div class="carousel-item" id="slide-1">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" alt="Slide 1" />

                            </div>
                        </div>
                    </div>
                    <div class="indicator-container">
                        <div class="indicator">
                        </div>
                    </div>
                </div>
                <div class="controls-container">
                    <div class="control-left">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 21L9.6 14L18 7" fill="#3376B8" />
                            <path d="M18 21L9.6 14L18 7L18 21Z" stroke="#3376B8" stroke-width="5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="control-right">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 21L18.4 14L10 7" fill="#3376B8" />
                            <path d="M10 21L18.4 14L10 7L10 21Z" stroke="#3376B8" stroke-width="5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>

            </div>

        </div>
        <div class="header-section-2">
            <div class="container-custom-5">
                <div class="container mt-4">
                    <div class="custom-text">Bài mới nhất</div>
                    <div class="container-card" id="scrollContainer1">
                        <div class="line-card"></div>
                        <div class="card-container">
                            <div class="image-container">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" class="img-fluid" />
                            </div>
                            <div class="content-container">
                                <div class="title-card">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                                <div class="info-container">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">10k views</div>
                                    </div>
                                    <div class="dot"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-container">
                            <div class="image-container">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" class="img-fluid" />
                            </div>
                            <div class="content-container">
                                <div class="title-card">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                                <div class="info-container">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">10k views</div>
                                    </div>
                                    <div class="dot"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-container">
                            <div class="image-container">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" class="img-fluid" />
                            </div>
                            <div class="content-container">
                                <div class="title-card">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                                <div class="info-container">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">10k views</div>
                                    </div>
                                    <div class="dot"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-container">
                            <div class="image-container">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" class="img-fluid" />
                            </div>
                            <div class="content-container">
                                <div class="title-card">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                                <div class="info-container">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">10k views</div>
                                    </div>
                                    <div class="dot"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-container">
                            <div class="image-container">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" class="img-fluid" />
                            </div>
                            <div class="content-container">
                                <div class="title-card">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                                <div class="info-container">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">10k views</div>
                                    </div>
                                    <div class="dot"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-container">
                            <div class="image-container">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" class="img-fluid" />
                            </div>
                            <div class="content-container">
                                <div class="title-card">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                                <div class="info-container">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">10k views</div>
                                    </div>
                                    <div class="dot"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="info-item">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="content-section-2">
        <div class="container-custom-6">
        </div>
        <div class="container-custom-7">
        </div>
        <div class="container-custom-8">
        </div>
    </div>
    @include('footer')
</div>


@endsection