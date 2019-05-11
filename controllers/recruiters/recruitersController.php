<?php
class RecruitersController extends Controller
{
	
	function __construct()
	{
		$this->folder = "recruiters";
	}
	function index($id_ntd){
		require_once 'vendor/Model.php';
		require_once 'views/recruiters/index.php';
	}
	function login(){
		
		
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$data = array();
		if($md->getRecruiterByUsername($username)){
			$data = $md->getRecruiterByUsername($username);
			if($password == $data['pass']){
				$_SESSION['recruiters'] = $data;
				header('Location: http://localhost/CVIT-MVC/recruiters/index');
			} else {
				echo'<script language="javascript">
                        alert("Sai tên tài khoản hoặc mật khẩu!")
                    </script>';
                 header('Refresh:0; url=../');  
				}
		} else {
			echo'<script language="javascript">
                        alert("Sai tên tài khoản hoặc mật khẩu!")
                    </script>';
           header('Refresh:0; url=../'); 
		}
	}
	function logout(){
		session_unset();
		session_destroy();
		unset($_COOKIE['recruiters']);
		header('Location: http://localhost/CVIT-MVC');
	}
	function dstintuyendung($id_ntd){
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$data[] = $md->getDstinById($id_ntd);
		// echo '<pre>';
		// var_dump($data) ;
		// echo '</pre>';
		$this->render('dstintuyendung',$data);
	}
	function info(){
		$this->render('thongtinntd');
	}
	function tintuyendung($id_tt){
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$data[] = $md->gettinById($id_tt);
		// echo '<pre>';
		$this->render('tintuyendung', $data);
	}
	function dscvapply(){
		$this->render('dscvapply');
	}
	function dsthongbao(){
		$this->render('dsthongbao');
	}
	function dang_tt()
	{
		if(isset($_POST['tieu_de'])){
			$tieu_de = $_POST['tieu_de'];
		}
		if(isset($_POST['noi_dung'])){
			$noi_dung = $_POST['noi_dung'];
		}
		$id_ntd =  $_SESSION['recruiters']['id_ntd'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;

		if($md->postTinById($tieu_de, $noi_dung, $id_ntd)){ 
			echo'<script language="javascript">
                        alert("Đăng tin thành công")
                    </script>';
			header('Location: http://localhost/CVIT-MVC/recruiters/index');
		}
		else {
			echo'<script language="javascript">
                        alert("Đăng tin thất bại")
                    </script>';
			header('Location: http://localhost/CVIT-MVC/recruiters/index');
		}

	
	}
}