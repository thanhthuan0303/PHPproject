<?php
    class HoaDon {
        public function __construct() {}

        public function getListhd()
        {
            $select = "select * from hoadon";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        } 

        function updatehd($id,$makh,$ngaydat,$tongtien)
        {
            $db=new connect();
            $query="update hoadon 
            set makh='$makh',
            ngaydat='$ngaydat',
            tongtien=$tongtien
            where mahd='$id'";
            $db->exec($query);
        }

        public function deletehdID($id)
        {
            $db = new connect();
            $query = "delete from hoadon where hoadon.masohd = '$id'";
            $db->exec($query);
        }

        public function gethdId($id)
        {
            $select = "select * from hoadon where mahd='$id'";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result;
        }

        function getTenKH()
        {
            $db=new connect();
            $select="select makh,tenkh from khachhang";
            $result=$db->getList($select);
            return $result;
        }

    }
?>