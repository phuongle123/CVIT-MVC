<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>
	<link rel="icon" href="../public/img/favicon-logo.png">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../../public/css/style.css">
</head> <!-- end head -->
<body>
	<header class="menu-top-fixed trangtk">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="/CVIT-MVC/recruiters/index" class="logo-main"><img src="../../public/img/logo.png" alt="" class=""></a>
				</div>
				<div class="col-md-7">
					<form class="example form-search" action="action_page.php">
						<input type="text" placeholder="Tìm kiếm.." name="search">
						<div class="form-group fl">
							<div class="icon-map"><i class="fa fa-map-marker"></i></div>
							<select id="inputState" class="form-control">
								<option selected>Tất cả địa điểm </option>
								<option>Cần Thơ</option>
								<option>Kiên Giang</option>
								<option> An Giang</option>
							</select>
						</div>
						<div class="form-group fl cn">
							<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
							<select id="inputState" class="form-control ">
								<option selected>Tất cả chuyên ngành </option>
								<option>Kỹ thuật phần mềm</option>
								<option>Khoa học máy tính</option>
								<option>Hệ thống thông tin</option>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

				<div class="col-md-3 header-right">
					<div class="content">
<!-- 						<a class="info">
							<img src="../../public/img/kai.jpg" alt="">
							<span class="name">Trần Ngọc Huyền</span>
						</a> -->	
						
						<div class="dropdown">
							<a class="btn btn-outline-secondary dropdown-toggle info" href="#" role="button" id="dropdowntk" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="name"><i class="fa fa-user"></i></span>
							</a>
							<div class="dropdown-menu shadow" aria-labelledby="dropdowntk">
								<a class="dropdown-item" href="../info">Thông tin nhà tuyển dụng</a>
								<a class="dropdown-item" href="../logout">Đăng xuất</a>
							</div>
						</div>
						<div class="dropdown dropdowntb">
							<a class="btn btn-outline-secondary dropdown-toggle info" href="#" role="button" id="dropdowntb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="name"><i class="fa fa-bell"></i></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdowntb">
								<?php
								for ($i=0; $i < count($data[2]); $i++) {
								?>
								<a class="dropdown-item" href="../tintuyendung/<?php echo $data[2][$i]['id_tt'] ?>">
									<img src="../../<?php echo $data[2][$i]['hinh_anh'] ?>" alt="" class="img-thumbnail">
									<span class="title-tb">
										<span class="name-cv">"<?php echo $data[2][$i]['ho_ten'] ?>"</span>
										đã vừa Apply vào tin <span class="name-ntd"> "<?php echo $data[2][$i]['tieu_de'] ?>"</span>
									</span>
								</a> <!-- end 1 tb -->
							<?php } ?>
								<div class="about">
									<a href="../dsthongbao">Xem tất cả</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- end header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="/CVIT-MVC/recruiters/index" class="logo-main"><img src="../../public/img/logo.png" alt="" class=""></a>
				</div>
				<div class="col-md-7">
					<form class="example form-search" action="action_page.php">
						<input type="text" placeholder="Tìm kiếm.." name="search">
						<div class="form-group fl">
							<div class="icon-map"><i class="fa fa-map-marker"></i></div>
							<select id="inputState" class="form-control">
								<option selected>Tất cả địa điểm </option>
								<option>Cần Thơ</option>
								<option>Kiên Giang</option>
								<option> An Giang</option>
							</select>
						</div>
						<div class="form-group fl cn">
							<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
							<select id="inputState" class="form-control ">
								<option selected>Tất cả chuyên ngành </option>
								<option>Kỹ thuật phần mềm</option>
								<option>Khoa học máy tính</option>
								<option>Hệ thống thông tin</option>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>

				</div>
			</div>
		</div>
		<script src="../../public/js/login.js"></script>
	</header> <!-- end header background - mobile -->
	<nav class="navbar navbar-expand-lg navbar-dark menu-dad">
		<div class="container">
			<div class="row">
				<div class="col-md-12 khoinut-mobile">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false ">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="buttonsearch-mobile" data-toggle="collapse" href="#search-mobile" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i></a>
				</div>
				<div class="col-md-12">
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link home-link" href="/CVIT-MVC/recruiters/index"><i class="fa fa-home"></i>TRANG CHỦ</a>
						</li>
						<li class="nav-item cn">
							<a class="nav-link" href="../dscvapply" role="button">DANH SÁCH CV APPLY</a>
						</li>
						<li class="nav-item cn">
							<a class="nav-link" href="../dstintuyendung/<?php echo $_SESSION['recruiters']['id_ntd'] ?>" role="button">DANH SÁCH TIN</a>
						</li>
					</ul> <!-- end ul -->
					</div>
					<form id="search-mobile" class="example form-search collapse" action="action_page.php">
						<input type="text" placeholder="Tìm kiếm.." name="search">
						<div class="form-group fl">
							<div class="icon-map"><i class="fa fa-map-marker"></i></div>
							<select id="inputState" class="form-control">
								<option selected>Tất cả địa điểm </option>
								<option>Cần Thơ</option>
								<option>Kiên Giang</option>
								<option> An Giang</option>
							</select>
						</div>
						<div class="form-group fl cn">
							<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
							<select id="inputState" class="form-control ">
								<option selected>Tất cả chuyên ngành </option>
								<option>Kỹ thuật phần mềm</option>
								<option>Khoa học máy tính</option>
								<option>Hệ thống thông tin</option>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</nav> <!--nav -->
	
	<main>
