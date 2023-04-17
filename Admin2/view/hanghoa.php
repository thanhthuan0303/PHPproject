<?php
//b1: tim tong so record
$hh = new HangHoa();
$count = $hh->getcountHH();
//cach 2
// $result = $hh->getHangHoaALL();
// $count = $result->rowCount()
//b2 cho gioi han moi trang la bn sp
$limit = 8;
//b3 tinh so trang va tim start
$p = new trangsp();
$page = $p->findPage1($count, $limit);
$start = $p->findStart1($limit);
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
?>
<!-- sản phẩm-->
<?php
if (isset($_GET['act']) == "hanghoa") {
    $act = 0;
} else {
    $act = 1;
}
?>
<div class="container-fluid" style="background-color: #28292d;height: 100%;">
    <div class="container">
        <h2 class="text-center text-white mt-5">DANH SÁCH HÀNG HÓA</h2>
        <a class="btn btn-success" href="index.php?action=hanghoa&act=themsp">Thêm sản phẩm</a>
    </div>
    <table class="table table-danger table-striped mt-5">

        <thead style="color: red;">
            <tr>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Đơn giá</th>
                <th>Hình</th>
                <th>Mô tả</th>
                <th>Mã loại</th>
                <th>Số lượt xem</th>
                <th>Số lượng tồn</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $hh = new HangHoa();
            if ($act == 0) {
                $result = $hh;
            } else {
                $result = $hh->getListHangHoaAllPage($start, $limit);
            }
            while ($set = $result->fetch()) :
            ?>
                <tr>
                    <td><?php echo $set['mahh']; ?></td>
                    <td><?php echo $set['tenhh']; ?></td>
                    <td><?php echo number_format($set['gia']); ?></td>
                    <td><img width="100px" height="100px" src="../content/imagetourdien/<?php echo $set['hinh']; ?>" /></td>
                    <td><?php echo $set['mota']; ?></td>
                    <td><?php echo $set['maloai']; ?></td>
                    <td><?php echo $set['soluotxem']; ?></td>
                    <td><?php echo $set['soluongton']; ?></td>
                    <td><a class="btn btn-primary" href="index.php?action=hanghoa&act=edithh&id=<?php echo $set['mahh']; ?>">Cập nhật</a></td>
                    <td><a class="btn btn-danger" href="index.php?action=hanghoa&act=delete&id=<?php echo $set['mahh']; ?>">Xóa</a></td>
                </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
    <div class="col-md-6 div col-md-offset-3">
        <ul class="pagination">
            <?php
            if ($current_page > 1 && $page > 1) {
                echo '<li><a href="index.php?action=hanghoa&page=' . ($current_page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $page; $i++) :
            ?>
                <li><a href="index.php?action=hanghoa&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php
            endfor;
            if ($current_page < $page && $page > 1) {
                echo '<li><a href="index.php?action=hanghoa&page=' . ($current_page + 1) . '">Next</a></li>';
            }
            ?>
        </ul>
    </div>
</div>