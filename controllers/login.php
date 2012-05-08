<?php
class login extends Controller{
	 function login(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_login');
	 }

	function index(){
	$email=$this->mockie_Screening->post('email');
	$pass=$this->mockie_Screening->post('pass');
	$md=md5("$email/$pass/m0ck1m0ck1");
	$check=$this->Load->dml_login->check($md);
	if($check['num']==1):
		$_SESSION['pass_member']=$md;
		$_SESSION['uid']=$check['result'];
		header('location:index.php?page=profile');
	else:
		header('location:index.php?page=error&sub=failed_login');
	endif;
	}

}
?>