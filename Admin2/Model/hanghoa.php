<?php
    class HangHoa{

        public function __construct() {}


        // public function getListHangHoa()
        // {
        //     $select = "select * from hanghoa";
        //     $db = new connect();
        //     $result = $db->getList($select);
        //     return $result;
        // }

        public function deleteHangHoaID($id)
        {
            $db = new connect();
            $query = "delete from hanghoa where hanghoa.mahh = '$id'";
            $db->exec($query);
        }

        public function getHangHoaId($id)
        {
            $select = "select * from hanghoa where mahh='$id'";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result;
        }

        function updatesp($id,$tenhh,$dongia,$hinh,$maloai,$soluotxem,$soluongton)
        {
            $db=new connect();
            $query="update hanghoa 
            set tenhh='$tenhh',
            gia=$dongia,
            hinh='$hinh',
            maloai=$maloai,
            soluotxem=$soluotxem,
            soluongton=$soluongton
            where mahh='$id'";
            $db->exec($query);
        }

        function insertsp($tenhh,$dongia,$hinh,$maloai,$mota,$soluotxem,$soluongton)
        {
            $db=new connect();
            $query="insert into hanghoa(mahh,tenhh,gia,mota,soluongton,hinh,maloai,soluotxem)
            values (NULL,'$tenhh',$dongia,'$mota',$soluongton,'$hinh',$maloai,$soluotxem)";
            $db->exec($query);
        }

        function getTenLoai()
        {
            $db=new connect();
            $select="select maloai,tenloai from loai";
            $result=$db->getList($select);
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
            $result = $db->getList($select);
            return $result;
        }

        // public function getListThongke_SL_mathang()
        // {
        //     $db = new connect();
        //     $select="select a.tenhh, sum(b.soluongmua)as soluongban from hanghoa a INNER join cthoadon b on a.mahh=b.mahh 
        //     GROUP by a.tenhh";
        //     $result=$db->getList($select);
        //     return $result;
        // }
    }
?>  