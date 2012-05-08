<?php
class about_me extends Controller{
	 function about_me(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		  $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $this->Load->mockie_get_model('dml_buddy');
		 $this->Load->mockie_get_model('dml_information_contact');
		 $this->lang=$this->mockie_Session->get('lang');
		 $this->uid=$this->mockie_Session->get('uid');
		 $guest=$this->mockie_Screening->real_escape('uid');
		 $d=$this->Load->dml_buddy->check_buddy($this->uid,$guest);
		 //==========================================================
		 if(!empty($guest)):
		 	$this->uid_owner=$guest;
		 else:
		 	$this->uid_owner=$this->uid;
		 endif;
		  //===========================================================
	 	if($d['num']>0 || $this->uid_owner==$this->uid || empty($guest)):
			$this->teman=true;
		else:
			$this->teman=false;
		endif;
		//============================================================
		 $l=$this->mockie_Session->get('lang');
		 if(empty($l)):
		 $this->lang='english';
		 else:
		 $this->lang=$l;
		 endif;
		 $this->uid=$this->mockie_Session->get('uid');
		 $this->mockie_Paging();
	 }

	function index(){
	$id_lang=array(7,27,6);
	$lang=$this->Load->dml_language->language($this->lang,$id_lang);
	if($this->teman):
	$profile=$this->Load->dml_information_contact->profile($this->uid_owner);
	$add=$this->Load->dml_information_contact->add($this->uid_owner);
	$univ=$this->Load->dml_information_contact->univ($this->uid_owner);
	$web=$this->Load->dml_information_contact->web($this->uid_owner);
	$data=array('inc'		=> 'views/themes/default/setting/setting.php',
				'profile'	=> $profile,
				'add'		=> $add,
				'web'		=> $web,
				'univ'		=> $univ,
   			    'lang'				=> $lang,
			    'lang2'				=> $this->lang);
	$this->Load->mockie_View('themes/default/profile/about_me.php',$data);
	else:
	$this->Load->mockie_View('themes/default/errors/not_buddy.php','');
	endif;
	}

}
?>