<div class="container-fluid" style="background-color: blue;height: 100%;">
        <div class="container">
            <h2 class="text-center text-white mt-5">DANH SÁCH HÓA ĐƠN</h2>
        </div>
            <table class="table table-danger table-striped mt-5">
                <thead style="color: red;">
                  <tr>
                    <th>Mã hóa đơn</th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng tiền</th>
                    <th>Cập Nhật</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $hh = new HoaDon();
                        $result = $hh->getListhd();
                        while($set = $result->fetch()):
                    ?>
                <tr>
                    <td><?php echo $set['masohd'];?></td>
                    <td><?php echo $set['makh'];?></td>
                    <td>
                        <?php
                            $hh = new HoaDon();
                            $results=$hh->getTenKH();
                            while($a=$results->fetch()):
                            if($a['makh'] == $set['makh']) 
                                echo $a['tenkh'];
                            endwhile;
                        ?>       
                    </td>
                    <td><?php echo $set['ngaydat'];?></td>
                    <td><?php echo $set['tongtien'];?></td>
                    <td><a class="btn btn-primary" href="index.php?action=hoadon&act=edithd&id=<?php echo $set['mahd'];?>">Cập nhật</a></td>
                    <td><a class="btn btn-danger" href="index.php?action=hoadon&act=delete&id=<?php echo $set['mahd'];?>">Xóa</a></td>
                </tr>
                    <?php
                        endwhile;
                    ?>
                </tbody>
              </table>
              
</div>