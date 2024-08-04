@extends('main')

@section('content')
<div class="container-2" id="scrollContainer">
    <div class="container-fluid d-flex justify-content-center align-items-center position-relative">
        <div class="content d-flex flex-column justify-content-center align-items-center position-relative">
            <div class="rotated-box position-relative">
                <svg width="386" height="106" viewBox="0 0 386 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_bdi_272_68691)">
                        <path d="M380.038 44.0196C382.357 46.9349 382.357 51.0651 380.038 53.9804L347.423 94.9804C345.905 96.8883 343.6 98 341.162 98L44.1071 98C41.6415 98 39.3137 96.8631 37.7978 94.9186L5.83453 53.9186C3.58023 51.027 3.58023 46.973 5.83453 44.0813L37.7978 3.08133C39.3137 1.13685 41.6415 -1.54409e-05 44.1071 -1.53492e-05L341.162 -4.30359e-06C343.6 -4.21294e-06 345.905 1.1117 347.423 3.01963L380.038 44.0196Z" fill="white" fill-opacity="0.7" shape-rendering="crispEdges" />
                        <path d="M379.256 44.6422C381.285 47.1931 381.285 50.807 379.256 53.3578L346.64 94.3578C345.312 96.0273 343.295 97 341.162 97L44.1071 97C41.9497 97 39.9129 96.0052 38.5865 94.3038L6.6232 53.3038C4.65066 50.7736 4.65066 47.2264 6.6232 44.6962L38.5865 3.69616C39.9129 1.99474 41.9497 0.999985 44.1071 0.999985L341.162 0.999996C343.295 0.999996 345.312 1.97274 346.64 3.64217L379.256 44.6422Z" stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_bdi_272_68691" x="0.144043" y="-4" width="386.633" height="110" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_272_68691" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="effect1_backgroundBlur_272_68691" result="effect2_dropShadow_272_68691" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_272_68691" result="shape" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
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
                            <path d="M18 21L9.6 14L18 7L18 21Z" stroke="#3376B8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="control-right">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 21L18.4 14L10 7" fill="#3376B8" />
                            <path d="M10 21L18.4 14L10 7L10 21Z" stroke="#3376B8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
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
                            <div class="image-container-1">
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
                            <div class="image-container-1">
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
                            <div class="image-container-1">
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
                            <div class="image-container-1">
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
                            <div class="image-container-1">
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
                            <div class="image-container-1">
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
            <div class="box-custom-1">
                <div class="inner-container">
                    <div class="search-box">
                        <div class="search-icon">
                            <div class="outer-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.2959 17.3333L21.2959 21.3333" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19.2959 11.3333C19.2959 15.7516 15.7142 19.3333 11.2959 19.3333C6.87762 19.3333 3.2959 15.7516 3.2959 11.3333C3.2959 6.91497 6.87762 3.33325 11.2959 3.33325C15.7142 3.33325 19.2959 6.91497 19.2959 11.3333Z" stroke="#0054A6" stroke-width="2" />
                                </svg>

                            </div>
                            <input type="text" class="search-text" placeholder="Tìm kiếm" />
                        </div>

                        <div class="hidden-icon">
                            <div class="small-inner-box">
                            </div>
                        </div>

                    </div>
                    <div class="recent-search-container">
                        <div class="recent-search-header">
                            <div class="recent-search-title">Tìm kiếm gần đây:</div>
                        </div>
                        <div class="recent-search-list">
                            <div class="recent-search-item">
                                <div class="search-item-text">Công Viên Văn Hóa Đầm Sen</div>
                                <div class="search-item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16L16 8M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-custom container-custom-2">
                <div class="icon-text">
                    <div class="icon-container">
                        <div class="icon"></div>
                    </div>
                    <div class="icon-label">A đến Z</div>
                </div>
            </div> -->
            <div class="box-custom-3">
                <div class="date-container">
                    <div class="date-box">
                        <div class="input-container">
                            <input type="text" id="dateInput" class="form-control" placeholder="Chọn ngày">
                            <i id="calendarIcon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.75 3.33783V1.75904C16.75 1.3441 16.41 1 16 1C15.59 1 15.25 1.3441 15.25 1.75904V3.27711H8.75V1.75904C8.75 1.3441 8.41 1 8 1C7.59 1 7.25 1.3441 7.25 1.75904V3.33783C4.55 3.59084 3.24 5.22024 3.04 7.63904C3.02 7.93253 3.26 8.17542 3.54 8.17542H20.46C20.75 8.17542 20.99 7.92241 20.96 7.63904C20.76 5.22024 19.45 3.59084 16.75 3.33783ZM20 9.69349H4C3.45 9.69349 3 10.1489 3 10.7055V16.9398C3 19.9759 4.5 22 8 22H16C19.5 22 21 19.9759 21 16.9398V10.7055C21 10.1489 20.55 9.69349 20 9.69349ZM9.21 18.1643C9.16 18.2048 9.11 18.2554 9.06 18.2858C9 18.3263 8.94 18.3566 8.88 18.3769C8.82 18.4072 8.76 18.4275 8.7 18.4376C8.63 18.4477 8.57 18.4578 8.5 18.4578C8.37 18.4578 8.24 18.4275 8.12 18.3769C7.99 18.3263 7.89 18.2554 7.79 18.1643C7.61 17.972 7.5 17.7089 7.5 17.4458C7.5 17.1827 7.61 16.9195 7.79 16.7272C7.89 16.6361 7.99 16.5653 8.12 16.5147C8.3 16.4337 8.5 16.4135 8.7 16.454C8.76 16.4641 8.82 16.4843 8.88 16.5147C8.94 16.5349 9 16.5653 9.06 16.6058L9.21 16.7272C9.39 16.9195 9.5 17.1827 9.5 17.4458C9.5 17.7089 9.39 17.972 9.21 18.1643ZM9.21 14.6222C9.02 14.8043 8.76 14.9157 8.5 14.9157C8.24 14.9157 7.98 14.8043 7.79 14.6222C7.61 14.4299 7.5 14.1667 7.5 13.9036C7.5 13.6405 7.61 13.3773 7.79 13.1851C8.07 12.9017 8.51 12.8106 8.88 12.9725C9.01 13.0231 9.12 13.094 9.21 13.1851C9.39 13.3773 9.5 13.6405 9.5 13.9036C9.5 14.1667 9.39 14.4299 9.21 14.6222ZM12.71 18.1643C12.52 18.3465 12.26 18.4578 12 18.4578C11.74 18.4578 11.48 18.3465 11.29 18.1643C11.11 17.972 11 17.7089 11 17.4458C11 17.1827 11.11 16.9195 11.29 16.7272C11.66 16.3528 12.34 16.3528 12.71 16.7272C12.89 16.9195 13 17.1827 13 17.4458C13 17.7089 12.89 17.972 12.71 18.1643ZM12.71 14.6222L12.56 14.7436C12.5 14.7841 12.44 14.8145 12.38 14.8347C12.32 14.8651 12.26 14.8853 12.2 14.8954C12.13 14.9055 12.07 14.9157 12 14.9157C11.74 14.9157 11.48 14.8043 11.29 14.6222C11.11 14.4299 11 14.1667 11 13.9036C11 13.6405 11.11 13.3773 11.29 13.1851C11.38 13.094 11.49 13.0231 11.62 12.9725C11.99 12.8106 12.43 12.9017 12.71 13.1851C12.89 13.3773 13 13.6405 13 13.9036C13 14.1667 12.89 14.4299 12.71 14.6222ZM16.21 18.1643C16.02 18.3465 15.76 18.4578 15.5 18.4578C15.24 18.4578 14.98 18.3465 14.79 18.1643C14.61 17.972 14.5 17.7089 14.5 17.4458C14.5 17.1827 14.61 16.9195 14.79 16.7272C15.16 16.3528 15.84 16.3528 16.21 16.7272C16.39 16.9195 16.5 17.1827 16.5 17.4458C16.5 17.7089 16.39 17.972 16.21 18.1643ZM16.21 14.6222L16.06 14.7436C16 14.7841 15.94 14.8145 15.88 14.8347C15.82 14.8651 15.76 14.8853 15.7 14.8954C15.63 14.9055 15.56 14.9157 15.5 14.9157C15.24 14.9157 14.98 14.8043 14.79 14.6222C14.61 14.4299 14.5 14.1667 14.5 13.9036C14.5 13.6405 14.61 13.3773 14.79 13.1851C14.89 13.094 14.99 13.0231 15.12 12.9725C15.3 12.8916 15.5 12.8713 15.7 12.9118C15.76 12.9219 15.82 12.9422 15.88 12.9725C15.94 12.9928 16 13.0231 16.06 13.0636L16.21 13.1851C16.39 13.3773 16.5 13.6405 16.5 13.9036C16.5 14.1667 16.39 14.4299 16.21 14.6222Z" fill="#0054A6" />
                                </svg></i>
                        </div>
                    </div>

                    <div class="small-box-1"><svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.51129 3.13807L3.96467 2.01241L1.44455 0.178209C0.910697 -0.20463 0 0.0696425 0 0.618188V4.17802V7.38359C0 7.93213 0.910697 8.20641 1.44455 7.81785L5.51129 4.85799C6.1629 4.38944 6.1629 3.61233 5.51129 3.13807Z" fill="#0054A6" />
                        </svg>
                    </div>
                    <div class="date-box">
                        <div class="input-container">
                            <input type="text" id="dateInput2" class="form-control" placeholder="Chọn ngày">
                            <i id="calendarIcon2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.75 3.33783V1.75904C16.75 1.3441 16.41 1 16 1C15.59 1 15.25 1.3441 15.25 1.75904V3.27711H8.75V1.75904C8.75 1.3441 8.41 1 8 1C7.59 1 7.25 1.3441 7.25 1.75904V3.33783C4.55 3.59084 3.24 5.22024 3.04 7.63904C3.02 7.93253 3.26 8.17542 3.54 8.17542H20.46C20.75 8.17542 20.99 7.92241 20.96 7.63904C20.76 5.22024 19.45 3.59084 16.75 3.33783ZM20 9.69349H4C3.45 9.69349 3 10.1489 3 10.7055V16.9398C3 19.9759 4.5 22 8 22H16C19.5 22 21 19.9759 21 16.9398V10.7055C21 10.1489 20.55 9.69349 20 9.69349ZM9.21 18.1643C9.16 18.2048 9.11 18.2554 9.06 18.2858C9 18.3263 8.94 18.3566 8.88 18.3769C8.82 18.4072 8.76 18.4275 8.7 18.4376C8.63 18.4477 8.57 18.4578 8.5 18.4578C8.37 18.4578 8.24 18.4275 8.12 18.3769C7.99 18.3263 7.89 18.2554 7.79 18.1643C7.61 17.972 7.5 17.7089 7.5 17.4458C7.5 17.1827 7.61 16.9195 7.79 16.7272C7.89 16.6361 7.99 16.5653 8.12 16.5147C8.3 16.4337 8.5 16.4135 8.7 16.454C8.76 16.4641 8.82 16.4843 8.88 16.5147C8.94 16.5349 9 16.5653 9.06 16.6058L9.21 16.7272C9.39 16.9195 9.5 17.1827 9.5 17.4458C9.5 17.7089 9.39 17.972 9.21 18.1643ZM9.21 14.6222C9.02 14.8043 8.76 14.9157 8.5 14.9157C8.24 14.9157 7.98 14.8043 7.79 14.6222C7.61 14.4299 7.5 14.1667 7.5 13.9036C7.5 13.6405 7.61 13.3773 7.79 13.1851C8.07 12.9017 8.51 12.8106 8.88 12.9725C9.01 13.0231 9.12 13.094 9.21 13.1851C9.39 13.3773 9.5 13.6405 9.5 13.9036C9.5 14.1667 9.39 14.4299 9.21 14.6222ZM12.71 18.1643C12.52 18.3465 12.26 18.4578 12 18.4578C11.74 18.4578 11.48 18.3465 11.29 18.1643C11.11 17.972 11 17.7089 11 17.4458C11 17.1827 11.11 16.9195 11.29 16.7272C11.66 16.3528 12.34 16.3528 12.71 16.7272C12.89 16.9195 13 17.1827 13 17.4458C13 17.7089 12.89 17.972 12.71 18.1643ZM12.71 14.6222L12.56 14.7436C12.5 14.7841 12.44 14.8145 12.38 14.8347C12.32 14.8651 12.26 14.8853 12.2 14.8954C12.13 14.9055 12.07 14.9157 12 14.9157C11.74 14.9157 11.48 14.8043 11.29 14.6222C11.11 14.4299 11 14.1667 11 13.9036C11 13.6405 11.11 13.3773 11.29 13.1851C11.38 13.094 11.49 13.0231 11.62 12.9725C11.99 12.8106 12.43 12.9017 12.71 13.1851C12.89 13.3773 13 13.6405 13 13.9036C13 14.1667 12.89 14.4299 12.71 14.6222ZM16.21 18.1643C16.02 18.3465 15.76 18.4578 15.5 18.4578C15.24 18.4578 14.98 18.3465 14.79 18.1643C14.61 17.972 14.5 17.7089 14.5 17.4458C14.5 17.1827 14.61 16.9195 14.79 16.7272C15.16 16.3528 15.84 16.3528 16.21 16.7272C16.39 16.9195 16.5 17.1827 16.5 17.4458C16.5 17.7089 16.39 17.972 16.21 18.1643ZM16.21 14.6222L16.06 14.7436C16 14.7841 15.94 14.8145 15.88 14.8347C15.82 14.8651 15.76 14.8853 15.7 14.8954C15.63 14.9055 15.56 14.9157 15.5 14.9157C15.24 14.9157 14.98 14.8043 14.79 14.6222C14.61 14.4299 14.5 14.1667 14.5 13.9036C14.5 13.6405 14.61 13.3773 14.79 13.1851C14.89 13.094 14.99 13.0231 15.12 12.9725C15.3 12.8916 15.5 12.8713 15.7 12.9118C15.76 12.9219 15.82 12.9422 15.88 12.9725C15.94 12.9928 16 13.0231 16.06 13.0636L16.21 13.1851C16.39 13.3773 16.5 13.6405 16.5 13.9036C16.5 14.1667 16.39 14.4299 16.21 14.6222Z" fill="#0054A6" />
                                </svg></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-custom-7">
        </div>
        <div class="container-custom-8">
        </div>
    </div>
    @include('footer')
</div>


@endsection