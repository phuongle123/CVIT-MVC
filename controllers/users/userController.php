<?php

/**
* 
*/
class UserController extends Controller
{
	
	function __construct()
	{
		$this->folder = "users";
	}
	
	function login(){
		
		
		require_once 'vendor/Model.php';
		require_once 'models/users/userModel.php';
		$md = new userModel;
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = array();
		if($md->getUserByUsername($username)){
			$data = $md->getUserByUsername($username);
		
			if($password == $data['pass']){
				$_SESSION['user'] = $data;
				
				header('location: ../');
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
		if(isset($_POST['ho_ten'])){
			$ho_ten = $_POST['ho_ten'];
		}
		if(isset($_POST['gioi_tinh'])){
			$gioi_tinh = $_POST['gioi_tinh'];
		}
		if(isset($_POST['phone'])){
			$phone = $_POST['phone'];
		}
		if(isset($_POST['email'])){
			$email = $_POST['email'];
		}
		if(isset($_POST['pass'])){
			$pass = $_POST['pass'];
		}
		if(isset($_POST['repass'])){
			$repass = $_POST['repass'];
		}
		if(isset($_POST['ten_tinh'])){
			$ten_tinh = $_POST['ten_tinh'];
		}
		if(isset($_POST['ten_chuyen_nganh'])){
			$ten_chuyen_nganh = $_POST['ten_chuyen_nganh'];
		}
		if(isset($_POST['ngay_sinh'])){
			$ngay_sinh = $_POST['ngay_sinh'];
		}
		if(isset($_POST['website'])){
			$website = $_POST['website'];
		}
		if(isset($_POST['mo_ta_ngan'])){
			$mo_ta_ngan = $_POST['mo_ta_ngan'];
		}
		if(isset($_POST['quoc_tich'])){
			$quoc_tich = $_POST['quoc_tich'];
		}
		
		require_once 'vendor/Model.php';
		require_once 'models/users/userModel.php';
		$md = new userModel;

			if(($md->adduser($email,$pass))){ 
				$_SESSION['user']=$md->getUserByEmail($email);
				var_dump($_SESSION['user']);
				$id_user = $_SESSION['user']['id_user'];
				if ($md->addTtThanhVien($ho_ten,$ngay_sinh,$gioi_tinh,$phone,$website,$quoc_tich,$mo_ta_ngan,$id_user,$ten_chuyen_nganh,$ten_tinh)) {
				// 	echo'<script language="javascript">
	   //                      alert("Đăng ký thành công!")
	   //                  </script>';
				// header('Refresh:0; url=../');
				// } else {
				// 	echo'<script language="javascript">
	   //                      alert("Đăng ký không thành công, vui lòng xem lại!")
	   //                  </script>';
	   //       	header('Refresh:0; url=../');
				// }
				return true;
			} else {
				echo "Đã có lỗi trong quá trình tạo tài khoản, vui lòng thử lại sau!";
				return false;
			}
	}
}
	function viewinfo($id_tv)
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

		$this->render('trangcv',$data);
	}
	function templatecv($id_tv)
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/infoUsersModel.php';
		$info = new infoUsersModel;
		
		$data[] =$info->getInfoById($id_tv);
		$this->render('template-cv',$data);
	}
	function cvfile1($id_tv)
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

		$this->render('cvfile-orbit1',$data);
	}
	function cvfile2($id_tv)
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

		$this->render('cvfile-orbit2',$data);
	}
	function cvfile3($id_tv)
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

		$this->render('cvfile-orbit3',$data);
	}
	function cvfile4($id_tv)
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

		$this->render('cvfile-orbit4',$data);
	}
	function cvfile5($id_tv)
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

		$this->render('cvfile-pillar1',$data);
	}
	function cvfile6($id_tv)
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

		$this->render('cvfile-pillar2',$data);
	}
	function cvfile7($id_tv)
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

		$this->render('cvfile-pillar3',$data);
	}
	function cvfile8($id_tv)
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

		$this->render('cvfile-pillar4',$data);
	}
	function updatecv($id_tv)
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
		$data[] =$info->getSoThich();
		$data[] =$info->getKyNang();

		$this->render('update_cv',$data);
	}
	function taocv($id_tv)
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/infoUsersModel.php';
		$info = new infoUsersModel;

		$data[] =$info->getSoThich();
		$data[] =$info->getKyNang();
		$this->render('tao_cv',$data);
	}
	function logout(){
		session_unset();
		session_destroy();
		unset($_COOKIE['user']);
		header('location: ../');
	}
}