<?php
    class user {
        function __construct(){}

        function InserUser($tenkh, $username, $matkhau, $email, $diachi, $dt)
        {
            $db = new connect();
            $query = "insert into khachhang(makh, tenkh, username, matkhau, email, diachi, sodienthoai, vaitro) 
            values(NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$dt', default)";
            echo $query;
            $db->exec($query);
        }

        function loginUser($username, $matkhau)
        {
            $db = new connect();
            $select = "select * from khachhang where username = '$username' and matkhau = '$matkhau'";
            $result = $db->getList($select)->fetch();
            return $result;
        }

        function getEmail($email){
            $db = new connect();
            $select = "select * from Khachhang where email = '$email'";
            $result = $db->getInstance($select);
            return $result;
        }

        function UpdateEmail($emailold,$passnew){
            $db = new connect();
            $query ="update khachhang set matkhau='$passnew' where email='$emailold'";
            $db->exec($query);
        }
    }
?>