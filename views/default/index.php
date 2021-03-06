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
					<a href="user/taocv/<?php echo $_SESSION['user']['id_tv']  ?>" class="button-create">
						<i class="fa fa-pencil"></i> <span class="content">Tạo cv đầu tiên</span>
					</a>
				</div> <!-- end layer2 -->
			</div>
		</div> <!-- end-banner -->
		<div class="nd-chinh">
			<div class="container">
				<div class="row">
					<div class="col-md-8 cv-moi frame-out">
						<div class="col-md-12 tieude">
							<h2>CV MỚI CẬP NHẬT</h2>
							<span class="kengang"></span>
						</div>
							<?php
					for ($i=0; $i < count($data[0]); $i++) {
						?>
						<div class="col-md-4 col-6 mot-tin">
							<a href="index/trangcv/<?php echo $data[0][$i]['id_tv'] ?>">
								<img src="<?php echo $data[0][$i]['hinh_anh'] ?>">
								<h4><?php echo $data[0][$i]['ho_ten'] ?></h4>
								<span><?php echo $data[0][$i]['ten_chuyen_nganh'] ?></span>
							</a>
						</div> <!-- hết mot-tin -->
						<?php
					}
						?>
					</div> <!-- end cv-moi -->
					<div class="col-md-4 ">
						<div class="sidebar">
							<div class="frame-out">
								<div class="col-md-12 tieude">
									<h2>Danh sách tin đã đăng</h2>
									<span class="kengang"></span>
								</div>
								<div class="col-md-12">
									<ul class="content">
										<?php
											for ($i=0; $i < count($data[1]); $i++) {
										?>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="index/tintuyendung/<?php echo $data[1][$i]['id_tt'] ?>">
												<?php echo $data[1][$i]['tieu_de'] ?>
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
		</main> <!-- main -->
<?php include "footer.php"; ?>