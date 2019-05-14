<?php 

/**
* 

*/
class userModel extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getUserByUsername($username)
	{
		$result = array();
		$sql = "SELECT * FROM user,tt_thanh_vien WHERE email = '".$username."' and user.id_user = tt_thanh_vien.id_user";
		if($this->conn->query($sql)->rowCount() == 0){
			return false;
		} else {
			foreach($this->conn->query($sql) as $row){
				$result = $row;
			}
			return $result;
		}
	}
	function getUserByEmail($email)
	{
		$result = array();
		$sql = "SELECT * FROM user,tt_thanh_vien WHERE email = '".$email."'";
		if($this->conn->query($sql)->rowCount() == 0){
			return false;
		} else {
			foreach($this->conn->query($sql) as $row){
				$result = $row;
			}
			return $result;
		}
	}
	function adduser($email, $pass){
		$sql = "INSERT INTO user VALUES ('','".$email."','".$pass."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	// function addTtThanhVien($ho_ten,$ngay_sinh,$gioi_tinh,$phone,$website,$quoc_tich,$mo_ta_ngan,$id_user,$ten_chuyen_nganh,$ten_tinh){
		
	// 	$sql = "INSERT INTO tt_ntd VALUES ('".$ten_cong_ty."','".$dia_chi."','".$sdt."','".$id_ntd."','') ";
	// 	if(!$this->conn->query($sql)){
	// 		return false;
	// 	} else {
	// 		return true;
	// 	}
	// }
	// function addthanhvien($id_user ,$ho_ten, $ngay_sinh, $gioi_tinh, $phone, $website, $quoc_tich, $mo_ta_ngan, $id_tinh, $id_chuyen_nganh){
	// 	$sql = "INSERT INTO user VALUES ('',".$id_user."','".$ho_ten."','".$ngay_sinh."','".$gioi_tinh."','".$phone."','".$wedsite."', '".$quoc_tich."','".$mo_ta_ngan."','".$ten_tinh."','".$ten_chuyen_nganh."')";
	// 	if(!$this->conn->query($sql)){
	// 		return false;
	// 	} else {
	// 		return true;
	// 	}
	// }
	function addTtThanhVien($ho_ten,$ngay_sinh,$gioi_tinh,$phone,$website,$quoc_tich,$mo_ta_ngan,$id_user,$ten_chuyen_nganh,$ten_tinh){
		
		$sql = "INSERT INTO tt_thanh_vien VALUES ('','".$ho_ten."','".$ngay_sinh."','".$gioi_tinh."','".$phone."','".$website."', '".$quoc_tich."','','".$mo_ta_ngan."','".$id_user."','".$ten_chuyen_nganh."','".$ten_tinh."') ";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
}