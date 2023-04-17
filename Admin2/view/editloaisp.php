<?php
    if(isset($_GET['act']))
    {
      if($_GET['act'] == 'editloaisp' || $_GET['act'] == 'editloaisp_action')
      {
        $ac = 1;
      }
      if($_GET['act'] == 'addloaisp')
      {
        $ac = 2;
      }
    }
?>
<div class="container-fluid" style="background-color: #28292d;height: 400px;">
    
<?php
    if($ac == 1)
    {
      echo '<h2 class="text-center text-white mt-5">Cập Nhật Loại Sản Phẩm</h2>';
    }
    if($ac == 2)
    {
      echo '<h2 class="text-center text-white mt-5">Thêm Loại Sản Phẩm</h2>';
    }
?>
    
<?php
        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $hh = new LoaiSP();
          $result = $hh->getMaLoaiId($id);
          $maloai = $result['maloai'];
          $tenloai = $result['tenloai'];
          $idmenu = $result['idmenu'];
        }
?>

<?php 
        if($ac == 1)
        {
            echo '<form action="index.php?action=loaisp&act=editloaisp_action&id='.$id.'" method="post" enctype="multipart/form-data">';
        }
        if($ac == 2)
        {
            echo '<form action="index.php?action=loaisp&act=addloaisp_action" method="post" enctype="multipart/form-data">';
        }
?> 
            <table class="table table-dark table-striped mt-5">
                <thead style="color: #80BB01;">
                  <tr>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Id menu</th>
                    <th>Cập Nhật</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td> <input type="text" value="<?php if(isset($maloai)) echo $maloai;?>" class="form-control" name="maloai" readonly/></td>
                    <td><input type="text" value="<?php if(isset($tenloai)) echo $tenloai;?>" class="form-control" name="tenloai"  maxlength="100px"></td>
                    <td><input type="number" value="<?php if(isset($idmenu)) echo $idmenu;?>" class="form-control" name="idmenu" ></td>
                    <td colspan="2">
                        <input type="submit" value="submit" name="submit">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
</div>