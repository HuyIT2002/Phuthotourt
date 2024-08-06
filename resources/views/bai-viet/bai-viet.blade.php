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
                            <div class="small-inner-box  clear-input">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 16L16 8M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="recent-search-container">
                        <div class="recent-search-header">
                            <div class="recent-search-title">Tìm kiếm gần đây:</div>
                        </div>
                        <div class="recent-search-list">
                            <div class="recent-search-item">
                                <div class="search-item-text-2">Công Viên Văn Hóa Đầm Sen</div>
                                <div class="search-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16L16 8M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recent-search-container-2">
                        <div class="recent-search-list">
                            <div class="recent-search-item">
                                <div class="search-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="#C2C2C2" />
                                        <path d="M16 16L18 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17 11.5C17 14.5376 14.5376 17 11.5 17C8.46243 17 6 14.5376 6 11.5C6 8.46243 8.46243 6 11.5 6C14.5376 6 17 8.46243 17 11.5Z" stroke="white" stroke-width="2" />
                                    </svg>
                                </div>
                                <div class="search-item-text">Nhân viên phục vụ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-custom-2">
                <div id="dropdownToggle" class="icon-text-box-2">
                    <div class="icon-container-box-2">
                        <svg class="icon-box-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 4V20M7 20L3 16M7 20L11 16M17 4V20M17 4L21 8M17 4L13 8" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="icon-label-box-2">A đến Z</div>
                </div>
            </div>
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
            <div class="box-container-2">
                <div class="title-box-2">Chủ đề bài viết</div>
                <div class="content-box">
                    <div class="item-box item-box-white">
                        <div class="icon-box-2">
                            <div class="icon icon-news"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4530_1117)">
                                        <g clip-path="url(#clip1_4530_1117)">
                                            <path d="M12.1207 19.2331C11.5219 19.2331 10.9136 19.2424 10.3149 19.2331C9.76359 19.2238 9.3834 18.935 9.29786 18.432C9.07926 17.1931 8.46146 16.1872 7.62506 15.2557C5.44851 12.8339 5.69563 9.16387 8.14781 7.01217C10.4954 4.96294 14.0882 5.05608 16.3408 7.2171C18.5838 9.36879 18.7454 12.927 16.6639 15.2277C15.8085 16.1685 15.1812 17.1838 14.9626 18.4413C14.877 18.9443 14.4874 19.2144 13.9266 19.2331C13.3183 19.2424 12.7195 19.2331 12.1207 19.2331Z" fill="#0054A6" />
                                            <path d="M12.1636 20.0976C12.7339 20.0976 13.3042 20.089 13.8745 20.0976C14.4887 20.1062 14.673 20.3128 14.6993 20.8983C14.7256 21.5527 14.6554 22.1296 13.8921 22.3965C13.7956 22.4309 13.7517 22.6548 13.7078 22.8011C13.5411 23.335 13.3305 23.5072 12.769 23.5158C12.3478 23.5158 11.9179 23.5244 11.4967 23.5158C10.9527 23.5072 10.707 23.3436 10.5842 22.8356C10.514 22.5514 10.3912 22.3706 10.1016 22.2501C9.74189 22.0951 9.59272 21.7593 9.57518 21.3719C9.52253 20.2267 9.6366 20.1062 10.7948 20.1062C11.2598 20.0976 11.7161 20.0976 12.1636 20.0976Z" fill="#0054A6" />
                                            <path d="M15.797 2.37749C15.9607 2.09679 16.117 1.81183 16.2879 1.53539C16.4794 1.22387 16.8069 1.13274 17.1036 1.29629C17.4002 1.45983 17.5042 1.80254 17.3316 2.11557C17.0075 2.68825 16.6721 3.26368 16.3334 3.82783C16.142 4.13935 15.8039 4.21494 15.5154 4.03736C15.2269 3.85978 15.1367 3.5439 15.3175 3.21683C15.4665 2.9276 15.6375 2.65117 15.797 2.37749Z" fill="#0054A6" stroke="white" />
                                            <path d="M6.84528 2.9861C6.67344 2.71035 6.49443 2.43907 6.32978 2.15883C6.14365 1.84413 6.21598 1.51194 6.49911 1.32594C6.78225 1.13994 7.13388 1.20795 7.33008 1.5068C7.68523 2.06073 8.03748 2.62604 8.37826 3.18892C8.56438 3.50363 8.47339 3.83788 8.18167 4.01009C7.88994 4.1823 7.56846 4.11465 7.36366 3.802C7.17746 3.5352 7.01281 3.25497 6.84528 2.9861Z" fill="#0054A6" stroke="white" />
                                            <path d="M2.51119 9.64324C2.20306 9.54015 1.89225 9.44509 1.58682 9.33397C1.24286 9.20996 1.08699 8.90783 1.18674 8.58408C1.28649 8.26034 1.60086 8.08876 1.94249 8.19413C2.56912 8.39486 3.20078 8.6062 3.82204 8.82298C4.166 8.94699 4.3088 9.26261 4.19364 9.5812C4.07848 9.89979 3.78757 10.0524 3.43054 9.94191C3.11705 9.85488 2.81161 9.74376 2.51119 9.64324Z" fill="#0054A6" stroke="white" />
                                            <path d="M21.8664 9.62785C22.1759 9.52899 22.4879 9.4382 22.7949 9.33128C23.1405 9.212 23.3005 8.91203 23.2052 8.58695C23.1099 8.26187 22.7979 8.08599 22.4549 8.18666C21.8255 8.37878 21.191 8.58144 20.5669 8.78969C20.2212 8.90897 20.0741 9.22259 20.1849 9.54273C20.2957 9.86287 20.5845 10.0195 20.943 9.91388C21.2576 9.83115 21.5646 9.72423 21.8664 9.62785Z" fill="#0054A6" stroke="white" />
                                            <path d="M3.46403 15.7904C3.76081 15.6272 4.05368 15.457 4.35437 15.3009C4.71091 15.1235 5.00555 15.2025 5.17382 15.5086C5.33425 15.8004 5.23607 16.1139 4.89869 16.3087C4.30904 16.6421 3.7229 16.9643 3.12543 17.2835C2.77281 17.468 2.41017 17.3708 2.26457 17.0708C2.1268 16.785 2.24765 16.4776 2.58112 16.2757C2.60337 16.2635 2.63305 16.2472 2.65531 16.2349C2.92241 16.0881 3.18951 15.9413 3.46403 15.7904Z" fill="#0054A6" stroke="white" />
                                            <path d="M20.9867 15.7904C20.6899 15.6272 20.397 15.457 20.0963 15.3009C19.7398 15.1235 19.4451 15.2025 19.2769 15.5086C19.1164 15.8004 19.2146 16.1139 19.552 16.3087C20.1416 16.6421 20.7278 16.9643 21.3252 17.2835C21.6779 17.468 22.0405 17.3708 22.1861 17.0708C22.3239 16.785 22.203 16.4776 21.8696 16.2757C21.8473 16.2635 21.8176 16.2472 21.7954 16.2349C21.5283 16.0881 21.2612 15.9413 20.9867 15.7904Z" fill="#0054A6" stroke="white" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4530_1117">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_4530_1117">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="label label-light-blue">Giới thiệu</div>
                    </div>
                    <div class="item-box item-box-white">
                        <div class="icon-box-2">
                            <div class="icon icon-news">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 17H11V15H6V17ZM16 17H18V15H16V17ZM6 13H11V11H6V13ZM16 13H18V7H16V13ZM6 9H11V7H6V9ZM4 21C3.45 21 2.979 20.804 2.587 20.412C2.195 20.02 1.99934 19.5493 2 19V5C2 4.45 2.196 3.979 2.588 3.587C2.98 3.195 3.45067 2.99934 4 3H20C20.55 3 21.021 3.196 21.413 3.588C21.805 3.98 22.0007 4.45067 22 5V19C22 19.55 21.804 20.021 21.412 20.413C21.02 20.805 20.5493 21.0007 20 21H4Z" fill="#0054A6" />
                                </svg>
                            </div>
                        </div>
                        <div class="label label-light-blue">Tin tức</div>
                    </div>
                    <div class="item-box item-box-white">
                        <div class="icon-box-2">
                            <div class="icon icon-event">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 4H17V2H15V4H9V2H7V4H5C3.897 4 3 4.897 3 6V20C3 21.103 3.897 22 5 22H19C20.103 22 21 21.103 21 20V6C21 4.897 20.103 4 19 4ZM18 19H12V13H18V19ZM19 9H5V7H19V9Z" fill="#0054A6" />
                                </svg>

                            </div>
                        </div>
                        <div class="label label-light-blue">Sự kiện</div>
                    </div>
                    <div class="item-box item-box-white">
                        <div class="icon-box-2">
                            <div class="icon icon-event">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9998 19C15 19.5046 14.8094 19.9906 14.4664 20.3605C14.1233 20.7305 13.653 20.9572 13.1498 20.995L12.9998 21H10.9998C10.4953 21.0002 10.0093 20.8096 9.6393 20.4665C9.26932 20.1234 9.04269 19.6532 9.00485 19.15L8.99985 19H14.9998ZM11.9998 2C13.8148 1.99997 15.5589 2.70489 16.8641 3.96607C18.1693 5.22726 18.9336 6.94609 18.9958 8.76L18.9998 9V12.764L20.8218 16.408C20.9014 16.567 20.9412 16.7429 20.9378 16.9206C20.9345 17.0984 20.8881 17.2727 20.8027 17.4286C20.7173 17.5845 20.5953 17.7174 20.4473 17.8158C20.2993 17.9143 20.1297 17.9754 19.9528 17.994L19.8378 18H4.16185C3.98401 18.0001 3.80882 17.957 3.65127 17.8745C3.49372 17.792 3.35853 17.6725 3.25727 17.5264C3.156 17.3802 3.0917 17.2116 3.06985 17.0351C3.04801 16.8586 3.06928 16.6795 3.13185 16.513L3.17785 16.408L4.99985 12.764V9C4.99985 7.14348 5.73735 5.36301 7.0501 4.05025C8.36286 2.7375 10.1433 2 11.9998 2Z" fill="#0054A6" />
                                </svg>
                            </div>
                        </div>
                        <div class="label label-light-blue">Thông báo</div>
                    </div>
                    <div class="item-box item-box-white">
                        <div class="icon-box-2">
                            <div class="icon icon-event">
                                <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 12H18V10H6V12ZM6 16H14V14H6V16ZM4 20C3.45 20 2.979 19.804 2.587 19.412C2.195 19.02 1.99934 18.5493 2 18V6C2 5.45 2.196 4.979 2.588 4.587C2.98 4.195 3.45067 3.99934 4 4H10L12 6H20C20.55 6 21.021 6.196 21.413 6.588C21.805 6.98 22.0007 7.45067 22 8V18C22 18.55 21.804 19.021 21.412 19.413C21.02 19.805 20.5493 20.0007 20 20H4Z" fill="#0054A6" />
                                </svg>
                            </div>
                        </div>
                        <div class="label label-light-blue">Tin cổ đông</div>
                    </div>
                    <div class="item-box item-box-white">
                        <div class="icon-box-2">
                            <div class="icon icon-event">
                                <div class="icon icon-activity"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4.5C12.9283 4.5 13.8185 4.86875 14.4749 5.52513C15.1313 6.1815 15.5 7.07174 15.5 8C15.5 8.92826 15.1313 9.8185 14.4749 10.4749C13.8185 11.1313 12.9283 11.5 12 11.5C11.0717 11.5 10.1815 11.1313 9.52513 10.4749C8.86875 9.8185 8.5 8.92826 8.5 8C8.5 7.07174 8.86875 6.1815 9.52513 5.52513C10.1815 4.86875 11.0717 4.5 12 4.5ZM5 7C5.56 7 6.08 7.15 6.53 7.42C6.38 8.85 6.8 10.27 7.66 11.38C7.16 12.34 6.16 13 5 13C4.20435 13 3.44129 12.6839 2.87868 12.1213C2.31607 11.5587 2 10.7956 2 10C2 9.20435 2.31607 8.44129 2.87868 7.87868C3.44129 7.31607 4.20435 7 5 7ZM19 7C19.7956 7 20.5587 7.31607 21.1213 7.87868C21.6839 8.44129 22 9.20435 22 10C22 10.7956 21.6839 11.5587 21.1213 12.1213C20.5587 12.6839 19.7956 13 19 13C17.84 13 16.84 12.34 16.34 11.38C17.2119 10.2544 17.6166 8.8362 17.47 7.42C17.92 7.15 18.44 7 19 7ZM5.5 17.25C5.5 15.18 8.41 13.5 12 13.5C15.59 13.5 18.5 15.18 18.5 17.25V19H5.5V17.25ZM0 19V17.5C0 16.11 1.89 14.94 4.45 14.6C3.86 15.28 3.5 16.22 3.5 17.25V19H0ZM24 19H20.5V17.25C20.5 16.22 20.14 15.28 19.55 14.6C22.11 14.94 24 16.11 24 17.5V19Z" fill="#0054A6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="label label-light-blue">Hoạt động đoàn thể</div>
                    </div>
                </div>
                <div class="background-overlay">
                    <svg class="circle-blue" width="253" height="256" viewBox="0 0 253 256" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M282.097 141.374C282.097 219.122 219.07 282.148 141.323 282.148C63.5751 282.148 0.54834 219.122 0.54834 141.374C0.54834 63.6266 63.5751 0.599854 141.323 0.599854C219.07 0.599854 282.097 63.6266 282.097 141.374Z" fill="#0054A6" />
                    </svg>
                    <svg class="circle-white" width="253" height="256" viewBox="0 0 253 256" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M141.323 275.821C215.576 275.821 275.77 215.627 275.77 141.374C275.77 67.1209 215.576 6.92679 141.323 6.92679C67.0694 6.92679 6.87527 67.1209 6.87527 141.374C6.87527 215.627 67.0694 275.821 141.323 275.821ZM141.323 282.148C219.07 282.148 282.097 219.122 282.097 141.374C282.097 63.6266 219.07 0.599854 141.323 0.599854C63.5751 0.599854 0.54834 63.6266 0.54834 141.374C0.54834 219.122 63.5751 282.148 141.323 282.148Z" fill="white" />
                    </svg>
                    <svg class="border-box" width="335" height="97" viewBox="0 0 335 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M159.971 1.62256L1.6001 86.0871L137.095 43.8549L283.149 94.8855L443.279 10.421L306.024 54.4129L159.971 1.62256Z" fill="white" stroke="#0054A6" stroke-width="3.16347" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="container-custom-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="custom-container-8">
                            <div class="image-wrapper-8">
                                <img src="{{ asset('/public/images/bai-viet/bai-viet-1.png') }}" />
                                <div class="overlay">Click để xem</div>
                            </div>
                            <div class="info-wrapper-8">
                                <div class="admin-info-wrapper">
                                    <div class="admin-text">Admin</div>
                                    <div class="admin-dot"></div>
                                </div>
                                <div class="title-text-8">Thông báo: đấu giá giữ xe tại CVHH Đầm Sen</div>
                                <div class="tags-wrapper">
                                    <div class="tag-item">
                                        <div class="tag-text">Sự kiện</div>
                                    </div>
                                    <div class="tag-item">
                                        <div class="tag-text">Thông báo</div>
                                    </div>
                                    <div class="tag-item">
                                        <div class="tag-text">Tin tức</div>
                                    </div>
                                </div>
                                <div class="stats-wrapper">
                                    <div class="stats-item">
                                        <div class="stats-text">10N lượt xem</div>
                                    </div>
                                    <div class="stats-dot"></div>
                                    <div class="stats-item">
                                        <div class="stats-text">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the above col-lg-3 div for other items -->
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</div>

@endsection