<?php
class dml_users extends Model{
	function dml_users(){
	parent::Model();
	}

	function check_signup($uid){
	$this->DB->field('uid,email,pass');
	$this->DB->from('users');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function profile($uid){
	$this->DB->field('*');
	$this->DB->from('profile');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	function check($from,$uid){
	$this->DB->field('uid');
	$this->DB->from($from);
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function pass($uid){
	$this->DB->field('pass');
	$this->DB->from('users');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->single_result('pass');
	}
	
	function check_pass($pass){
	$this->DB->field('pass');
	$this->DB->from('users');
	$this->DB->where("pass='".$pass."'");
	$this->DB->select();
	return $this->DB->num();
	}

	
	function pp($uid){
	$this->DB->field('profile_pict');
	$this->DB->from('profile_pict');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->single_result('profile_pict');
	}
	


}
?>