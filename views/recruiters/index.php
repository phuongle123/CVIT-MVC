<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<main>
	<div class="nd-chinh">
		<div class="container">
			<div class="row">
				<div class="col-md-12 cv-moi frame-out">
					<div class="col-md-12 tieude">
						<h2>ĐĂNG TIN TUYỂN DỤNG</h2>
						<span class="kengang"></span>
					</div>
					<form action="dang_tt" method="POST">

						<div class="col-md-12 dttd">
							<div class="form-group">
								<h6 class="my-3">Tiêu đề tin tuyển dụng :</h6>
								<input type="text" class="form-control" id="tieu_de" name="tieu_de" value="">
								<h6 class="my-3">Nội dung tin tuyển dụng :</h6>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" id="noi_dung" name="noi_dung"></textarea>
							</div>
							<button type="submit" class="btn btn-primary button" name="submit">Đăng tin</button>
						</div>
					</form>
				</div> <!-- end dttd -->
				
				</div>

			</div>
</main> <!-- main -->
<?php include "footer.php"; ?>