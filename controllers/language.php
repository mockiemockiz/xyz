<?php
class language extends Controller{
	 function language(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $this->lang=$this->mockie_Session->get('lang');
	 }

	function set(){
	$to=$this->mockie_Screening->post('to');
	$lang=$this->mockie_Screening->post('lang');
	$_SESSION['lang']=$lang;
	if(empty($to)):
	header('location:index.php');
	else:
	header('location:index.php?page='.$to);
	endif;
	}
}
?>