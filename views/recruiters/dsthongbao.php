<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<main>
		<div class="nd-chinh">
			<div class="container">
				<div class="row">
					<div class="col-md-12 cv-moi frame-out">
						<div class="col-md-12 tieude">
							<h2>THÔNG BÁO CỦA BẠN</h2>
							<span class="kengang"></span>
						</div>
						<div class="col-md-8 m-auto dttd dstd">
							<?php
					for ($i=0; $i < count($data[0]); $i++) {
					?>
							<ul class="list-cv">
								<li class="cv-item">
									<div class="row">
										<div class="col-sm-8">
											<h6 class="td"><span class="title-tb">
												<span class="name-cv">"<?php echo $data[0][$i]['ho_ten'] ?>"</span>
												đã vừa Apply vào tin <span class="name-ntd"> "<?php echo $data[0][$i]['tieu_de'] ?>"</span>
											</span></h6>
										</div>
										<div class="col-sm-4 right">
											<a href="tintuyendung/<?php echo $data[0][$i]['id_tt'] ?>" class="btn btn-outline-primary float-right">Xem chi tiết</a>
										</div>
									</div>
								</li> <!-- end item thongbao -->
							</ul> <!-- end list thongbao -->
						<?php } ?>
						</div>
					</div>
				</div> <!-- end dttd -->
			</div> <!-- end row -->
		</div>  <!-- end container -->
	</div> <!-- end nd-chinh -->
</main> <!-- main -->
<?php include "footer.php"; ?>