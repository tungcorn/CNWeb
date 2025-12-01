<?php
// Tệp View CHỈ chứa HTML và logic hiển thị (echo, foreach)
// Tệp View KHÔNG chứa câu lệnh SQL
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>PHT Chương 5 - MVC</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<h2>Thêm Sinh Viên Mới (Kiến trúc MVC)</h2>
<form action="index.php" method="POST">
    Tên sinh viên: <input type="text" name="ten_sinh_vien" required>
    Email: <input type="email" name="email" required>
    <button type="submit">Thêm</button>
</form>
<h2>Danh Sách Sinh Viên (Kiến trúc MVC)</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên Sinh Viên</th>
        <th>Email</th>
        <th>Ngày Tạo</th>
    </tr>
    <?php
    // TODO 4: Dùng vòng lặp foreach để duyệt qua biến $danh_sach_sv
    // (Biến $danh_sach_sv này sẽ được Controller truyền sang)
    // Gợi ý: foreach ($danh_sach_sv as $sv) { ... }
    if (isset($danh_sach_sv)) {
        foreach ($danh_sach_sv as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['ten_sinh_vien']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['ngay_tao']) . "</td>";
            echo "</tr>";
        }
    }
    // TODO 5: In (echo) các dòng <tr> và <td> chứa dữ liệu $sv
    // Gợi ý: echo "<tr><td>" . htmlspecialchars($sv['id']) . "</td>...</tr>";

    // Đóng vòng lặp

    ?>
</table>
</body>
</html>