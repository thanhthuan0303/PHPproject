
<div class="container-fluid" style="background-color: #28292d;height: 400px;">
      <h2 class="text-center text-white mt-5">Cập Nhật Loại Sản Phẩm</h2> 
<?php
        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $hh = new HoaDon();
          $result = $hh->gethdId($id);
          $mahd = $result['mahd'];
          $makh = $result['makh'];
          $ngaydat = $result['ngaydat'];
          $tongtien = $result['tongtien'];
        }
?>

<form action="index.php?action=hoadon&act=edithd_action&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">';
            <table class="table table-dark table-striped mt-5">
                <thead style="color: #80BB01;">
                  <tr>
                    <th>Mã hóa đơn</th>
                    <th>Mã khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng tiền</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td> <input type="text" value="<?php if(isset($mahd)) echo $mahd;?>" class="form-control" name="mahd" readonly/></td>
                    <td><input type="text" value="<?php if(isset($makh)) echo $makh;?>" class="form-control" name="makh" readonly/></td>
                    <td><input type="date" value="<?php if(isset($ngaydat)) echo $ngaydat;?>" class="form-control" name="ngaydat" ></td>
                    <td><input type="number" value="<?php if(isset($tongtien)) echo $tongtien;?>" class="form-control" name="tongtien" readonly/></td>\
                    <td colspan="2">
                        <input type="submit" value="submit" name="submit">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
</div>