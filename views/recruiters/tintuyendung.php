<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
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
<?php include "footer.php"; ?>