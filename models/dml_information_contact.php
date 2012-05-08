<?php
class dml_information_contact extends Model{
	function dml_information_contact(){
	parent::Model();
	}

	function information_contact($uid){
	$this->DB->field('a.university,b.website,d.town,e.first_name,e.middle_name,e.surname,e.dob');
	$this->DB->from('users c');
	$this->DB->left_join(array('universities a'	=> 'a.uid=c.uid',
						 	   'websites b'		=> 'b.uid=c.uid',
							   'town d'			=> 'd.uid=c.uid',
							   'profile e'		=> 'e.uid=c.uid'));
	$this->DB->where("c.uid='".$uid."'");
	$this->DB->order_by('c.uid');
	$this->DB->select();
	return $this->DB->result();
	}
	
	function profile($uid){
	$this->DB->field("CONCAT_WS(' ',first_name,middle_name,surname) as long_name,
					  first_name,
					  middle_name,
					  surname,
					  dob");
	$this->DB->from('profile');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	function add($uid){
	$this->DB->field("id,addres");
	$this->DB->from('addreses');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	function univ($uid){
	$this->DB->field("id,university");
	$this->DB->from('universities');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	function web($uid){
	$this->DB->field("id,website");
	$this->DB->from('websites');
	$this->DB->where("uid='".$uid."'");
	$this->DB->select();
	return $this->DB->result();
	}
	
	
	/*
	function profile($uid){
	$this->DB->field("a.university,
					  b.website,
					  d.town,
					  CONCAT_WS(' ',e.first_name,e.middle_name,e.surname) as long_name,
					  e.first_name,
					  e.middle_name,
					  e.surname,
					  e.dob,
					  f.addres as addres,
					  f.i as id_add");
	$this->DB->from('users c');
	$this->DB->left_join(array('universities a'	=> 'a.uid=c.uid',
						 	   'websites b'		=> 'b.uid=c.uid',
							   'town d'			=> 'd.uid=c.uid',
							   'profile e'		=> 'e.uid=c.uid',
							   'addreses f'		=> 'f.uid=c.uid'));
	$this->DB->where("c.uid='".$uid."'");
	$this->DB->order_by('c.uid');
	$this->DB->select();
	return $this->DB->result();
	
	}
	*/
	
}
?>