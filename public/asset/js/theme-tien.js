$(document).ready(function () {
    // Lắng nghe sự kiện click trên các nút submit trong form
    $('form').find('input[type="submit"]').on('click', function (e) {
        e.preventDefault(); // Ngăn chặn hành động mặc định của nút submit

        var formData = $(this).closest('form').serialize(); // Lấy dữ liệu từ form chứa nút submit được click

        $.ajax({
            type: 'POST',
            url: $(this).closest('form').attr('action'), // URL được chỉ định trong thuộc tính action của form chứa nút submit được click
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
