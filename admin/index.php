<?php
session_start();
if(empty($_SESSION['cap_do']==0)){
  header("location:form_login.php?error= moi dang nhap");
}else{?>
  
<?php } ?>
<link rel="stylesheet" type="text/css" href="bgr_admin2.css">
<link rel="stylesheet" type="text/css" href="bgr_admin4.css">
<div class="wrapper">
<div class="container">
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
       <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
           <form class="form">
            <li class="active"><button type="submit" id="login-button"><a href="#">Welcome <?php echo $_SESSION['ten_admin'] ?></a></button></li>
            <li><?php if($_SESSION['cap_do']==0) {?>
              <button type="submit" id="login-button"><a href="nguoi_dung">Quản lý người dùng</a></button>
                <?php } ?>
            </li>
            <li><?php if($_SESSION['cap_do']==0) {?>
              <button type="submit" id="login-button"><a href="the_loai">Quản lý  thể loại</a></button>
               <?php } ?>
            </li>
           <li><?php if($_SESSION['cap_do']==0) {?>
              <button type="submit" id="login-button"><a href="bai_viet">Quản lý bài viết</a></button>
                <?php } ?>
            </li>
            <li><button type="submit" id="login-button"><a href="logout.php">Logout</a></button></li>
          </ul></form>
          <ul class="bg-bubbles">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
