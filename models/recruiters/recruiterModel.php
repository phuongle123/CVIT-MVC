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
		$sql = "SELECT * FROM user_ntd,tt_ntd, dang_tt WHERE email = '".$username."' and user_ntd.id_ntd = tt_ntd.id_ntd and  user_ntd.id_ntd=dang_tt.id_ntd";
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
		$dm = $this->select('*', 'dang_tt','id_tt = '. $id_tt, null );
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

}