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

// document.querySelectorAll('.image-item img').forEach((img, index) => {
//     img.addEventListener('click', () => {
//         console.log('Clicked image index:', index); // In chỉ số của ảnh đang được nhấp
//         console.log('Clicked image src:', img.src); // In URL của ảnh đang được nhấp
//         console.log('Clicked image alt:', img.alt); // In thuộc tính alt của ảnh đang được nhấp
//         rotateImages(index);
//     });
// });

// function rotateImages(clickedIndex) {
//     const items = document.querySelectorAll('.image-item');
//     const totalItems = items.length;
//     const imgSources = Array.from(items).map(item => item.querySelector('img').src);
//     const imgAlts = Array.from(items).map(item => item.querySelector('img').alt);
//     const imgTexts = Array.from(items).map(item => item.querySelector('.text-overlay').innerText);

//     // Chuyển vị trí các ảnh theo thứ tự vòng tròn
//     const newSources = imgSources.map((_, i) => imgSources[(i - clickedIndex + totalItems) % totalItems]);
//     const newAlts = imgAlts.map((_, i) => imgAlts[(i - clickedIndex + totalItems) % totalItems]);
//     const newTexts = imgTexts.map((_, i) => imgTexts[(i - clickedIndex + totalItems) % totalItems]);

//     items.forEach((item, i) => {
//         const img = item.querySelector('img');
//         const textOverlay = item.querySelector('.text-overlay');
//         img.src = newSources[i];
//         img.alt = newAlts[i];
//         textOverlay.innerText = newTexts[i];
//     });
// }

    





//     document.querySelectorAll('.image-item img').forEach((img, index) => {
//     console.log(`Binding click event to image index: ${index}, src: ${img.src}, alt: ${img.alt}`);
//     img.addEventListener('click', () => {
//         console.log('Clicked image index:', index); // In chỉ số của ảnh đang được nhấp
//         console.log('Clicked image src:', img.src); // In URL của ảnh đang được nhấp
//         console.log('Clicked image alt:', img.alt); // In thuộc tính alt của ảnh đang được nhấp
//         rotateImages(index);
//     });
// });


// function rotateImages(clickedIndex) {
//     const items = Array.from(document.querySelectorAll('.image-item'));
//     const totalItems = items.length;

//     // Lưu trữ các thông tin về ảnh hiện tại
//     const imgSources = items.map(item => item.querySelector('img').src);
//     const imgAlts = items.map(item => item.querySelector('img').alt);
//     const imgTexts = items.map(item => item.querySelector('.text-overlay').innerText);

//     // Chuyển vị trí các ảnh theo chỉ số nhấp chuột
//     const newSources = imgSources.map((_, i) => imgSources[(i - clickedIndex + totalItems) % totalItems]);
//     const newAlts = imgAlts.map((_, i) => imgAlts[(i - clickedIndex + totalItems) % totalItems]);
//     const newTexts = imgTexts.map((_, i) => imgTexts[(i - clickedIndex + totalItems) % totalItems]);

//     // Cập nhật ảnh mới
//     items.forEach((item, i) => {
//         const img = item.querySelector('img');
//         const textOverlay = item.querySelector('.text-overlay');
//         img.src = newSources[i];
//         img.alt = newAlts[i];
//         textOverlay.innerText = newTexts[i];
//     });
// }
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


});
