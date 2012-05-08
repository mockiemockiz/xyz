<?php
class dml_login extends Model{
	function dml_login(){
	parent::Model();
	}
	
	function check($pass){
	$this->DB->field('pass,uid');
	$this->DB->from('users');
	$this->DB->where("pass='".$pass."'");
	$this->DB->select();
	$a=array();
	$a['num']=$this->DB->num();
	$a['result']=$this->DB->single_result('uid');
	return $a;
	}
	
	function check_member($pass){
	$this->DB->field('pass');
	$this->DB->from('users');
	$this->DB->where("pass='".$pass."'");
	$this->DB->select();
	return $this->DB->num();
	}
	
}
?>