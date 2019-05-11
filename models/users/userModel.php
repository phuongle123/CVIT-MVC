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
	function adduser($ho_ten , $email, $pass){
		$sql = "INSERT INTO user VALUES ('','".$ho_ten."','".$email."','".$pass."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function addthanhvien($id_user , $ngay_sinh, $gioi_tinh, $phone, $website, $quoc_tich, $mo_ta_ngan, $id_tinh, $id_chuyen_nganh){
		$sql = "INSERT INTO user VALUES ('',".$id_user."','".$ngay_sinh."','".$gioi_tinh."','".$phone."','".$wedsite."', '".$quoc_tich."','".$mo_ta_ngan."','".$ten_tinh."','".$ten_chuyen_nganh."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
}