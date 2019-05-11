<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<style>
	a.btn.btn-primary.button.btn-block.btnapply {
		width: 20%;
		margin-bottom: 0px;
	}
</style>
<main>
		<div class="nd-chinh">
			<div class="container">
				<div class="row">
					<div class="col-md-8 frame-out tab-ttd ">
						<?php
					for ($i=0; $i < count($data[0]); $i++) {
						?>
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tin tuyển dụng</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Thông tin nhà tuyển dụng</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<h3 class="td pb-2"><?php echo $data[0][$i]['tieu_de'] ?></h3>
								<p class="nd">
									<?php echo $data[0][$i]['noi_dung'] ?>
								</p> 
								<hr>
								<div class="col-sm-12 text-center py-1">
									<span>Bạn đã sẵn sàng apply chưa?</span>
									<a class="btn btn-primary button btn-block btneditinfontd btnclick btnapply" >Apply</a>
								</div> <!-- end button edit info -->
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								<div class="row">
									<div class="col-sm-8 m-auto">
										<div class="row">
											<div class="col-sm-8 info-ntd">
												<div class="row">
													<div class="col-sm-4 text-right fbold">
														Tên công ty :
													</div>
													<div class="col-sm-8">
														<?php echo $data[0][$i]['ten_cong_ty'] ?>
													</div>
												</div> <!-- end 1 row info-ntd -->
												<div class="row">
													<div class="col-sm-4 text-right fbold">
														Địa chỉ :
													</div>
													<div class="col-sm-8">
														<?php echo $data[0][$i]['dia_chi'] ?>
													</div>
												</div> <!-- end 1 row info-ntd -->
												<div class="row">
													<div class="col-sm-4 text-right fbold">
														Điện thoại :
													</div>
													<div class="col-sm-8">
														<?php echo $data[0][$i]['sdt'] ?>
													</div>
												</div> <!-- end 1 row info-ntd -->
												<div class="row">
													<div class="col-sm-4 text-right fbold">
														Email :
													</div>
													<div class="col-sm-8">
														<a href="#"><?php echo $data[0][$i]['email'] ?></a>
													</div>
												</div> <!-- end 1 row info-ntd -->
											</div> <!-- end info-ntd -->
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
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
										<a href="index/dstintuyendung">Xem chi tiết <i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div> <!-- end frame-out -->
							</div> <!-- end sidebar -->
						</div> <!-- end col-md-4 -->
					</div> <!-- end row -->
				</div>  <!-- end container -->
			</div> <!-- end nd-chinh -->
		</main> <!-- main -->
<?php include "footer.php"; ?>