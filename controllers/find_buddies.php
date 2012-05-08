<?php
class find_buddies extends Controller{
	 function find_buddies(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_buddy');
		 $this->Load->mockie_get_model('dml_language');
		  $d=$this->mockie_Session->get('lang');
		 if(empty($d)):
		 $this->lang='english';
		 else:
		 $this->lang=$d;
		 endif;
		 $this->uid=$this->mockie_Session->get('uid');
		 $this->mockie_Paging();
		 $id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16);
		 $this->language=$this->Load->dml_language->language($this->lang,$id_lang);
	 }

	function index(){
	$q=$this->mockie_Screening->real_escape('q');
	$all=$this->Load->dml_buddy->all_find_buddies($q);
	$paging=array('limit'			    => 10,
				   'display_page'		=> 2,
				   'all'				=> $all,
				   'begin'				=> $start,
				   'link'				=> 'index.php?page=messages&sub=inbox&start=',
				   'display_link'		=> '0',
			   	   'page_elementAjax'	=> 'wall');
    $paging=$this->mockie_Paging->Load($paging);
	$buddies=$this->Load->dml_buddy->find_buddies($paging['offset'],$paging['limit'],$q);
	$data=array('re'		=> $re,
				'inc'		=> 'views/themes/default/profile/find_buddies.php', 
				'paging'	=> $paging,
				'buddies'	=> $buddies,
   			    'lang'		=> $this->language,
				'lang2'		=> $this->lang,
				'id_re'		=> $id_re);
	 $this->Load->mockie_View('themes/default/body2.php',$data);
	}
	
}
?>