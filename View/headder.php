<header class="row no-gutters">
    <!-- dang ky -->
    <section class="col-12">
        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-danger" style="margin-bottom: 0px; ">
                    <!-- Right -->
                    <ul class="navbar-nav ml-auto">

                        <li>
                            <form class="mt-2 d-flex" role="searchbox" action="" method="post">
                                <div class="container">
                                    <button class="btn btn-outline-info form-check-inline list-inline" type="submit">
                                        <img class="list-inline-item" src="Content/imagetourdien/search.png" width="20px" height="20px" alt="">
                                        <h3 class="list-inline-item">Tìm kiếm</h3>
                                    </button>
                                    <input type="text" name="txtsearch" class="form-check-inline" placeholder="Nhập sản phẩm cần tìm" />
                                </div>
                            </form>
                        </li>
                        <li class='nav-item'>
                            <a href="index.php?action=home" style="color: white;" class="nav-link">Trang chủ</a>

                        </li>
                        <?php
                        if (!isset($_SESSION['makh'])) {
                            echo "<li class='nav-item'>
                                        <a href='index.php?action=dangky' style='color: white;' class='nav-link'>Đăng Ký</a>
                                        </li>";
                        }
                        ?>

                        <?php
                        if (!isset($_SESSION['makh'])) {
                            echo "<li class='nav-item'>
                                        <a href='index.php?action=dangnhap' style='color: white;' class='nav-link'>Đăng Nhập</a>
                                        </li>";
                        }
                        ?>

                        <?php
                        if (isset($_SESSION['makh'])) {
                            echo "<li class='nav-item'>
                                        <a href='index.php?action=dangnhap&act=logout' style='color: white;' class='nav-link'>Đăng Xuất</a>
                                        </li>";
                        }
                        ?>

                        <li>
                            <a href="index.php?action=giohang" class="nav-link"><img src="Content/imagetourdien/cartx2.png" width="30px" height="30px" alt=""></a>
                        </li>

                        <li>
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $dem = count($_SESSION['cart']);
                            } else
                                $dem = 0;
                            ?>
                            <p style="color: white; margin-top: 15px; margin-left: 0px;"><?php echo $dem; ?></p>
                        </li>

                        <li>
                            <?php
                            if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) :
                                $name = $_SESSION['tenkh'];
                            ?>
                                <p style="color: white; margin-top: 15px; margin-left: 0px;">Xin Chào!! <?php echo $name; ?></p>
                            <?php
                            endif
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</header>
<!-- dang ky -->