<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="scroll-container">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('/public/images/bg/bg.mp4') }}" type="video/mp4">
        </video>
        <div class="container-fixed">
            @include('navigation')
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
    <script src="{{ asset('public/js/style.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy tham chiếu đến form
        var form = document.getElementById('uploadForm');

        // Lắng nghe sự kiện submit của form
        form.addEventListener('submit', function(event) {
            // Ngăn chặn form gửi đi ngay lập tức
            event.preventDefault();

            // Lấy giá trị của trường 'name'
            var nameInput = document.getElementById('name');
            var nameValue = nameInput.value;

            // Hiển thị giá trị trong console
            console.log('Họ tên:', nameValue);

            // Gửi form sau khi kiểm tra
            form.submit();
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#cv').on('change', function() {
            var fileName = $(this).val().split('\\').pop(); // Lấy tên file
            $('#cv-text').text(fileName ? fileName : 'Không có tập tin nào được chọn');
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.item-box').on('click', function() {
            // Toggle 'item-box-active' class on the clicked item
            $(this).toggleClass('item-box-active');

            console.log('Item clicked and background color changed.');
        });
    })


    $(document).ready(function() {
        var selectedCategoryId = null;
        var totalPages = 1; // Khởi tạo biến totalPages với giá trị mặc định

        $('.option-container').click(function() {
            var categoryId = $(this).data('id');

            if (selectedCategoryId === categoryId) {
                selectedCategoryId = null; // Bỏ chọn
            } else {
                selectedCategoryId = categoryId; // Chọn danh mục mới
            }

            $.ajax({
                url: '{{ route("tuyen-dung") }}',
                method: 'GET',
                data: {
                    category_id: selectedCategoryId
                },
                success: function(response) {
                    $('#flex-container').html($(response).find('#flex-container').html());

                    // Cập nhật biến totalPages và gọi lại hàm phân trang
                    updatePagination();
                    showPage(1); // Hiển thị trang đầu tiên khi tải nội dung mới
                }
            });
        });

        $('.option-outline').click(function() {
            $(this).toggleClass('active');
        });

        const itemsPerPage = 9;
        const $contentContainer = $('#flex-container');
        const $paginationContainer = $('.pagination-items-2');

        function updatePagination() {
            const $items = $contentContainer.children();
            totalPages = Math.ceil($items.length / itemsPerPage); // Cập nhật totalPages

            createPagination(); // Tạo phân trang mới
        }

        function createPagination() {
            $paginationContainer.empty();
            for (let i = 1; i <= totalPages; i++) {
                const $pageNumDiv = $('<div></div>').addClass('page-number-2');
                const $pageTextDiv = $('<div></div>').addClass('page-text-2').text(i);
                $pageNumDiv.append($pageTextDiv);
                $pageNumDiv.on('click', () => showPage(i));
                $paginationContainer.append($pageNumDiv);
            }
        }

        function showPage(pageNumber) {
            const $items = $contentContainer.children();

            $items.each(function(index) {
                $(this).toggle(index >= (pageNumber - 1) * itemsPerPage && index < pageNumber *
                    itemsPerPage);
            });

            $paginationContainer.children().each(function() {
                $(this).toggleClass('active', parseInt($(this).text()) === pageNumber);
            });

            // Cập nhật trạng thái disabled của các mũi tên
            $('.arrow.left-arrow').toggleClass('disabled', pageNumber === 1);
            $('.arrow.right-arrow').toggleClass('disabled', pageNumber === totalPages);
        }

        $('.arrow.left-arrow').on('click', function() {
            if (!$(this).hasClass('disabled')) {
                const activePage = $paginationContainer.children().filter('.active').index() + 1;
                if (activePage > 1) showPage(activePage - 1);
            }
        });

        $('.arrow.right-arrow').on('click', function() {
            if (!$(this).hasClass('disabled')) {
                const activePage = $paginationContainer.children().filter('.active').index() + 1;
                if (activePage < totalPages) showPage(activePage + 1);
            }
        });

        // Tạo phân trang và hiển thị trang đầu tiên khi tải trang
        updatePagination();
        showPage(1);
    });


    $(document).ready(function() {
        var debounceTime = 1000; // 10 giây
        var debounceTimeout;

        // Cập nhật danh sách tìm kiếm gần đây từ localStorage
        function updateRecentSearchList() {
            var recentSearches = JSON.parse(localStorage.getItem('recentSearches')) || [];
            var $list = $('#search-results-1 .recent-search-list-recruitment');
            $list.empty(); // Xóa danh sách hiện tại

            recentSearches.forEach(function(item, index) {
                var $item = $('<div>', {
                    class: 'recent-search-item-recruitment'
                });
                var $text = $('<div>', {
                    class: 'search-item-text-2',
                    text: item
                });
                var $icon = $('<div>', {
                        class: 'search-item-icon'
                    })
                    .append(
                        '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                        '<path d="M8 16L16 8M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />' +
                        '</svg>');

                // Thêm sự kiện xóa cho icon
                $icon.on('click', function() {
                    removeRecentSearch(index); // Xóa mục khi nhấp vào icon
                });

                $item.append($text).append($icon);
                $list.append($item);
            });
        }

        // Lưu tìm kiếm gần đây vào localStorage
        function saveRecentSearch(query) {
            var recentSearches = JSON.parse(localStorage.getItem('recentSearches')) || [];

            // Nếu tìm kiếm đã có trong danh sách, loại bỏ nó
            recentSearches = recentSearches.filter(function(search) {
                return search.toLowerCase() !== query.toLowerCase();
            });

            // Thêm tìm kiếm mới vào đầu danh sách
            recentSearches.unshift(query);

            // Lưu danh sách vào localStorage
            localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
        }

        // Xóa tìm kiếm khỏi localStorage
        function removeRecentSearch(index) {
            var recentSearches = JSON.parse(localStorage.getItem('recentSearches')) || [];

            // Xóa mục tại vị trí chỉ định
            recentSearches.splice(index, 1);

            // Cập nhật lại localStorage và danh sách hiển thị
            localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
            updateRecentSearchList(); // Cập nhật danh sách hiển thị
        }

        // Xử lý khi người dùng nhập vào ô tìm kiếm
        $('#search-input').on('input', function() {
            var query = $(this).val();

            // Xóa timeout cũ nếu có
            clearTimeout(debounceTimeout);

            // Hiển thị icon nếu có dữ liệu nhập
            if (query.trim() !== '') {
                $('.hidden-icon-recruitment').show();
                $('#search-results-1').hide(); // Ẩn danh sách tìm kiếm gần đây

                // Đặt timeout mới để lưu tìm kiếm sau khoảng thời gian debounce
                debounceTimeout = setTimeout(function() {
                    if (query.trim() !== '') {
                        saveRecentSearch(query);
                        updateRecentSearchList(); // Cập nhật danh sách hiển thị sau khi lưu
                    }
                }, debounceTime);
            } else {
                $('.hidden-icon-recruitment').hide();
                $('#search-results-1')
                    .show(); // Hiển thị danh sách tìm kiếm gần đây nếu ô tìm kiếm trống
            }

            // Gửi yêu cầu AJAX để tìm kiếm kết quả
            $.ajax({
                url: '/PHU_THO_TOURIST/tuyen-dung', // Cập nhật URL chính xác
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    $('#search-results').html(response)
                        .show(); // Hiển thị search-results sau khi nhận được kết quả
                    if (response.trim() === '<p>Không có kết quả tìm kiếm</p>') {
                        $('#search-results-1')
                            .hide(); // Ẩn danh sách tìm kiếm gần đây nếu không có kết quả tìm kiếm
                    }
                },
                error: function(xhr) {
                    $('#search-results').html('<p>Đã xảy ra lỗi!</p>')
                        .show(); // Hiển thị thông báo lỗi
                    $('#search-results-1')
                        .hide(); // Ẩn danh sách tìm kiếm gần đây nếu xảy ra lỗi
                }
            });
        });

        // Hiển thị danh sách tìm kiếm gần đây khi nhấp vào ô tìm kiếm
        $('#search-input').on('focus', function() {
            $('#search-results-1').show(); // Hiển thị danh sách tìm kiếm gần đây
            updateRecentSearchList(); // Cập nhật danh sách tìm kiếm gần đây
        });

        // Xóa nội dung ô tìm kiếm khi nhấp vào icon
        $('.hidden-icon-recruitment').on('click', function() {
            $('#search-input').val(''); // Xóa nội dung ô tìm kiếm
            $('#search-results').empty().hide(); // Xóa kết quả tìm kiếm và ẩn
            $('#search-results-1').show(); // Hiển thị danh sách tìm kiếm gần đây
            $('.hidden-icon-recruitment').hide(); // Ẩn icon
        });

        // Ẩn kết quả tìm kiếm và icon khi nhấp ra ngoài ô tìm kiếm và icon
        $(document).on('click', function(event) {
            var $target = $(event.target);

            if (!$target.closest('#search-input').length && !$target.closest('.hidden-icon-recruitment')
                .length) {
                $('#search-results').hide(); // Ẩn kết quả tìm kiếm
                $('.hidden-icon-recruitment').hide(); // Ẩn icon
                $('#search-results-1').hide();
            }
        });

        // Cập nhật danh sách tìm kiếm gần đây khi trang tải
        updateRecentSearchList();
    });
    </script>


    <script>
    $(document).ready(function() {
        var debounceTime = 1000; // 10 giây
        var debounceTimeout;

        // Cập nhật danh sách tìm kiếm gần đây từ localStorage
        function updateRecentSearchList() {
            var recentSearches = JSON.parse(localStorage.getItem('recentSearches')) || [];
            var $list = $('#search-results-2 .recent-search-list');
            $list.empty(); // Xóa danh sách hiện tại

            recentSearches.forEach(function(item, index) {
                var $item = $('<div>', {
                    class: 'recent-search-item'
                });
                var $text = $('<div>', {
                    class: 'search-item-text',
                    text: item
                });
                var $icon = $('<div>', {
                        class: 'search-item-icon'
                    })
                    .append(
                        '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                        '<path d="M8 16L16 8M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />' +
                        '</svg>');

                // Thêm sự kiện xóa cho icon
                $icon.on('click', function() {
                    removeRecentSearch(index); // Xóa mục khi nhấp vào icon
                });

                $item.append($text).append($icon);
                $list.append($item);
            });
        }

        // Lưu tìm kiếm gần đây vào localStorage
        function saveRecentSearch(query) {
            var recentSearches = JSON.parse(localStorage.getItem('recentSearches')) || [];

            // Nếu tìm kiếm đã có trong danh sách, loại bỏ nó
            recentSearches = recentSearches.filter(function(search) {
                return search.toLowerCase() !== query.toLowerCase();
            });

            // Thêm tìm kiếm mới vào đầu danh sách
            recentSearches.unshift(query);

            // Lưu danh sách vào localStorage
            localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
        }

        // Xóa tìm kiếm khỏi localStorage
        function removeRecentSearch(index) {
            var recentSearches = JSON.parse(localStorage.getItem('recentSearches')) || [];

            // Xóa mục tại vị trí chỉ định
            recentSearches.splice(index, 1);

            // Cập nhật lại localStorage và danh sách hiển thị
            localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
            updateRecentSearchList(); // Cập nhật danh sách hiển thị
        }

        // Xử lý khi người dùng nhập vào ô tìm kiếm
        $('#search-input-1').on('input', function() {
            var query = $(this).val();

            // Xóa timeout cũ nếu có
            clearTimeout(debounceTimeout);

            // Hiển thị icon nếu có dữ liệu nhập
            if (query.trim() !== '') {
                $('.hidden-icon').show();
                $('#search-results-2').hide(); // Ẩn danh sách tìm kiếm gần đây

                // Đặt timeout mới để lưu tìm kiếm sau khoảng thời gian debounce
                debounceTimeout = setTimeout(function() {
                    if (query.trim() !== '') {
                        saveRecentSearch(query);
                        updateRecentSearchList(); // Cập nhật danh sách hiển thị sau khi lưu
                    }
                }, debounceTime);
            } else {
                $('.hidden-icon').hide();
                $('#search-results-2')
                    .show(); // Hiển thị danh sách tìm kiếm gần đây nếu ô tìm kiếm trống
            }

            // Gửi yêu cầu AJAX để tìm kiếm kết quả
            $.ajax({
                url: '/PHU_THO_TOURIST/bai-viet', // Cập nhật URL chính xác
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    $('#search-results-3').html(response)
                        .show(); // Hiển thị search-results sau khi nhận được kết quả
                    if (response.trim() === '<p>Không có kết quả tìm kiếm</p>') {
                        $('#search-results-2')
                            .hide(); // Ẩn danh sách tìm kiếm gần đây nếu không có kết quả tìm kiếm
                    }
                },

            });
        });

        // Hiển thị danh sách tìm kiếm gần đây khi nhấp vào ô tìm kiếm
        $('#search-input-1').on('focus', function() {
            $('#search-results-2').show(); // Hiển thị danh sách tìm kiếm gần đây
            updateRecentSearchList(); // Cập nhật danh sách tìm kiếm gần đây
        });

        // Xóa nội dung ô tìm kiếm khi nhấp vào icon
        $('.hidden-icon').on('click', function() {
            $('#search-input-1').val(''); // Xóa nội dung ô tìm kiếm
            $('#search-results-3').empty().hide(); // Xóa kết quả tìm kiếm và ẩn
            $('#search-results-2').show(); // Hiển thị danh sách tìm kiếm gần đây
            $('.hidden-icon').hide(); // Ẩn icon
        });

        // Ẩn kết quả tìm kiếm và icon khi nhấp ra ngoài ô tìm kiếm và icon
        $(document).on('click', function(event) {
            var $target = $(event.target);

            if (!$target.closest('#search-input-1').length && !$target.closest('.hidden-icon')
                .length) {
                $('#search-results-3').hide(); // Ẩn kết quả tìm kiếm
                $('.hidden-icon').hide(); // Ẩn icon
                $('#search-results-2').hide();
            }
        });

        // Cập nhật danh sách tìm kiếm gần đây khi trang tải
        updateRecentSearchList();
    });




    $(document).ready(function() {
        var selectedCategoryId = null;
        var totalPages = 1; // Khởi tạo biến totalPages với giá trị mặc định

        $('.item-box').click(function() {
            var parentId = $(this).data('id');

            if (selectedCategoryId === parentId) {
                selectedCategoryId = null; // Bỏ chọn
            } else {
                selectedCategoryId = parentId; // Chọn danh mục mới
            }

            $.ajax({
                url: '/PHU_THO_TOURIST/bai-viet',
                method: 'GET',
                data: {
                    parent_id: selectedCategoryId
                },
                success: function(response) {
                    $('#content-container').html($(response).find('#content-container')
                        .html());

                    // Cập nhật biến totalPages và gọi lại hàm phân trang
                    updatePagination();
                    showPage(1); // Hiển thị trang đầu tiên khi tải nội dung mới
                }
            });
        });

        // Phần còn lại của mã không thay đổi...

        const itemsPerPage = 12;
        const $contentContainer = $('#content-container');
        const $paginationContainer = $('.pagination-items');

        function updatePagination() {
            const $items = $contentContainer.children();
            totalPages = Math.ceil($items.length / itemsPerPage); // Cập nhật totalPages

            createPagination(); // Tạo phân trang mới
        }

        function createPagination() {
            $paginationContainer.empty();
            for (let i = 1; i <= totalPages; i++) {
                const $pageNumDiv = $('<div></div>').addClass('page-number');
                const $pageTextDiv = $('<div></div>').addClass('page-text').text(i);
                $pageNumDiv.append($pageTextDiv);
                $pageNumDiv.on('click', () => showPage(i));
                $paginationContainer.append($pageNumDiv);
            }
        }

        function showPage(pageNumber) {
            const $items = $contentContainer.children();

            $items.each(function(index) {
                $(this).toggle(index >= (pageNumber - 1) * itemsPerPage && index < pageNumber *
                    itemsPerPage);
            });

            $paginationContainer.children().each(function() {
                $(this).toggleClass('active', parseInt($(this).text()) === pageNumber);
            });

            // Cập nhật trạng thái disabled của các mũi tên
            $('.arrow.left-arrow').toggleClass('disabled', pageNumber === 1);
            $('.arrow.right-arrow').toggleClass('disabled', pageNumber === totalPages);
        }

        $('.arrow.left-arrow').on('click', function() {
            if (!$(this).hasClass('disabled')) {
                const activePage = $paginationContainer.children().filter('.active').index() + 1;
                if (activePage > 1) showPage(activePage - 1);
            }
        });

        $('.arrow.right-arrow').on('click', function() {
            if (!$(this).hasClass('disabled')) {
                const activePage = $paginationContainer.children().filter('.active').index() + 1;
                if (activePage < totalPages) showPage(activePage + 1);
            }
        });

        // Tạo phân trang và hiển thị trang đầu tiên khi tải trang
        updatePagination();
        showPage(1);
    });
    </script>

    <script>
    function convertDateFormat(dateString) {
        var parts = dateString.split('/');
        if (parts.length === 3) {
            return parts[2] + '-' + parts[1] + '-' + parts[0];
        } else {
            console.log('Ngày không đúng định dạng.');
            return null;
        }
    }

    $(document).ready(function() {
        console.log('Document is ready');
        var totalPages = 1; // Khởi tạo biến totalPages với giá trị mặc định

        $('#dateInput, #dateInput2').on('change', function() {
            console.log('Date input changed');

            var startDate = $('#dateInput').val();
            var endDate = $('#dateInput2').val();

            console.log('Ngày bắt đầu:', startDate);
            console.log('Ngày kết thúc:', endDate);

            var formattedStartDate = convertDateFormat(startDate);
            var formattedEndDate = convertDateFormat(endDate);

            console.log('Ngày bắt đầu (sau chuyển đổi):', formattedStartDate);
            console.log('Ngày kết thúc (sau chuyển đổi):', formattedEndDate);

            if (formattedStartDate && formattedEndDate) {
                $.ajax({
                    url: '/PHU_THO_TOURIST/bai-viet',
                    type: 'GET',
                    data: {
                        start_date: formattedStartDate,
                        end_date: formattedEndDate
                    },
                    success: function(response) {
                        if (response.view) {
                            $('#content-container').html(response.view); // Đảm bảo ID đúng
                            updatePagination();
                            showPage(1); // Hiển thị trang đầu tiên khi tải nội dung mới
                        } else if (response.error) {
                            $('#content-container').html('<p>' + response.error + '</p>');
                        }

                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        $('#content-container').html(
                            '<p>Đã xảy ra lỗi khi gửi yêu cầu.</p>');
                    }
                });
            } else {
                console.log('Vui lòng chọn cả hai ngày.');
                $('#content-container').html('<p>Vui lòng chọn cả hai ngày.</p>');
            }
        });

        const itemsPerPage = 12;
        const $contentContainer = $('#content-container');
        const $paginationContainer = $('.pagination-items');

        function updatePagination() {
            const $items = $contentContainer.children();
            totalPages = Math.ceil($items.length / itemsPerPage); // Cập nhật totalPages

            createPagination(); // Tạo phân trang mới
        }

        function createPagination() {
            $paginationContainer.empty();
            for (let i = 1; i <= totalPages; i++) {
                const $pageNumDiv = $('<div></div>').addClass('page-number');
                const $pageTextDiv = $('<div></div>').addClass('page-text').text(i);
                $pageNumDiv.append($pageTextDiv);
                $pageNumDiv.on('click', () => showPage(i));
                $paginationContainer.append($pageNumDiv);
            }
        }

        function showPage(pageNumber) {
            const $items = $contentContainer.children();

            $items.each(function(index) {
                $(this).toggle(index >= (pageNumber - 1) * itemsPerPage && index < pageNumber *
                    itemsPerPage);
            });

            $paginationContainer.children().each(function() {
                $(this).toggleClass('active', parseInt($(this).text()) === pageNumber);
            });

            // Cập nhật trạng thái disabled của các mũi tên
            $('.arrow.left-arrow').toggleClass('disabled', pageNumber === 1);
            $('.arrow.right-arrow').toggleClass('disabled', pageNumber === totalPages);
        }

        $('.arrow.left-arrow').on('click', function() {
            if (!$(this).hasClass('disabled')) {
                const activePage = $paginationContainer.children().filter('.active').index() + 1;
                if (activePage > 1) showPage(activePage - 1);
            }
        });

        $('.arrow.right-arrow').on('click', function() {
            if (!$(this).hasClass('disabled')) {
                const activePage = $paginationContainer.children().filter('.active').index() + 1;
                if (activePage < totalPages) showPage(activePage + 1);
            }
        });

        // Tạo phân trang và hiển thị trang đầu tiên khi tải trang
        updatePagination();
        showPage(1);
    });
    </script>



</body>

</html>