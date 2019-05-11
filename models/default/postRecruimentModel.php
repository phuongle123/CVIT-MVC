<?php

class postRecruimentModel extends Model
{
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
		$posts = $this->select('*', 'dang_tt,user_ntd, tt_ntd','tt_ntd.id_ntd=user_ntd.id_ntd and user_ntd.id_ntd=dang_tt.id_ntd and dang_tt.id_tt = '.$id_tt, null);
		return $posts;
	}

}