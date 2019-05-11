<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<main>
		<div class="container-fluid banner">
			<div class="row">
				<div class="layer1">

				</div>
				<div class="layer2">
					<h2>BẠN CHƯA CÓ CV CHO RIÊNG MÌNH?</h2>
					<p>Dễ dàng tạo hồ sơ xin việc với nhiều mẫu CV đẹp, ấn tượng chỉ trong 5 phút!</p>
					<a href="#" class="button-create">
						<i class="fa fa-pencil"></i> <span class="content">Tạo cv đầu tiên</span>
					</a>
				</div> <!-- end layer2 -->
			</div>
		</div> <!-- end-banner -->
		<div class="container chuyen-nganh">
			<div class="row">
				<?php
					for ($i=0; $i < count($data[0]); $i++) {
				?>
				<div class="col-md-12 tieude-cn">
					<h2><?php echo $data[0][$i]['ten_chuyen_nganh'] ?></h2> 
					<span class="kengang"></span>
				</div>
				<?php } ?>
				<?php
					for ($i=0; $i < count($data[1]); $i++) {
				?>
				<div class="col-md-12 mot-tin">
					
					<div class="bg-mottin">
						<img src="<?php echo $data[1][$i]['hinh_anh'] ?>" alt="" >

						<div class="chitiet">
							<h4 ><?php echo $data[1][$i]['ho_ten'] ?></h4>
							<p class="cn">
								<span>Chuyên ngành: <?php echo $data[1][$i]['ten_chuyen_nganh'] ?></span> 
							</p>
							<p class="about"> <?php echo $data[1][$i]['mo_ta_ngan'] ?> </p>
							<a href="index/trangcv/<?php echo $data[1][$i]['id_tv'] ?>"class="button">Xem chi tiết</a>
						</div>
					</div> <!-- hết mot-tin -->
				</div>
				<?php } ?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 m-auto">
						<div class="sidebar">
							<div class="frame-out">
								<div class="col-md-12 tieude">
									<h2>Danh sách tin đã đăng</h2>
									<span class="kengang"></span>
								</div>
								<div class="col-md-12">
									<ul class="content">
										<?php
											for ($i=0; $i < count($data[2]); $i++) {
										?>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="index/tintuyendung/<?php echo $data[2][$i]['id_tt'] ?>">
												<?php echo $data[2][$i]['tieu_de'] ?>
											</a>
										</li> <!-- end mottin tuyen dung -->
										<?php
											}
										?>
									</ul>
									<div class="btn-about">
										<a href="index/dstintuyendung">
											Xem chi tiết <i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div> <!-- end frame-out -->
						</div> <!-- end sidebar -->
					</div>
				</div>
			</div>
		</div>
	</div>
</main> <!-- main -->
<?php include "footer.php"; ?>