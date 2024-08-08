@extends('main')

@section('content')
<div class="container-3" id="scrollContainer">
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
                <div class="title-box">Tài liệu</div>
            </div>
        </div>
    </div>
    <div class="content-section-3">
        <div class="header-section-3">
            <div class="container-custom-9">
                <div class="custom-row">
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-1.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>

                    <!-- Lặp lại phần tử item để tạo 8 phần tử -->
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-2.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-3.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-4.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-5.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-6.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-7.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>
                    <div class="custom-item">
                        <div class="item-content">
                            <img class="item-img" src="{{ asset('/public/images/tai-lieu/tai-lieu-8.jpg') }}" />
                            <div class="image-text-wrapper">
                                <div class="text-container">
                                    <div class="svg-container">
                                        <svg width="104" height="103" viewBox="0 0 104 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4740_169)">
                                                <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4740_169">
                                                    <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text-tai-lieu">Báo cáo Tài Chính<br />năm 2022-2023</div>
                                </div>
                            </div>
                            <div class="hover-text">Click xem ngay</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-container-docs  d-inline-flex flex-column justify-content-center align-items-center" onclick="scrollToContentB()">
            <div class="custom-box-2 position-relative">
                <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Group 6">
                        <path id="Vector" d="M24.5 12L13 22L1.5 12" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path id="Vector_2" d="M24.5 2L13 12L1.5 2" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="header-section-4">
            <div class="container-custom-10" id="contentB">
                <div class="custom-docs">
                    <div class="custom-title">Ngày tạo</div>
                    <div class="box-docs">
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
                                            <path d="M16.75 3.33783V1.75904C16.75 1.3441 16.41 1 16 1C15.59 1 15.25 1.3441 15.25 1.75904V3.27711H8.75V1.75904C8.75 1.3441 8.41 1 8 1C7.59 1 7.25 1.3441 7.25 1.75904V3.33783C4.55 3.59084 3.24 5.22024 3.04 7.63904C3.02 7.94293 3.26 8.17542 3.54 8.17542H20.46C20.75 8.17542 20.99 7.92241 20.96 7.63904C20.76 5.22024 19.45 3.59084 16.75 3.33783ZM20 9.69349H4C3.45 9.69349 3 10.1489 3 10.7055V16.9398C3 19.9759 4.5 22 8 22H16C19.5 22 21 19.9759 21 16.9398V10.7055C21 10.1489 20.55 9.69349 20 9.69349ZM9.21 18.1643C9.16 18.2048 9.11 18.2554 9.06 18.2858C9 18.3263 8.94 18.3566 8.88 18.3769C8.82 18.4072 8.76 18.4275 8.7 18.4376C8.63 18.4477 8.57 18.4578 8.5 18.4578C8.37 18.4578 8.24 18.4275 8.12 18.3769C7.99 18.3263 7.89 18.2554 7.79 18.1643C7.61 17.972 7.5 17.7089 7.5 17.4458C7.5 17.1827 7.61 16.9195 7.79 16.7272C7.89 16.6361 7.99 16.5653 8.12 16.5147C8.3 16.4337 8.5 16.4135 8.7 16.454C8.76 16.4641 8.82 16.4843 8.88 16.5147C8.94 16.5349 9 16.5653 9.06 16.6058L9.21 16.7272C9.39 16.9195 9.5 17.1827 9.5 17.4458C9.5 17.7089 9.39 17.972 9.21 18.1643ZM9.21 14.6222C9.02 14.8043 8.76 14.9157 8.5 14.9157C8.24 14.9157 7.98 14.8043 7.79 14.6222C7.61 14.4299 7.5 14.1667 7.5 13.9036C7.5 13.6405 7.61 13.3773 7.79 13.1851C8.07 12.9017 8.51 12.8106 8.88 12.9725C9.01 13.0231 9.12 13.094 9.21 13.1851C9.39 13.3773 9.5 13.6405 9.5 13.9036C9.5 14.1667 9.39 14.4299 9.21 14.6222ZM12.71 18.1643C12.52 18.3465 12.26 18.4578 12 18.4578C11.74 18.4578 11.48 18.3465 11.29 18.1643C11.11 17.972 11 17.7089 11 17.4458C11 17.1827 11.11 16.9195 11.29 16.7272C11.66 16.3528 12.34 16.3528 12.71 16.7272C12.89 16.9195 13 17.1827 13 17.4458C13 17.7089 12.89 17.972 12.71 18.1643ZM12.71 14.6222L12.56 14.7436C12.5 14.7841 12.44 14.8145 12.38 14.8347C12.32 14.8651 12.26 14.8853 12.2 14.8954C12.13 14.9055 12.07 14.9157 12 14.9157C11.74 14.9157 11.48 14.8043 11.29 14.6222C11.11 14.4299 11 14.1667 11 13.9036C11 13.6405 11.11 13.3773 11.29 13.1851C11.38 13.094 11.49 13.0231 11.62 12.9725C11.99 12.8106 12.43 12.9017 12.71 13.1851C12.89 13.3773 13 13.6405 13 13.9036C13 14.1667 12.89 14.4299 12.71 14.6222ZM16.21 18.1643C16.02 18.3465 15.76 18.4578 15.5 18.4578C15.24 18.4578 14.98 18.3465 14.79 18.1643C14.61 17.972 14.5 17.7089 14.5 17.4458C14.5 17.1827 14.61 16.9195 14.79 16.7272C15.16 16.3528 15.84 16.3528 16.21 16.7272C16.39 16.9195 16.5 17.1827 16.5 17.4458C16.5 17.7089 16.39 17.972 16.21 18.1643ZM16.21 14.6222L16.06 14.7436C16 14.7841 15.94 14.8145 15.88 14.8347C15.82 14.8651 15.76 14.8853 15.7 14.8954C15.63 14.9055 15.56 14.9157 15.5 14.9157C15.24 14.9157 14.98 14.8043 14.79 14.6222C14.61 14.4299 14.5 14.1667 14.5 13.9036C14.5 13.6405 14.61 13.3773 14.79 13.1851C14.89 13.094 14.99 13.0231 15.12 12.9725C15.3 12.8916 15.5 12.8713 15.7 12.9118C15.76 12.9219 15.82 12.9422 15.88 12.9725C15.94 12.9928 16 13.0231 16.06 13.0636L16.21 13.1851C16.39 13.3773 16.5 13.6405 16.5 13.9036C16.5 14.1667 16.39 14.4299 16.21 14.6222Z" fill="#0054A6" />
                                        </svg></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="custom-docs-1">
                    <div class="custom-title">Tìm Kiếm</div>
                    <div class="box-docs-1">
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
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" ew xmlns="http://www.w3.org/2000/svg">
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
                </div>

                <div class="container-table">
                    <table class="table">
                        <thead class="table-header">
                            <tr>
                                <th scope="col" class="stt-header">STT</th>
                                <th scope="col">Tên tài liệu</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col" class="download-header">Tải tài liệu</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">1</th>
                                <td class="table-item background-light">Khám phá Hội An - Việt Nam</td>
                                <td class="table-item background-light">15/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg>
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">2</th>
                                <td class="table-item background-light">Hải Phòng yêu cầu người dân không ra khỏi nhà
                                    sau 22h</td>
                                <td class="table-item background-light">16/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg>
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">3</th>
                                <td class="table-item background-light">Chuẩn bị gì sau khi tiêm vaccin Covid -19?</td>
                                <td class="table-item background-light">17/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">4</th>
                                <td class="table-item background-light">SNOW CHANNEL 1</td>
                                <td class="table-item background-light">18/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">5</th>
                                <td class="table-item background-light">Chuẩn bị gì sau khi tiêm vaccin Covid -19?</td>
                                <td class="table-item background-light">19/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">6</th>
                                <td class="table-item background-light">Hải Phòng yêu cầu người dân không ra khỏi nhà
                                    sau 22h</td>
                                <td class="table-item background-light">20/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">7</th>
                                <td class="table-item background-light">Chuẩn bị gì sau khi tiêm vaccin Covid -19?</td>
                                <td class="table-item background-light">21/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">8</th>
                                <td class="table-item background-light">Du lịch ở Tp.HCM đang như thế nào? 101</td>
                                <td class="table-item background-light">22/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">9</th>
                                <td class="table-item background-light">SNOW CHANNEL 1</td>
                                <td class="table-item background-light">23/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">10</th>
                                <td class="table-item background-light">Hải Phòng yêu cầu người dân không ra khỏi nhà
                                    sau 22h</td>
                                <td class="table-item background-light">24/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-item  stt-header background-light">11</th>
                                <td class="table-item background-light">Hải Phòng yêu cầu người dân không ra khỏi nhà
                                    sau 22h</td>
                                <td class="table-item background-light">24/07/2023</td>
                                <td class="table-item download-header background-light"><a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6" />
                                        </svg></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="parent-container-1" id="pagination-container-1">
                    <div class="pagination-container-1">
                        <div class="arrow left-arrow"><svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_272_64607)">
                                    <path d="M19.5 21L13.5 16L19.5 11" fill="#A3A3A3" />
                                    <path d="M19.5 21L13.5 16L19.5 11L19.5 21Z" stroke="#A3A3A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_272_64607">
                                        <rect width="20" height="20" fill="white" transform="translate(6.5 6)" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <div class="pagination-items-1">
                            <div class="page-number-1 active">
                                <div class="page-text-1">1</div>
                            </div>
                        </div>
                        <div class="arrow right-arrow">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_272_64614)">
                                    <path d="M13.5 21L19.5 16L13.5 11" fill="#4D4D4D" />
                                    <path d="M13.5 21L19.5 16L13.5 11L13.5 21Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_272_64614">
                                        <rect width="20" height="20" fill="white" transform="translate(6.5 6)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="display-container">
                    <div class="display-text">Hiển thị</div>
                    <div class="number-table-box">
                        <div class="number-table-text">10</div>
                    </div>
                    <div class="pagination-table">câu trả lời trong mỗi trang</div>
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