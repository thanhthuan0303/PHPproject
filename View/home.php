  <!--Section: Examples-->
  <section id="examples" class="text-center mt-3">

      <!-- Heading -->
      <div class="row" style="height: 50px;">
          <div class="col-lg-8 text-left bg-danger">
              <h3 class="font-weight-bold mt-3" style="color: white;font-family: Verdana, Geneva, Tahoma, sans-serif;">SẢN PHẨM MỚI NHẤT</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham">
                  <span style="color: black;">Xem Tất Cả</span>
              </a>
          </div>
      </div>
      <!--Grid row-->
      <div class="row mt-3">

          <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaNew();
            while ($set = $result->fetch()) : //$set[]
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content\imagetourdien\<?php echo $set["hinh"]; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set["gia"]); ?><sup><u>đ</u></sup></br>
                  </h5>
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                      <span><?php echo $set["tenhh"]?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem: <?php echo $set["soluotxem"]; ?></h5>
              </div>
          <?php
            endwhile;
            ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm mới nhất -->
  