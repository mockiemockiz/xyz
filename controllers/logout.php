<?php
class logout extends Controller{
	 function logout(){
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
	unset($_SESSION['pass_member']);
	unset($_SESSION['uid']);
	header('location:index.php');
	}
	
}
?>