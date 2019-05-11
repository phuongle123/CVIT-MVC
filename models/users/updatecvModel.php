<?php 

/**
* 

*/
class updatecvModel extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function updateinfo($ngay_sinh, $gioi_tinh,$website,$phone,$quoc_tich,$mo_ta_ngan ,$id_tv){
		$sql = "UPDATE tt_thanh_vien SET ngay_sinh = '".$ngay_sinh."', gioi_tinh = '".$gioi_tinh."',website = '".$website."',phone = '".$phone."',quoc_tich = '".$quoc_tich."',mo_ta_ngan = '".$mo_ta_ngan."' WHERE id_tv = ".$id_tv;
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}

	function updateHocVan($time_hv, $noi_hoc, $chi_tiet, $id_tv){
		$sql = "UPDATE hoc_van SET time = '".$time_hv."', noi_hoc = '".$noi_hoc."', chi_tiet = '".$chi_tiet."' WHERE id_tv = ".$id_tv;
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function updateChungChi($time_cc, $ten_chung_chi, $id_tv){
		$sql = "UPDATE chung_chi SET time = '".$time_cc."', ten_chung_chi = '".$ten_chung_chi."' WHERE id_tv = ".$id_tv;
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function updateGiaiThuong($time_gt, $ten_giai_thuong, $id_tv){
		$sql = "UPDATE giai_thuong SET time = '".$time_gt."', ten_giai_thuong = '".$ten_giai_thuong."' WHERE id_tv = ".$id_tv;
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function updateHoatDong($time_hd, $ten_hoat_dong,$noi_dung, $id_tv){
		$sql = "UPDATE hoat_dong SET time = '".$time_hd."', ten_hoat_dong = '".$ten_hoat_dong."',noi_dung = '".$noi_dung."' WHERE id_tv = ".$id_tv;
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function updateKinhNghiem($time_kn, $noi_lam,$chi_tiet, $id_tv){
		$sql = "UPDATE kinh_nghiem SET time = '".$time_kn."', noi_lam = '".$noi_lam."',chi_tiet = '".$chi_tiet."' WHERE id_tv = ".$id_tv;
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function updateDuAn($time_da, $ten_du_an,$mo_ta,$so_luong, $vi_tri_cong_viec, $vai_tro,$cong_nghe, $id_tv){
		$sql = "UPDATE du_an SET time = '".$time_da."', ten_du_an = '".$ten_du_an."',mo_ta = '".$mo_ta."',so_luong = '".$so_luong."',vi_tri_cong_viec = '".$vi_tri_cong_viec."',vai_tro = '".$vai_tro."',cong_nghe = '".$cong_nghe."' WHERE id_tv = ".$id_tv;
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	
}