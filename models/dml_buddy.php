<?php
class dml_buddy extends Model{
	function dml_buddy(){
	parent::Model();
	}
	
	function check_buddy($login,$view_as){
	$this->DB->field('status');
	$this->DB->from('buddies');
	$this->DB->where("(inviter='".$login."' AND recepient='".$view_as."' AND status='1') OR (recepient='".$login."' AND inviter='".$view_as."' AND status='1')");
	$this->DB->select();
	$c=array();
	$c['num']=$this->DB->num();
	$c['result']=$this->DB->result('status');
	return $c;
	}
	
	function all_find_buddies($q){
	$this->DB->field("concat_ws(' ',a.first_name,a.middle_name,a.surname) as name");
	$this->DB->from('profile a,profile_pict b');
	$this->DB->where("(a.first_name='".$q."' OR a.middle_name='".$q."' OR a.surname='".$q."') AND (b.uid=a.uid)");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function find_buddies($off,$lim,$q){
	$this->DB->field("concat_ws(' ',a.first_name,a.middle_name,a.surname) as name,b.profile_pict as pp,a.uid as uid");
	$this->DB->from('profile a,profile_pict b');
	$this->DB->where("(a.first_name='".$q."' OR a.middle_name='".$q."' OR a.surname='".$q."') AND (b.uid=a.uid)");
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}
	
	function check_request($uid){
	$this->DB->field('status');
	$this->DB->from('buddies');
	$this->DB->where("recepient='".$uid."'");
	$this->DB->select();
	$c['num']=$this->DB->num();
	$c['result']=$this->DB->result();
	return $c;
	}
	
	function all_buddies($uid){
	$this->DB->field('a.inviter');
	$this->DB->from('buddies a,profile_pict b');
	$this->DB->where("(a.recepient='".$uid."' OR a.inviter='".$uid."') AND (b.uid=a.recepient OR b.uid=a.inviter) AND (b.uid!='".$uid."') AND a.status='1'");
	$this->DB->select();
	return $this->DB->num();
	}
	
	function my_buddies($off,$lim,$uid){
	$this->DB->field("a.inviter,
					  a.recepient,
					  b.uid as uid,
					  b.profile_pict as pp,
					  concat_ws(' ',c.first_name,c.middle_name,c.surname) as name");
	$this->DB->from('buddies a,profile_pict b, profile c');
	$this->DB->where("(a.recepient='".$uid."' OR a.inviter='".$uid."') AND (b.uid=a.recepient AND c.uid=a.recepient OR b.uid=a.inviter AND c.uid=a.inviter) AND (b.uid!='".$uid."')  AND a.status='1'");
	$this->DB->limit($off,$lim);
	$this->DB->select();
	return $this->DB->result();
	}
	
	function mutual_buddies($uid,$guest){
	$this->DB->field('a.inviter,
					  a.recepient,
					  b.uid as uid,
					  b.profile_pict as pp');
	$this->DB->from('buddies a,profile_pict b');
	$this->DB->where("(a.inviter='".$uid."' or a.recepient='".$guest."') 
					  AND 
					  ((b.uid=a.inviter AND b.uid!='".$uid."') or (b.uid=a.recepient AND b.uid!='".$guest."'))
					  AND (a.status='1')");
	$this->DB->select();
	return $this->DB->result();
	}
}
?>