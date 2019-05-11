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
	function hocvan()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/userModel.php';
		$md = new userModel;
		$time_hv = $noi_hoc = $chi_tiet =  "";
		if(isset($_POST['time_hv'])){$time_hv = $_POST['time_hv'];}
		if(isset($_POST['noi_hoc'])){$noi_hoc = $_POST['noi_hoc'];}
		if(isset($_POST['chi_tiet'])){$chi_tiet = $_POST['chi_tiet'];}
		$sql = "UPDATE hoc_van SET time = '".$time_hv."', noi_hoc = '".$noi_hoc."', chi_tiet = '".$chi_tiet."' WHERE id_tv = ".$_SESSION['user']['id_tv'];
	}
}