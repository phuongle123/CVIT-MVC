<?php 

/**
* 

*/
class taocvModel extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function hocvan($time, $noi_hoc, $chi_tiet,$id_tv){
		
		$sql = "INSERT INTO hoc_van  VALUES ('','".$time."','".$noi_hoc."','".$chi_tiet."','".$id_tv."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function chungchi($time, $ten_chung_chi,$id_tv){
		
		$sql = "INSERT INTO chung_chi  VALUES ('','".$ten_chung_chi."','".$time."','".$id_tv."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function giaithuong($time, $ten_giai_thuong,$id_tv){
		
		$sql = "INSERT INTO giai_thuong  VALUES ('','".$time."','".$ten_giai_thuong."','".$id_tv."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function hoatdong($time, $ten_hoat_dong,$noi_dung,$id_tv){
		
		$sql = "INSERT INTO hoat_dong  VALUES ('','".$time."','".$ten_hoat_dong."','".$noi_dung."','".$id_tv."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function sothich( $ten_so_thich,$id_tv){
		
		$sql = "INSERT INTO tt_so_thich(id_tv,id_so_thich)  VALUES ('','".$id_tv."','".$ten_so_thich."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function kinhnghiem($time, $noi_lam,$chi_tiet,$id_tv){
		
		$sql = "INSERT INTO kinh_nghiem  VALUES ('','".$time."','".$noi_lam."','".$chi_tiet."','".$id_tv."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function duan($time, $ten_du_an,$mo_ta,$vi_tri_cong_viec,$vai_tro,$cong_nghe,$so_luong,$id_tv){
		
		$sql = "INSERT INTO du_an  VALUES ('','".$time."','".$ten_du_an."','".$mo_ta."','".$vi_tri_cong_viec."','".$vai_tro."','".$cong_nghe."','".$so_luong."','".$id_tv."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	

}