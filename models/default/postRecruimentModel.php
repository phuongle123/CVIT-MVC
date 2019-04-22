<?php

class postRecruimentModel extends Model
{
	/*private $masp, $tensp, $gia;*/
	function __construct()
	{
		parent::__construct();
	}
	function getPosts(){
		$posts = $this->select('*', 'dang_tt',null, 'ORDER BY id_tt DESC limit 10');
		return $posts;
	}
	function getAllPosts(){
		$posts = $this->select('*', 'dang_tt',null, 'ORDER BY id_tt DESC');
		return $posts;
	}
	function getPostsById($id_tt){
		$sql = "SELECT * FROM dang_tt WHERE id_tt = ".$id_tt;
		$post = array();
		foreach($this->conn->query($sql) as $row){
			$post = $row;
		}
		return $post;
	}

}