<?php
class dml_notif extends Model{
	function dml_notif(){
	parent::Model();
	}

	function new_buddy($uid){
	$this->DB->field("status");
	$this->DB->from('buddies');
	$this->DB->where("recepient='".$uid."' AND status='0'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function new_buddies($off,$lim,$uid){
	$this->DB->field("a.id as id,a.recepient,CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as full_name,c.profile_pict as pp,c.uid as uid");
	$this->DB->from('buddies a,profile b,profile_pict c');
	$this->DB->where("a.recepient='".$uid."' AND a.status='0' AND b.uid=a.inviter AND c.uid=a.inviter");
	$this->DB->order_by('a.id DESC ');
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}
	
	function new_message($uid){
	$this->DB->field("status");
	$this->DB->from('messages');
	$this->DB->where("recepient='".$uid."' AND status='0'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function all_messages(){
	$this->DB->field("status");
	$this->DB->from('messages');
	$this->DB->where("recepient='".$uid."'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function new_messages($off,$lim,$uid){
	$this->DB->field("a.id as id,a.recepient,CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as full_name,c.profile_pict as pp,c.uid as uid");
	$this->DB->from('messages a,profile b,profile_pict c');
	$this->DB->where("recepient='".$uid."' AND b.uid=a.sender AND c.uid=a.sender");
	$this->DB->order_by('a.id DESC ');
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}

}
?>