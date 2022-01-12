<?php
session_start();
if(empty($_SESSION['ma_admin'])){
  header("location:../login.html?error= moi dang nhap");
}else{ ?>
  <?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link href="css/try.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script src="try.js"></script>

</head>

<body>
    <?php 
    require_once('connect.php');
    $sql = "SELECT * FROM `bai_viet` ORDER BY ID_bai_viet DESC";
    $result = mysqli_query($connect,$sql);
    
    $sql = "select * from admin";
    $result_admin = mysqli_query($connect,$sql);
    ?>

     
    <!-- phần user-->
    <div class="user-header-wrapper">

        <div class="user-header-inner">
            <div class="uh-left">
                <div class="uh-image">
                    <img class="uh-image-inner" src="images/anh1.jpg" alt="">
                    <div class="gradient"></div>
                </div>
            </div>
            <div class="uh-right">
                <div class="user-info">
                    <h3>
                        <?php echo $_SESSION['ten_admin'] ?>
                        <svg class="uname-verified" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1350.03 1326.16">
                            <defs>
                                <style>
                                    .cls-11 {
                                        fill: var(--blue);
                                    }

                                    .cls-12 {
                                        fill: #ffffff;
                                    }
                                </style>
                            </defs>
                            <title>verified</title>
                            <g id="Layer_3" data-name="Layer 3">
                                <polygon class="cls-11"
                                    points="0 747.37 120.83 569.85 70.11 355.04 283.43 292.38 307.3 107.41 554.93 107.41 693.66 0 862.23 120.83 1072.57 126.8 1112.84 319.23 1293.35 399.79 1256.05 614.6 1350.03 793.61 1197.87 941.29 1202.35 1147.15 969.64 1178.48 868.2 1326.16 675.02 1235.17 493.77 1315.72 354.99 1133.73 165.58 1123.29 152.16 878.64 0 747.37" />
                            </g>
                            <g id="Layer_2" data-name="Layer 2">
                                <path class="cls-12"
                                    d="M755.33,979.23s125.85,78.43,165.06,114c34.93-36,234.37-277.22,308.24-331.94,54.71,21.89,85,73.4,93,80.25-3.64,21.89-321.91,418.58-368.42,445.94-32.74-3.84-259-195.16-275.4-217C689.67,1049.45,725.24,1003.85,755.33,979.23Z"
                                    transform="translate(-322.83 -335.95)" />
                            </g>
                        </svg>
                    </h3>

                    <button class="btn"> <?php foreach ($result_admin as $each ): ?><a href="form_update.php?ma_admin=<?php echo $each['ma_admin']?>"><?php endforeach ?>Chỉnh Sửa Trang Cá Nhân</button>
                    <button class="btn"  ><a href="form_insert.php">Thêm Bài Viết</button>
                    <button class="btn"  ><a href="index.php">Home</button>
                         <button class="btn"  ><a href="form_delete.php"> Xoá</button>
                </div>
                <div class=user-links>
                    <a><span>6k</span> Posts</a>
                    <a><span>952k</span> Followers</a>
                    <a>Following <span>25</span></a>
                </div>
                <div class="user-bio">
                    <p class="user-bio-name"><?php echo $_SESSION['ten_admin'] ?></p>
                    <p>Đây là trang cá nhân của tôi 😄<br />Wellcome.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- phần thanh cc-->
    <ul class="navigationList">
        <li class="navigationItem">
            <button class="navigationItem__Button">
                <svg aria-label="Posts" class="navigationItem__Icon" fill="#262626" viewBox="0 0 48 48">
                    <path clip-rule="evenodd"
                        d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z"
                        fill-rule="evenodd"></path>
                </svg>
                <p class="navigationItem__Text">BÀI VIẾT</p>
            </button>
        </li>
        <li class="navigationItem active">
            <button class="navigationItem__Button">
                <svg aria-label="Posts" class="navigationItem__Icon" fill="#8e8e8e" viewBox="0 0 48 48">
                    <path
                        d="M41 10c-2.2-2.1-4.8-3.5-10.4-3.5h-3.3L30.5 3c.6-.6.5-1.6-.1-2.1-.6-.6-1.6-.5-2.1.1L24 5.6 19.7 1c-.6-.6-1.5-.6-2.1-.1-.6.6-.7 1.5-.1 2.1l3.2 3.5h-3.3C11.8 6.5 9.2 7.9 7 10c-2.1 2.2-3.5 4.8-3.5 10.4v13.1c0 5.7 1.4 8.3 3.5 10.5 2.2 2.1 4.8 3.5 10.4 3.5h13.1c5.7 0 8.3-1.4 10.5-3.5 2.1-2.2 3.5-4.8 3.5-10.4V20.5c0-5.7-1.4-8.3-3.5-10.5zm.5 23.6c0 5.2-1.3 7-2.6 8.3-1.4 1.3-3.2 2.6-8.4 2.6H17.4c-5.2 0-7-1.3-8.3-2.6-1.3-1.4-2.6-3.2-2.6-8.4v-13c0-5.2 1.3-7 2.6-8.3 1.4-1.3 3.2-2.6 8.4-2.6h13.1c5.2 0 7 1.3 8.3 2.6 1.3 1.4 2.6 3.2 2.6 8.4v13zM34.6 25l-9.1 2.8v-3.7c0-.5-.2-.9-.6-1.2-.4-.3-.9-.4-1.3-.2l-11.1 3.4c-.8.2-1.2 1.1-1 1.9.2.8 1.1 1.2 1.9 1l9.1-2.8v3.7c0 .5.2.9.6 1.2.3.2.6.3.9.3.1 0 .3 0 .4-.1l11.1-3.4c.8-.2 1.2-1.1 1-1.9s-1.1-1.2-1.9-1z">
                    </path>
                </svg>
                <p class="navigationItem__Text">IGTV</p>
            </button>
        </li>
        <li class="navigationItem">
            <button class="navigationItem__Button">
                <svg aria-label="Tagged" class="navigationItem__Icon" fill="#8e8e8e" viewBox="0 0 48 48">
                    <path
                        d="M41.5 5.5H30.4c-.5 0-1-.2-1.4-.6l-4-4c-.6-.6-1.5-.6-2.1 0l-4 4c-.4.4-.9.6-1.4.6h-11c-3.3 0-6 2.7-6 6v30c0 3.3 2.7 6 6 6h35c3.3 0 6-2.7 6-6v-30c0-3.3-2.7-6-6-6zm-29.4 39c-.6 0-1.1-.6-1-1.2.7-3.2 3.5-5.6 6.8-5.6h12c3.4 0 6.2 2.4 6.8 5.6.1.6-.4 1.2-1 1.2H12.1zm32.4-3c0 1.7-1.3 3-3 3h-.6c-.5 0-.9-.4-1-.9-.6-5-4.8-8.9-9.9-8.9H18c-5.1 0-9.4 3.9-9.9 8.9-.1.5-.5.9-1 .9h-.6c-1.7 0-3-1.3-3-3v-30c0-1.7 1.3-3 3-3h11.1c1.3 0 2.6-.5 3.5-1.5L24 4.1 26.9 7c.9.9 2.2 1.5 3.5 1.5h11.1c1.7 0 3 1.3 3 3v30zM24 12.5c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6-4.3-9.6-9.6-9.6zm0 16.1c-3.6 0-6.6-2.9-6.6-6.6 0-3.6 2.9-6.6 6.6-6.6s6.6 2.9 6.6 6.6c0 3.6-3 6.6-6.6 6.6z">
                    </path>
                </svg>
                <p class="navigationItem__Text">TAGGED</p>
            </button>
        </li>
    </ul>
    <!-- phần ảnh-->
    
    <div class="user-page-wrapper">
        <div class="user-page-inner">
            <div id="imgblock1" class="image-block">
                <div class="block">
                    
                </div>
                <div id="imgblockbc1" class="block-background"></div>
            </div><?php foreach ($result as $bai_viet) :?>
            <div id="img1" class="image-wrapper"><img class="image" src="<?php echo $bai_viet['png'] ?>" alt="">
                <div id="iov1" class="img-overlay-wrapper">
                    <div class="img-btns">
                        <p> <i class="uil uil-heart-alt"></i> <i class="uil uil-comment"></i></p>
                    </div>
                    <div class="img-overlay">
                        
                    </div>
                </div>
                
            
            </div><?php endforeach ?>
        </div>
    </div>
    
      
      
    <!-- phần load thêm-->
    <div class="user-loader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="space"></div>

</body>

</html>