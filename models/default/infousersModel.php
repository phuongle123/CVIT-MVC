<?php

class infousersModel extends Model
{
	/*private $masp, $tensp, $gia;*/
	function __construct()
	{
		parent::__construct();
	}
	function getInfoUsers(){
		$info = $this->select('*', 'user,tt_thanh_vien,chuyen_nganh','tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh', 'ORDER BY id_tv DESC limit 6');
		return $info;
	}
	
}