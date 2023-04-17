<?php
    //goi phuong thuc tu model
    $hd = new hoadon();
    $sohd = $hd->InsertOrder($_SESSION['makh']);
    //co duoc masohd thi insert vao bang cthoadon
    $_SESSION['masohd'] = $sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $hd->InsertOrderDetail($sohd, $item['mahh'], $item['soluong'], $item['total']);
        $total += $item['total'];
    }
    //phuong thuc update tong tien vao lai bang hd
    $hd->updateOrderTotal($sohd, $total);
    
    include "./View/order.php";
?>