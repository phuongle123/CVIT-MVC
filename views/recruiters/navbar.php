<nav class="navbar navbar-expand-lg navbar-dark menu-dad">
	<div class="container">
		<div class="row">
			<div class="col-md-12 khoinut-mobile">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false ">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="buttonsearch-mobile" data-toggle="collapse" href="#search-mobile" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i></a>
			</div>
			<div class="col-md-12">
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link home-link" href="/CVIT-MVC/recruiters/index"><i class="fa fa-home"></i>TRANG CHỦ</a>
						</li>
						<li class="nav-item cn">
							<a class="nav-link" href="dscvapply" role="button">DANH SÁCH CV APPLY</a>
						</li>
						<li class="nav-item cn">
							<a class="nav-link" href="dstintuyendung/<?php echo $_SESSION['recruiters']['id_ntd'] ?>" role="button">DANH SÁCH TIN</a>
						</li>
					</ul> <!-- end ul -->
				</div>
				<form id="search-mobile" class="example form-search collapse" action="action_page.php">
					<input type="text" placeholder="Tìm kiếm.." name="search">
					<div class="form-group fl">
						<div class="icon-map"><i class="fa fa-map-marker"></i></div>
						<select id="inputState" class="form-control">
							<option selected>Tất cả địa điểm </option>
							<option>Cần Thơ</option>
							<option>Kiên Giang</option>
							<option> An Giang</option>
						</select>
					</div>
					<div class="form-group fl cn">
						<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
						<select id="inputState" class="form-control ">
							<option selected>Tất cả chuyên ngành </option>
							<option>Kỹ thuật phần mềm</option>
							<option>Khoa học máy tính</option>
							<option>Hệ thống thông tin</option>
						</select>
					</div>
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
	</div>
</nav> <!--nav -->