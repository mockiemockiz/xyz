<?php
class dml_status extends Model{
	function dml_status(){
	parent::Model();
	}

	function last_status($uid){
	$this->DB->field('*');
	$this->DB->from('wall');
	$this->DB->where("recepient='".$uid."' AND sender='".$uid."'");
	$this->DB->order_by('id DESC');
	$this->DB->limit(0,1);
	$this->DB->select();
	return $this->DB->result();
	}
	
}
?>