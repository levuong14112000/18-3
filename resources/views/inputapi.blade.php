<?php
// Lấy giá trị của tệp cookie
$count = isset($_COOKIE['count']) ? $_COOKIE['count'] : 0;

// Tăng giá trị của tệp cookie lên 1
$count++;

// Lưu giá trị của tệp cookie
setcookie('count', $count, time() + 360000 );

// Hiển thị số lần truy cập
echo "Number of hits: " . $count;
?>
