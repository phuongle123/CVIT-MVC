<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>
	<link rel="icon" href="../../public/img/favicon-logo.png">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="../../public/css/style.css">
	<link rel="stylesheet" href="../../public/css/taocv.css">
</head> <!-- end head -->
<body class="edit-cv ">
	<div class="why">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 title text-center py-1">
					<h2>TẠO CV</h2>
					<div class="line">
						<div class="linecolor"></div>
						<div class="icon"><i class="fa fa-codepen"></i></div>
					</div>
				</div> <!-- end title -->
				<div class="col-sm-12 tab">
					<div class="tabbtn">
						<ul>
							<li class="active"><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>ẢNH ĐẠI DIỆN</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-graduation-cap"></i>	TRÌNH ĐỘ HỌC VẤN</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-address-card-o"></i> CHỨNG CHỈ</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-trophy"></i>	GIẢI THƯỞNG</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-child"></i> HOẠT ĐỘNG</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-heart-o"></i>	SỞ THÍCH</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i> KỸ NĂNG</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-paper-plane-o"></i>	KINH NGHIỆM</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-archive"></i> DỰ ÁN</a></li>
						</ul>
					</div> <!-- end tabbtn  -->
					<div class="content">
						<ul>
							<li class="content1 showup">
								<form action="../controller/anh_dai_dien.php?id_tv=<?php echo $document['id_tv'];?>" method="POST" enctype="multipart/form-data" >
									<div class="contentitem">
										<div class="phan-5">
											<div class="container">
												<div class="row">
													<div class="col-md-12 tieu-de">
														<h2>Cập nhật ảnh đại diện</h2>
													</div>
													<div class="col-md-4 m-auto">
													<div class="khung-anh">
														<div class="update-anhbia update-avatar">
																<div class="form-group">
																	<label for="exampleFormControlFile1"><i class="fa fa-camera" name="image"></i> Cập nhật ảnh đại diện</label>
																	<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
																</div>
														</div> <!-- end update-avatar -->
														<img src="" alt="">
														<script>
																	$("body").on("change", ".form-control-file", function(){
																        var ready = new FileReader();
																        ready.onload  = function(e){
																            $(".img").attr('src', e.srcElement.result);
																        };
																        ready.readAsDataURL(this.files[0]);
																     });
														</script>
													</div>
													</div>

												<div class="col-md-12">
													<center>
														<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
														<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
													</center>					
												</div>
												</div>
											</div>
										</div> <!-- 5 -->
									</div> <!-- end contentitem -->
								</form>
							</li>
							<li class="content1">
								<form action="../../taocv/hocvan" method="POST">
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
												<div class="col-md-12 tieu-de">
													<h2>TRÌNH ĐỘ HỌC VẤN</h2>
												</div>
												<div class="col-md-12">
													<table class="table table-bordered w-75 m-auto">
														<tbody>
															<tr>
																<th>Năm học</th>
																<td>
																	<input name="time" type="text" value="2018">
																</td>
															</p>
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Tên nơi học</th>
														<td>
															<input name="noi_hoc" type="text" value="Trường..">
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Ghi chú</th>
														<td>
															<input name="chi_tiet" type="text" value="...">
														</td>
													</tr> <!-- hết 1 row -->
												</tbody>
											</table>
										</div>

										<div class="col-md-12">
											<center>
												<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
												<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
											</center>					
										</div>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</form>
					</li>
					<li class="content2">
						<form action="../../taocv/chungchi" method="POST">
						<div class="contentitem">
							<div class="phan-5">
								<div class="container">
									<div class="row">
										<div class="col-md-12 tieu-de">
											<h2>CHỨNG CHỈ</h2>
										</div>
										<div class="col-md-12">
											<table class="table table-bordered w-75 m-auto">
												<tbody>
													<tr>
														<th>Năm học</th>
														<td>
															<input name="time" type="text" value="2018">
														</td>
													</p>
												</td>
											</tr> <!-- hết 1 row -->
											<tr>
												<th>Tên chứng chỉ</th>
												<td>
													<input name="ten_chung_chi" type="text" value="Chứng chỉ tin học..">
												</td>
											</tr> <!-- hết 1 row -->
										</tbody>
									</table>
								</div>
								<div class="col-md-12">
									<center>
										<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
										<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
									</center>					
								</div>
							</div>
						</div>
					</div> <!-- 5 -->
				</div> <!-- end contentitem -->
			</form>
			</li>
			<li class="content3">
				<form action="../../taocv/giai_thuong" method="POST">
				<div class="contentitem">
					<div class="phan-5">
						<div class="container">
							<div class="row">
								<div class="col-md-12 tieu-de">
									<h2>GIẢI THƯỞNG</h2>
								</div>
								<div class="col-md-12">
									<table class="table table-bordered w-75 m-auto">
										<tbody>
											<tr>
												<th>Thời gian</th>
												<td>
													<input name="time" type="text" value="2018">
												</td>
											</p>
										</td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Tên giải thưởng</th>
										<td>
											<input name="ten_giai_thuong" type="text" value="Học bổng..">
										</td>
									</tr> <!-- hết 1 row -->
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<center>
								<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
								<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
							</center>					
						</div>
					</div>
				</div>
			</div> <!-- 5 -->
		</div> <!-- end contentitem -->
	</form>
	</li>
	<li class="content4">
		<form action="../../taocv/hoatdong" method="POST">
		<div class="contentitem">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>HOẠT ĐỘNG</h2>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered w-75 m-auto">
								<tbody>
									<tr>
										<th>Thời gian</th>
										<td>
											<input name="time" type="text" value="2018">
										</td>
									</p>
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Tên hoạt động</th>
								<td>
									<input name="ten_hoat_dong" type="text" value="Nhóm tình nguyện hè..">
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Ghi chú</th>
								<td>
									<input name="noi_dung" type="text" value="...">
								</td>
							</tr> <!-- hết 1 row -->
						</tbody>
					</table>
				</div>

				<div class="col-md-12">
					<center>
						<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
						<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
					</center>					
				</div>
			</div> <!-- 5 -->
		</div> <!-- end contentitem -->
	</form>
	</li>
	<li class="content4">
		<form action="../../taocv/sothich" method="POST">
		<div class="contentitem">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>SỞ THÍCH</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
								<select id="inputState" class="form-control" name="ten_so_thich">
									<option selected>Chọn sở thích</option>
									<?php
										for ($i=0; $i < count($data[0]); $i++) {
									?>
									<option value="<?php echo $data[0][$i]['id_so_thich'] ?>"><?php echo $data[0][$i]['ten_so_thich'] ?></option>
										<?php 	} ?>	
								</select>
							</div>
							<span class="td stk"><input type="text" placeholder="Sở thích khác.." value="" name="ten_kn"> <button  class="btn btn-info">Thêm</button></span> 		
						</div>
						<div class="col-md-12">
							<center>
								<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
								<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
							</center>					
						</div>
					</div>
				</div> <!-- 5 -->
			</div> <!-- end contentitem -->
		</form>
		</li>
		<li class="content4">
			<form action="../../taocv/kynang" method="POST">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>KỸ NĂNG</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
								<select id="inputState" class="form-control" name="ten_ky_nang">
									<option selected>Chọn kỹ năng</option>	
									<?php
										for ($i=0; $i < count($data[1]); $i++) {
									?>
									<option value="<?php echo $data[1][$i]['id_kn'] ?>"><?php echo $data[1][$i]['ten_ky_nang'] ?></option>
										<?php 	} ?>	
								</select>
							</div>
							<span class="td stk"><input type="text" placeholder="Kỹ năng khác.." value="" name="ten_kn"> <button name="ten_ky_nang" class="btn btn-info">Thêm</button></span> 			
						</div>
						<div class="col-md-12">
							<center>
								<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
								<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
							</center>					
						</div>
					</div>
				</div> <!-- 5 -->
			</div> <!-- end contentitem -->
		</form>
		</li>
		<li class="content4">
			<form action="../../taocv/kinhnghiem" method="POST">
			<div class="contentitem">
				<div class="phan-5">
					<div class="container">
						<div class="row">
							<div class="col-md-12 tieu-de">
								<h2>KINH NGHIỆM</h2>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered w-75 m-auto">
									<tbody>
										<tr>
											<th>Thời gian</th>
											<td>
												<input name="time" type="text" value="2018">
											</td>
										</p>
									</td>
								</tr> <!-- hết 1 row -->
								<tr>
									<th>Tên kinh nghiệm</th>
									<td>
										<input name="noi_lam" type="text" value="Thực tập thực tế..">
									</td>
								</tr> <!-- hết 1 row -->
								<tr>
									<th>Ghi chú</th>
									<td>
										<input name="chi_tiet" type="text" value="...">
									</td>
								</tr> <!-- hết 1 row -->
							</tbody>
						</table>
					</div>

					<div class="col-md-12">
						<center>
							<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
							<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
						</center>					
					</div>
				</div>
			</div>
		</div> <!-- 5 -->
	</div> <!-- end contentitem -->
