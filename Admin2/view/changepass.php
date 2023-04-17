<div class="container" style="height: 950px;">
  <div class="container-fluid">
    <form action="index.php?action=dangnhap&act=changepass_action" style="width: 500px;" method="post" enctype="multipart/form-data" class="form">
      <h2 style="color: #80BB01;font-weight: 500;text-align: center;">Thay Đổi Mật Khẩu</h2>
      <div class="inputBox ">
        <span>
          <h4>Nhập mật khẩu cũ:</h4>
        </span>
        <input name="oldpass" class="form-control" type="password" required="required">
        <i></i>
      </div>

      <div class="inputBox ">
        <span>
          <h4>Nhập mật khẩu mới:</h4>
        </span>
        <input name="newpass" class="form-control" type="password" required="required">
        <i></i>
      </div>

      <div class="text-center">
        <input type="submit" style="width: 200px;" value="Xác Nhận" class="mt-5 btn btn-danger">
      </div>
    </form>
  </div>

</div>