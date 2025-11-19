<?php
// TODO 1: Khởi động session (BẮT BUỘC ở mọi trang cần dùng SESSION)
// Gợi ý: Dùng hàm session_...()
session_start();
// TODO 2: Kiểm tra xem SESSION (lưu tên đăng nhập) có tồn tại không?
// Gợi ý: Dùng isset($_SESSION['...']) (dùng đúng tên bạn đặt ở Tệp 2, TODO 5)

if (isset($_SESSION['username'])) {

    // TODO 3: Nếu tồn tại, lấy username từ SESSION ra
    $loggedInUser = $_SESSION['username'];

    // TODO 4: In ra lời chào mừng
    echo "<h1>Chào mừng trở lại, $loggedInUser!</h1>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";
    // TODO 5: (Tạm thời) Tạo 1 link để "Đăng xuất" (chỉ là quay về login.html)
    echo '<a href="login.html">Đăng xuất (Tạm thời)</a>';
} else {

    // TODO 6: Nếu không tồn tại SESSION (chưa đăng nhập)
    // Chuyển hướng người dùng về trang login.html
    // Gợi ý: Dùng header('Location: ...');
    header('Location: login.html');
    exit();
}
?>