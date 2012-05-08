<?php
class dml_wall extends Model{
	function dml_wall(){
	parent::Model();
	}

	function all($uid){
	$this->DB->field("a.time as time,
					  a.status,
					  a.recepient,
					  a.sender,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as name,
					  c.likes as likes");
	$this->DB->from('wall a');
	$this->DB->where("recepient='".$uid."'");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.sender',
							   'profile_pict d'	=> 'd.uid=a.sender',
							   'replies e'		=> 'e.idw=a.id'));
	$this->DB->select();
	return $this->DB->num();
	}
	
	function walls($off,$lim,$uid){
	$this->DB->field("a.time as time,
					  a.status,
					  a.recepient,
					  a.sender as uid_sender,
					  a.id as id,
					  d.profile_pict as pp,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as sender,
					  c.likes as likes,
					  c.unlikes as unlikes");
	$this->DB->from('wall a');
	$this->DB->where("recepient='".$uid."'");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.sender',
							   'profile_pict d'	=> 'd.uid=a.sender'));
	$this->DB->order_by('a.id DESC ');
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}
	
	function replies($idw){
	$this->DB->field("a.time as time,
					  a.reply as reply,
					  a.id as id,
					  a.uid as uid_sender,
					  d.profile_pict as pp,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as sender,
					  likes as likes,
					  unlikes as unlikes");
	$this->DB->from('replies a');
	$this->DB->where("a.idw='".$idw."'");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.uid',
							   'profile_pict d'	=> 'd.uid=a.uid'));
	$this->DB->order_by('a.id ASC ');
	$this->DB->limit(0,5);
	$this->DB->select();
	return $this->DB->result();
	}
	
	function all_show($idw){
	$this->DB->field("a.time");
	$this->DB->from('replies a');
	$this->DB->where("a.idw='".$idw."'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function show_reply($off,$lim,$idw){
	$this->DB->field("a.time as time,
					  a.reply as reply,
					  a.id as id,
					  a.uid as uid_sender,
					  d.profile_pict as pp,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as sender,
					  likes as likes,
					  unlikes as unlikes");
	$this->DB->from('replies a');
	$this->DB->where("a.idw='".$idw."'");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.uid',
							   'profile_pict d'	=> 'd.uid=a.uid'));
	$this->DB->order_by('a.id ASC ');
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}

	function check_like($idw,$field){
	$this->DB->field($field);
	$this->DB->from('likes');
	$this->DB->where('idw='.$idw);
	$this->DB->select();
	$a['num']=$this->DB->num();
	$a['result']=$this->DB->single_result($field);
	return $a;
	}
	
	function last_reply($idw){
	$this->DB->field("a.time as time,
					  a.reply as reply,
					  a.id as id,
					  a.uid as uid_sender,
					  d.profile_pict as pp,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as sender,
					  likes as likes,
					  unlikes as unlikes");
	$this->DB->from('replies a');
	$this->DB->where("a.idw='".$idw."'");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.uid',
							   'profile_pict d'	=> 'd.uid=a.uid'));
	$this->DB->order_by('a.id DESC ');
	$this->DB->limit(0,1);
	$this->DB->select();
	return $this->DB->result();
	}
	
	function last_wall($uid){
	$this->DB->field("a.time as time,
					  a.status,
					  a.recepient,
					  a.sender as uid_sender,
					  a.id as id,
					  d.profile_pict as pp,
					  CONCAT_WS(' ',b.first_name,b.middle_name,b.surname) as sender,
					  c.likes as likes,
					  c.unlikes as unlikes");
	$this->DB->from('wall a');
	$this->DB->where("recepient='".$uid."'");
	$this->DB->left_join(array('likes c' 		=> 'c.idw=a.id',
						 	   'profile b'		=> 'b.uid=a.sender',
							   'profile_pict d'	=> 'd.uid=a.sender'));
	$this->DB->order_by('a.id DESC ');
	$this->DB->limit(0,1);
	$this->DB->select();
	return $this->DB->result();
	}
	
	
	
	function check_wall($idw){
	$this->DB->field('id');
	$this->DB->from('wall');
	$this->DB->where('id='.$idw);
	$this->DB->select();
	return $this->DB->num();
	}
	
	function check_liked_id($uid,$idw){
	$this->DB->field('uid');
	$this->DB->from('liked_id');
	$this->DB->where('uid="'.$uid.'" AND idw='.$idw);
	$this->DB->select();
	return $this->DB->num();
	}
	
}
?>