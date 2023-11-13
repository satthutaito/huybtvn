<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function kiemTraChuoi($chuoi, $tuCanKiemTra) {
    // Sử dụng hàm strpos để kiểm tra xem từ cần kiểm tra có xuất hiện trong chuỗi hay không
    // Hàm này trả về vị trí của từ nếu nó được tìm thấy trong chuỗi, ngược lại trả về false
    $viTri = strpos($chuoi, $tuCanKiemTra);

    if ($viTri !== false) {
        echo "Chuỗi '$chuoi' chứa từ '$tuCanKiemTra'.";
    } else {
        echo "Chuỗi '$chuoi' không chứa từ '$tuCanKiemTra'.";
    }
}

// Sử dụng hàm kiemTraChuoi với một ví dụ
$chuoi = "Chào mừng bạn đến với PHP programming.";
$tuCanKiemTra = "PHP";

kiemTraChuoi($chuoi, $tuCanKiemTra);
?>


<!-- Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function timGiaTriLonNhat($mang) {
    // Sử dụng hàm max để tìm giá trị lớn nhất trong mảng
    $lonNhat = max($mang);
    return $lonNhat;
}

function timGiaTriNhoNhat($mang) {
    // Sử dụng hàm min để tìm giá trị nhỏ nhất trong mảng
    $nhoNhat = min($mang);
    return $nhoNhat;
}

// Một mảng ví dụ
$mangSo = array(3, 7, 1, 9, 4, 6, 8, 2, 5);

// Tìm giá trị lớn nhất và nhỏ nhất trong mảng
$lonNhat = timGiaTriLonNhat($mangSo);
$nhoNhat = timGiaTriNhoNhat($mangSo);

// In kết quả
echo "Giá trị lớn nhất trong mảng là: $lonNhat<br>";
echo "Giá trị nhỏ nhất trong mảng là: $nhoNhat";
?>

<!-- Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function sapXepTangDan($mang) {
    // Sử dụng hàm sort để sắp xếp mảng theo thứ tự tăng dần
    sort($mang);
    return $mang;
}

// Một mảng ví dụ
$mangSo = array(5, 2, 8, 1, 6, 3, 7, 4);

// Sắp xếp mảng
$mangDaSapXep = sapXepTangDan($mangSo);

// In kết quả
echo "Mảng đã sắp xếp theo thứ tự tăng dần: ";
print_r($mangDaSapXep);
?>

<!-- Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->

<!-- Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->

<!-- Viết chương trình PHP để tính tổng của các số trong một mảng. -->

<!-- Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->

Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
<?php
function laSoArmstrong($so) {
    $soBanDau = $so;
    $tongLuyThua = 0;
    $soChuSo = strlen($so);

    while ($so > 0) {
        $chuSo = $so % 10;
        $tongLuyThua += pow($chuSo, $soChuSo);
        $so = (int)($so / 10);
    }

    return $tongLuyThua == $soBanDau;
}

$soKiemTra = 153;
if (laSoArmstrong($soKiemTra)) {
    echo "$soKiemTra là số Armstrong.";
} else {
    echo "$soKiemTra không là số Armstrong.";
}
?>

<!-- Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function chenPhanTu($mang, $viTri, $giaTri) {
    array_splice($mang, $viTri, 0, $giaTri);
    return $mang;
}

$mangSo = array(1, 2, 3, 4, 5);
$viTriChen = 2;
$giaTriChen = 99;

$mangMoi = chenPhanTu($mangSo, $viTriChen, $giaTriChen);

echo "Mảng mới sau khi chèn phần tử $giaTriChen vào vị trí $viTriChen: ";
print_r($mangMoi);
?>

<!-- Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function loaiBoTrungLap($mang) {
    $mangKhongTrungLap = array_unique($mang);
    return $mangKhongTrungLap;
}

$mangSo = array(1, 2, 2, 3, 4, 4, 5);

$mangMoi = loaiBoTrungLap($mangSo);

