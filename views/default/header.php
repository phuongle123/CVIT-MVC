
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>
	<base href="/CVIT-MVC/">
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

	<link rel="stylesheet" href="public/css/style.css">
	<style>
	*{
		padding: 0;
		margin: 0;
	}

	.tab-content span {
		font-size: 14px;
		color: #666;
		margin-right: 16px;
	}

	.tab-content a.btn {
		padding: 5px;
		width: 17%;
	}

	p.nd {
		color: #666;
	}

	nav > .nav.nav-tabs{
		border: none;color:#fff;
		border-radius:0;
		width: 70%;
		margin: auto;
	}
	nav > div a.nav-item.nav-link
	{
		font-size: 16px;
		border: none;
		padding: 14px 25px;
		color: rgb(0, 0, 0,0.87);
		background: #fff;
		border-radius:0;
		border-bottom: 2px solid rgba(0,0,0,0.12);
	}
	nav > div a.nav-item.nav-link.active {
		color: #026165 !important;
		border-bottom: 2px solid #026165;
	}
	.tab-content{
		line-height: 25px;
		padding: 30px;
	}

	nav > div a.nav-item.nav-link:hover,
	nav > div a.nav-item.nav-link:focus {
		color: #026165 !important;
		transition:background 0.20s linear;
	}
