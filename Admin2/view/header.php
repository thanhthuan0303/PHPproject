<nav class="navbar navbar-expand-sm navbar-danger " style="background-color: blue; color: red;">
    <div class="container-fluid ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
            <?php
                if (!isset($_SESSION['admin'])) {
                    echo "<li class='nav-item'>
                            <a class='nav-link text-warning' href='index.php'>Trang Chủ</a>
                        </li>";
                }
            ?>
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<li class='nav-item'>
                                <a href='index.php?action=hanghoa' style='color: white;' class='nav-link text-warning'>Sản Phẩm</a>
                        </li>";
                }
            ?>
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<li class='nav-item'>
                                <a href='index.php?action=loaisp' style='color: white;' class='nav-link text-warning'>Loại Sản Phẩm</a>
                        </li>";
                }
            ?>
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<li class='nav-item'>
                                <a href='index.php?action=hoadon' style='color: white;' class='nav-link text-warning'>Hoá Đơn</a>
                        </li>";
                }
            ?>
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<li class='nav-item'>
                                <a href='index.php?action=thongke' style='color: white;' class='nav-link text-warning'>Thống Kê</a>
                        </li>";
                }
            ?>
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<li class='nav-item'>
                                <a href='index.php?action=dangnhap&act=changepass' style='color: white;' class='nav-link text-warning'>Thay Đổi Mật khẩu</a>
                        </li>";
                }
            ?>
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<li class='nav-item'>
                                <a href='index.php?action=dangnhap&act=logout' style='color: white;' class='nav-link text-warning'>Đăng Xuất</a>
                        </li>";
                }
            ?>
            
        </ul>
    </div>
</nav>