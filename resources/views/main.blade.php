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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
        $(document).ready(function() {
            $('.item-box').on('click', function() {
                // Toggle 'item-box-active' class on the clicked item
                $(this).toggleClass('item-box-active');

                console.log('Item clicked and background color changed.');
            });
        });

        $(document).ready(function() {
            var selectedCategoryId = null;

            $('.option-container').click(function() {
                var categoryId = $(this).data('id');

                // Kiểm tra nếu danh mục đã được chọn, bỏ chọn nó
                if (selectedCategoryId === categoryId) {
                    selectedCategoryId = null; // Bỏ chọn
                } else {
                    selectedCategoryId = categoryId; // Chọn danh mục mới
                }

                $.ajax({
                    url: '{{ route("tuyen-dung") }}',
                    method: 'GET',
                    data: {
                        category_id: selectedCategoryId // Gửi `category_id` hoặc null nếu không có danh mục nào được chọn
                    },
                    success: function(response) {
                        // Thay thế nội dung trong #flex-container
                        $('#flex-container').html($(response).find('#flex-container').html());
                    }
                });
            });
        });
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
    </script>

</body>

</html>