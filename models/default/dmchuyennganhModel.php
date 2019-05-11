<?php

class dmchuyennganhModel extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getDmChuyenNganh(){
		$dm = $this->select('*', 'chuyen_nganh',null, 'ORDER BY id_chuyen_nganh DESC');
		return $dm;
	}
	function getDmChuyenNganhById($id_chuyen_nganh){

		$dm = $this->select('*', 'chuyen_nganh','id_chuyen_nganh= "'.$id_chuyen_nganh.'"',null);
		return $dm;
	}
	function getInfoById($id_chuyen_nganh){
		$dm = $this->select('*', 'chuyen_nganh,tt_thanh_vien,user','tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh and chuyen_nganh.id_chuyen_nganh = "'.$id_chuyen_nganh.'"','ORDER BY "id_thanh_vien.tt_thanh_vien" DESC limit 10' );
		return $dm;
	}
}