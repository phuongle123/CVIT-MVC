<?php
class RecruitersController extends Controller
{
	
	function __construct()
	{
		$this->folder = "recruiters";
	}
	function index($id_ntd){
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$data[]=$md->getDsCv($id_ntd);
		$this->render('index',$data);
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
				$id_ntd=$data['id_ntd'];
				header("Location: http://localhost/CVIT-MVC/recruiters/index/$id_ntd");
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
	function register()
	{
		if(isset($_POST['email'])){
			$email = $_POST['email'];
		}
		if(isset($_POST['pass'])){
			$pass = $_POST['pass'];
		}
		if(isset($_POST['repass'])){
			$repass = $_POST['repass'];
		}
		if(isset($_POST['ten_cong_ty'])){
			$ten_cong_ty = $_POST['ten_cong_ty'];
		}
		if(isset($_POST['dia_chi'])){
			$dia_chi = $_POST['dia_chi'];
		}
		if(isset($_POST['sdt'])){
			$sdt = $_POST['sdt'];
		}
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;

		if($email == ""){
			echo'<script language="javascript">
	                        alert("Tên tài khoản không được để trống!")
	                    </script>';
				//header('Refresh:0; url=../');
			return false;
		}
		if($md->getRecruiterByEmail($email)){
				echo'<script language="javascript">
                    alert("Tên tài khoản đã tồn tại!")
                </script>';
			//header('Refresh:0; url=../');
			return false;
		} else {
			if($pass != $repass){
				echo'<script language="javascript">
                    alert("Nhập lại mật khẩu sai!")
                </script>';
				return false;
			}
			if(($md->adduser($email,$pass))){ 
				$_SESSION['recruiter']=$md->getRecruiterByEmail($email);
				$id_ntd = $_SESSION['recruiter']['id_ntd'];
				if ($md->addTtNtd($ten_cong_ty,$dia_chi,$sdt,$id_ntd)) {
					echo'<script language="javascript">
	                        alert("Đăng ký thành công!")
	                    </script>';
				header('Refresh:0; url=../');
				} else {
					echo'<script language="javascript">
	                        alert("Đăng ký không thành công, vui lòng xem lại!")
	                    </script>';
	         	header('Refresh:0; url=../');
				}
				return true;
			} else {
				echo "Đã có lỗi trong quá trình tạo tài khoản, vui lòng thử lại sau!";
				return false;
			}
		}
		// }
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
		$data[]=$md->getDsCv($id_ntd);
		$data[] = $md->getDstinById($id_ntd);
		
		$this->render('dstintuyendung',$data);
	}
	function info($id_ntd){
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$data[]=$md->getDsCv($id_ntd);
		$this->render('thongtinntd',$data);
	}
	function tintuyendung($id_tt){
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$data[] = $md->gettinById($id_tt);
		$data[]=$md->getDsCvById($id_tt);
		
		$this->render('tintuyendung', $data);
	}
	function dscvapply($id_ntd){
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$data[]=$md->getDsCv($id_ntd);
		$this->render('dscvapply', $data);
	}
	function dsthongbao($id_ntd){
		require_once 'vendor/Model.php';
		require_once 'models/recruiters/recruiterModel.php';
		$md = new recruiterModel;
		$data[]=$md->getDsCv($id_ntd);
		$this->render('dsthongbao',$data);
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
			header("Refresh:0; url=../recruiters/index/$id_ntd");
		}
		else {
			echo'<script language="javascript">
                        alert("Đăng tin thất bại")
                    </script>';
			header("Refresh:0; url=../recruiters/index/$id_ntd");
		}
	}
	function viewcv($id_tv)
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/infoUsersModel.php';
		$info = new infoUsersModel;
		
		$data[] =$info->getInfoById($id_tv);
		$data[] =$info->getInfoHocVan($id_tv);
		$data[] =$info->getInfoChungChi($id_tv);
		$data[] =$info->getInfoGiaiThuong($id_tv);
		$data[] =$info->getInfoHoatDong($id_tv);
		$data[] =$info->getInfoSoThich($id_tv);
		$data[] =$info->getInfoKyNang($id_tv);
		$data[] =$info->getInfoKinhNghiem($id_tv);
		$data[] =$info->getInfoDuAn($id_tv);
		$this->render('trangcv', $data);
	}
	
}