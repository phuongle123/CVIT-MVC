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
	<style>
		ul li a i {
	    margin-right: 5px;
		}
	</style>
</head> <!-- end head -->
<body class="edit-cv ">
	<div class="why update-cv">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 title text-center py-1">
					<h2>CẬP NHẬT CV</h2>
					<div class="line">
						<div class="linecolor"></div>
						<div class="icon"><i class="fa fa-codepen"></i></div>
					</div>
				</div> <!-- end title -->
				<div class="col-sm-12 tab">
					<div class="tabbtn">
						<ul>
							<li class="active"><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>ẢNH ĐẠI DIỆN</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>THÔNG TIN CÁ NHÂN</a></li>
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
													<?php
															for ($i=0; $i < count($data[0]); $i++) {
															?>
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
															<img src="../../<?php echo $data[0][$i]['hinh_anh']?>" alt="">
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
															<button name="dai_dien" type="submit" class="btn btn-success" > <i class="fa fa-edit"></i>Cập nhật</button>
															<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
														</center>					
													</div>
													<?php } ?>
												</div>
											</div>
										</div> <!-- 5 -->
									</div> <!-- end contentitem -->
								</form>
							</li>
							<li class="content1">
								<form action="../../updateuser/info" method="POST">
									<div class="contentitem">
										<div class="phan-5">
											<div class="container">
												<div class="row">
													<?php
																for ($i=0; $i < count($data[0]); $i++) {
															?>
													<div class="col-md-12 tieu-de">
														<h2>THÔNG TIN CÁ NHÂN</h2>
													</div>
													<div class="col-md-12">
														<table class="table table-bordered w-75 m-auto">
															<tbody>
																<tr>
																	<th>Họ và Tên</th>
																	<td>
																		<input name="ho_ten" type="text" value="<?php echo $data[0][$i]['ho_ten'] ?>">
																	</td>
																</tr> <!-- hết 1 row -->
																<tr>
																	<th>Ngày sinh</th>
																	<td>
																		<input name="ngay_sinh" type="text" value="<?php echo $data[0][$i]['ngay_sinh'] ?>">
																	</td>
																</tr> <!-- hết 1 row -->
																<tr>
																	<th>Giới tính</th>
																	<td>
																		<input name="gioi_tinh" type="text" value="<?php echo $data[0][$i]['gioi_tinh']?>">
																	</td>
																</tr> <!-- hết 1 row -->
																<tr>
																	<th>Phone</th>
																	<td>
																		<input name="phone" type="text" value="<?php echo $data[0][$i]['phone'] ?>">
																	</td>
																</tr> <!-- hết 1 row -->
																<tr>
																	<th>Quốc tịch</th>
																	<td>
																		<input name="quoc_tich" type="text" value="<?php echo $data[0][$i]['quoc_tich'] ?>">
																	</td>
																</tr> <!-- hết 1 row -->
																<tr>
																	<th>Mô tả ngắn</th>
																	<td>
																		<textarea name="mo_ta_ngan"><?php echo $data[0][$i]['mo_ta_ngan'] ?></textarea>
																	</td>
																</tr> <!-- hết 1 row -->
																<tr>
																	<th>Website </th>
																	<td>
																		<input name="website" type="text" value="<?php echo $data[0][$i]['website'] ?>">
																	</td>
																</tr> <!-- hết 1 row -->
															</tbody>
														</table>
													</div>

													<div class="col-md-12">
														<center>
															<button name="update_gioi_thieu" type="submit" class="btn btn-success" ><i class="fa fa-edit"></i>Cập nhật</button>
															<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
															
														</center>					
													</div>
													<?php } ?>
												</div>
											</div>
										</div> <!-- 5 -->
									</div> <!-- end contentitem -->
								</form>
								</li>
									<li class="content1">
										<form action="../../updateuser/hocvan" method="POST">
										<div class="contentitem">
											<div class="phan-5">
												<div class="container">
													<div class="row">
														<?php
																for ($i=0; $i < count($data[1]); $i++) {
															?>
														<div class="col-md-12 tieu-de">
															<h2>TRÌNH ĐỘ HỌC VẤN</h2>
														</div>
														<div class="col-md-12">
															<table class="table table-bordered w-75 m-auto">
																<tbody>
																	<tr>
																		<th>Năm học</th>
																		<td>
																			<input type="text" value="<?php echo $data[1][$i]['time'] ?>" name ="time_hv">
																		</td>
																	</p>
																</td>
															</tr> <!-- hết 1 row -->
															<tr>
																<th>Tên nơi học</th>
																<td>
																	<input type="text" value="<?php echo $data[1][$i]['noi_hoc'] ?>" name="noi_hoc">
																</td>
															</tr> <!-- hết 1 row -->
															<tr>
																<th>Ghi chú</th>
																<td>
																	<input type="text" value="<?php echo $data[1][$i]['chi_tiet'] ?>" name="chi_tiet">
																</td>
															</tr> <!-- hết 1 row -->
														</tbody>
													</table>
												</div>

												<div class="col-md-12">
													<center>
														
														<button class="btn btn-success" > <i class="fa fa-edit"></i>Cập nhật</button>
														<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
													
													</center>					
												</div>
											<?php } ?>
											</div>
										</div>
									</div> <!-- 5 -->
								</div> <!-- end contentitem -->
							</form>
							</li>
							<li class="content2">
								<form action="../../updateuser/chungchi" method="POST">
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
												<?php
													for ($i=0; $i < count($data[2]); $i++) {
												?>
												<div class="col-md-12 tieu-de">
													<h2>CHỨNG CHỈ</h2>
												</div>
												<div class="col-md-12">
													<table class="table table-bordered w-75 m-auto">
														<tbody>
															<tr>
																<th>Năm học</th>
																<td>
																	<input type="text" name="time_cc" value="<?php echo $data[2][$i]['time'] ?>">
																</td>
															</p>
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Tên chứng chỉ</th>
														<td>
															<input type="text" name="ten_chung_chi" value="<?php echo $data[2][$i]['ten_chung_chi'] ?>">
														</td>
													</tr> <!-- hết 1 row -->
												</tbody>
											</table>
										</div>
										<div class="col-md-12">
											<center>
												<button class="btn btn-success" > <i class="fa fa-edit"></i>Cập nhật</button>
												<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
											</center>					
										</div>
									<?php } ?>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</form>
					</li>
					<li class="content3">
						<form action="../../updateuser/giaithuong" method="POST">
						<div class="contentitem">
							<div class="phan-5">
								<div class="container">
									<div class="row">
										<?php
											for ($i=0; $i < count($data[3]); $i++) {
										?>
										<div class="col-md-12 tieu-de">
											<h2>GIẢI THƯỞNG</h2>
										</div>
										<div class="col-md-12">
											<table class="table table-bordered w-75 m-auto">
												<tbody>
													<tr>
														<th>Thời gian</th>
														<td>
															<input type="text" name="time_gt" value="<?php echo $data[3][$i]['time'] ?>">
														</td>
													</p>
												</td>
											</tr> <!-- hết 1 row -->
											<tr>
												<th>Tên giải thưởng</th>
												<td>
													<input type="text" name="ten_giai_thuong" value="<?php echo $data[3][$i]['ten_giai_thuong'] ?>">
												</td>
											</tr> <!-- hết 1 row -->
										</tbody>
									</table>
								</div>
								<div class="col-md-12">
									<center>
										<button class="btn btn-success" > <i class="fa fa-edit"></i>Cập nhật</button>
										<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
									</center>					
								</div>
							<?php } ?>
							</div>
						</div>
					</div> <!-- 5 -->
				</div> <!-- end contentitem -->
			</form>
			</li>
			<li class="content4">
				<form action="../../updateuser/hoatdong" method="POST">
				<div class="contentitem">
					<div class="phan-5">
						<div class="container">
							<div class="row">
								<?php
									for ($i=0; $i < count($data[4]); $i++) {
								?>
								<div class="col-md-12 tieu-de">
									<h2>HOẠT ĐỘNG</h2>
								</div>
								<div class="col-md-12">
									<table class="table table-bordered w-75 m-auto">
										<tbody>
											<tr>
												<th>Thời gian</th>
												<td>
													<input type="text" name="time_hd" value="<?php echo $data[4][$i]['time'] ?>">
												</td>
											</p>
										</td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Tên hoạt động</th>
										<td>
											<input type="text" name="ten_hoat_dong" value="<?php echo $data[4][$i]['ten_hoat_dong'] ?>">
										</td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Ghi chú</th>
										<td>
											<input type="text" name="noi_dung" value="<?php echo $data[4][$i]['noi_dung'] ?>">
										</td>
									</tr> <!-- hết 1 row -->
								</tbody>
							</table>
						</div>

						<div class="col-md-12">
							<center>
								<button class="btn btn-success" ><i class="fa fa-edit"></i>Cập nhật</button>
								<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
							</center>					
						</div>
					<?php } ?>
					</div> <!-- 5 -->
				</div> <!-- end contentitem -->
	</form>
			</li>

			<li class="content4">
		<form action="../../updateuser/sothich" method="POST">
		<div class="contentitem">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>SỞ THÍCH</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"></div>
								<?php
									for ($i=0; $i < count($data[5]); $i++) {
								?>
           							 <p class="td stk">
           							 	<input name="so_thich" type="text" placeholder="" value="<?php echo $data[5][$i]['ten_so_thich'];?>">
           							 	<a href="../../updateuser/xoasothich" class="btn btn-info">Xóa</a>
           							 </p>
           						 <?php } ?>
           							<p>
           						 		<select id="inputState" class="form-control" name="ten_so_thich">
											<option selected="">Chọn sở thích..</option>
											<?php
												for ($i=0; $i < count($data[9]); $i++) {
											?>
											<option value="<?php echo $data[9][$i]['id_so_thich'] ?>"><?php echo  $data[9][$i]['ten_so_thich'] ?></option>
											<?php } ?>
										</select>
										<button name="add_so_thich" type="submit" class="btn btn-info">Thêm</button>
           							</p>
           						 	
							</div> 		
						</div>
						<div class="col-md-12">
							<center>
								<button class="btn btn-success" ><i class="fa fa-edit"></i>Cập nhật</button>
								<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
							</center>					
						</div>
					</div>
				</div> <!-- 5 -->
			</div> <!-- end contentitem -->
		</div>
	</form>
		</li>
			<li class="content4">
		<form action="../controller/update_so_thich.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
		<div class="contentitem">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>KỸ NĂNG</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"></div>
								<?php
									for ($i=0; $i < count($data[6]); $i++) {
								?>
           							 <p class="td stk">
           							 	<input name="ten_ky_nang" type="text" placeholder="" value="<?php echo $data[6][$i]['ten_ky_nang'];?>">
           							 	<a href="" class="btn btn-info">Xóa</a>
           							 </p>
           						 <?php } ?>
           							<p>
           						 		<select id="inputState" class="form-control" name="ten_ky_nang">
											<option selected="">Chọn kỹ năng..</option>
											<?php
												for ($i=0; $i < count($data[10]); $i++) {
											?>
											<option value="<?php echo $data[10][$i]['id_kn'] ?>"><?php echo $data[10][$i]['ten_ky_nang'] ?></option>
											<?php } ?>
										</select>
										<button name="add_so_thich" type="submit" class="btn btn-info">Thêm</button>
           							</p>
           						 	
							</div> 		
						</div>
						<div class="col-md-12">
							<center>
								<button class="btn btn-success" ><i class="fa fa-edit"></i>Cập nhật</button>
								<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
							</center>					
						</div>
					</div>
				</div> <!-- 5 -->
			</div> <!-- end contentitem -->
		</div>
	</form>
		</li>
				<li class="content4">
					<form action="../../updateuser/kinhnghiem" method="POST">
					<div class="contentitem">
						<div class="phan-5">
							<div class="container">
								<div class="row">
									<?php
										for ($i=0; $i < count($data[7]); $i++) {
									?>
									<div class="col-md-12 tieu-de">
										<h2>KINH NGHIỆM</h2>
									</div>
									<div class="col-md-12">
										<table class="table table-bordered w-75 m-auto">
											<tbody>
												<tr>
													<th>Thời gian</th>
													<td>
														<input type="text" name="time_kn" value="<?php echo $data[7][$i]['time'] ?>">
													</td>
												</p>
											</td>
										</tr> <!-- hết 1 row -->
										<tr>
											<th>Tên kinh nghiệm</th>
											<td>
												<input type="text" name="noi_lam" value="<?php echo $data[7][$i]['noi_lam'] ?>">
											</td>
										</tr> <!-- hết 1 row -->
										<tr>
											<th>Ghi chú</th>
											<td>
												<input type="text" name="chi_tiet" value="<?php echo $data[7][$i]['chi_tiet'] ?>">
											</td>
										</tr> <!-- hết 1 row -->
									</tbody>
								</table>
							</div>

							<div class="col-md-12">
								<center>
									<button class="btn btn-success" ><i class="fa fa-edit"></i>Cập nhật</button>
									<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
								</center>					
							</div>
						<?php } ?>
						</div>
					</div>
				</div> <!-- 5 -->
			</div> <!-- end contentitem -->
		</form>
		</li>
		<li class="content4">
			<form action="../../updateuser/duan" method="POST">
			<div class="contentitem">
				<div class="phan-5">
					<div class="container">
						<div class="row">
							<?php
								for ($i=0; $i < count($data[8]); $i++) {
							?>
							<div class="col-md-12 tieu-de">
								<h2>DỰ ÁN</h2>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered w-75 m-auto">
									<tbody>
										<tr>
											<th>Tên dự án</th>
												<td><input type="text" value="<?php echo $data[8][$i]['ten_du_an'] ?>" name="ten_du_an"></td>		
											</tr> <!-- hết 1 row -->
										<tr>
											<th>Thời gian</th>
												<td><input type="text" value="<?php echo $data[8][$i]['time'] ?>" name="time_da"></td>
										</tr> <!-- hết 1 row -->
											<tr>
											<th>Mô tả</th>
											<td>
												<textarea name="mo_ta"><?php echo $data[8][$i]['mo_ta'] ?>
												</textarea>
											</p>
										</td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Số lượng thành viên</th>
										<td><input type="text" name="so_luong" value="<?php echo $data[8][$i]['so_luong'] ?>"></td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Vị trí trong công việc</th>
										<td><input type="text" name="vi_tri_cong_viec" value="<?php echo $data[8][$i]['vi_tri_cong_viec'] ?>"></td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Vai trò trong dự án</th>
										<td>
											<textarea name="vai_tro"><?php echo $data[8][$i]['vai_tro'] ?>
											</textarea>
										</p>
									</td>
								</tr> <!-- hết 1 row -->
								<tr>
									<th>Công nghệ sử dụng</th>
									<td>
										<textarea name="cong_nghe"><?php echo $data[8][$i]['cong_nghe'] ?>
										</textarea>
									</td>
								</tr> <!-- hết 1 row -->
							</tbody>
						</table>
					</div>

					<div class="col-md-12">
						<center>
							<button class="btn btn-success" ><i class="fa fa-edit"></i>Cập nhật</button>
							<a href="../viewinfo/<?php echo $_SESSION['user']['id_tv']  ?>" class="btn btn-info" ><i class="fa fa-address-card-o"></i>Trang CV</a>
						</center>					
					</div>
				<?php } ?>
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