@extends('main')
@php
use Carbon\Carbon;
@endphp
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
                <div class="title-box">Tuyền dụng</div>
            </div>
        </div>
        <!-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif -->
    </div>
    <@if(session('success')) <div class="alert alert-success">
        {{ session('success') }}
</div>
@endif
<div class="content-section-2">

    <div class="container-custom-13">
        <div class="box-custom-1">
            <div class="inner-container-recruitment">
                <div class="search-box-1-recruitment">
                    <div class="search-icon-recruitment">
                        <div class="outer-box-recruitment">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.2959 17.3333L21.2959 21.3333" stroke="#0054A6" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M19.2959 11.3333C19.2959 15.7516 15.7142 19.3333 11.2959 19.3333C6.87762 19.3333 3.2959 15.7516 3.2959 11.3333C3.2959 6.91497 6.87762 3.33325 11.2959 3.33325C15.7142 3.33325 19.2959 6.91497 19.2959 11.3333Z"
                                    stroke="#0054A6" stroke-width="2" />
                            </svg>

                        </div>
                        <input type="text" class="search-text-recruitment" id="search-input" placeholder="Tìm kiếm" />
                    </div>

                    <div class="hidden-icon-recruitment">
                        <div class="small-inner-box-recruitment  clear-input-recruitment">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16L16 8M16 16L8 8" stroke="#666666" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                </div>
                <div class="recent-search-container-recruitment" id="search-results-1">
                    <div class="recent-search-header-recruitment">
                        <div class="recent-search-title-recruitment">Tìm kiếm gần đây:</div>
                    </div>
                    <div class="recent-search-list-recruitment">
                        <!-- <div class="recent-search-item-recruitment">
                                <div class="search-item-text-2">Công Viên Văn Hóa Đầm Sen</div>
                                <div class="search-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16L16 8M16 16L8 8" stroke="#666666" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="recent-search-container-recruitment-2" id="search-results">
                    <div class="recent-search-list-recruitment">
                        @include('partials.recent-search-list')
                    </div>
                </div>
            </div>
        </div>
        <div class="separator-2"></div>
        @foreach($parents as $parent)
        <div class="field-section">
            <div class="field-title">
                <div class="title-icon">
                    <img src="{{ asset('public/images/tuyen-dung/' . $parent->parent_url) }}" alt="Icon">
                </div>
                <div class="title-text">{{ $parent->parent_name }}</div>
            </div>
            <div class="field-options">
                @foreach($parentCategories[$parent->parent_id] as $category)
                <div class="option-container" data-id="{{ $category->category_id }}">
                    <div class="option-outline">
                        <div class="option-text">{{ $category->category_name }}</div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        @endforeach
    </div>

    <div class="background-overlay-1">
        <svg class="circle-blue" width="253" height="256" viewBox="0 0 253 256" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M282.097 141.374C282.097 219.122 219.07 282.148 141.323 282.148C63.5751 282.148 0.54834 219.122 0.54834 141.374C0.54834 63.6266 63.5751 0.599854 141.323 0.599854C219.07 0.599854 282.097 63.6266 282.097 141.374Z"
                fill="#0054A6" />
        </svg>
        <svg class="circle-white" width="253" height="256" viewBox="0 0 253 256" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M141.323 275.821C215.576 275.821 275.77 215.627 275.77 141.374C275.77 67.1209 215.576 6.92679 141.323 6.92679C67.0694 6.92679 6.87527 67.1209 6.87527 141.374C6.87527 215.627 67.0694 275.821 141.323 275.821ZM141.323 282.148C219.07 282.148 282.097 219.122 282.097 141.374C282.097 63.6266 219.07 0.599854 141.323 0.599854C63.5751 0.599854 0.54834 63.6266 0.54834 141.374C0.54834 219.122 63.5751 282.148 141.323 282.148Z"
                fill="white" />
        </svg>
        <svg class="border-box" width="335" height="97" viewBox="0 0 335 97" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M159.971 1.62256L1.6001 86.0871L137.095 43.8549L283.149 94.8855L443.279 10.421L306.024 54.4129L159.971 1.62256Z"
                fill="white" stroke="#0054A6" stroke-width="3.16347" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="container-custom-12">
        <div class="flex-container" id="flex-container">
            @foreach($jobs as $job)
            <div class="container-recruitment" data-job="{{ $job->job_id }}">
                <div class="icon-recruitment">
                    <img src="{{ asset('/public/images/tuyen-dung/Frame.svg') }}" alt="Icon">
                </div>
                <div class="info-recruitment">
                    <div class="role-recruitment" data-type="{{$job->role_category_id}}">
                        {{ $job->roleCategory->category_name ?? 'N/A' }}
                    </div>
                    <div class="position-recruitment" data-type="{{$job->position_category_id }}">
                        {{ $job->positionCategory->category_name ?? 'N/A' }}
                    </div>
                </div>
                <div class="details-recruitment">
                    <div class="location-recruitment">
                        <div class="icon-recruitment"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.9789 5.45988C14.1902 2.15451 11.1629 0.666382 8.50376 0.666382H8.49625C5.8446 0.666382 2.80985 2.14736 2.02111 5.45272C1.14224 9.14443 3.51595 12.2709 5.66431 14.2384C6.4258 14.9404 7.444 15.3329 8.50376 15.333C9.52536 15.333 10.547 14.9682 11.3357 14.2384C13.4841 12.2709 15.8578 9.15159 14.9789 5.45988ZM8.50376 9.04427C8.19302 9.04427 7.88533 8.98598 7.59825 8.87272C7.31117 8.75946 7.05032 8.59346 6.8306 8.38419C6.61088 8.17492 6.43658 7.92647 6.31767 7.65305C6.19876 7.37962 6.13756 7.08656 6.13756 6.79061C6.13756 6.49466 6.19876 6.2016 6.31767 5.92817C6.43658 5.65475 6.61088 5.4063 6.8306 5.19703C7.05032 4.98776 7.31117 4.82176 7.59825 4.7085C7.88533 4.59524 8.19302 4.53695 8.50376 4.53695C9.13131 4.53695 9.73317 4.77439 10.1769 5.19703C10.6207 5.61968 10.87 6.1929 10.87 6.79061C10.87 7.38832 10.6207 7.96154 10.1769 8.38419C9.73317 8.80683 9.13131 9.04427 8.50376 9.04427Z"
                                    fill="#A3A3A3" />
                            </svg>
                        </div>
                        <span
                            data-type="{{$job->location_category_id }}">{{ $job->locationCategory->category_name ?? 'N/A' }}</span>
                    </div>
                    <div class="time-recruitment">
                        <div class="icon-recruitment">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.00001 1.33337C4.32668 1.33337 1.33334 4.32671 1.33334 8.00004C1.33334 11.6734 4.32668 14.6667 8.00001 14.6667C11.6733 14.6667 14.6667 11.6734 14.6667 8.00004C14.6667 4.32671 11.6733 1.33337 8.00001 1.33337ZM10.9 10.38C10.8666 10.4369 10.8223 10.4865 10.7696 10.526C10.7169 10.5655 10.6568 10.5942 10.5929 10.6103C10.529 10.6264 10.4626 10.6297 10.3974 10.6199C10.3323 10.6102 10.2697 10.5875 10.2133 10.5534L8.14668 9.32004C7.63334 9.01337 7.25334 8.34004 7.25334 7.74671V5.01337C7.25334 4.74004 7.48001 4.51337 7.75334 4.51337C8.02668 4.51337 8.25334 4.74004 8.25334 5.01337V7.74671C8.25334 7.98671 8.45334 8.34004 8.66001 8.46004L10.7267 9.69337C10.9667 9.83337 11.0467 10.14 10.9 10.38Z"
                                    fill="#A3A3A3" />
                            </svg>
                        </div>
                        @php
                        Carbon::setLocale('vi');
                        $createdAt = $job->created_at ?
                        Carbon::parse($job->created_at)->setTimezone('Asia/Ho_Chi_Minh') : null;
                        $now = Carbon::now('Asia/Ho_Chi_Minh');
                        @endphp
                        <span>
                            @if($createdAt)
                            {{ $createdAt->diffForHumans($now) }}
                            @else
                            N/A
                            @endif
                        </span>
                    </div>
                </div>
                <div class="{{ $job->status == 0 ? 'status-recruitment' : 'status-recruitment-red' }}">
                    <div class="{{ $job->status == 0 ? 'status-text' : 'status-text-red' }}">
                        {{ $job->status == 0 ? 'Đang tuyển' : 'Đã hết hạn' }}
                    </div>
                </div>

                <div class="description-recruitment">
                    <div class="title-recruitment">Mô tả công việc:</div>
                    <div class="text-recruitment">
                        {{ $job->description }}
                    </div>
                </div>
                <a href="{{ route('chi-tiet-tuyen-dung', ['id' => $job->job_id]) }}" class="more-recruitment">
                    <span>Xem chi tiết</span>
                </a>

            </div>
            @endforeach
        </div>

        <div class="parent-container-2" id="pagination-container-2">
            <div class="pagination-container-2">
                <div class="arrow left-arrow disabled">
                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_272_64607)">
                            <path d="M19.5 21L13.5 16L19.5 11" fill="#A3A3A3" />
                            <path d="M19.5 21L13.5 16L19.5 11L19.5 21Z" stroke="#A3A3A3" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_272_64607">
                                <rect width="20" height="20" fill="white" transform="translate(6.5 6)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="pagination-items-2">
                </div>
                <div class="arrow right-arrow">
                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_272_64614)">
                            <path d="M13.5 21L19.5 16L13.5 11" fill="#4D4D4D" />
                            <path d="M13.5 21L19.5 16L13.5 11L13.5 21Z" stroke="#4D4D4D" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
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


    </div>
</div>
@include('footer')
</div>

@endsection