<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete"><head>
    <title>Orbit - Bootstrap 4 Resume/CV Template for Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="../public/img/favicon.ico">  
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <!-- FontAwesome JS -->
<!--     <script defer="" src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script> -->
    <script defer="" src="../../public/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="../../public/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link rel="stylesheet" href="../../public/css/font-awesome.css">
    <link id="theme-style" rel="stylesheet" href="../../public/css/orbit-1.css" >
    <link id="theme-style" rel="stylesheet" href="../../public/css/orbit.css">
</head> 

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <?php
                    for ($i=0; $i < count($data[0]); $i++) {
             ?>
            <div class="profile-container">
                <img class="profile" src="../../<?php echo $data[0][$i]['hinh_anh'] ?>" alt="">
                <h1 class="name"><?php echo $data[0][$i]['ho_ten'] ?></h1>
                <h3 class="tagline"><?php echo $data[0][$i]['ten_chuyen_nganh'] ?></h3>
            </div><!--//profile-container-->
            <?php } ?>
            <div class="contact-container container-block">
                <?php
                    for ($i=0; $i < count($data[0]); $i++) {
             ?>
                <ul class="list-unstyled contact-list">
                    <li class="date"><svg class="svg-inline--fa fa-calendar-alt fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="calendar-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M436 160H12c-6.6 0-12-5.4-12-12v-36c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48v36c0 6.6-5.4 12-12 12zM12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm116 204c0-6.6-5.4-12-12-12H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm128 128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm128 128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40z"></path></svg><!-- <i class="fas fa-calendar-alt"></i> --> <?php echo $data[0][$i]['ngay_sinh'] ?></li>

                    <li class="gender"><svg class="svg-inline--fa fa-transgender fa-w-12" aria-hidden="true" data-prefix="fa" data-icon="transgender" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M372 0h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-80.7 80.7C198.5 104.1 172.2 96 144 96 64.5 96 0 160.5 0 240c0 68.5 47.9 125.9 112 140.4V408H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v28c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-28h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-27.6c64.1-14.6 112-71.9 112-140.4 0-28.2-8.1-54.5-22.1-76.7l80.7-80.7 16.9 16.9c7.6 7.6 20.5 2.2 20.5-8.5V12c0-6.6-5.4-12-12-12zM144 320c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-transgender"></i> --> 
                        <?php echo $data[0][$i]['gioi_tinh'] ?>
                    </li>

                    <li class="phone"><svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg><!-- <i class="fas fa-phone"></i> --><a href="tel:0123 456 789"><?php echo $data[0][$i]['phone'] ?></a></li>

                    <li class="country"><svg class="svg-inline--fa fa-globe fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg><!-- <i class="fas fa-globe"></i> --><a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/" target="_blank"><?php echo $data[0][$i]['quoc_tich'] ?></a></li>

                    <li class="email"><svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg><!-- <i class="fas fa-envelope"></i> --><?php echo $data[0][$i]['email'] ?></li>
                    
                    <li class="webstie"><svg class="svg-inline--fa fa-internet-explorer fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="internet-explorer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M483.049 159.706c10.855-24.575 21.424-60.438 21.424-87.871 0-72.722-79.641-98.371-209.673-38.577-107.632-7.181-211.221 73.67-237.098 186.457 30.852-34.862 78.271-82.298 121.977-101.158C125.404 166.85 79.128 228.002 43.992 291.725 23.246 329.651 0 390.94 0 436.747c0 98.575 92.854 86.5 180.251 42.006 31.423 15.43 66.559 15.573 101.695 15.573 97.124 0 184.249-54.294 216.814-146.022H377.927c-52.509 88.593-196.819 52.996-196.819-47.436H509.9c6.407-43.581-1.655-95.715-26.851-141.162zM64.559 346.877c17.711 51.15 53.703 95.871 100.266 123.304-88.741 48.94-173.267 29.096-100.266-123.304zm115.977-108.873c2-55.151 50.276-94.871 103.98-94.871 53.418 0 101.981 39.72 103.981 94.871H180.536zm184.536-187.6c21.425-10.287 48.563-22.003 72.558-22.003 31.422 0 54.274 21.717 54.274 53.722 0 20.003-7.427 49.007-14.569 67.867-26.28-42.292-65.986-81.584-112.263-99.586z"></path></svg><!-- <i class="fab fa-internet-explorer"></i> --><a href="#" target="_blank"><?php echo $data[0][$i]['website'] ?></a></li>


                </ul>
            <?php } ?>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Trình độ học vấn</h2>
                <div class="item">
                <?php
                    for ($i=0; $i < count($data[1]); $i++) {
                ?>
                    <h4 class="degree"><?php echo $data[1][$i]['noi_hoc'] ?></h4>
                    <h5 class="meta"><?php echo $data[1][$i]['chi_tiet'] ?></h5>
                    <div class="time"><?php echo $data[1][$i]['time'] ?></div>
                <?php } ?>
                </div><!--//item-->
            </div><!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Kỹ năng</h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    for ($i=0; $i < count($data[6]); $i++) {
                     ?>
                    <li><?php echo $data[6][$i]['ten_ky_nang'] ?></li>
                <?php } ?>
                </ul>
            </div><!--//interests-->

            <div class="interests-container container-block">
                <h2 class="container-block-title">Sở thích</h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    for ($i=0; $i < count($data[5]); $i++) {
                     ?>
                    <li><?php echo $data[5][$i]['ten_so_thich'] ?></li>
                <?php } ?>
                </ul>
            </div><!--//interests-->

        </div><!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user"></i> --></span>GIỚI THIỆU VỀ BẢN THÂN</h2>
                <div class="summary">
                    <?php
                    for ($i=0; $i < count($data[0]); $i++) {
                     ?>
                    <p><?php echo $data[0][$i]['mo_ta_ngan'] ?></p>
                <?php } ?>
                </div><!--//summary-->
            </section><!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><svg class="svg-inline--fa fa-briefcase fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 288h192v144c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V288h192v20c0 6.627 5.373 12 12 12h104c6.627 0 12-5.373 12-12v-20zm192-112v80H0v-80c0-26.51 21.49-48 48-48h80V80c0-26.51 21.49-48 48-48h160c26.51 0 48 21.49 48 48v48h80c26.51 0 48 21.49 48 48zM320 96H192v32h128V96z"></path></svg><!-- <i class="fas fa-briefcase"></i> --></span>Kinh nghiệm</h2>
                <div class="item">
                    <?php
                    for ($i=0; $i < count($data[7]); $i++) {
                     ?>
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php echo $data[7][$i]['noi_lam'] ?></h3>
                            <div class="time"><?php echo $data[7][$i]['time'] ?></div>
                        </div><!--//upper-row-->

                    </div><!--//meta-->
                    <div class="details">

                        <p><?php echo $data[7][$i]['chi_tiet'] ?></p>
                    </div><!--//details-->
                <?php } ?>
                </div>
            </section>
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><svg class="svg-inline--fa fa-briefcase fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 288h192v144c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V288h192v20c0 6.627 5.373 12 12 12h104c6.627 0 12-5.373 12-12v-20zm192-112v80H0v-80c0-26.51 21.49-48 48-48h80V80c0-26.51 21.49-48 48-48h160c26.51 0 48 21.49 48 48v48h80c26.51 0 48 21.49 48 48zM320 96H192v32h128V96z"></path></svg><!-- <i class="fas fa-briefcase"></i> --></span>Hoạt động</h2>
                <div class="item">
                     <?php
                    for ($i=0; $i < count($data[4]); $i++) {
                     ?>
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php echo $data[4][$i]['ten_hoat_dong'] ?></h3>
                            <div class="time"><?php echo $data[4][$i]['time'] ?></div>
                        </div><!--//upper-row-->
                    </div><!--//meta-->
                    <div class="details">
                        <p><?php echo $data[4][$i]['noi_dung'] ?></p>
                    </div><!--//details-->
                <?php } ?>
                </div><!--//item-->
            </section>
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><svg class="svg-inline--fa fa-briefcase fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 288h192v144c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V288h192v20c0 6.627 5.373 12 12 12h104c6.627 0 12-5.373 12-12v-20zm192-112v80H0v-80c0-26.51 21.49-48 48-48h80V80c0-26.51 21.49-48 48-48h160c26.51 0 48 21.49 48 48v48h80c26.51 0 48 21.49 48 48zM320 96H192v32h128V96z"></path></svg><!-- <i class="fas fa-briefcase"></i> --></span>Chứng chỉ</h2>

                <div class="item">
                    <div class="meta">
                        <?php
                                for ($i=0; $i < count($data[2]); $i++) {
                                 ?>
                        <div class="upper-row">
                             
                            <h3 class="job-title"><?php echo $data[2][$i]['ten_chung_chi'] ?></h3>
                            <div class="time"><?php echo $data[2][$i]['time'] ?></div>
                        
                        </div><!--//upper-row-->
                        <?php } ?>
                    </div><!--//meta-->
                </div><!--//item-->
            </section>
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><svg class="svg-inline--fa fa-briefcase fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 288h192v144c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V288h192v20c0 6.627 5.373 12 12 12h104c6.627 0 12-5.373 12-12v-20zm192-112v80H0v-80c0-26.51 21.49-48 48-48h80V80c0-26.51 21.49-48 48-48h160c26.51 0 48 21.49 48 48v48h80c26.51 0 48 21.49 48 48zM320 96H192v32h128V96z"></path></svg><!-- <i class="fas fa-briefcase"></i> --></span>Giải thưởng</h2>
                <div class="item">
                    <div class="meta">
                        <?php
                                for ($i=0; $i < count($data[3]); $i++) {
                                 ?>
                        <div class="upper-row">
                            
                            <h3 class="job-title"><?php echo $data[3][$i]['time'] ?></h3>
                            <div class="time"><?php echo $data[3][$i]['ten_giai_thuong'] ?></div>
                       
                        </div><!--//upper-row-->
                         <?php } ?>

                    </div><!--//meta-->
                </div>
            </section>
            <!--//section-->
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><svg class="svg-inline--fa fa-archive fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z"></path></svg><!-- <i class="fas fa-archive"></i> --></span>Dự án</h2>

                <?php
                    for ($i=0; $i < count($data[8]); $i++) {
                ?>
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php echo $data[8][$i]['ten_du_an'] ?></h3>
                            <div class="time"><?php echo $data[8][$i]['time'] ?></div>
                        </div><!--//upper-row-->

                    </div><!--//meta-->

                </div>
                <div class="intro">

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Mô tả</th>
                                <td>
                                    <p>&lt;<?php echo $data[8][$i]['mo_ta'] ?></p>
                                </td>
                            </tr> <!-- hết 1 row -->
                            <tr>
                                <th>Số lượng thành viên</th>
                                <td><?php echo $data[8][$i]['so_luong'] ?></td>
                            </tr> <!-- hết 1 row -->
                            <tr>
                                <th>Vị trí trong công việc</th>
                                <td><?php echo $data[8][$i]['vi_tri_cong_viec'] ?></td>
                            </tr> <!-- hết 1 row -->
                            <tr>
                                <th>Vai trò trong dự án</th>
                                <td>
                                    <p><?php echo $data[8][$i]['vai_tro'] ?></p>
                                </td>
                            </tr> <!-- hết 1 row -->
                            <tr>
                                <th>Công nghệ sử dụng</th>
                                <td>
                                    <p><?php echo $data[8][$i]['cong_nghe'] ?></p>

                                </td>
                            </tr> <!-- hết 1 row -->
                        </tbody>
                    </table>
                </div><!--//intro-->
            <?php } ?>

            </section><!--//section-->

            <!--//skills-section-->

        </div><!--//main-body-->
    </div>

    <footer class="footer no-print">
        <div class="text-center">
            <a href="#" target="_blank" class="btn btn-outline-info" onclick="printCV()"><svg class="svg-inline--fa fa-download fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg><!-- <i class="fa fa-download"></i> --> In file</a>
        </div><!--//container-->
    </footer><!--//footer-->
    <script src="../../public/js/printCV.js"></script>
</body></html>