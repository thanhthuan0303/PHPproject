<?php
//b1: tim tong so record
$hh = new hanghoa();
$count = $hh->getcountHH();
//cach 2
// $result = $hh->getHangHoaALL();
// $count = $result->rowCount()
//b2 cho gioi han moi trang la bn sp
$limit = 12;
//b3 tinh so trang va tim start
$p = new page();
$page = $p->findPage($count, $limit);
$start = $p->findStart($limit);
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
?>
<!-- sản phẩm-->
<?php
if (isset($_GET['act']) == "sanpham") {
    $ac = 0;
} else {
    $ac = 1;
}
?>

<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row mt-2">
        <div class="col-lg-12 bg-danger text-center">
            <h4 class="mt-2 mb-2 font-weight-bold" style="color: white;">Sản Phẩm</h4>
        </div>

    </div>
    <!--Grid row-->
    <div class="row mt-3">
        <?php
        $hh = new hanghoa();
        if ($ac == 0) {
            $result = $hh;
        } else {
            $result = $hh->getListHangHoaAllPage($start, $limit);
        }
        while ($set = $result->fetch()) :
        ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">

                <div class="view overlay z-depth-1-half">
                    <img src=".\Content\imagetourdien\<?php echo $set["hinh"]; ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>
                <?php
                if ($ac == 0) {
                    echo '<h5 class="my-4 font-weight-bold">
                            <strike>' . number_format($set["gia"]) . '</strike><sup><u>đ</u></sup>
                            </h5>';
                } else {
                    echo '<h5 class="my-4 font-weight-bold" style="color: red;">' . number_format($set["gia"]) . '<sup><u>d</u></sup></br>
                            </h5>';
                }
                ?>

                <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                    <span><?php echo $set["tenhh"] ?></span></br></a>
                <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                <h5>Số lượt xem:<?php echo $set["soluotxem"]; ?></h5>
            </div>
        <?php
        endwhile;
        ?>
    </div>

    <!--Grid row-->

</section>
<!-- end sản phẩm mới nhất -->
<div class="col-md-6 div col-md-offset-3">
    <ul class="pagination">
        <?php
        if ($current_page > 1 && $page > 1) {
            echo '<li><a href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Prev</a></li>';
        }
        for ($i = 1; $i <= $page; $i++) :
        ?>
            <li><a href="index.php?action=sanpham&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        endfor;
        if ($current_page < $page && $page > 1) {
            echo '<li><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
        }
        ?>
    </ul>
</div>