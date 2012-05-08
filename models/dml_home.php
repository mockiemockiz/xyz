<?php
class dml_home extends Model{
	function dml_home(){
	parent::Model();
	}

	function all($uid){
	$this->DB->field("a.time as time");
	$this->DB->from('wall a,buddies e');
	$this->DB->where("
					 (e.recepient='".$uid."' AND e.status='1' OR e.inviter='".$uid."' AND e.status='1') 
					 and 
					 ((a.recepient=e.inviter and a.sender=e.inviter) or (a.recepient=e.recepient and a.sender=e.recepient))");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.sender',
							   'profile_pict d'	=> 'd.uid=a.sender'));
	$this->DB->group_by('a.id');
	$this->DB->select();
	return $this->DB->num();
	}
	
	function news_updates($off,$lim,$uid){
	$this->DB->field("a.time as time,
					  a.status,
					  a.recepient,
					  a.sender as uid_sender,
					  a.id as id,
					  d.profile_pict as pp,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as sender,
					  c.likes as likes,
					  c.unlikes as unlikes");
	$this->DB->from('wall a,buddies e');
	$this->DB->where("
					 (e.recepient='".$uid."' AND e.status='1' OR e.inviter='".$uid."' AND e.status='1') 
					 and 
					 ((a.recepient=e.inviter and a.sender=e.inviter) or (a.recepient=e.recepient and a.sender=e.recepient))");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.sender',
							   'profile_pict d'	=> 'd.uid=a.sender'));
	$this->DB->group_by('a.id');
	$this->DB->order_by('a.id DESC ');
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}
	

}
?>