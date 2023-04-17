<?php
    
    $act = 'hanghoa';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }

    switch ($act) {
        case 'hanghoa':
            include "./view/hanghoa.php";
            break;
        case 'edithh':
            include "./view/edithanghoa.php";
            break;
        case 'delete':
            if(isset($_GET['id']))
            {
                $mahh = $_GET['id'];
                $hh = new HangHoa();
                $hh->deleteHangHoaID($mahh);
            }
            include "view/hanghoa.php";
            break;
        case 'themsp':
            include "view/edithanghoa.php";
            break;
        case 'edit_action':
            
                
                    if(isset($_GET['id']))
                {
                    $mahh=$_GET['id'];
                    $tenhh = $_POST['tenhh'];
                    $dongia = $_POST['gia'];
                    $hinh = $_FILES['image']['name'];
                    $maloai = $_POST['maloai'];
                    $soluotxem = $_POST['slx'];
                    $soluongton = $_POST['slt'];
                    $hh = new HangHoa();
                    // updatesp($id,$tenhh,$dongia,$hinh,$maloai,$soluotxem,$soluongton)
                    $a = $hh->updatesp($mahh,$tenhh,$dongia,$hinh,$maloai,$soluotxem,$soluongton);
                    if($a!==false)
                    {
                        uploadImage();

                        echo '<script>alert("Cập Nhật Thành Công")</script>';
                    }
                    else
                        echo '<script>alert("Cập Nhật Không Thành Công")</script>';
                }
            
            include "./view/hanghoa.php";
            break;
        case 'them_action':
            if(isset($_POST['submit']))
            {
                $mahh=$_POST['mahh'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['gia'];
                $hinh = $_FILES['image']['name'];
                $maloai = $_POST['maloai'];
                $mota = $_POST['mota'];
                $soluotxem = $_POST['slx'];
                $soluongton = $_POST['slt'];
                $hh=new HangHoa();
                $hh->insertsp($tenhh,$dongia,$hinh,$maloai,$mota,$soluotxem,$soluongton);
                if(isset($hh))
                {
                    uploadImage();
                    echo '<script> alert("Thêm sản phẩm thành công")</script>';
                }
            }
            include "./view/hanghoa.php";
            break;
    }
    
?>