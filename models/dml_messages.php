<?php
class dml_messages extends Model{
	function dml_messages(){
	parent::Model();
	}

	function new_message($uid){
	$this->DB->field("status");
	$this->DB->from('messages');
	$this->DB->where("recepient='".$uid."' AND status='0'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function all_messages($uid){
	$this->DB->field("status");
	$this->DB->from('messages');
	$this->DB->where("recepient='".$uid."'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function the_messages($off,$lim,$uid){
	$this->DB->field("a.id as id,
					  a.time as time,
					  a.recepient,
					  a.status as status,
					  a.subject as subject,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as full_name,
					  c.profile_pict as pp,
					  c.uid as uid");
	$this->DB->from('messages a,profile b,profile_pict c');
	$this->DB->where("recepient='".$uid."' AND b.uid=a.sender AND c.uid=a.sender");
	$this->DB->order_by('a.id DESC ');
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}
	
	function read_message($uid,$id){
	$this->DB->field("a.id as id,
					  a.recepient,
					  a.sender as uid,
					  a.time as time,
					  a.pesan as pesan,
					  a.status as status,
					  a.subject as subject,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as full_name,
					  c.profile_pict as pp,
					  c.uid as uid");
	$this->DB->from('messages a,profile b,profile_pict c');
	$this->DB->where("recepient='".$uid."' AND b.uid=a.sender AND c.uid=a.sender AND a.id=$id");
	$this->DB->select();
	return $this->DB->result();
	}

}
?>