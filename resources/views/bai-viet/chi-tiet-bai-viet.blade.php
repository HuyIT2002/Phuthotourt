@extends('main')

@section('content')
<div class="container-3" id="scrollContainer">
    <div class="content-section-4">
        <div class="header-section-5">
            <div class="container-custom-11">
                <div class="result-container">
                    <div class="result-title">Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022</div>
                    <div class="result-info">
                        <div class="result-details">by tuyendung in on Tháng Năm 21, 2020</div>
                    </div>
                </div>
                <div class="image-result">
                    <div class="image-wrapper-result">
                        <img src="{{ asset('/public/images/bai-viet/' . $postDetail->post->image_url) }}"
                            class="responsive-image">
                    </div>
                </div>
                <div class="content-result">
                    {!! $postDetail->content !!}
                </div>
                <div class="image-result-1">
                    <iframe src="{{ asset('/public/images/bai-viet/' . $postDetail->post_url) }}" width="831px"
                        height="747px" style="border:none; overflow: hidden;" scrolling="yes"></iframe>
                </div>


                <!-- <div class="image-result-1">
                    <img src="{{ asset('/public/images/bai-viet/bai-viet-6.png') }}" alt="Placeholder Image" />
                </div> -->
                <div class="result-main-container">
                    <div class="result-title-2">Bài viết liên quan</div>
                    <div class="custom-row-result">
                        @foreach($posts as $posts_alls)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 custom-margin-2"
                            data-post="{{ $posts_alls->post_id }}">
                            <div class="custom-result-8">
                                <div class="image-result-8">
                                    <img src="{{ asset('/public/images/bai-viet/' . $posts_alls->image_url) }}">
                                    <div class="overlay"><a
                                            href="{{ route('chi-tiet-bai-viet', ['id' => $posts_alls->post_id]) }}"
                                            class="no-style-link">
                                            Click để xem
                                        </a>
                                    </div>
                                </div>
                                <div class="info-wrapper-8">
                                    <div class="admin-info-wrapper">
                                        <div class="admin-text"> {{ $posts_alls->role == 1 ? 'Admin' : '' }}</div>
                                        <div class="admin-dot"></div>
                                    </div>
                                    <div class="title-text-8">{{ $posts_alls->content }}</div>
                                    <div class="tags-wrapper">
                                        <div class="tag-item">
                                            <div class="tag-text"
                                                data-type="{{ $posts_alls->roleCategory ? $posts_alls->roleCategory->parent_id : 'N/A' }}">
                                                {{ $posts_alls->roleCategory->parent_name ?? 'N/A' }}
                                            </div>
                                        </div>
                                        <div class="tag-item">
                                            <div class="tag-text"
                                                data-type="{{ $posts_alls->positionCategory ? $posts_alls->positionCategory->parent_id : 'N/A' }}">
                                                {{ $posts_alls->positionCategory->parent_name ?? 'N/A' }}
                                            </div>
                                        </div>
                                        <div class="tag-item">
                                            <div class="tag-text"
                                                data-type="{{ $posts_alls->locationCategory ? $posts_alls->locationCategory->parent_id : 'N/A' }}">
                                                {{ $posts_alls->locationCategory->parent_name ?? 'N/A' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stats-wrapper">
                                        <div class="stats-item">
                                            <div class="stats-text">
                                                @if($posts_alls->view >= 1000000)
                                                {{ round($posts_alls->view / 1000000, 1) }}T lượt xem
                                                @elseif($posts_alls->view >= 1000)
                                                {{ round($posts_alls->view / 1000, 1) }}N lượt xem
                                                @else
                                                {{ $posts_alls->view }} lượt xem
                                                @endif
                                            </div>
                                        </div>
                                        <div class="stats-dot"></div>
                                        <div class="stats-item">
                                            <div class="stats-text">{{ $posts_alls->created_at->format('d/m/Y') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('footer')
</div>

@endsection