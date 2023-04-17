<?php
    $act = 'loaisp';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'loaisp':
            include "./view/loaisanpham.php";
            break;
        case 'editloaisp':
            include "./view/editloaisp.php";
            break;
        case 'addloaisp':
            include "./view/editloaisp.php";
            break;
        case 'loaisp_action':
            if(isset($_POST['submit_file']))
            {
                $file = $_FILES['file']['tmp_name'];
                file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));
                $file_open = fopen($file, "r");
                while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
                {
                    $db = new connect();
                    $maloai = $csv[0];
                    $tenloai = $csv[1];
                    $idmenu = $csv[2];
                    $query = "insert into loai(maloai, tenloai, idmenu) values('$mailoai', '$tenloai', '$idmenu')";
                    $db->exec($query);
                }
            }
            echo '<script>alert("Import thanh cong");</script>';
            break;
        case 'editloaisp_action':
            if(isset($_GET['id']))
                {
                    $maloai=$_GET['id'];
                    $tenloai = $_POST['tenloai'];
                    $idmenu = $_POST['idmenu'];
                    $hh = new LoaiSP();
                    $a = $hh->updateloaisp($maloai,$tenloai,$idmenu);
                    if(isset($hh))
                    {
                        echo '<script>alert("Cap nhat thanh cong")</script>';
                    }
                    else
                        echo '<script>alert("Cap nhat ko thanh cong")</script>';
                }
            include "./view/loaisanpham.php";
            break;
        case 'delete':
            if(isset($_GET['id']))
            {
                $maloai = $_GET['id'];
                $hh = new LoaiSP();
                $hh->deleteMaLoaiID($maloai);
            }
            include "view/loaisanpham.php";
            break;
        case 'addloaisp_action':
            if(isset($_POST['submit']))
            {
                $maloai=$_POST['maloai'];
                $tenloai = $_POST['tenloai'];
                $idmenu = $_POST['idmenu'];
                $hh = new LoaiSP();
                $hh->insertloaisp($tenloai,$idmenu);
                if(isset($hh))
                {
                    echo '<script> alert("Thêm loại sản phẩm thành công")</script>';
                }
            }
            include "./view/loaisanpham.php";
            break;
    }
?>