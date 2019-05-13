<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>

	<!-- font -->
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
	<div class="fix-phai">
		<a href="#" class="btn len-tren"><i class="fa fa-chevron-up"></i></a>
		<!-- <a href="" class="btn xuong-duoi"><i class="fa fa-chevron-down"></i></a> -->
	</div>
	<div class="container-fluid phan-1">
		<img src="../../public/img/3.jpg" alt="" class="layer-1">
		<div class="layer-2"></div>
		<div class="layer-3">
			<?php
				for ($i=0; $i < count($data[0]); $i++) {
			?>
			<i class="fa fa-graduation-cap" style="font-size:80px;"></i>
			<h2><?php echo $data[0][$i]['ho_ten'] ?></h2>
			<h1><?php echo $data[0][$i]['ten_chuyen_nganh'] ?></h1>
			<p><?php echo $data[0][$i]['mo_ta_ngan'] ?></p>
		<?php } ?>
		</div>
	</div> <!-- hết phan-1 -->
	<div class="phan-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 tieu-de">
					<h2>Giới thiệu về tôi</h2>
				</div>
				<?php
						for ($i=0; $i < count($data[0]); $i++) {
				?>
				<div class="col-md-5 anh">
					<div class="khung-anh">
						<img src="../../<?php echo $data[0][$i]['hinh_anh'] ?>" alt="">
					</div>
				</div>
				<div class="col-md-7 content">
					<p><span>Họ và tên:</span><small class="ho-ten"><?php echo $data[0][$i]['ho_ten'] ?></small></p>
					<p><span>Ngày sinh:</span><?php echo $data[0][$i]['ngay_sinh'] ?></p>
					<p><span>Giới tính:</span><?php echo $data[0][$i]['gioi_tinh'] ?></p>
					<p><span>Địa chỉ:</span><?php echo $data[0][$i]['ten_tinh'] ?></p>
					<p><span>Quốc tịch:</span><?php echo $data[0][$i]['quoc_tich'] ?></p>
					<p><span>Phone:	</span><?php echo $data[0][$i]['phone'] ?></p>
					<p><span>Email:</span><?php echo $data[0][$i]['email'] ?></p>
					<p><span>Website:</span><?php echo $data[0][$i]['website'] ?></p>
				</div>
				<?php } ?>
			</div>
		</div>
	</div> <!-- hết phan-2 -->
	<div id="particles-js" class="phan-3">
		<div class="container noflow">
			<div class="row">
				<div class="col-md-6">
					<div class="card hoc-van">
						<div class="card-header ">
							Trình độ học vấn
						</div>				
						<div class="card-body">
							<?php
								for ($i=0; $i < count($data[1]); $i++) {
							?>
							<div class="mot-field">
								<div class="nam"><?php echo $data[1][$i]['time'] ?></div>
								<div class="noidung">
									<p><h6 class="td"><?php echo $data[1][$i]['noi_hoc'] ?></h6></p>
									<p><?php echo $data[1][$i]['chi_tiet'] ?></p>
								</div>
							</div> <!-- end 1 field -->
							<?php } ?>
						</div>
					</div>
				</div> <!-- end 1 card -->	
				<div class="col-md-6">
					<div class="card chung-chi">
						<div class="card-header ">
							Chứng chỉ
						</div>
						<div class="card-body">
							<?php
								for ($i=0; $i < count($data[2]); $i++) {
							?>
							<div class="mot-field">
								<div class="nam"><?php echo $data[2][$i]['time'] ?></div>
								<div class="noidung">
									<p><?php echo $data[2][$i]['ten_chung_chi'] ?></p>
								</div>
							</div> <!-- end 1 field -->
							<?php } ?>
						</div>
					</div>
				</div> <!-- end 1 card -->
				<div class="col-md-6">
					<div class="card giai-thuong">
						<div class="card-header ">
							Giải thưởng
						</div>
						<div class="card-body">
							<?php
								for ($i=0; $i < count($data[3]); $i++) {
							?>
							<div class="mot-field">
								<div class="nam"><?php echo $data[3][$i]['ten_giai_thuong'] ?></div>
								<div class="noidung">
									<p><?php echo $data[3][$i]['time'] ?></p>
								</div>
							</div> <!-- end 1 field -->
							<?php } ?>
						</div>
					</div>
				</div> <!-- end 1 card -->
				<div class="col-md-6">
					<div class="card hoat-dong">
						<div class="card-header ">
							Hoạt động
						</div>
						<div class="card-body">
							<?php
								for ($i=0; $i < count($data[4]); $i++) {
							?>
							<div class="mot-field">
								<div class="nam"><?php echo $data[4][$i]['time'] ?></div>
								<div class="noidung">
									<p><h6><?php echo $data[4][$i]['ten_hoat_dong'] ?></h6></p>
									<p><?php echo $data[4][$i]['noi_dung'] ?></p>
								</div>
							</div> <!-- end 1 field -->
							<?php } ?>
						</div>
					</div>
				</div> <!-- end 1 card -->		
			</div>
			<script src='https://cldup.com/S6Ptkwu_qA.js'></script>
			<script  src="../../public/js/particle.js"></script>
		</div>
	</div><!-- hết phan-3 -->
	<div class="phan-4">
		<div class="container">
			<div class="row">
				<div class="ke-doc">
					<!-- <div class="hinh-tron top"></div> -->
					<div class="hinh-tron mid-1"></div>
					<div class="hinh-tron mid-2"></div>
					<div class="hinh-tron mid-3"></div>
					<!-- <div class="hinh-tron bottom"></div> -->
				</div>

				<div class="col-md-6 so-thich">
					<div class="card w-75 float-right mr-5">
						<div class="hinh-vuong"></div>
						<div class="card-body">
							<h5 class="card-title">SỞ THÍCH</h5>

							<div class="noidung">
								<?php
									for ($i=0; $i < count($data[5]); $i++) {
								?>
								<div class="mot-tin">
									<i class="fa fa-check-circle"></i>
									<span class="td"><?php echo $data[5][$i]['ten_so_thich'] ?></span> <br>
								</div> <!-- hết mot-tin -->
								<?php } ?>
							</div>
							
						</div>
					</div>
				</div> <!-- hết so-thich -->
				<div class="col-md-6 ky-nang ">

					<div class="card w-75 float-left ml-5">
						<div class="hinh-vuong"></div>
						<div class="card-body">
							<h5 class="card-title">KỸ NĂNG</h5>
							<div class="noidung">
								<?php
									for ($i=0; $i < count($data[6]); $i++) {
								?>
								<div class="mot-tin">
									<i class="fa fa-check-circle"></i>
									<span class="td"><?php echo $data[6][$i]['ten_ky_nang'] ?></span>
								</div> <!-- hết mot-tin -->
								<?php } ?>
							</div>
						</div>
					</div>
				</div> <!-- hết so-thich -->
				<div class="col-md-6 kinh-nghiem ">
					<div class="card w-75 float-right mr-5">
						<div class="hinh-vuong"></div>
						<div class="card-body">
							<h5 class="card-title">KINH NGHIỆM</h5>
							<div class="noidung">
								<?php
									for ($i=0; $i < count($data[7]); $i++) {
								?>
								<div class="mot-tin">
									<span class="nam"><?php echo $data[7][$i]['time'] ?></span>
									<span class="td"><?php echo $data[7][$i]['noi_lam'] ?></span>
									<span class="chitiet"><?php echo $data[7][$i]['chi_tiet'] ?></span>
								</div> <!-- hết mot-tin -->
								<?php } ?>
							</div>
						</div>
					</div>
				</div> <!-- hết kinh-nghiem -->
			</div>
		</div>
	</div> <!-- hết phan-4 -->
	<div class="phan-5">
		<div class="container">
			<div class="row">
				<?php
					for ($i=0; $i < count($data[8]); $i++) {
				?>
				<div class="col-md-12 tieu-de">
					<h2>DỰ ÁN</h2>
					<h5><?php echo $data[8][$i]['ten_du_an'] ?></h5>
					<span><?php echo $data[8][$i]['time'] ?></span>
				</div>

				<div class="col-md-12">
					<table class="table table-bordered w-75 m-auto">
						<tbody>
							<tr>
								<th>Mô tả</th>
								<td>
									<p><?php echo $data[8][$i]['mo_ta'] ?></p>
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
				</div>
				<?php } ?>
				<div class="col-md-12">
					<center>
						<a href="" class="btn btn-outline-success" >Chấp nhận</a>
						<a href="" class="btn btn-outline-secondary" >Từ chối</a>
					</center>
				</div>
			</div>
		</div>
	</div> <!-- 5 -->
	
</body>
</html>