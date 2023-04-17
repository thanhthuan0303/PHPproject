<?php
    $act = 'hoadon';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'hoadon':
            include "./view/hoadon.php";
            break;
        case 'edithd':
            include "./view/edithoadon.php";
            break;
        case 'addhd':
            include "./view/edithoadon.php";
            break;
        case 'edithd_action':
            if(isset($_GET['id']))
                {
                    $mahd=$_GET['id'];
                    $makh = $_POST['makh'];
                    $ngaydat = $_POST['ngaydat'];
                    $tongtien = $_POST['tongtien'];
                    $hh = new HoaDon();
                    $a = $hh->updatehd($mahd,$makh,$ngaydat,$tongtien);
                    if(isset($hh))
                    {
                        echo '<script>alert("Cap nhat thanh cong")</script>';
                    }
                    else
                        echo '<script>alert("Cap nhat ko thanh cong")</script>';
                }
            include "./view/hoadon.php";
            break;
        case 'delete':
            if(isset($_GET['id']))
            {
                $mahd = $_GET['id'];
                $hh = new HoaDon();
                $hh->deletehdID($masohd);
            }
            include "view/hoadon.php";
            break;
    }
?>