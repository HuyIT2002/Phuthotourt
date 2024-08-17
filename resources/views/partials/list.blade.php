@if(isset($posts_all) && $posts_all->count() > 0)
@foreach($posts_all as $posts_alls)
<div class="col-lg-3 col-md-4 col-sm-6 mb-4 custom-margin"
    data-post="{{ $posts_alls->post_id }}">

    <div class="custom-container-8">
        <div class="image-wrapper-8">
            <img src="{{ asset('/public/images/bai-viet/' . $posts_alls->image_url) }}">
            <div class="overlay">Click để xem
            </div>
        </div>
        <div class="info-wrapper-8">
            <div class="admin-info-wrapper">
                <div class="admin-text">
                    {{ $posts_alls->role == 1 ? 'Admin' : '' }}
                </div>
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
@else
<p>Không có dữ liệu phù hợp.</p>
@endif