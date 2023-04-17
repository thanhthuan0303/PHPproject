<div class="container-fluid" style="background-color: #28292d;height: 100%;">
        <div class="container">
            <h2 class="text-center text-white mt-5">DANH SÁCH LOẠI HÀNG HÓA</h2>
            <a class="btn btn-success" href="index.php?action=loaisp&act=addloaisp">Thêm loại sản phẩm</a>
        </div>
            <table class="table table-dark table-striped mt-5">
                <thead style="color: #80BB01;">
                  <tr>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Id menu</th>
                    <th>Cập Nhật</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $hh = new LoaiSP();
                        $result = $hh->getListLoaiSP();
                        while($set = $result->fetch()):
                    ?>
                <tr>
                    <td><?php echo $set['maloai'];?></td>
                    <td><?php echo $set['tenloai'];?></td>
                    <td><?php echo $set['idmenu'];?></td>
                    <td><a class="btn btn-warning" href="index.php?action=loaisp&act=editloaisp&id=<?php echo $set['maloai'];?>">Cập nhật</a></td>
                    <td><a class="btn btn-danger" href="index.php?action=loaisp&act=delete&id=<?php echo $set['maloai'];?>">Xóa</a></td>
                </tr>
                    <?php
                        endwhile;
                    ?>
                </tbody>
              </table>
              
</div>