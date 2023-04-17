<?php
    $act="thongke";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'thongke':
            include "./view/thongke.php";
            break;
    }
?>