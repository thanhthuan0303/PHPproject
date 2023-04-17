<?php
    class hanghoa
    {
        public function __construct()   {}

        public function getHangHoaNew()
        {
            //B1: ket noi dc voi database
            $db = new connect();
            //B2: dung select de truy van
            $select = "SELECT * FROM hanghoa ORDER BY mahh DESC LIMIT 12;";
            $result = $db->getList($select);
            return $result;//bang 12 san pham
        }

        public function getHangHoaALL()
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa;";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaId($id)
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE mahh = $id;
            UPDATE `hanghoa` SET `soluotxem`= soluotxem +1 WHERE mahh = $id;";
            $result = $db->getInstance($select);
            return $result;
        }

        public function getcountHH()
        {
            $db = new connect();
            $select = 'select count(*) from hanghoa';
            $result = $db->getInstance($select);
            return $result[0];
        }

        public function getListHangHoaAllPage($start, $limit)
        {
            $db = new connect();
            $select = "select * from hanghoa limit ".$start.",".$limit;
            // echo $select;
            $result = $db->getList($select);
            return $result;
        }
    }
?>