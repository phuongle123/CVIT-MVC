<?php 

/**
* 

*/
class recruiterModel extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getRecruiterByUsername($username)
	{
		$result = array();
		$sql = "SELECT * FROM user_ntd,tt_ntd WHERE email = '".$username."' and user_ntd.id_ntd = tt_ntd.id_ntd";
		if($this->conn->query($sql)->rowCount() == 0){
			return false;
		} else {
			foreach($this->conn->query($sql) as $row){
				$result = $row;
			}
			return $result;
		}
	}
	function getRecruiterByEmail($email)
	{
		$result = array();
		$sql = "SELECT * FROM user_ntd WHERE email = '".$email."'";
		if($this->conn->query($sql)->rowCount() == 0){
			return false;
		} else {
			foreach($this->conn->query($sql) as $row){
				$result = $row;
			}
			return $result;
		}
	}
	function getDstinById($id_ntd){
		$dm = $this->select('*', 'user_ntd,dang_tt','user_ntd.id_ntd=dang_tt.id_ntd and user_ntd.id_ntd = '. $id_ntd, null );
		return $dm;
	}
	function gettinById($id_tt){
		$dm = $this->select('*', 'dang_tt','id_tt = '.$id_tt, null );
		return $dm;
	}
	function postTinById($tieu_de, $noi_dung, $id_ntd){
		
		$sql = "INSERT INTO dang_tt (id_tt, tieu_de, noi_dung, id_ntd) VALUES ('','".$tieu_de."','".$noi_dung."','".$id_ntd."')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
	function getDsCvById($id_tt){
		$dm = $this->select('*', 'apply,tt_thanh_vien,dang_tt','apply.id_tt=dang_tt.id_tt and apply.id_tv=tt_thanh_vien.id_tv  and dang_tt.id_tt = '. $id_tt, null );
		return $dm;
	}
	function getDsCv($id_ntd){
		$dm = $this->select('*', 'apply,tt_thanh_vien,dang_tt, chuyen_nganh,user_ntd','apply.id_tt=dang_tt.id_tt and apply.id_tv=tt_thanh_vien.id_tv and chuyen_nganh.id_chuyen_nganh=tt_thanh_vien.id_chuyen_nganh and user_ntd.id_ntd=dang_tt.id_ntd and user_ntd.id_ntd = '. $id_ntd , null );
		return $dm;
	}
	function adduser($email,$pass){
		
		$sql = "INSERT INTO user_ntd VALUES ('','".$email."','".$pass."') ";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}

	}
	function addTtNtd($ten_cong_ty,$dia_chi,$sdt,$id_ntd){
		
		$sql = "INSERT INTO tt_ntd VALUES ('".$ten_cong_ty."','".$dia_chi."','".$sdt."','".$id_ntd."','') ";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}

	}
}