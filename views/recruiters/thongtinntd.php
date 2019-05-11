<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
	
	<main>
		<div class="nd-chinh">
			<div class="container">
				<div class="row">
					<div class="col-md-12 cv-moi frame-out info-ntd">
						<div class="row">
							<div class="col-md-12 tieude">
								<h2>THÔNG TIN CỦA BẠN</h2>
								<span class="kengang"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10 m-auto">
								<div class="row">
									<div class="col-sm-8 info-ntd">
										<div class="row">
											<div class="col-sm-4 text-right fbold">
												Tên công ty :
											</div>
											<div class="col-sm-8">
												<?php echo $_SESSION['recruiters']['ten_cong_ty'] ?>
											</div>
										</div> <!-- end 1 row info-ntd -->
										<div class="row">
											<div class="col-sm-4 text-right fbold">
												Địa chỉ :
											</div>
											<div class="col-sm-8">
												<?php echo $_SESSION['recruiters']['dia_chi'] ?>
											</div>
										</div> <!-- end 1 row info-ntd -->
										<div class="row">
											<div class="col-sm-4 text-right fbold">
												Điện thoại :
											</div>
											<div class="col-sm-8">
												<?php echo $_SESSION['recruiters']['sdt'] ?>
											</div>
										</div> <!-- end 1 row info-ntd -->
										<div class="row">
											<div class="col-sm-4 text-right fbold">
												Email :
											</div>
											<div class="col-sm-8">
												<a href="#"><?php echo $_SESSION['recruiters']['email'] ?></a>
											</div>
										</div> <!-- end 1 row info-ntd -->
									</div> <!-- end info-ntd -->
									<div class="col-sm-12 text-center py-1">
										<a class="btn btn-primary button btn-block btneditinfontd btnclick" id=""><i class="fa fa-pencil"></i> Sửa thông tin</a>
									</div> <!-- end button edit info -->
								</div>
							</div>
						</div>
					</div> <!-- end edit  -->
				</div> <!-- end dttd -->
			</div> <!-- end row -->
		</div>  <!-- end container -->
	</div> <!-- end nd-chinh -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('a#btneditinfontd').click(function(){
			$('div.clickform').removeClass('clickan');
			$('div.clickform').addClass('clickhien');
		})
		$('.btnclick').click(function(){
			$('div.clickform').removeClass('clickan');
			$('div.clickform').addClass('clickhien');
		})
	</script>
</main> <!-- main -->
<?php include "footer.php"; ?>
	
		
