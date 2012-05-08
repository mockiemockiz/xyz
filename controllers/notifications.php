<?php
class notifications extends Controller{
	 function notifications(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $this->Load->mockie_get_model('dml_notif');
		 $this->Load->mockie_get_model('dml_information_contact');
		 $d=$this->mockie_Session->get('lang');
		 if(empty($d)):
		 $this->lang='english';
		 else:
		 $this->lang=$d;
		 endif;
         $id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16);
		 $this->language=$this->Load->dml_language->language($this->lang,$id_lang);
		 $this->uid=$this->mockie_Session->get('uid');
		 $this->mockie_Paging();
	 }

	function request_buddy(){
	$start=$this->mockie_Screening->real_escape('start');
	$paging=array('limit'			    => 10,
				   'display_page'		=> 2,
				   'all'				=> $this->Load->dml_notif->new_buddy($this->uid),
				   'begin'				=> $start,
				   'link'				=> 'index.php?page=notifications&sub=request_buddy&start=',
				   'display_link'		=> '1');
    $paging=$this->mockie_Paging->Load($paging);
    $buddies=$this->Load->dml_notif->new_buddies($paging['offset'],$paging['limit'],$this->uid);
    $this->Load->mockie_View('themes/default/profile/wall.php',$data);
	$data=array('inc'		=> 'views/themes/default/profile/new_request_buddy.php',
				'new_buddies'	=> $buddies,
				'paging'		=> $paging,
   			   'lang'				=> $this->language,
				'lang2'				=> $this->lang,);
	 $this->Load->mockie_View('themes/default/body2.php',$data);
	}
	
	function accept(){
	$id=$this->mockie_Screening->real_escape('id');
	$data=array('status'	=> '1');
	$w=array('id'	=> $id);
	if($this->Load->dml_general->update($data,'buddies',$w)):
		echo 'success';
	else:
		echo 'sorry... something errror';
	endif;
	}
	
	function reject(){
	$id=$this->mockie_Screening->real_escape('id');
	$w='id='.$id;
	if($this->Load->dml_general->delete('buddies',$w)):
		echo 'success';
	else:
		echo 'sorry... something errror';
	endif;
	}

}
?>