echo "Mảng mới sau khi loại bỏ phần tử trùng lặp: ";
print_r($mangMoi);
?>

<!-- Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function timViTri($mang, $giaTri) {
    $viTri = array_search($giaTri, $mang);
    return $viTri !== false ? $viTri : "Không tìm thấy phần tử trong mảng.";
}

$mangSo = array(10, 20, 30, 40, 50);
$giaTriTim = 30;

$viTriTimThay = timViTri($mangSo, $giaTriTim);

echo "Vị trí của phần tử $giaTriTim trong mảng là: $viTriTimThay";
?>

<!-- Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function daoNguocChuoi($chuoi) {
    $chuoiDaoNguoc = strrev($chuoi);
    return $chuoiDaoNguoc;
}

$chuoiBanDau = "Hello, World!";
$chuoiDaoNguoc = daoNguocChuoi($chuoiBanDau);

echo "Chuỗi ban đầu: $chuoiBanDau<br>";
echo "Chuỗi đảo ngược: $chuoiDaoNguoc";
?>

<!-- Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function demSoLuongPhanTu($mang) {
    $soLuong = count($mang);
    return $soLuong;
}

$mangSo = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$soLuongPhanTu = demSoLuongPhanTu($mangSo);

echo "Số lượng phần tử trong mảng là: $soLuongPhanTu";
?>

<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
function laChuoiPalindrome($chuoi) {
    $chuoiSoSanh = strtolower(str_replace(' ', '', $chuoi));
    return $chuoiSoSanh == strrev($chuoiSoSanh);
}

$chuoiKiemTra = "A man a plan a canal Panama";

if (laChuoiPalindrome($chuoiKiemTra)) {
    echo "Chuỗi '$chuoiKiemTra' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$chuoiKiemTra' không là chuỗi Palindrome.";
}
?>

<!-- Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function demSoLanXuatHien($mang, $giaTri) {
    $soLanXuatHien = array_count_values($mang);
    return isset($soLanXuatHien[$giaTri]) ? $soLanXuatHien[$giaTri] : 0;
}

$mangSo = array(1, 2, 3, 4, 2, 5, 2, 6);
$giaTriCanDem = 2;

$soLanXuatHien = demSoLanXuatHien($mangSo, $giaTriCanDem);

echo "Số lần xuất hiện của phần tử $giaTriCanDem trong mảng là: $soLanXuatHien";
?>

<!-- Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function sapXepGiamDan($mang) {
    rsort($mang);
    return $mang;
}

$mangSo = array(5, 2, 8, 1, 6, 3, 7, 4);

$mangGiamDan = sapXepGiamDan($mangSo);

echo "Mảng đã sắp xếp theo thứ tự giảm dần: ";
print_r($mangGiamDan);
?>

<!-- Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function themPhanTu($mang, $giaTri, $viTri = "cuoi") {
    if ($viTri == "dau") {
        array_unshift($mang, $giaTri);
    } else {
        array_push($mang, $giaTri);
    }
    return $mang;
}

$mangSo = array(1, 2, 3, 4, 5);
$giaTriThem = 99;

// Thêm vào đầu mảng
$mangDau = themPhanTu($mangSo, $giaTriThem, "dau");

// Thêm vào cuối mảng
$mangCuoi = themPhanTu($mangSo, $giaTriThem);

echo "Mảng sau khi thêm phần tử $giaTriThem vào đầu: ";
print_r($mangDau);
echo "Mảng sau khi thêm phần tử $giaTriThem vào cuối: ";
print_r($mangCuoi);
?>

<!-- Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
function timSoLonThuHai($mang) {
    rsort($mang);
    return isset($mang[1]) ? $mang[1] : "Không có số lớn thứ hai.";
}

$mangSo = array(5, 2, 8, 1, 6, 3, 7, 4);

$soLonThuHai = timSoLonThuHai($mangSo);

echo "Số lớn thứ hai trong mảng là: $soLonThuHai";
?>

<!-- Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    return abs($a * $b) / timUSCLN($a, $b);
}

