<?php
//Lấy nội dung từ file văn bản
$tensp = $_POST['tensp'];
$giasp = $_POST['giasp'];
$giam_ps = $_POST['giam_ps'];

//Các công thức cần tính
$tien_giam = $giasp * $giam_ps * 0.01;
$tongthu = $giasp - $tien_giam;
//Hình thành bản in
$giasp_tc = number_format($giasp,1)."$";
$giam_ps_tc = number_format($giam_ps,1)."%";
$tien_giam_tc = number_format($tien_giam,1)."$";
$tongthu_tc = number_format($tongthu,1)."$";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Phiếu giảm giá sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Chi tiết giảm giá</h1>

        <label>Tên loại sản phẩm:</label>
        <span><?php echo htmlspecialchars($tensp); ?></span><br>

        <label>Giá sản phẩm:</label>
        <span><?php echo htmlspecialchars($giasp_tc); ?></span><br>

        <label>Giảm giá tiêu chuẩn:</label>
        <span><?php echo htmlspecialchars($giam_ps_tc); ?></span><br>

        <label>Số tiền được giảm:</label>
        <span><?php echo htmlspecialchars($tien_giam_tc); ?></span><br>

        <label>Tổng thu:</label>
        <span><?php echo htmlspecialchars($tongthu_tc); ?></span><br>
    </main>
</body>
</html>