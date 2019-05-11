<?php 
/**
* 
*/
class IndexController extends Controller
{
	function __construct(){
		$this->folder = "default";
	}
	function index()
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/infoUsersModel.php';
		$info = new infousersModel;
		require_once 'models/default/postRecruimentModel.php';
		$posts = new postRecruimentModel;


		$data[] = $info->getInfoUsers();
		$data[] =$posts->getPosts();
		$data[] = $info->getTenTinh();
		$data[] = $info->getTenChuyenNganh();
		$this->render('index', $data);
	}
	function dstintuyendung()
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/postRecruimentModel.php';
		$posts = new postRecruimentModel;

		$data[] =$posts->getAllPosts();
		$this->render('dstintuyendung', $data);
	}
	function tintuyendung($id_tt)
	{	
		require_once 'vendor/Model.php';
		require_once 'models/default/postRecruimentModel.php';
		$posts = new postRecruimentModel;

		$data[] =$posts->getPostsById($id_tt);
		$data[] =$posts->getPosts();
		
		$this->render('tintuyendung',$data);
	}
	function trangcv($id_tv)
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/infoUsersModel.php';
		$info = new infoUsersModel;
		
		$data[] =$info->getInfoById($id_tv);
		$data[] =$info->getInfoHocVan($id_tv);
		$data[] =$info->getInfoChungChi($id_tv);
		$data[] =$info->getInfoGiaiThuong($id_tv);
		$data[] =$info->getInfoHoatDong($id_tv);
		$data[] =$info->getInfoSoThich($id_tv);
		$data[] =$info->getInfoKyNang($id_tv);
		$data[] =$info->getInfoKinhNghiem($id_tv);
		$data[] =$info->getInfoDuAn($id_tv);

		$this->render('trangcv',$data);
	}
	function chuyennganh($id_chuyen_nganh) 
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/dmchuyennganhModel.php';
		$dmchuyennganh = new dmchuyennganhModel;

		require_once 'models/default/postRecruimentModel.php';
		$posts = new postRecruimentModel;

		$data[] = $dmchuyennganh -> getDmChuyenNganhById($id_chuyen_nganh);
		$data[] = $dmchuyennganh -> getInfoById($id_chuyen_nganh);
		$data[] =$posts->getPosts();
		$this->render('chuyennganh',$data);
	}
}
?>