$so1 = 12;
$so2 = 18;

$uscln = timUSCLN($so1, $so2);
$bscnn = timBSCNN($so1, $so2);

echo "Ước số chung lớn nhất của $so1 và $so2 là: $uscln<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: $bscnn";
?>

<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function laSoHoanHao($so) {
    if ($so <= 0) {
        return false;
    }

    $tongUocSo = 0;
    for ($i = 1; $i <= $so / 2; $i++) {
        if ($so % $i == 0) {
            $tongUocSo += $i;
        }
    }

    return $tongUocSo == $so;
}

$soKiemTra = 28;

if (laSoHoanHao($soKiemTra)) {
    echo "$soKiemTra là số hoàn hảo.";
} else {
    echo "$soKiemTra không là số hoàn hảo.";
}
?>

<!-- Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function timSoLeLonNhat($mang) {
    $soLeLonNhat = null;
    foreach ($mang as $so) {
        if ($so % 2 != 0 && ($soLeLonNhat === null || $so > $soLeLonNhat)) {
            $soLeLonNhat = $so;
        }
    }
    return $soLeLonNhat;
}

$mangSo = array(2, 7, 1, 9, 4, 6, 3, 8, 5);

$soLeLonNhat = timSoLeLonNhat($mangSo);

echo "Số lẻ lớn nhất trong mảng là: $soLeLonNhat";
?>

<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function laSoNguyenTo($so) {
    if ($so <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            return false;
        }
    }

    return true;
}

$soKiemTra = 17;

if (laSoNguyenTo($soKiemTra)) {
    echo "$soKiemTra là số nguyên tố.";
} else {
    echo "$soKiemTra không là số nguyên tố.";
}
?>

<!-- Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function timSoDuongLonNhat($mang) {
    $soDuongLonNhat = null;
    foreach ($mang as $so) {
        if ($so > 0 && ($soDuongLonNhat === null || $so > $soDuongLonNhat)) {
            $soDuongLonNhat = $so;
        }
    }
    return $soDuongLonNhat;
}

$mangSo = array(-2, 7, 1, 9, 4, 6, -3, 8, 5);

$soDuongLonNhat = timSoDuongLonNhat($mangSo);

echo "Số dương lớn nhất trong mảng là: $soDuongLonNhat";
?>

<!-- Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function timSoAmLonNhat($mang) {
    $soAmLonNhat = null;
    foreach ($mang as $so) {
        if ($so < 0 && ($soAmLonNhat === null || $so > $soAmLonNhat)) {
            $soAmLonNhat = $so;
        }
    }
    return $soAmLonNhat;
}

$mangSo = array(-2, 7, 1, -9, 4, -6, -3, 8, 5);

$soAmLonNhat = timSoAmLonNhat($mangSo);

echo "Số âm lớn nhất trong mảng là: $soAmLonNhat";
?>

<!-- Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function tinhTongSoLe($n) {
    $tong = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }
    return $tong;
}

$n = 10;

$tongSoLe = tinhTongSoLe($n);

echo "Tổng các số lẻ từ 1 đến $n là: $tongSoLe";
?>

<!-- Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function laSoChinhPhuong($so) {
    return sqrt($so) == (int)sqrt($so);
}

$batDau = 1;
$ketThuc = 20;

echo "Các số chính phương trong khoảng từ $batDau đến $ketThuc là: ";
for ($i = $batDau; $i <= $ketThuc; $i++) {
    if (laSoChinhPhuong($i)) {
        echo "$i, ";
    }
}
?>

<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function laChuoiCon($chuoi, $chuoiCon) {
    return strpos($chuoi, $chuoiCon) !== false;
}

$chuoiCha = "Hello, World!";
$chuoiCon = "lo, Wor";

if (laChuoiCon($chuoiCha, $chuoiCon)) {
    echo "'$chuoiCon' là chuỗi con của '$chuoiCha'.";
} else {
    echo "'$chuoiCon' không là chuỗi con của '$chuoiCha'.";
}
?>
