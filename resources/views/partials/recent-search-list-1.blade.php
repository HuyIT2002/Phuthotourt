@php
$uniquePosts = $posts->unique('post_id');
@endphp

@if($uniquePosts->isNotEmpty())
@foreach($uniquePosts as $post)
<div class="recent-search-item">
    <div class="search-item-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="24" height="24" rx="12" fill="#C2C2C2" />
            <path d="M16 16L18 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M17 11.5C17 14.5376 14.5376 17 11.5 17C8.46243 17 6 14.5376 6 11.5C6 8.46243 8.46243 6 11.5 6C14.5376 6 17 8.46243 17 11.5Z"
                stroke="white" stroke-width="2" />
        </svg>
    </div>
    <a href="{{ route('chi-tiet-tuyen-dung', ['id' => $post->post_id]) }}"
        class="search-item-text">{{ $post->content ?? 'Không có tên' }}
    </a>
</div>
@endforeach
@else
<div class="recent-search-item">Không tìm thấy kết quả</div>
@endif