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

        // document.addEventListener('DOMContentLoaded', function() {
        //     const itemsPerPage = 12;
        //     const contentContainer = document.getElementById('content-container');
        //     const paginationContainer = document.querySelector('.pagination-items');

        //     const items = Array.from(contentContainer.children);
        //     const totalPages = Math.ceil(items.length / itemsPerPage);

        //     function showPage(pageNumber) {
        //         // Ẩn tất cả các phần tử
        //         items.forEach((item, index) => {
        //             item.style.display = (index >= (pageNumber - 1) * itemsPerPage && index < pageNumber *
        //                 itemsPerPage) ? 'block' : 'none';
        //         });

        //         // Cập nhật trang hiện tại
        //         const pageNumbers = paginationContainer.children;
        //         Array.from(pageNumbers).forEach((pageNumDiv) => {
        //             pageNumDiv.classList.toggle('active', parseInt(pageNumDiv.textContent) === pageNumber);
        //         });
        //     }

        //     function createPagination() {
        //         paginationContainer.innerHTML = '';
        //         for (let i = 1; i <= totalPages; i++) {
        //             const pageNumDiv = document.createElement('div');
        //             pageNumDiv.className = 'page-number';
        //             pageNumDiv.textContent = i;
        //             pageNumDiv.addEventListener('click', () => showPage(i));
        //             paginationContainer.appendChild(pageNumDiv);
        //         }
        //     }

        //     document.querySelector('.arrow.left-arrow').addEventListener('click', function() {
        //         const activePage = Array.from(paginationContainer.children).findIndex(el => el.classList
        //             .contains('active')) + 1;
        //         if (activePage > 1) showPage(activePage - 1);
        //     });

        //     document.querySelector('.arrow.right-arrow').addEventListener('click', function() {
        //         const activePage = Array.from(paginationContainer.children).findIndex(el => el.classList
        //             .contains('active')) + 1;
        //         if (activePage < totalPages) showPage(activePage + 1);
        //     });

        //     createPagination();
        //     showPage(1); // Hiển thị trang đầu tiên khi tải trang
        // });
    </script>

</body>

</html>