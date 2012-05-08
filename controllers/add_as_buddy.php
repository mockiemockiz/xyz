<?php
class add_as_buddy extends Controller{
	 function add_as_buddy(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $this->lang=$this->mockie_Session->get('lang');
		 $this->uid=$this->mockie_Session->get('uid');
	 }

	function index(){
	$recepient=$this->mockie_Screening->real_escape('uid');
	$data=array('re'	=> $recepient);
	$this->Load->mockie_View('themes/default/modal_messages/add_as_buddy.php',$data);
	}
	
	function add(){
	$recepient=$this->mockie_Screening->real_escape('uid');
	$data=array('inviter'	=> $this->uid,
				'recepient'	=> $recepient);
	if($this->Load->dml_general->save($data,'buddies')):
	echo 'success';
	else:
	echo 'sorry something error';
	endif;
	echo '<script language="javascript" type="text/javascript">
   auto_close_modal();
	</script>';
	}
}
?>