<?php
class buddies extends Controller{
	 function buddies(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_buddy');
		 $this->Load->mockie_get_model('dml_language');
		 $guest=$this->mockie_Screening->real_escape('uid');
		 $this->uid=$this->mockie_Session->get('uid');
		 //=======================================================
		 if(!empty($guest)):
		 	$this->uid_owner=$guest;
		 else:
		 	$this->uid_owner=$this->uid;
		 endif;
		 //===============================================
		 if($guest==$this->uid || empty($guest)):
		 	$this->my_self=true;
		 else:
		 	$this->my_self=false;
		 endif;
		 //===========================================================
		 $d=$this->Load->dml_buddy->check_buddy($this->uid,$guest);
		 $this->info['udah_belum']=$d['num'];
		 $l=$this->mockie_Session->get('lang');
		 if(empty($l)):
		 $this->lang='english';
		 else:
		 $this->lang=$l;
		 endif;
		 $this->uid=$this->mockie_Session->get('uid');
		 $this->mockie_Paging();
		 $id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16,24,30);
		 $this->language=$this->Load->dml_language->language($this->lang,$id_lang);
		}

	function index(){
	$aj=$this->mockie_Screening->real_escape('ajax');
	$uid=$this->mockie_Screening->real_escape('uid');
	$all=$this->Load->dml_buddy->all_buddies($uid);
		$start=$this->mockie_Screening->real_escape('start');
		$paging=array('limit'			    => 10,
					   'display_page'		=> 2,
					   'all'				=> $all,
					   'begin'				=> $start,
					   'link'				=> 'index.php?page=buddy&ajax=1&start=',
					   'display_link'		=> '0',
					   'page_elementAjax'	=> 'wall');
	$paging=$this->mockie_Paging->Load($paging);
	if($aj):
	$buddies=$this->Load->dml_buddy->my_buddies(0,6,$uid);
	$data=array('inc'			=> 'views/themes/default/profile/buddies.php',
				'all'			=> $all,
				'buddies'		=> $buddies,
				'view_as'		=> $uid,
   			   'lang'				=> $this->language,
				'lang2'				=> $this->lang);
	$this->Load->mockie_View('themes/default/profile/buddies.php',$data);
	else:
	$buddies=$this->Load->dml_buddy->my_buddies($paging['offset'],$paging['limit'],$uid);
	$data=array('inc'			=> 'views/themes/default/profile/buddies.php',
				'buddies'		=> $buddies,
				'view_as'		=> $uid,
				'paging'		=> $paging,
   			   'lang'				=> $this->language,
				'lang2'				=> $this->lang);
	$this->Load->mockie_View('themes/default/body2.php',$data);
	endif;
	}
	
	function mutual_buddies(){
	$guest=$this->mockie_Screening->real_escape('uid');
	$uid=$this->uid;
	$buddies=$this->Load->dml_buddy->mutual_buddies($uid,$guest);
	$data=array('inc'			=> 'views/themes/default/profile/mutual_buddies.php',
				'buddies'		=> $buddies,
				'view_as'		=> $uid);
	$this->Load->mockie_View('themes/default/profile/mutual_buddies.php',$data);
	}
	
	
}
?>