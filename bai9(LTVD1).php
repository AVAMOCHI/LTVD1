<?php
// Khai báo thu nhập
$income = 15000000;

// Khai báo thuế phải nộp
$tax = 0;

// Tính thuế dựa trên mức thu nhập
if ($income <= 10000000) {
    $tax = $income * 0.05;  // 5% nếu thu nhập ≤ 10 triệu
} elseif ($income <= 20000000) {
    $tax = $income * 0.10;  // 10% nếu thu nhập > 10 triệu và ≤ 20 triệu
} else {
    $tax = $income * 0.20;  // 20% nếu thu nhập > 20 triệu
}

// Tính thu nhập ròng sau khi trừ thuế
$net_income = $income - $tax;

// In kết quả
echo "Thuế phải nộp là: " . number_format($tax, 0, ',', '.') . " VNĐ<br>";
echo "Thu nhập ròng sau khi trừ thuế là: " . number_format($net_income, 0, ',', '.') . " VNĐ";
?>
