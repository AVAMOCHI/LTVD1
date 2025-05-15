<?php
$num1 = 50;
$num2 = 30;

// Kiểm tra các điều kiện so sánh
$isLonHon = $num1 > $num2;
$isBangNhau = $num1 == $num2;
$isKhac = $num1 != $num2;

// In kết quả ra màn hình
echo "Is \$num1 Lớn Hơn \$num2? " . ($isLonHon ? 'true' : 'false') . "<br>";
echo "Is \$num1 Bằng \$num2? " . ($isBangNhau ? 'true' : 'false') . "<br>";
echo "Is \$num1 Khác \$num2? " . ($isKhac ? 'true' : 'false') . "<br>";
?>
