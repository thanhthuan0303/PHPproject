<?php
    class DangNhap{
        // var $user = null;
        // var $pass = null;

        public function __construct() {}

        public function logAdmin($user, $pass)
        {
            $db = new connect();
            $select = "select * from admin where user='$user' and password='$pass'";
            $result = $db->getList($select)->fetch(); //$set[admin, admin]
            return $result;
        }

        public function changePass($pass)
        {
            $db = new connect();
            $query = "update admin set password='$pass'";
            $db->exec($query);
        }

        public function getPass()
        {
            $db = new connect();
            $select="select password from admin";
            $result = $db->getInstance($select);
            return $result[0];
        }
    }

?>