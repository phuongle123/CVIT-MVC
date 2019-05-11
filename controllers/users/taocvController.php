<?php
class TaocvController extends Controller
{
	
	function __construct()
	{
		$this->folder = "users";
	}
	function hocvan()
	{
		if(isset($_POST['time'])){
			$time = $_POST['time'];
		}
		if(isset($_POST['noi_hoc'])){
			$noi_hoc = $_POST['noi_hoc'];
		}
		if(isset($_POST['chi_tiet'])){
			$chi_tiet = $_POST['chi_tiet'];
		}
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/taocvModel.php';
		$md = new taocvModel;

		if($md->hocvan($time, $noi_hoc,$chi_tiet, $id_tv)){ 
			echo'<script language="javascript">
                        alert("Thêm thành công")
                    </script>';	
             header("Refresh:0; url=../user/taocv/$id_tv");
		}
		else {
			echo'<script language="javascript">
                        alert("Thêm thất bại")
                    </script>';
            header("Refresh:0; url=../user/taocv/$id_tv");
		}
	}
	function chungchi()
	{
		if(isset($_POST['time'])){
			$time = $_POST['time'];
		}
		if(isset($_POST['ten_chung_chi'])){
			$ten_chung_chi = $_POST['ten_chung_chi'];
		}
		
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/taocvModel.php';
		$md = new taocvModel;

		if($md->chungchi($time, $ten_chung_chi, $id_tv)){ 
			echo'<script language="javascript">
                        alert("Thêm thành công")
                    </script>';	
             header("Refresh:0; url=../user/taocv/$id_tv");
		}
		else {
			echo'<script language="javascript">
                        alert("Thêm thất bại")
                    </script>';
            header("Refresh:0; url=../user/taocv/$id_tv");
		}
	}
	function giai_thuong()
	{
		if(isset($_POST['time'])){
			$time = $_POST['time'];
		}
		if(isset($_POST['ten_giai_thuong'])){
			$ten_giai_thuong = $_POST['ten_giai_thuong'];
		}
		
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/taocvModel.php';
		$md = new taocvModel;

		if($md->giaithuong($time, $ten_giai_thuong, $id_tv)){ 
			echo'<script language="javascript">
                        alert("Thêm thành công")
                    </script>';	
             header("Refresh:0; url=../user/taocv/$id_tv");
		}
		else {
			echo'<script language="javascript">
                        alert("Thêm thất bại")
                    </script>';
            header("Refresh:0; url=../user/taocv/$id_tv");
		}
	}
	function hoatdong()
	{
		if(isset($_POST['time'])){
			$time = $_POST['time'];
		}
		if(isset($_POST['ten_hoat_dong'])){
			$ten_hoat_dong = $_POST['ten_hoat_dong'];
		}
		if(isset($_POST['noi_dung'])){
			$noi_dung = $_POST['noi_dung'];
		}
		
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/taocvModel.php';
		$md = new taocvModel;

		if($md->hoatdong($time, $ten_hoat_dong,$noi_dung, $id_tv)){ 
			echo'<script language="javascript">
                        alert("Thêm thành công")
                    </script>';	
             header("Refresh:0; url=../user/taocv/$id_tv");
		}
		else {
			echo'<script language="javascript">
                        alert("Thêm thất bại")
                    </script>';
            header("Refresh:0; url=../user/taocv/$id_tv");
		}
	}
	function sothich()
	{
		if(isset($_POST['ten_so_thich'])){
			$ten_so_thich = $_POST['ten_so_thich'];
		}
		
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/taocvModel.php';
		$md = new taocvModel;

		if($md->sothich($id_tv, $ten_so_thich)){ 
			echo'<script language="javascript">
                        alert("Đăng tin thành công")
                    </script>';	
		}
		else {
			echo'<script language="javascript">
                        alert("Đăng tin thất bại")
                    </script>';
		}
	}
	function kinhnghiem()
	{
		if(isset($_POST['time'])){
			$time = $_POST['time'];
		}
		if(isset($_POST['noi_lam'])){
			$noi_lam = $_POST['noi_lam'];
		}
		if(isset($_POST['chi_tiet'])){
			$chi_tiet = $_POST['chi_tiet'];
		}
		
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/taocvModel.php';
		$md = new taocvModel;

		if($md->kinhnghiem($time, $noi_lam,$chi_tiet, $id_tv)){ 
			echo'<script language="javascript">
                        alert("Thêm thành công")
                    </script>';	
             header("Refresh:0; url=../user/taocv/$id_tv");
		}
		else {
			echo'<script language="javascript">
                        alert("Thêm thất bại")
                    </script>';
            header("Refresh:0; url=../user/taocv/$id_tv");
		}
	}
	function duan()
	{
		if(isset($_POST['ten_du_an'])){
			$ten_du_an = $_POST['ten_du_an'];
		}
		if(isset($_POST['time'])){
			$time = $_POST['time'];
		}
		if(isset($_POST['mo_ta'])){
			$mo_ta = $_POST['mo_ta'];
		}
		if(isset($_POST['so_luong'])){
			$so_luong = $_POST['so_luong'];
		}
		if(isset($_POST['vi_tri_cong_viec'])){
			$vi_tri_cong_viec = $_POST['vi_tri_cong_viec'];
		}
		if(isset($_POST['vai_tro'])){
			$vai_tro = $_POST['vai_tro'];
		}
		if(isset($_POST['cong_nghe'])){
			$cong_nghe = $_POST['cong_nghe'];
		}
		
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/taocvModel.php';
		$md = new taocvModel;

		if($md->duan($ten_du_an, $time,$mo_ta,$so_luong,$vi_tri_cong_viec,$vai_tro,$cong_nghe, $id_tv)){ 
			echo'<script language="javascript">
                        alert("Thêm thành công")
                    </script>';	
             header("Refresh:0; url=../user/taocv/$id_tv");
		}
		else {
			echo'<script language="javascript">
                        alert("Thêm thất bại")
                    </script>';
            header("Refresh:0; url=../user/taocv/$id_tv");
		}
	}

	
}