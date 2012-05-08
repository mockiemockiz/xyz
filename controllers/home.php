<?php
class home extends Controller{
	 function home(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_users');
		 $this->Load->mockie_get_model('dml_buddy');
		 $this->Load->mockie_get_model('dml_notif');
		 $this->Load->mockie_get_model('dml_status');
		 $this->Load->mockie_get_model('dml_messages');		 
		 $this->Load->mockie_get_model('dml_information_contact');
		 $this->Load->mockie_get_model('dml_language');
		 $this->Load->mockie_get_model('dml_home');
		 $guest=$this->mockie_Screening->real_escape('uid');
		 $this->uid=$this->mockie_Session->get('uid');
 		 $d=$this->Load->dml_buddy->check_buddy($this->uid,$guest);
 		 $this->info['udah_belum']=$d['num'];
		 //==========================================================
		 if(!empty($guest)):
		 	$this->uid_owner=$guest;
		 else:
		 	$this->uid_owner=$this->uid;
		 endif;
		 //===========================================================
		
		 $this->info['status']=$d['result'];
		 $d=$this->mockie_Session->get('lang');
		 if(empty($d)):
		 $this->lang='english';
		 else:
		 $this->lang=$d;
		 endif;
         $this->info['universities']=$this->Load->dml_information_contact->univ($this->uid_owner);
		 $this->info['websites']=$this->Load->dml_information_contact->web($this->uid_owner);
		 $this->info['profile']=$this->Load->dml_information_contact->profile($this->uid_owner);
		 $this->pp=$this->Load->dml_users->pp($this->uid_owner);
		}

	function index(){
	$id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16);
	$lang=$this->Load->dml_language->language($this->lang,$id_lang);
	///$wall=$this->wall(0);
	if(file_exists(ABSOLUTE_PATH.'/uploads/'.$this->pp)):
	$pp='<img src="http://localhost/xyz/thumb_profile.php?img='.$this->pp.'&w=200&h=300" />';
	else:
	$pp='<img src="uploads/profile_picts/unknown.gif" />';
	endif;
	$this->small_pp='<img src="http://localhost/xyz/thumb_profile.php?img='.$this->pp.'&w=60&h=60" style="float:left; margin-right:5px;" />';
	$start=$this->mockie_Screening->real_escape('start');
	$ajax=$this->mockie_Screening->real_escape('ajax');
	$paging=array('limit'			    => 10,
				   'display_page'		=> 2,
				   'all'				=> $this->Load->dml_home->all($this->uid),
				   'begin'				=> $start,
				   'link'				=> 'index.php?page=home&ajax=1&start=',
				   'display_link'		=> '0',
			   	   'page_elementAjax'	=> 'body');
    $paging=$this->mockie_Paging->Load($paging);
    $news=$this->Load->dml_home->news_updates($paging['offset'],$paging['limit'],$this->uid);
	$data=array('inc'			=> 'views/themes/default/profile/home.php',
				'uid'			=> $this->uid,
				'pp'			=> $pp,
				'paging'		=> $paging,
				'news'			=> $news,
				'lang'			=> $lang,
				'lang2'			=> $this->lang,
				'small_pp'		=> $this->small_pp,
				'info'			=> $this->info);
	if($ajax):
	$this->Load->mockie_View('themes/default/profile/home.php',$data);
	else:
	$this->Load->mockie_View('themes/default/body2.php',$data);
	endif;
	}
	
	
	
}
?>