<div class="nd-chinh">
<div class="container">
	<div class="row">
		<div class="col-md-12 cv-moi frame-out">
			<div class="col-md-12 tieude">
				<h2>TIN TUYỂN DỤNG</h2>
				<span class="kengang"></span>
			</div>
			<?php
					for ($i=0; $i < count($data[0]); $i++) {
					?>
			<div class="col-md-12 dttd">
				<h2 class="td"><?php echo $data[0][$i]['tieu_de'] ?></h2>
				<p class="nd">
					<?php echo $data[0][$i]['noi_dung'] ?>
				</p>
				<hr>
			</div>
		<?php } ?>
			<div class="col-md-8 ds-apply m-auto">
				<h5 class="td py-2">Danh sách CV apply</h2>
					<ul class="list-cv">
						<li class="cv-item">
							<div class="row">
								<?php
									for ($i=0; $i < count($data[1]); $i++) {
									?>
								<div class="col-sm-2">
									<img src="../../<?php echo $data[1][$i]['hinh_anh'] ?>" alt="" class="img-fluid">
								</div>
								<div class="col-sm-6">
									<?php echo $data[1][$i]['ho_ten'] ?>
								</div>
								<div class="col-sm-3 right">
									<a href="../viewcv/<?php echo $data[1][$i]['id_tv'] ?>" class="btn btn-outline-primary">Xem chi tiết</a>
								</div>
							<?php } ?>
							</div>
						</li> <!-- end cv-item -->
					</ul>
				</div>
			</div> <!-- end dttd -->
			</div> <!-- end row -->
		</div>  <!-- end container -->
	</div> <!-- end nd-chinh -->
</main> <!-- main -->
	
			<footer>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6394766892454!2d105.7657168144546!3d10.04657927498789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0880f08006ffb%3A0x9a745510330faf4e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBL4bu5IHRodeG6rXQgLSBDw7RuZyBuZ2jhu4cgQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1538297409128" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div> <!-- map -->
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="title-footer">
									<h2><i class="fa fa-book"></i> GIỚI THIỆU</h2>
								</div> <!-- end tieude -->
								<p><b>CVIT</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="title-footer">
									<h2><i class="fa fa-home"></i> LIÊN HỆ</h2>
								</div> <!-- end tieude -->

								<p><b>Địa chỉ:</b> Trường Đại học KT-CN Cần Thơ - An Hòa - Ninh Kiều - Cần Thơ</p>
								<p><b>Điện thoại: </b> 0962739775 - 01676404446</p>
								<p><b>E-mail:</b> <a href="#"> kai.tnhuyen1997@gmail.com</a>
									<a href="#">nguyenthidiemphuong.42247@gmail.com</a>
								</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="title-footer">
									<h2><i class="fa fa-list-ul"></i> DANH MỤC</h2>
								</div> <!-- end tieude -->
								<p><a href="#"><i class="fa fa-angle-double-right"></i> Trang chủ</a></p>
								<p><a href="#"><i class="fa fa-angle-double-right"></i> Kỹ thuật phần mềm</a></p>
								<p><a href="#"><i class="fa fa-angle-double-right"></i> Hệ thống thông tin</a></p>
								<p><a href="#"><i class="fa fa-angle-double-right"></i> Khoa học máy tính</a></p>
							</div>

							<div class="col-md-3 col-sm-6 social">
								<div class="title-footer">
									<h2><i class="fa fa-wifi" style="transform: rotate(45deg); width: 18px; display: inline-block; margin-right: 8px;"></i> MẠNG XÃ HỘI</h2>
								</div> <!-- end tieude -->
								<div class="link">
									<a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a>
									<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									<a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
									<a hret="#" class="instagram"><i class="fa fa-instagram"></i></a>
								</div>
								<!-- <a href="#" class="congthuong"><img src="img/congthuong.png" style="width:80%;" alt=""></a> -->
							</div>
						</div>
					</div>
				</div> <!-- end footer-top -->
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<span><span>Copyright © 2018 CVIT.</span> Thiết kế bởi Kai Trần & Phượng Lê </span>
							</div>
						</div>
					</div>
				</div> <!-- end footer-bottom -->
			</footer> <!-- end footer -->
		</body>
		</html>



