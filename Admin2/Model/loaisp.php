<?php
    class LoaiSP {
        public function __construct() {}

        public function getListLoaiSP()
        {
            $select = "select * from loai";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        } 

        function updateloaisp($id,$tenloai,$idmenu)
        {
            $db=new connect();
            $query="update loai 
            set tenloai='$tenloai',
            idmenu=$idmenu
            where maloai='$id'";
            $db->exec($query);
        }

        public function deleteMaLoaiID($id)
        {
            $db = new connect();
            $query = "delete from loai where loai.maloai = '$id'";
            $db->exec($query);
        }

        public function getMaLoaiId($id)
        {
            $select = "select * from loai where maloai='$id'";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result;
        }

        function insertloaisp($tenloai,$idmenu)
        {
            $db=new connect();
            $query="insert into loai(maloai,tenloai,idmenu)
            values (NULL,'$tenloai',$idmenu)";
            $db->exec($query);
        }
    }
?>