"use strict";

$(window).on("load", function () {

    $(document).ready(function() {
        const $container = $('.container-fixed');
        let isDown = false;
        let startX;
        let scrollLeft;

        $container.on('mousedown', function(e) {
            isDown = true;
            $container.addClass('active');
            startX = e.pageX - $container.offset().left;
            scrollLeft = $container.scrollLeft();
        });

        $container.on('mouseleave mouseup', function() {
            isDown = false;
            $container.removeClass('active');
        });

        $container.on('mousemove', function(e) {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - $container.offset().left;
            const walk = (x - startX) * 3; //scroll-fast
            $container.scrollLeft(scrollLeft - walk);
        });
    });


    
 $(document).ready(function() {
    // Mặc định đặt lớp 'active' vào mục 'nav-home'
    $('#nav-home').addClass('active');

    // Xử lý sự kiện click để thêm lớp 'active' vào mục được nhấp
    $('.nav-item').click(function() {
        $('.nav-item').removeClass("active"); // Xóa lớp 'active' từ tất cả các mục
        $(this).addClass("active"); // Thêm lớp 'active' vào mục được nhấp
    });
});


const initialImgSources = [];
const initialImgAlts = [];
const initialImgTexts = [];
let currentRotation = 0; // Theo dõi vị trí hiện tại của ảnh
const rotationHistory = []; // Lưu trữ lịch sử di chuyển

// Lưu trữ trạng thái ban đầu khi trang được tải
document.querySelectorAll('.image-item').forEach((item, index) => {
    initialImgSources[index] = item.querySelector('img').src;
    initialImgAlts[index] = item.querySelector('img').alt;
    initialImgTexts[index] = item.querySelector('.text-overlay').innerText;
});

// Cập nhật ảnh mới dựa trên vị trí hiện tại
function updateImages(rotation) {
    const items = Array.from(document.querySelectorAll('.image-item'));
    const totalItems = items.length;

    // Di chuyển ảnh theo rotation
    const newSources = initialImgSources.map((_, i) => initialImgSources[(i - rotation + totalItems) % totalItems]);
    const newAlts = initialImgAlts.map((_, i) => initialImgAlts[(i - rotation + totalItems) % totalItems]);
    const newTexts = initialImgTexts.map((_, i) => initialImgTexts[(i - rotation + totalItems) % totalItems]);

    // Cập nhật ảnh mới
    items.forEach((item, i) => {
        const img = item.querySelector('img');
        const textOverlay = item.querySelector('.text-overlay');
        img.src = newSources[i];
        img.alt = newAlts[i];
        textOverlay.innerText = newTexts[i];
    });
}

// Di chuyển ảnh theo hướng được chỉ định
function rotateImages(direction) {
    const totalItems = initialImgSources.length;

    if (direction === 'left') {
        currentRotation = (currentRotation - 1 + totalItems) % totalItems; // Di chuyển trái (quay về sau 1 bước)
    } else if (direction === 'right') {
        currentRotation = (currentRotation + 1) % totalItems; // Di chuyển phải (quay về trước 1 bước)
    }

    // Cập nhật ảnh mới dựa trên vị trí hiện tại
    updateImages(currentRotation);

    // Lưu vào lịch sử di chuyển
    rotationHistory.push(currentRotation);
}

// Xử lý di chuyển ngược lại theo lịch sử di chuyển
function undoLastMove() {
    if (rotationHistory.length > 0) {
        // Lấy trạng thái cuối cùng từ lịch sử
        rotationHistory.pop();
        // Nếu không còn lịch sử, trở về trạng thái ban đầu
        const lastRotation = rotationHistory.length > 0 ? rotationHistory[rotationHistory.length - 1] : 0;
        currentRotation = lastRotation;
        updateImages(currentRotation);
    }
}

// Xác định ảnh ở hai bên trái và phải
function isLeftOrRight(index) {
    const totalItems = document.querySelectorAll('.image-item').length;
    const middleIndex = Math.floor(totalItems / 2);
    return index === middleIndex - 1 || index === middleIndex + 1;
}

// Gán sự kiện click cho các ảnh bên trái và phải
document.querySelectorAll('.image-item img').forEach((img, index) => {
    if (isLeftOrRight(index)) {
        img.addEventListener('click', () => {
            const direction = (index === Math.floor(document.querySelectorAll('.image-item').length / 2) - 1) ? 'right' : 'left';
            rotateImages(direction);
        });
    }
});

// Gán sự kiện click cho nút quay lại (nếu có)
// document.querySelector('#undo-button').addEventListener('click', () => {
//     undoLastMove();
// });



/*click chuột chuyển box*/
// document.addEventListener('DOMContentLoaded', function() {
//     const scrollContainer = document.querySelector('.scroll-container');
//     const contentA = document.querySelector('.content-a');
//     const contentB = document.querySelector('.content-b');

//     scrollContainer.addEventListener('scroll', function() {
//         const scrollTop = scrollContainer.scrollTop;
//         const windowHeight = window.innerHeight;

//         if (scrollTop >= windowHeight) {
//             contentA.style.transform = 'translateY(-100%)';
//             contentB.style.transform = 'translateY(0)';
//         } else {
//             contentA.style.transform = 'translateY(0)';
//             contentB.style.transform = 'translateY(100%)';
//         }
//     });
// });

    
// $(document).ready(function() {
//     // Đếm số lượng carousel items thực sự chứa ảnh
//     var itemCount = $('.carousel-item img').length;

//     $('.indicator-container').empty();

//     for (var i = 0; i < itemCount; i++) {
//         var indicator = $('<div class="indicator"></div>');
//         $('.indicator-container').append(indicator);
//     }

//     $('.indicator').on('click', function() {
//         var index = $(this).index();

//         $('.indicator').removeClass('active');
//         $(this).addClass('active');
//     });
// });

$(document).ready(function() {
    // Đếm số lượng carousel items thực sự chứa ảnh
    var itemCount = $('.carousel-item img').length;

    // SVG nội dung cho chỉ báo hoạt động
    var svgContent = '<svg width="28" height="28" viewBox="0 0 28 17" fill="none" xmlns="http://www.w3.org/2000/svg">\
        <path d="M22.6105 8.30527C22.6105 12.8921 18.8921 16.6105 14.3053 16.6105C9.7184 16.6105 6 12.8921 6 8.30527C6 3.7184 9.7184 0 14.3053 0C18.8921 0 22.6105 3.7184 22.6105 8.30527Z" fill="#0054A6" />\
        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3053 16.2373C18.686 16.2373 22.2373 12.686 22.2373 8.30527C22.2373 3.92455 18.686 0.37327 14.3053 0.37327C9.92455 0.37327 6.37327 3.92455 6.37327 8.30527C6.37327 12.686 9.92455 16.2373 14.3053 16.2373ZM14.3053 16.6105C18.8921 16.6105 22.6105 12.8921 22.6105 8.30527C22.6105 3.7184 18.8921 0 14.3053 0C9.7184 0 6 3.7184 6 8.30527C6 12.8921 9.7184 16.6105 14.3053 16.6105Z" fill="white" />\
        <path d="M10.3434 5.6062L1 10.5894L8.99382 8.09778L17.6105 11.1084L27.0578 6.12528L18.9601 8.72068L10.3434 5.6062Z" fill="white" stroke="#0054A6" stroke-width="0.186635" stroke-linejoin="round" />\
    </svg>';

    // Xóa các chỉ báo cũ nếu có
    $('.indicator-container').empty();

    // Tạo các chỉ báo dựa trên số lượng item
    for (var i = 0; i < itemCount; i++) {
        var indicator = $('<div class="indicator"></div>');
        $('.indicator-container').append(indicator);
    }

    // Hiển thị slide đầu tiên và chỉ báo đầu tiên với SVG
    $('.carousel-item').first().addClass('active');
    $('.indicator').first().addClass('active').html(svgContent);

    // Thay đổi trạng thái của chỉ báo khi người dùng tương tác
    $('.indicator').on('click', function() {
        var index = $(this).index();

        // Thay đổi các chỉ báo
        $('.indicator').removeClass('active').empty().css({ 'width': '16px', 'height': '16px', 'background': 'white', 'border': '1px #0054A6 solid' });
        $(this).addClass('active').html(svgContent).css({ 'width': '28px', 'height': '17px', 'background': 'none', 'border': 'none' });

        // Thay đổi các slide
        $('.carousel-item').removeClass('active');
        $('.carousel-item').eq(index).addClass('active');
    });

    // Hàm tự động chuyển slide sau 5 giây
    function autoChangeSlide() {
        var currentIndex = $('.indicator.active').index();
        var nextIndex = (currentIndex + 1) % itemCount;

        $('.indicator').eq(nextIndex).click();
    }

    // Chuyển slide sau mỗi 5 giây
    setInterval(autoChangeSlide, 5000);
    $('.control-left').on('click', function() {
                var currentIndex = $('.indicator.active').index();
                var prevIndex = (currentIndex - 1 + itemCount) % itemCount;

                $('.indicator').eq(prevIndex).click();
            });

            // Chuyển slide khi bấm nút phải
            $('.control-right').on('click', function() {
                var currentIndex = $('.indicator.active').index();
                var nextIndex = (currentIndex + 1) % itemCount;

                $('.indicator').eq(nextIndex).click();
            });
});

//  document.querySelectorAll('.card-container').forEach(card => {
//             card.addEventListener('click', function() {
//                 console.log('Card clicked!');
//             });
//         });

// $(document).ready(function() {
//         const $scrollContainer = $('#scrollContainer1');
//         let isMouseDown = false;
//         let startY;
//         let scrollTop;

//         // Thêm sự kiện mousedown cho tất cả các thẻ card-container
//         $('.card-container').on('mousedown', function(e) {
//             isMouseDown = true;
//             startY = e.pageY;
//             scrollTop = $scrollContainer.scrollTop();
//             $scrollContainer.css('cursor', 'grabbing'); // Thay đổi con trỏ khi kéo
//         });

//         $scrollContainer.on('mousemove', function(e) {
//             if (!isMouseDown) return;
//             e.preventDefault();
//             const y = e.pageY;
//             const walk = (y - startY) * 2; // Thay đổi tốc độ cuộn bằng cách thay đổi hệ số
//             $scrollContainer.scrollTop(scrollTop - walk);
//         });

//         $(document).on('mouseup mouseleave', function() {
//             if (isMouseDown) {
//                 isMouseDown = false;
//                 $scrollContainer.css('cursor', 'auto'); // Khôi phục con trỏ khi nhả chuột hoặc rời khỏi
//             }
//         });
//     });
$(document).ready(function() {
    const $scrollContainer = $('#scrollContainer1');
    let isMouseDown = false;
    let startY;
    let scrollTop;

    // Thêm sự kiện mousedown cho tất cả các thẻ card-container
    $('.card-container').on('mousedown', function(e) {
        isMouseDown = true;
        startY = e.pageY;
        scrollTop = $scrollContainer.scrollTop();
        $scrollContainer.css('cursor', 'grabbing'); // Thay đổi con trỏ khi kéo
    });

    $scrollContainer.on('mousemove', function(e) {
        if (!isMouseDown) return;
        e.preventDefault();
        const y = e.pageY;
        const walk = (y - startY) * 2; // Thay đổi tốc độ cuộn bằng cách thay đổi hệ số
        $scrollContainer.scrollTop(scrollTop - walk);
    });

    $(document).on('mouseup mouseleave', function() {
        if (isMouseDown) {
            isMouseDown = false;
            $scrollContainer.css('cursor', 'auto'); // Khôi phục con trỏ khi nhả chuột hoặc rời khỏi
        }
    });

    // Thêm sự kiện click cho các thẻ card-container
    $('.card-container').on('click', function() {
        // Xóa màu nền của tất cả các thẻ title-card khác
        $('.title-card').css('color', '');
        // Đặt màu nền cho thẻ title-card được nhấp
        $(this).find('.title-card').css('color', '#0054A6');
    });

    // Thêm sự kiện hover cho các thẻ card-container
    $('.card-container').hover(
        function() {
            // Khi di chuột vào
            $(this).find('.title-card').css('color', '#0054A6');
        },
        function() {
            // Khi không còn di chuột
            $(this).find('.title-card').css('color', '');
        }
    );
});


});
