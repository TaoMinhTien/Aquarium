$(document).ready(function () {
    $('form').on('submit', function (e) {
        e.preventDefault(); // Ngăn chặn hành động mặc định của form

        var formData = $(this).serialize(); // Lấy dữ liệu từ form

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'), // URL được chỉ định trong thuộc tính action của form
            data: formData,
            success: function (response) {
                // Hiển thị thông báo khi gửi thành công
                $('.form-success-message-tien').text('Form submitted successfully.').css('display', 'block');
            },
            error: function (xhr, status, error) {
                // Xử lý lỗi nếu có
                console.error(error);
            }
        });
    });
});