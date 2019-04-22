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
		require_once 'models/default/infousersModel.php';
		$info = new infousersModel;
		require_once 'models/default/postRecruimentModel.php';
		$posts = new postRecruimentModel;

		$data[] = $info->getInfoUsers();
		$data[] =$posts->getPosts();
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
		
		$this->render('tintuyendung',$data, $id_tt);
	}
}
?>