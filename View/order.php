<div class="table-responsive">
  <?php
  if (!isset($_SESSION['makh']) || count($_SESSION['cart']) == 0) :
    echo '<script> alert("Ban chua dang nhap");</script>';
    include "login.php";
  ?>
  <?php
  else :
  ?>
    <form action="" method="post">
      <table class="table table-bordered mt-2" border="0">
        <?php
        $hd = new hoadon();
        $result = $hd->getOrder($_SESSION['masohd']);
        $sohd = $result['masohd'];
        $tenkh = $result['tenkh'];
        $diachi = $result['diachi'];
        $sodt = $result['sodienthoai'];
        $ngaydat = $result['ngaydat'];
        $d = new DateTime($ngaydat)
        ?>

        <tr>
          <td colspan="4">
            <h2 style="color: red;">HÓA ĐƠN</h2>
          </td>
        </tr>
        <tr>
          <td colspan="2">Số Hóa đơn: <?php echo $sohd; ?></td>
          <td colspan="2"> Ngày lập: <?php echo $d->format('d/m/Y'); ?></td>
        </tr>
        <tr>
          <td colspan="2">Họ và tên:</td>
          <td colspan="2"><?php echo $tenkh; ?></td>
        </tr>
        <tr>
          <td colspan="2">Địa chỉ: </td>
          <td colspan="2"><?php echo $diachi; ?></td>
        </tr>
        <tr>
          <td colspan="2">Số điện thoại: </td>
          <td colspan="2"><?php echo $sodt; ?></td>
        </tr>
      </table>
      <!-- Thông tin sản phầm -->
      <table class="table table-bordered">
        <thead>
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Hình Sản Phẩm</th>
            <th>Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $j = 0;
          $result1 = $hd->getOrderDetail($_SESSION['masohd']);
          while ($set = $result1->fetch()) :
            $j++;
          ?>
            <tr>
              <td><?php echo $j; ?></td>
              <td><?php echo $set['tenhh']; ?></td>
              <td>
                <img width="50px" height="50px" src="Content\imagetourdien\<?php echo $item['hinh']; ?>">
              </td>
              <td>Đơn Giá: <?php echo number_format($set['gia']); ?> - Số Lượng: <?php echo $set['soluongmua']; ?><br />
              </td>
            </tr>
          <?php
          endwhile
          ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b>
                <?php
                $gh = new giohang();
                echo $gh->getTotal();
                $_SESSION['cart']=[];
                ?>
                <sup><u>đ</u></sup></b>
            </td>

          </tr>
        </tbody>
      </table>
    </form>
  <?php
  endif
  ?>
</div>
</div>