</form>
</li>
<li class="content4">
	<form action="../../taocv/duan" method="POST">
	<div class="contentitem">
		<div class="phan-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 tieu-de">
						<h2>DỰ ÁN</h2>
					</div>
					<div class="col-md-12">
						<table class="table table-bordered w-75 m-auto">
							<tbody>
								<tr>
								<th>Tên dự án</th>
								<td><input name="ten_du_an" type="text" value="8"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Time</th>
								<td><input name="time" type="text" value="8"></td>
							</tr> <!-- hết 1 row -->
								<tr>
									<th>Mô tả</th>
									<td>
										<textarea name="mo_ta">- Ứng dụng mobile giúp mọi người đặt vé nhanh chóng bất kì lúc nào, bất kì nơi đâu.
										</textarea>
									</p>
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Số lượng thành viên</th>
								<td><input name="so_luong" type="text" value="8"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Vị trí trong công việc</th>
								<td><input name="vi_tri_cong_viec" type="text" value="- Lập trình viên"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Vai trò trong dự án</th>
								<td>
									<textarea name="vai_tro">- Phân tích và thiết kế hệ thống, phát triển module, tối ưu code, sửa lỗi
									</textarea>
								</p>
							</td>
						</tr> <!-- hết 1 row -->
						<tr>
							<th>Công nghệ sử dụng</th>
							<td>
								<textarea name="cong_nghe">- Android Studio 1.4, Java, Android 4.0, Google Could Message.
								</textarea>
							</td>
						</tr> <!-- hết 1 row -->
					</tbody>
				</table>
			</div>

			<div class="col-md-12">
				<center>
					<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-plus"></i>Thêm</button>
					<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
				</center>					
			</div>
		</div>
	</div>
</div> <!-- 5 -->
</div> <!-- end contentitem -->
</form>
</li>
</ul>
</div> <!-- end tabcontent -->
</div> <!-- end tab -->
</div>
</div> <!-- end container -->
</div> <!-- end ourteam -->
<script>
	$(function(){
		$('.tabbtn li').click(function() {
			$('.tabbtn li').removeClass('active');
			$(this).addClass('active');
			x= $(this).index();
			x = x+1;

 		// Cho nd tuong ung hien thi
 		// .content ul li:nth-child('+x+') noi chuoi de hien thi bien x o tren
 		$('.content ul li').removeClass('showup');
 		$('.content ul li:nth-child('+x+')').addClass('showup');
 	})
	})
</script>
</body>
</html>