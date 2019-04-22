<main>
	<div class="nd-chinh">
		<div class="container">
			<div class="row">
				<div class="col-md-12 cv-moi frame-out">
					<div class="col-md-12 tieude">
						<h2>DANH SÁCH TIN TUYỂN DỤNG</h2>
						<span class="kengang"></span>
					</div>
					<?php
						for ($i=0; $i < count($data[0]); $i++) {
					?>
					<div class="col-md-8 m-auto dttd dstd">
						<ul class="list-cv">
							
							<li class="cv-item">
								<div class="row">
									<div class="col-sm-8">
										<h6 class="td"><?php echo $data[0][$i]['tieu_de'] ?></h6>
									</div>
									<div class="col-sm-4 right">
										<a href="index/tintuyendung/<?php echo $data[0][$i]['id_tt'] ?>" class="btn btn-outline-primary float-right">Xem chi tiết</a>
									</div>
								</div>
							</li> <!-- end item tintuyendung -->
						</ul> <!-- end list tintuyendung -->
					</div>
					<?php
								}
							?>
				</div> <!-- end dttd -->
			</div> <!-- end row -->
		</div>  <!-- end container -->
	</div> <!-- end nd-chinh -->
</main><!-- main -->