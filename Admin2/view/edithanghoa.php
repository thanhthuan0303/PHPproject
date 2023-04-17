<?php
if (isset($_GET['act'])) {
    if ($_GET['act'] == 'edithh' || $_GET['act'] == 'edit_action') {
        $ac = 1;
    }
    if ($_GET['act'] == 'themsp') {
        $ac = 2;
    }
}
?>
<div class="container-fluid" style="background-color: #00c8ff; height: auto; width: 500px   ;">

    <?php
    if ($ac == 1) {
        echo '<h2 class="text-center text-white mt-5">Cập Nhật Hàng Hoá</h2>';
    }
    if ($ac == 2) {
        echo '<h2 class="text-center text-white mt-5">Thêm Sản Phẩm</h2>';
    }
    ?>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $hh = new HangHoa();
        $result = $hh->getHangHoaId($id);
        $mahh = $result['mahh'];
        $tenhh = $result['tenhh'];
        $dongia = $result['gia'];
        $maloai = $result['maloai'];
        $soluotxem = $result['soluotxem'];
        $mota = $result['mota'];
        $soluongton = $result['soluongton'];
    }
    ?>

    <?php
    if ($ac == 1) {
        echo '<form action="index.php?action=hanghoa&act=edit_action&id=' . $id . '" method="post" enctype="multipart/form-data">';
    }
    if ($ac == 2) {
        echo '<form action="index.php?action=hanghoa&act=them_action" method="post" enctype="multipart/form-data">';
    }
    ?>
    <!-- <table class="table table-danger table-striped mt-5">
        <thead style="color: red;">
            <tr>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Đơn giá</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Mã loại</th>
                <th>Số lượt xem</th>
                <th>Số lượng tồn</th>
                <th>Cập Nhật</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" value="<?php if (isset($mahh)) echo $mahh; ?>" class="form-control" name="mahh" readonly /></td>
                <td><input type="text" value="<?php if (isset($tenhh)) echo $tenhh; ?>" class="form-control" name="tenhh" maxlength="100px"></td>
                <td><input type="number" value="<?php if (isset($gia)) echo $dongia; ?>" class="form-control" name="gia"></td>
                <td>
                    <?php
                    if (isset($hinh)) {
                        echo '<label><img width="50px" height="50px" src="../content/imagetourdien/' . $hinh . '"></label>';
                    }
                    ?>
                    Chọn file để upload:
                    <input type="file" name="image" id="fileupload">
                </td>
                <td><input type="text" class="form-control" name="mota" value="<?php if (isset($mota)) echo $mota; ?>"></td>
                <td>
                    <select name="maloai" class="form-control" style="width:150px;">
                        <?php
                        $hh = new HangHoa();
                        $results = $hh->getTenLoai();
                        while ($set = $results->fetch()) :
                        ?>
                            <option value="<?php echo $set['maloai']; ?>" <?php
                                                                            if (isset($maloai))
                                                                                if ($maloai == $set['maloai'])
                                                                                    echo 'selected="selected"';
                                                                            ?>><?php echo $set['tenloai']; ?></option>
                        <?php
                        endwhile;
                        ?>
                    </select>
                </td>
                <td><input type="number" class="form-control" name="slx" value="<?php if (isset($soluotxem)) echo $soluotxem; ?>"></td>
                <td><input type="number" class="form-control" name="slt" value="<?php if (isset($soluongton)) echo $soluongton; ?>"></td>
                <td colspan="2">
                    <input type="submit" value="Cập nhật" name="submit">
                </td>
            </tr>
        </tbody>
    </table>
    </form> -->

    <div class="form-group">
        <label for="exampleInputEmail1">Mã hàng hoá</label>
        <input type="text" value="<?php if (isset($mahh)) echo $mahh; ?>" class="form-control" name="mahh" readonly />
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tên hàng hoá</label>
        <input type="text" value="<?php if (isset($tenhh)) echo $tenhh; ?>" class="form-control" name="tenhh" maxlength="100px">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Đơn giá</label>
        <input type="number" value="<?php if (isset($gia)) echo $dongia; ?>" class="form-control" name="gia">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Hình ảnh</label>
        <?php
        if (isset($hinh) & $ac == 1) {
            echo '<label><img width="50px" height="50px" src="../content/imagetourdien/' . $hinh . '"></label>';
        }
        ?>
        <input type="file" name="image" id="fileupload">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mô tả</label>
        <input type="text" class="form-control" name="mota" value="<?php if (isset($mota)) echo $mota; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mã loại</label>
        <select name="maloai" class="form-control" style="width:150px;">
            <?php
            $hh = new HangHoa();
            $results = $hh->getTenLoai();
            while ($set = $results->fetch()) :
            ?>
                <option value="<?php echo $set['maloai']; ?>" <?php
                                                                if (isset($maloai))
                                                                    if ($maloai == $set['maloai'])
                                                                        echo 'selected="selected"';
                                                                ?>><?php echo $set['tenloai']; ?></option>
            <?php
            endwhile;
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Số lượt xem</label>
        <input type="number" class="form-control" name="slx" value="<?php if (isset($soluotxem)) echo $soluotxem; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Số lượng tồn</label>
        <input type="number" class="form-control" name="slt" value="<?php if (isset($soluongton)) echo $soluongton; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Cập nhật</label>
        <button class="btn btn-primary float-right" type="submit" value="Cập nhật" name="submit">Cập Nhật</button>
    </div>

    </form>
</div>