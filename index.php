<?php
session_start();
if(empty($_SESSION['ma_admin'])){
  header("location:login.html?error= moi dang nhap");
}else{ ?>
  <?php } ?>
<!DOCTYPE html>
<html>

<head>
    <title>Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="DoQuanh">
    <meta name="keywords" content="Instagram, ins, insta, ig, clone">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/b3ec44c2bf.js" crossorigin="anonymous"></script>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>
	<?php 
    require_once('connect.php');
   	$noi_dung=
    $sql = "select * from bai_viet order by ID_bai_viet DESC  ";
    $result = mysqli_query($connect,$sql);

    $tong_png = mysqli_num_rows($result);
	$anh_1_bai = 3;
	$so_trang= ceil($tong_png/$anh_1_bai);
	$anh_hien_tai=1;
	if(isset($_GET['anh'])){
	  $anh_hien_tai = $_GET['anh'];
	}


	$bo_qua = ($anh_hien_tai-1)*$anh_1_bai;
	$sql = "$sql limit $anh_1_bai offset $bo_qua ";
	$result = mysqli_query($connect,$sql);

     ?>
    <!-- phần header bar-->
    <div class="nav-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container justify-content-center">
                <div class="d-flex flex-row justify-content-between align-items-center col-12">
                    <!-- phần logo -->
                    <div class="logo navbar-brand">
                        <i class="fab fa-instagram fa-lg"></i>
                        <div class="vl"></div>
                        <div class="instagram-brand">
                            <a href='#'>
                                <img src="images/instagram-brand.png" alt="Instagram-logo">
                            </a>
                        </div>
                    </div>
                    <!-- thanh tìm kiếm -->
                    <div class="searchbox">
                        <form class="form-inline input-icons justify-content-between align-items-center">
                            <input class="form-control mr-sm-2" placeholder="Search" type="search" aria-label="Search">
                        </form>
                    </div>
                    <!-- icons  -->
                    <div class="icons">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item mr-4">
                                <i class="far fa-compass fa-2x"></i>
                            </li>
                            <li class="list-inline-item mr-4">
                                <i class="far fa-heart fa-2x"></i>
                            </li>
                            <li class="list-inline-item mr-0"><a href="../PRJ3/try.php"  ></li>
                                <i class="far fa-user fa-2x"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- end of icons -->
                </div>
            </div>
        </nav>
    </div>

    <!-- main page -->
    <div class="container-fluid  mainpage">
        <div class="d-flex justify-content-center">
            <div class="row">
                <!-- main post bar -->
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="d-flex flex-column" id="posts">
                        <!-- User 1 -->
                        <div class="card" id="post">
                            <!-- profile id -->
                            <div class="card-header" id="profile-id">
                                <div class="d-flex flex-row align-items-center profile">
                                    <!-- ava -->
                                    <div class="d-flex justify-content-center align-items-center rounded-circle story-profile-photo">
                                        <img src="images/logo1.png">
                                    </div>
                                    <span class="id-name">HM.Audio</span>
                                </div>
                            </div>
            
                            <!-- ảnh user 1-->
                            <div class="card-body p-0">
                                <img class="card-img-top" src="images/a1.jpg"
                                    alt="post-photo-1">
                            </div>
                            

                            <!-- nút thích cmt share và lưu -->
                            <div class="d-flex justify-content-between post-buttons">
                                <!-- nút trái-->
                                <ul class="line-inline left-buttons" id="buttons-left">
                                    <li class="list-inline-item">
                                        <button class="btn" id="heart-btn">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn" id="comment-btn">
                                            <i class="far fa-comment"></i>
                                        </button>
                                    </li>
                                    <li class="list-inline-item" id="share-btn">
                                        <button class="btn">
                                            <img src="images/share.png" alt="share button">
                                        </button>
                                    </li>
                                </ul>
                                <!-- nút phải -->
                                <div id="buttons-right">
                                    <button class="btn" id="save-btn">
                                        <i class="far fa-bookmark fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="subtitles">
                                <div class="subs" id="post-likes">
                                    <strong>17,096 likes</strong>
                                </div>
                                <div class="subs" id="post-subs">
                                    <strong>HM.Audio</strong>
                                    <p>Sale up to 50% at Shopee. SHOP NOW  <a class="id-name" href="https://shopee.vn/hm.audio.store">@HM.Audio</a></p>
                                </div>
                                <div class="subs" id="post-date">
                                    20 minutes ago
                                </div>
                            </div>
                            <!-- comments -->
                            <div class="comments">
                                <form>
                                    <input class="form-control post-comments" type="text" placeholder="Add a comment...">
                                    <button class="btn post-comment-btn">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                         <!-- User 2 -->
                        <?php foreach ($result as $bai_viet) :?>
                        <div class="card" id="post">
                            <!-- profile id -->
                            <div class="card-header" id="profile-id">
                                <div class="d-flex flex-row align-items-center profile">
                                    <!-- profile photo -->
                                    <div class="d-flex justify-content-center align-items-center rounded-circle story-profile-photo">
                                        <img src="images/anh10.jpg">
                                    </div>
                                    <span class="id-name"> <?php echo $_SESSION['ten_admin'] ?></span>
                                </div>
                            </div>
                             <!-- ảnh user 2-->
                            <div class="card-body p-0">
                            	 <img class="card-img-top" src="<?php echo $bai_viet['png'] ?>">
      						</div>
                            <div class="d-flex justify-content-between post-buttons">
                                <!-- left buttons -->
                                <ul class="line-inline left-buttons" id="buttons-left">
                                    <li class="list-inline-item">
                                        <button class="btn" id="heart-btn">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn" id="comment-btn">
                                            <i class="far fa-comment"></i>
                                        </button>
                                    </li>
                                    <li class="list-inline-item" id="share-btn">
                                        <button class="btn">
                                            <img src="images/share.png" alt="share button">
                                        </button>
                                    </li>
                                </ul>
                                <!-- right button -->
                                <div id="buttons-right">
                                    <button class="btn" id="save-btn">
                                        <i class="far fa-bookmark fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- end of buttons -->
                            <!-- likes, subtitle -->
                            <div class="subtitles">
                                <div class="subs" id="post-likes">
                                    <strong>2,509 likes</strong>
                                </div>
                                <div class="subs" id="post-subs">
                                    <strong>Welcome <?php echo $_SESSION['ten_admin'] ?></strong>
                                    
                                   
                                    	<?php echo $bai_viet['noi_dung'] ?>
                                [</div>
                                <div class="subs" id="post-date">
                                    1 day ago
                                </div>
                            </div>

                            <!-- end of subtitles -->
                            <!-- comments -->
                            <div class="comments">
                                <form>
                                    <input class="form-control post-comments" type="text" placeholder="Add a comment...">
                                    <button class="btn post-comment-btn">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach ?>
							<div style="grid-column: 3;">
							<?php for($i=1;$i<=$so_trang;$i++){ ?>
							<a href="?anh=<?php echo $i ?>" style='display: inline'>
							<?php echo $i ?>
							</a>
							<?php } ?>  
							</div>
                        <!-- Gợi ý user -->
                        <div class="card" id="suggestions">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <strong id="suggest-header">Suggestions For You</strong>
                                <button class="btn btn-outline-primary btn-sm" id="see-all-btn">
                                    See All
                                </button>
                            </div>

                            <div class="card-body" id="suggestion-cards">
                                <div class="row">
                                    <div class="col-4">
                                        <!-- User1 gợi ý 1 -->
                                        <div class="card d-flex" id="suggestion-1">
                                            <div class="card-body text-center mx-auto">
                                                <!-- profile photo -->
                                                <div class="d-flex justify-content-center align-items-center rounded-circle suggestion-photo">
                                                    <img src="images/post-photo.jpg" alt="#">
                                                </div>
                                                <div class="text-center">
                                                    <strong>Quan.Kun</strong>
                                                    <p>Popular</p>
                                                </div>
                                                <button class="btn btn-primary suggestion-follow-btn">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4" id="suggestion-2">
                                        <!-- user gọi ý 2 -->
                                        <div class="card d-flex" id="suggestion-2">
                                            <div class="card-body text-center mx-auto">
                                                <!-- profile photo -->
                                                <div class="d-flex justify-content-center align-items-center rounded-circle suggestion-photo">
                                                    <img src="images/anh5.png" alt="#">
                                                </div>
                                                <div class="text-center">
                                                    <strong>NhatNam_</strong>
                                                    <p>Followed by HaiYen</p>
                                                </div>
                                                <button class="btn btn-primary suggestion-follow-btn">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="col-4" id="suggestion-3">
                                        <!-- User gợi ý 3-->
                                        <div class="card d-flex" id="suggestion-3">
                                            <div class="card-body text-center mx-auto">
                                                <!-- profile photo -->
                                                <div class="d-flex justify-content-center align-items-center rounded-circle suggestion-photo">
                                                    <img src="images/anh7.png" alt="#">
                                                </div>
                                                <div class="text-center">
                                                    <strong>Vy.light</strong>
                                                    <p> Suggestions</p>
                                                </div>
                                                <button class="btn btn-primary suggestion-follow-btn">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <!-- END OF first suggestion card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
        

                <!-- THANH TRANg GỢI Ý USER -->
                <div class="col-lg-5 d-none d-lg-block d-xl-block ml-auto" id="sidebar">
                    <!-- own profile -->
                    <div class="card story-info-card">
                        <div class="card-header story-info-header">
                            <div class="d-flex flex-row align-items-center">
                                <div class="d-flex justify-content-center align-items-center rounded-circle story-profile-photo">
                                    <img src="images/anh10.jpg">
                                </div>
                                <div class="profile-info">
                                    <span class="profile-username"><?php echo $_SESSION['ten_admin'] ?></span>
                                </div>
                                <a class="id-name" href="logout.php"> Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                    <!-- other stories -->
                    <div class="stories">
                        <div class="d-flex flex-row justify-content-between">
                            <strong>Gợi ý cho bạn</strong>
                            <p>Xem tất cả</p>
                        </div>
                        <div class="d-flex flex-row align-items-center story">
                            <div class="d-flex justify-content-center align-items-center rounded-circle border border-danger story-profile-photo">
                                <img src="images/anh7.png" alt="#">
                            </div>
                            <div class="story-info">
                                <span class="profile-username">Quan.Kun</span>
                                <span class="story-time"> Mới tham gia Instagrams</span>
                            </div>
                            <a class="id-name1" >Theo dõi</a>
                        </div>
                        <div class="d-flex flex-row align-items-center story">
                            <div class="d-flex justify-content-center align-items-center rounded-circle border border-danger story-profile-photo">
                                <img src="images/anh5.png" alt="#">
                            </div>
                            <div class="story-info">
                                <span class="profile-username">Nhatnam_</span>
                                <span class="story-time">Có DoQuanh +1 người nữa the..</span>
                            </div>
                            <a class="id-name1" >Theo dõi</a>
                        </div>
                        <div class="d-flex flex-row align-items-center story">
                            <div class="d-flex justify-content-center align-items-center rounded-circle border border-danger story-profile-photo">
                                <img src="images/post-photo.jpg" alt="#">
                            </div>
                            <div class="story-info">
                                <span class="profile-username">Vy_Light</span>
                                <span class="story-time">Phổ Biến</span>
                            </div>
                            <a class="id-name1" >Theo dõi</a>
                        </div>
                        <div class="d-flex flex-row align-items-center story">
                            <div class="d-flex justify-content-center align-items-center rounded-circle border border-danger story-profile-photo">
                                <img src="images/tyga.jpg" alt="#">
                            </div>
                            <div class="story-info">
                                <span class="profile-username">Tyga</span>
                                <span class="story-time">Gợi ý cho bạn</span>
                            </div>
                            <a class="id-name1" >Theo dõi</a>
                        </div>
                        <div class="d-flex flex-row align-items-center story">
                            <div class="d-flex justify-content-center align-items-center rounded-circle border border-danger story-profile-photo">
                                <img src="images/mosey.jpg" alt="#">
                            </div>
                            <div class="story-info">
                                <span class="profile-username">Mosey</span>
                                <span class="story-time">Mới tham gia Instagrams</span>
                            </div>
                            <a class="id-name1" >Theo dõi</a>
                        </div>
                    </div>
                    <div class="footer">
                        <nav class="footer-nav">
                            <ul class="footer-list">
                                <li>
                                <a href="https://about.instagram.com/">Giới thiệu</a>
                                .
                                <a href="https://help.instagram.com/">Trợ giúp</a>
                                .
                                <a href="https://about.instagram.com/blog/">Báo chí</a>
                                .
                                <a href="https://www.instagram.com/developer/">API</a>
                                .
                                <a href="https://www.instagram.com/about/jobs/">Việc làm</a>
                                .
                                <a href="https://www.instagram.com/legal/privacy/">Quyền riêng tư</a>
                                .
                                <a href="https://www.instagram.com/legal/terms/">Điều khoản</a>
                                .
                                <a href="https://www.instagram.com/explore/locations/">Vị trí</a>
                                .
                                <a href="https://www.instagram.com/directory/profiles/">Tài khoản liên quan nhất</a>
                                .
                                <a href="https://www.instagram.com/directory/hashtags/">Hashtags</a>
                                .
                                <a href="#">Ngôn ngữ</a>
                                
                            </ul>
                        </nav>
                        <span class="credit">© 2022 INSTARGAM FROM META</span>
                    </div>
                </div>
            

            </div>
        </div>
    </div>
</body>

</html>