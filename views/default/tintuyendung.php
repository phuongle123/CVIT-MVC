<main>
<div class="nd-chinh">
<div class="container">
	<div class="row">
		<div class="col-md-8 cv-moi frame-out">
			<div class="col-md-12 tieude">
				<h2>TIN TUYỂN DỤNG</h2>
				<span class="kengang"></span>
			</div>
			<div class="col-md-12 dttd">

				<?php
				var_dump($data[0]);
					for ($i=0; $i < count($data[0]); $i++) {
				?>
				<h2 class="td"><?php echo $data[0][$i]['id_tt'] ?></h2>
				<h2 class="td"><?php echo $data[0][$i]['tieu_de'] ?></h2>
				<p class="nd">
					<?php echo $data[0][$i]['noi_dung'] ?>
				</p>
				<hr>
				<?php } ?>
			</div>
			</div> <!-- end dttd -->
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
										<a href="user/tintuyendung-tv.html">
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