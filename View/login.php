<section class="login-screen mt-3">
  <div class="container">
    <div class="login-sec">
      <h1 class="text-center"><b>Đăng nhập</b></h1>
      <form action="index.php?action=dangnhap&act=dangnhap_action" style="width: 300px; height: 350px;" class="container-fluid" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Tên đăng nhập</label>
          <input type="text" class="form-control" name="txtusername" placeholder="">
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Mật Khẩu</label>
          <input type="password" class="form-control" name="txtpassword" placeholder="">
        </div>

        <div class="form-check">
          <button class="btn btn-primary float-right" type="submit"> Đăng Nhập</button>
        </div>

        <div class="copy-text">
          <a href="index.php?action=forgetps" class="">Quên mật khẩu??</a>
        </div>

      </form>
    </div>
  </div>
</section>