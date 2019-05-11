<?php

class infoUsersModel extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getSoThich()
	{
		$info = $this->select('*', 'so_thich',null,null);
		return $info;
	}
	function getKyNang()
	{
		$info = $this->select('*', 'ky_nang',null,null);
		return $info;
	}
	function getTenTinh()
	{
		$info = $this->select('*', 'tinh_thanh',null,null);
		return $info;
	}
	function getTenChuyenNganh()
	{
		$info = $this->select('*', 'chuyen_nganh',null,null);
		return $info;
	}
	function getInfoUsers(){
		$info = $this->select('*', 'user,tt_thanh_vien,chuyen_nganh','tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh', 'ORDER BY id_tv DESC limit 6');
		return $info;
	}
	function getInfoById($id_tv){
		$info = $this->select('*', 'user,tt_thanh_vien,chuyen_nganh,tinh_thanh','tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh and tt_thanh_vien.id_tinh=tinh_thanh.id_tinh and id_tv = '.$id_tv);
		return $info;
	}
	function getInfoHocVan($id_tv){
		$info = $this->select('*', 'tt_thanh_vien,hoc_van','tt_thanh_vien.id_tv=hoc_van.id_tv and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}
	function getInfoChungChi($id_tv){
		$info = $this->select('*', 'tt_thanh_vien,chung_chi','tt_thanh_vien.id_tv=chung_chi.id_tv and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}
	function getInfoGiaiThuong($id_tv){
		$info = $this->select('*', 'tt_thanh_vien,giai_thuong','tt_thanh_vien.id_tv=giai_thuong.id_tv and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}
	function getInfoHoatDong($id_tv){
		$info = $this->select('*', 'tt_thanh_vien,hoat_dong','tt_thanh_vien.id_tv=hoat_dong.id_tv and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}
	function getInfoSoThich($id_tv){
		$info = $this->select('*', 'tt_thanh_vien, so_thich,tt_so_thich','tt_thanh_vien.id_tv=tt_so_thich.id_tv and so_thich.id_so_thich=tt_so_thich.id_so_thich and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}
	function getInfoKyNang($id_tv){
		$info = $this->select('*', 'tt_thanh_vien, ky_nang,tt_ky_nang','tt_thanh_vien.id_tv=tt_ky_nang.id_tv and ky_nang.id_kn=tt_ky_nang.id_kn and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}function getInfoKinhNghiem($id_tv){
		$info = $this->select('*', 'tt_thanh_vien, kinh_nghiem','tt_thanh_vien.id_tv=kinh_nghiem.id_tv and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}function getInfoDuAn($id_tv){
		$info = $this->select('*', 'tt_thanh_vien,du_an','tt_thanh_vien.id_tv=du_an.id_tv and tt_thanh_vien.id_tv='.$id_tv);
		return $info;
	}

}