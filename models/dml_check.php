<?php
class dml_check extends Model{
	function dml_helloworld(){
	parent::Model();
	}

	function check_member($pass){
	$this->DB->field('pass');
	$this->DB->from('users');
	$this->DB->where("pass='".$pass."' AND status='1'");
	$this->DB->select();
	return $this->DB->num();
	}
	
}
?>