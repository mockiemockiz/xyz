<?php
class error extends Controller{
	 function error(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_wall');
		 $this->uid=$this->mockie_Session->get('uid');
	 }

	function index(){
	$data=array('inc'	=> 'views/themes/default/errors/not_registered.php');
	$this->Load->mockie_View('themes/default/body.php',$data);
	}
	
	function failed_login(){
	$data=array('inc'	=> 'views/themes/default/errors/failed_login.php');
	$this->Load->mockie_View('themes/default/body.php',$data);
	}
	
}
?>