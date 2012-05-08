<?php
class dml_album extends Model{
	function dml_album(){
	parent::Model();
	}
	
	function album_list($uid){
	$this->DB->field('aid,name,location');
	$this->DB->from('album');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	function view_album($uid,$aid){
	$this->DB->field('*');
	$this->DB->from('photos');
	$this->DB->where("uid='".$uid."' AND aid='".$aid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	function view_large($pid){
	$this->DB->field('*');
	$this->DB->from('photos');
	$this->DB->where("pid='".$pid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	function check_delete_photo($file,$uid){
	$this->DB->field('pid');
	$this->DB->from('photos');
	$this->DB->where("file='".$file."' AND uid='".$uid."'");
	$this->DB->select();
	return $this->DB->num();
	}

}
?>