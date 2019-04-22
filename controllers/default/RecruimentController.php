<?php 
/**
* 
*/
class RecruimentController extends Controller
{
	function __construct(){
		$this->folder = "default";
	}
	function showAllPosts()
	{
		require_once 'vendor/Model.php';
		require_once 'models/default/postRecruimentModel.php';
		$posts = new postRecruimentModel;

		$data[] =$posts->getAllPosts();
		$this->render('dstintuyendung', $data);
	}
	function showPostById($id_tt){
		require_once 'vendor/Model.php';
		require_once 'models/default/postRecruimentModel.php';
		$md = new postRecruimentModel;
		$data = $md->getPostsById($id_tt);
		$data = array();
		$data = $md->getPrdById($masp);

		$this->render('dstintuyendung', $data);
	}
}
?>