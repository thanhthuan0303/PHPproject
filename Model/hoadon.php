<?php
    class hoadon
    {
        function __construct() {}

        public   function InsertOrder($makh)
        {
            $db = new connect();
            $date = new DateTime("now");
            $datecreate = $date->format("Y-m-d");
            $query = "insert into hoadon(masohd, makh, ngaydat, tongtien) values
            (NULL, $makh, '$datecreate' ,0)";
            $db->exec($query);

            $int = $db->getInstance("select masohd from hoadon order by masohd desc limit 1");
            return $int[0];
        }

        function InsertOrderDetail($masohd, $mahh, $soluong, $thanhtien)
        {
            $db = new connect();
            $query = "insert into cthoadon(masohd, mahh, soluongmua, thanhtien, tinhtrang)
            values($masohd, $mahh, $soluong, $thanhtien, 0);
            UPDATE `hanghoa` SET `soluongton`= soluongton - $soluong WHERE mahh = $mahh;";
            $db->exec($query);
        }

        function updateOrderTotal($sohd, $tongtien)
        {
            $db = new connect();
            $query = "update hoadon set tongtien=$tongtien where masohd=$sohd";
            $db->exec($query);
        }

        function getOrder($sohdid)
        {
            $db = new connect();
            $select = "select b.masohd, a.tenkh, a.diachi, a.sodienthoai, b.ngaydat 
            from khachhang a INNER join hoadon b on a.makh=b.makh where b.masohd=$sohdid";
            $result = $db->getInstance($select);
            return $result;
        }

        function getOrderDetail($sohdid)
        {
            $db = new connect();
            $select = "select a.tenhh, a.gia, b.soluongmua, b.thanhtien 
            from hanghoa a INNER join cthoadon b on a.mahh=b.mahh where masohd=$sohdid";
            $result = $db->getList($select);
            return $result;
        }
    }
?>