<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<main>
		<div class="container chuyen-nganh">
			<div class="row">
				<div class="col-md-12 tieude-cn">
					<h2>DANH SÁCH CV APPLY</h2>
					<span class="kengang"></span>
				</div>
				<?php
					for ($i=0; $i < count($data[0]); $i++) {
					?>
				<div class="col-md-12 mot-tin">	

					<div class="bg-mottin">
						
						<img src="../<?php echo $data[0][$i]['hinh_anh'] ?>" alt="" >

						<div class="chitiet">
							<h4><?php echo $data[0][$i]['ho_ten'] ?></h4>
							<p class="cn">
								<span>Chuyên ngành: <?php echo $data[0][$i]['ten_chuyen_nganh'] ?></span> 
							</p>
							<p class="about"> Apply vào tin: <a href="tintuyendung/<?php echo $data[0][$i]['id_tt'] ?>"><?php echo $data[0][$i]['tieu_de'] ?></a> </p>
							<a href="viewcv/<?php echo $data[0][$i]['id_tv'] ?>"class="button">Xem chi tiết</a>
						</div>
					</div> <!-- hết mot-tin -->	
				
				</div>
				<?php } ?>
		</main> <!-- main -->
<?php include "footer.php"; ?>