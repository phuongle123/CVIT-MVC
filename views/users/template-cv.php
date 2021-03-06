<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../../public/css/style.css">
</head> <!-- end head -->
<body>
	<div class="title title-template">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center py-3">
					<h1>TEMPLATE CV</h1>
				</div>
			</div>
		</div>
	</div> <!-- end title -->
	<div class="list-template">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-orbit1.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2">
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>
							<p class="card-text editns">
								<a href="../../user/cvfile1/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 1</p>
				</div> <!-- end 1 card -->
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-orbit2.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2">
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>
							<p class="card-text editns">
								<a href="../../user/cvfile2/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 2</p>
				</div> <!-- end 1 card -->
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-orbit3.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2">
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>
							<p class="card-text editns">
								<a href="../../user/cvfile3/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 3</p>
				</div> <!-- end 1 card -->
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-orbit4.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2">
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>
							<p class="card-text editns">
								<a href="../../user/cvfile4/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 4</p>
				</div> <!-- end 1 card -->
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-pillar1.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2"
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>>
							<p class="card-text editns">
								<a href="../../user/cvfile5/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 5</p>
				</div> <!-- end 1 card -->
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-pillar2.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2">
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>
							<p class="card-text editns">
								<a href="../../user/cvfile6/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 6</p>
				</div> <!-- end 1 card -->
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-pillar3.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2">
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>
							<p class="card-text editns">
								<a href="../../user/cvfile7/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 7</p>
				</div> <!-- end 1 card -->
				<div class="col-sm-6 text-center">
					<div class="card">
						<div class="bg-hover">
						</div>
						<img class="card-img-top img-fluid" src="../../public/img/template-pillar4.png" alt="Card image cap" name="img_avatar">
						<div class="card-body p-2">
							<?php
							for ($i=0; $i < count($data[0]); $i++) {
							?>
							<p class="card-text editns">
								<a href="../../user/cvfile8/<?php echo $data[0][$i]['id_tv'] ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i> Live demo</a>
							</p>
							<?php } ?>
						</div>
					</div> 
					<p class= "title-card">Template 8</p>
				</div> <!-- end 1 card -->
			</div>
		</div>
	</div> <!-- end list-template -->
</body>
</html>