<?php
class UpdateuserController extends Controller
{
	
	function __construct()
	{
		$this->folder = "users";
	}
	function info()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;
		$ho_ten =$ngay_sinh  = $gioi_tinh = $website = $phone = $quoc_tich = $mo_ta_ngan ="";
		if(isset($_SESSION['user']['id_tv'])){$id_tv = $_SESSION['user']['id_tv'];}
		if(isset($_POST['ho_ten'])){$ho_ten = $_POST['ho_ten'];}
		if(isset($_POST['ngay_sinh'])){$ngay_sinh = $_POST['ngay_sinh'];}
		if(isset($_POST['gioi_tinh'])){$gioi_tinh = $_POST['gioi_tinh'];}
		if(isset($_POST['website'])){$website = $_POST['website'];}
		if(isset($_POST['phone'])){$phone = $_POST['phone'];}
		if(isset($_POST['quoc_tich'])){$quoc_tich = $_POST['quoc_tich'];}
		if(isset($_POST['mo_ta_ngan'])){$mo_ta_ngan = $_POST['mo_ta_ngan'];}


		if ($md ->updateinfo($ho_ten,$ngay_sinh, $gioi_tinh,$website,$phone,$quoc_tich,$mo_ta_ngan ,$id_tv)){
    	echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("Refresh:0; url=../user/updatecv/$id_tv"); 
	    } else
	    {
	    echo'<script language="javascript">
	                        alert("Cập nhật thất bại")
	                    </script>';
	    header("Refresh:0; url=../user/updatecv/$id_tv");    
	    }
	}
	function hocvan()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;
		$time_hv = $noi_hoc = $chi_tiet =  "";
		if(isset($_SESSION['user']['id_tv'])){$id_tv = $_SESSION['user']['id_tv'];}
		if(isset($_POST['time_hv'])){$time_hv = $_POST['time_hv'];}
		if(isset($_POST['noi_hoc'])){$noi_hoc = $_POST['noi_hoc'];}
		if(isset($_POST['chi_tiet'])){$chi_tiet = $_POST['chi_tiet'];}

		if ($md ->updateHocVan($time_hv, $noi_hoc, $chi_tiet, $id_tv)){
    	echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("Refresh:0; url=../user/updatecv/$id_tv"); 
	    } else
	    {
	    echo'<script language="javascript">
	                        alert("Cập nhật thất bại")
	                    </script>';
	    header("Refresh:0; url=../user/updatecv/$id_tv");  
	    }
	}
	function chungchi()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;
		$time_cc = $ten_chung_chi =  "";
		if(isset($_SESSION['user']['id_tv'])){$id_tv = $_SESSION['user']['id_tv'];}
		if(isset($_POST['time_cc'])){$time_cc = $_POST['time_cc'];}
		if(isset($_POST['ten_chung_chi'])){$ten_chung_chi = $_POST['ten_chung_chi'];}

		if ($md ->updateChungChi($time_cc, $ten_chung_chi, $id_tv)){
    	echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("Refresh:0; url=../user/updatecv/$id_tv"); 
	    } else
	    {
	    echo'<script language="javascript">
	                        alert("Cập nhật thất bại")
	                    </script>';
	    header("Refresh:0; url=../user/updatecv/$id_tv");   
	    }
	}
	function giaithuong()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;
		$time_gt = $ten_giai_thuong =  "";
		if(isset($_SESSION['user']['id_tv'])){$id_tv = $_SESSION['user']['id_tv'];}
		if(isset($_POST['time_gt'])){$time_gt = $_POST['time_gt'];}
		if(isset($_POST['ten_giai_thuong'])){$ten_giai_thuong = $_POST['ten_giai_thuong'];}

		if ($md ->updateGiaiThuong($time_gt, $ten_giai_thuong, $id_tv)){
    	echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("Refresh:0; url=../user/updatecv/$id_tv"); 
	    } else
	    {
	    echo'<script language="javascript">
	                        alert("Cập nhật thất bại")
	                    </script>';
	    header("Refresh:0; url=../user/updatecv/$id_tv");    
	    }
	}
	function hoatdong()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;
		$time_hd = $ten_hoat_dong = $noi_dung =  "";
		if(isset($_SESSION['user']['id_tv'])){$id_tv = $_SESSION['user']['id_tv'];}
		if(isset($_POST['time_hd'])){$time_hd = $_POST['time_hd'];}
		if(isset($_POST['ten_hoat_dong'])){$ten_hoat_dong = $_POST['ten_hoat_dong'];}
		if(isset($_POST['noi_dung'])){$noi_dung = $_POST['noi_dung'];}

		if ($md ->updateHoatDong($time_hd, $ten_hoat_dong, $noi_dung, $id_tv)){
    	echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("Refresh:0; url=../user/updatecv/$id_tv"); 
	    } else
	    {
	    echo'<script language="javascript">
	                        alert("Cập nhật thất bại")
	                    </script>';
	    header("Refresh:0; url=../user/updatecv/$id_tv");    
	    }
	}
	function kinhnghiem()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;
		$time_kn = $noi_lam = $chi_tiet =  "";
		if(isset($_SESSION['user']['id_tv'])){$id_tv = $_SESSION['user']['id_tv'];}
		if(isset($_POST['time_kn'])){$time_kn = $_POST['time_kn'];}
		if(isset($_POST['noi_lam'])){$noi_lam = $_POST['noi_lam'];}
		if(isset($_POST['chi_tiet'])){$chi_tiet = $_POST['chi_tiet'];}

		if ($md ->updateKinhNghiem($time_kn, $noi_lam, $chi_tiet, $id_tv)){
    	echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("Refresh:0; url=../user/updatecv/$id_tv"); 
	    } else
	    {
	    echo'<script language="javascript">
	                        alert("Cập nhật thất bại")
	                    </script>';
	    header("Refresh:0; url=../user/updatecv/$id_tv");    
	    }
	}
	function duan()
	{
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;
		$time_da = $ten_du_an = $mo_ta = $so_luong = $vi_tri_cong_viec = $vai_tro = $cong_nghe ="";
		if(isset($_SESSION['user']['id_tv'])){$id_tv = $_SESSION['user']['id_tv'];}
		if(isset($_POST['time_da'])){$time_da = $_POST['time_da'];}
		if(isset($_POST['ten_du_an'])){$ten_du_an = $_POST['ten_du_an'];}
		if(isset($_POST['mo_ta'])){$mo_ta = $_POST['mo_ta'];}
		if(isset($_POST['so_luong'])){$so_luong = $_POST['so_luong'];}
		if(isset($_POST['vi_tri_cong_viec'])){$vi_tri_cong_viec = $_POST['vi_tri_cong_viec'];}
		if(isset($_POST['vai_tro'])){$vai_tro = $_POST['vai_tro'];}
		if(isset($_POST['cong_nghe'])){$cong_nghe = $_POST['cong_nghe'];}


		if ($md ->updateDuAn($time_da, $ten_du_an,$mo_ta,$so_luong, $vi_tri_cong_viec, $vai_tro,$cong_nghe, $id_tv)){
    	echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("Refresh:0; url=../user/updatecv/$id_tv"); 
	    } else
	    {
	    echo'<script language="javascript">
	                        alert("Cập nhật thất bại")
	                    </script>';
	    header("Refresh:0; url=../user/updatecv/$id_tv");    
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
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;

		if($md->addsothich($id_tv, $ten_so_thich)){
			echo'<script language="javascript">
                        alert("Thêm thành công")
                    </script>';	
         header("Refresh:0; url=../user/updatecv/$id_tv"); 
		}
		else {
			echo'<script language="javascript">
                        alert("Thêm tin thất bại")
                    </script>';
		}
		header("Refresh:0; url=../user/updatecv/$id_tv"); 
	}
	function xoasothich()
	{
		
		$id_tv =  $_SESSION['user']['id_tv'];

		// load model
		require_once 'vendor/Model.php';
		require_once 'models/users/updatecvModel.php';
		$md = new updatecvModel;

		if($md->xoasothich($id_tv)){
			echo'<script language="javascript">
                        alert("xóa thành công")
                    </script>';	
         header("Refresh:0; url=../user/updatecv/$id_tv"); 
		}
		else {
			echo'<script language="javascript">
                        alert("xóa thất bại")
                    </script>';
		}
		header("Refresh:0; url=../user/updatecv/$id_tv"); 
	}

}