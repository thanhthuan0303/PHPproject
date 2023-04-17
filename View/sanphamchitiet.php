<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;
    }
</script>
<section class="mt-2">
    <div class="row">
        <div class="col-lg-12 text-center bg-danger">
            <h3 class="mb-3 font-weight-bold mt-3">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12 mt-3">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $hh = new hanghoa();
                                $result = $hh->getHangHoaId($id);
                                $mahh = $result["mahh"];
                                $tenhh = $result['tenhh'];
                                $hinh = $result["hinh"];
                                $gia = $result["gia"];
                                $mota = $result["mota"];
                                $soluotxem = $result["soluotxem"];
                                $soluongton = $result["soluongton"];
                            }
                            ?>
                            <div class="tab-pane active" id=""><img src="Content\imagetourdien\<?php echo $hinh; ?>" alt="" width="200px" height="350px">
                            </div>

                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active">
                                <a href="#<?php echo $set['hinh']; ?>">
                                    <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $mahh; ?>" />
                        <h3 class="product-title"><?php echo $tenhh; ?> </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p style="text-align: left;">Số lượt xem: <?php echo $soluotxem?></p>
                        <p class="" style="text-align: left;">Số lượng tồn: <?php if ($soluongton == 0) {
                            echo "<h3 class='alert alert-danger text-center'>Hết Hàng!</h3>";} 
                            else{echo $soluongton;} ?></p>
                        <p class="product-description">
                            <?php echo $mota; ?>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($gia); ?>đ</h4>

                        <h5 class="">
                            Số Lượng:
                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />


                        </h5>

                        <div class="action d-flex">
                            <?php if ($soluongton != 0) {
                            echo "<button class='add-to-cart btn btn-default' type='submit'data-toggle='modal' data-target='#myModal'>MUA NGAY</button>";} 
                            ?></p>
                            <!-- <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY</button> -->
                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default ml-2" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>
<section>
    <div>
        <p class="float-left"><b>BÌnh luận </b></p>
        <hr>
    </div>
    <form action="" method="post">
        <div class="row">

            <input type="hidden" name="txtmahh" value="" />
            <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
            <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
            <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

        </div>

    </form>
    <div class="row">
        <p class="float-left"><b>Các bình luận</b></p>
        <hr>
    </div>
    <div class="row">
        <br />
    </div>
</section>