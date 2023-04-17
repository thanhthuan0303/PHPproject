<?php
    $act = "dangky";
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'dangky':
            include "./View/registration.php";
            break;
        case 'dangky_action':
            if(isset($_POST['txttenkh']))
            {
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsodt'];
                $username = $_POST['txtusername'];
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];

                //ma hoa pass
                // $chuoidau = "GB@#5";
                // $chuoisau = "ERBC";
                $crypt = md5($pass);
                //kiem tra insert thi kiem tra username da ton tai chua
                $us = new user();
                $check = $us->InserUser($tenkh, $username, $crypt, $email, $diachi, $sodt);
                if($check != 'false')
                {
                    echo '<script> alert("Đăng Ký Thành Công");</script>';
                    include "./View/login.php";
                }
                else
                {
                    echo '<script> alert("Đăng Ký Không Thành Công");</script>';
                    include "./View/registration.php";
                }
            }
            break;
    }
    
?>