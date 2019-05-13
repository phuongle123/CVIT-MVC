<?php
if(isset($_COOKIE['recruiters']) && !isset($_SESSION['recruiters'])){
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>
	<link rel="icon" href="public/img/favicon-logo.png">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../public/css/style.css">
	<style>
		header.trangtk .header-right {
		    margin-top: 12px;
		}
	</style>
</head> <!-- end head -->
<body>
	<header class="menu-top-fixed trangtk">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="/CVIT-MVC/recruiters/index" class="logo-main"><img src="../public/img/logo.png" alt="" class=""></a>
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
							<img src="public/img/kai.jpg" alt="">
							<span class="name">Trần Ngọc Huyền</span>
						</a> -->	
						
						<div class="dropdown">
							<a class="btn btn-outline-secondary dropdown-toggle info" href="#" role="button" id="dropdowntk" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="name"><i class="fa fa-user"></i></span>
							</a>
							<div class="dropdown-menu shadow" aria-labelledby="dropdowntk">
								<a class="dropdown-item" href="info">Thông tin nhà tuyển dụng</a>
								<a class="dropdown-item" href="logout">Đăng xuất</a>
							</div>
						</div>
						<div class="dropdown dropdowntb">
							<a class="btn btn-outline-secondary dropdown-toggle info" href="#" role="button" id="dropdowntb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="name"><i class="fa fa-bell"></i></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdowntb">
								<?php
								for ($i=0; $i < count($data[0]); $i++) {
								?>
								<a class="dropdown-item" href="tintuyendung/<?php echo $data[0][$i]['id_tt'] ?>">
									<img src="../<?php echo $data[0][$i]['hinh_anh'] ?>" alt="" class="img-thumbnail">
									<span class="title-tb">
										<span class="name-cv">"<?php echo $data[0][$i]['ho_ten'] ?>"</span>
										đã vừa Apply vào tin <span class="name-ntd"> "<?php echo $data[0][$i]['tieu_de'] ?>"</span>
									</span>
								</a> <!-- end 1 tb -->
							<?php } ?>
								<div class="about">
									<a href="dsthongbao">Xem tất cả</a>
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
					<a href="/CVIT-MVC/recruiters/index" class="logo-main"><img src="../public/img/logo.png" alt="" class=""></a>
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
		<script src="public/js/login.js"></script>
	</header> <!-- end header background - mobile -->
