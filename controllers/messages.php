<?php
class messages extends Controller{
	 function messages(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_messages');
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
	$re=$this->mockie_Screening->real_escape('re');
	$id_re=$this->mockie_Screening->real_escape('id_re');
	$data=array('re'	=> $re,
				'id_re'	=> $id_re);
	$this->Load->mockie_View('themes/default/modal_messages/message_form.php',$data);
	}
	
	function inbox($d=0){
	$ajax=$this->mockie_Screening->real_escape('ajax');
	$uid=$this->mockie_Session->get('uid');
	$start=$this->mockie_Screening->real_escape('start');
	$paging=array('limit'			    => 10,
				   'display_page'		=> 2,
				   'all'				=> $this->Load->dml_messages->all_messages($uid),
				   'begin'				=> $start,
				   'link'				=> 'index.php?page=messages&sub=inbox&start=',
				   'display_link'		=> '0',
			   	   'page_elementAjax'	=> 'wall');
   $paging=$this->mockie_Paging->Load($paging);
   $messages=$this->Load->dml_messages->the_messages($paging['offset'],$paging['limit'],$uid);
   $data=array('inc'				=> 'views/themes/default/profile/messages.php',
   			   'paging_inbox'		=> $paging,
   			   'lang'				=> $this->language,
			   'lang2'				=> $this->lang,
			   'inbox'				=> $messages);
   if($ajax || $d):
   $this->Load->mockie_View('themes/default/profile/messages.php',$data);
   else:
   $this->Load->mockie_View('themes/default/body2.php',$data);
   endif;
   }
   
   
   function read_messages(){
   $id=$this->mockie_Screening->real_escape('idm');
   $d=array('status'	=> '1');
   $w=array('id'		=> $id);
   $this->Load->dml_general->update($d,'messages',$w);
   $messages=$this->Load->dml_messages->read_message($this->uid,$id);
   $data=array('pesan'			=> $messages,
   			   'inc'			=> 'views/themes/default/profile/read_messages.php');
   $this->Load->mockie_View('themes/default/profile/read_messages.php',$data);
   }
	
	
	function send(){
	$re=$this->mockie_Screening->post('re');
	$subject=$this->mockie_Screening->post('subject');
	$pesan=$this->mockie_Screening->post('pesan');
	$data=array('sender'	=> $this->uid,
				'recepient'	=> $re,
				'time'		=> date("Y-m-d h:i:s"),
				'subject'	=> $subject,
				'pesan'		=> $pesan);
	$this->Load->dml_general->save($data,'messages');
	echo 'pesan sudah kirim';
	}
	
	function delete(){
	$idm=$this->mockie_Screening->post('check');
	$all=count($idm);
	for($d=0;$d<$all;$d++):
	$w='id='.$idm[$d];
	$this->Load->dml_general->delete('messages',$w);
	endfor;
	$this->inbox(1);
	}
	
}
?>