</style>
</head> <!-- end head -->
<body>
	<div class="clickform clickdn clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn choose">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="" class="logo"><img src="public/img/logo.png" alt=""></a>
						<h4>ĐĂNG NHẬP</h4>
						<a id="dangnhaptd" class="btn btn-primary button btn-block">Nhà tuyển dụng</a>
						<a id="dangnhaptv" class="btn btn-primary button btn-block">Thành viên</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdn -->
	
	<div class="clickform clickdntd clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="" class="logo">
							<img src="public/img/logo.png" alt="">
						</a>
						<h6>( Dành cho Nhà tuyển dụng )</h6>
						<form action="recruiters/login" method="POST">
							<div class="form-group us">
								<input type="email" class="form-control" id="email" name="username" placeholder="Nhập email..">
								<div class="icon"><i class="fa fa-user"></i></div>
							</div>
							<div class="form-group pw">
								<input type="password" class="form-control" id="pass" name="password" placeholder="Nhập mật khẩu..">
								<div class="icon"><i class="fa fa-key"></i></div>
							</div>
							<button type="submit" class="btn btn-default button" value="Login">Đăng nhập</button>
						</form>
						<div class="duoi">
							<a class="linkdangnhaptv">Đăng nhập cho Thành viên</a> <br>
							<a href="" class="">Quên mật khẩu?</a>
							<span class="duongke"></span>
							<a class="linkdangkytd">Đăng ký tài khoản</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdntd -->
	<div class="clickform clickdntv clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="index.php" class="logo">
							<img src="public/img/logo.png" alt="">
						</a>
						<h6>( Dành cho Thành viên )</h6>
						<form action="user/login" method="POST" role="form">
							<div class="form-group us">
								<input type="email" class="form-control" id="username" name="username" placeholder="Nhập email..">
								<div class="icon"><i class="fa fa-user"></i></div>
							</div>
							<div class="form-group pw">
								<input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu..">
								<div class="icon"><i class="fa fa-key"></i></div>
							</div>
							<button type="submit" name="submit_tv" class="btn btn-default button">Đăng nhập</button>
						</form>
						<div class="duoi">
							<a class="linkdangnhaptd">Đăng nhập cho Nhà tuyển dụng</a> <br>
							<a href="" class="">Quên mật khẩu?</a>
							<span class="duongke"></span>
							<a class="linkdangkytv">Đăng ký tài khoản</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdntv -->
	<div class="clickform clickdk clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn choose">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="index.php" class="logo"><img src="public/img/logo.png" alt=""></a>
						<h4>ĐĂNG KÝ</h4>
						<a id="dangkytd" class="btn btn-primary button btn-block">Nhà tuyển dụng</a>
						<a id="dangkytv" class="btn btn-primary button btn-block">Thành viên</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdk -->
	<div class="clickform clickdktd clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn dk">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<h3>ĐĂNG KÝ TÀI KHOẢN</h3>
						<h6>( Dành cho Nhà tuyển dụng )</h6>
						<form action="recruiters/register" method="POST">
							<div class="form-group us">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email (để quản lý CV về sau)...">
							</div>
							<div class="form-group pw">
								<input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
							</div>
							<div class="form-group pw">
								<input type="password" class="form-control" name="repass" placeholder="Nhập lại mật khẩu">
							</div>
							<div class="form-group ">
								<input type="text" class="form-control" name="ten_cong_ty" placeholder="Nhập tên công ty">
							</div>
							<div class="form-group ">
								<input type="text" class="form-control" name="dia_chi" placeholder="Nhập địa chỉ">
							</div>
							<div class="form-group ">
								<input type="text" class="form-control" name="sdt" placeholder="Nhập số điện thoại">
							</div>
							<button type="submit" name="submit" class="btn btn-default button" value="Register">Đăng Ký</button>
						</form>
						<div class="duoi">
							<span>Bạn đã có tài khoản ?</span>
							<a class="linkdangnhaptd">Đăng nhập</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdktd -->
	<div class="clickform clickdktv clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn dk">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<h3>ĐĂNG KÝ TÀI KHOẢN</h3>
						<h6>( Dành cho Thành viên )</h6>
						<form action="user/register" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group us">
										<input type="text" class="form-control" name="ho_ten" placeholder="Họ và tên..">				
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" name="gioi_tinh" placeholder="Giới tính..">
									</div>
									<div class="form-group us">
										<input type="tel" class="form-control" name="phone" placeholder="Số điện thoại..">		
									</div>
									<div class="form-group us">
										<input type="email" class="form-control" name="email" placeholder="Email (để quản lý CV về sau)...">
									</div>
									<div class="form-group pw">
										<input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
									</div>
									<div class="form-group pw">
										<input type="password" class="form-control" name="repass" placeholder="Nhập lại mật khẩu">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<select class="form-control" name="ten_tinh">
											<option selected="">Tỉnh thành..</option>
											<?php
											for ($i=0; $i < count($data[2]); $i++) {
											?>
											<option value="<?php echo $data[2][$i]['id_tinh'] ?>"><?php echo $data[2][$i]['ten_tinh'] ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<select class="form-control" name="ten_chuyen_nganh">
											<option selected="">Chọn chuyên ngành..</option>
											<?php
											for ($i=0; $i < count($data[2]); $i++) {
											?>
											<option value="<?php echo $data[3][$i]['id_chuyen_nganh'] ?>"><?php echo $data[3][$i]['ten_chuyen_nganh'] ?></option>
										<?php } ?>
										</select>
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" name="ngay_sinh" placeholder="Ngày sinh...">				
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" name="website" placeholder="Webstie...">				
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" name="mo_ta_ngan" placeholder="Mô tả ngắn...">
									</div>	
									<div class="form-group us">
										<input type="text" class="form-control" name="quoc_tich" placeholder="Quốc tịch...">
									</div>			
								</div>
								<div class="col-sm-12">
									<button type="submit" name="submit" class="btn btn-default button" value="Register">Đăng Ký</button>
								</div>
							</div>
						</form>
						<div class="duoi">
							<span>Bạn đã có tài khoản ?</span>
							<a class="linkdangnhaptv">Đăng nhập</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdktv -->
	<header class="menu-top-fixed">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="" class="logo-main"><img src="public/img/logo.png" alt="" class=""></a>
				</div>
				<div class="col-md-7">
					<form class="example form-search" action="action_page.php">
						<input type="text" placeholder="Tìm kiếm.." name="search">
						<div class="form-group fl">
							<div class="icon-map"><i class="fa fa-map-marker"></i></div>
							<select id="inputState" class="form-control">
								<option selected>Tất cả địa điểm </option>
								<option></option>
								
							</select>
						</div>
						<div class="form-group fl cn">
							<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
							<select id="inputState" class="form-control ">
								<option selected>Tất cả chuyên ngành </option>
								<option></option>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<div class="col-md-3 header-right">
					<?php
			if((!isset($_SESSION['user']))){ ?>
			<!-- if(($_SESSION['user']) == ""){ ?> -->
						<div class="content">	
						<a id="dangnhap"><i class="fa fa-user-circle"></i> <span>Đăng nhập</span></a>
						<a id="dangky"><i class="fa fa-plus-circle"></i> <span>Đăng ký</span></a>
						</div>
			<?php } else { ?>
				<div class="dropdown">
							<a class="btn btn-outline-secondary dropdown-toggle info" href="#" role="button" id="dropdowntk" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?php echo $_SESSION['user']['hinh_anh']  ?>" alt="">
								<span class="name"><?php echo $_SESSION['user']['ho_ten']  ?></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdowntk">
								<a class="dropdown-item" href="user/viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>">CV cá nhân</a>
								<a class="dropdown-item" href="user/logout">Đăng xuất</a>
							</div>
						</div>
			<?php }
			?>	
					</div>
				</div>
			</div>
		</div>
	</header> <!-- end header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="index.html" class="logo-main"><img src="public/img/logo.png" alt="" class=""></a>
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
								<option></option>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>

				</div>
				<div class="col-md-3 header-right">
					<div class="content">	
						<a id="dangnhap"><i class="fa fa-user-circle"></i> <span>Đăng nhập</span></a>
						<a id="dangky"><i class="fa fa-plus-circle"></i> <span>Đăng ký</span></a>
					</div>
					
				</div>
			</div>
		</div>
		<script src="public/js/login.js"></script>
	</header> <!-- end header background - mobile -->

	