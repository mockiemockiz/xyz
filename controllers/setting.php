<?php
class setting extends Controller{
	 function setting(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $this->Load->mockie_get_model('dml_information_contact');
		 $this->lang=$this->mockie_Session->get('lang');
		 $this->uid=$this->mockie_Session->get('uid');
	 }

	function index(){
	$profile=$this->Load->dml_information_contact->profile($this->uid);
	$add=$this->Load->dml_information_contact->add($this->uid);
	$univ=$this->Load->dml_information_contact->univ($this->uid);
	$web=$this->Load->dml_information_contact->web($this->uid);
	$data=array('inc'		=> 'views/themes/default/setting/setting.php',
				'profile'	=> $profile,
				'add'		=> $add,
				'web'		=> $web,
				'univ'		=> $univ);
	$this->Load->mockie_View('themes/default/body.php',$data);
	}
	
	function save(){
	$first_name=$this->mockie_Screening->post('first_name');
	$middle_name=$this->mockie_Screening->post('middle_name');
	$surname=$this->mockie_Screening->post('surname');
	$w=array('uid'	=> $this->uid);
	$data=array('first_name'	=> $first_name,
				'middle_name'	=> $middle_name,
				'surname'		=> $surname);
	$this->Load->dml_general->update($data,'profile',$w);
	
	//===================== address ===================================================
	//edit :
	$edit_add_id=$this->mockie_Screening->post('edit_add_id');
	$edit_add_text=$this->mockie_Screening->post('edit_add_text');
	$all_add=count($edit_add_id);
	for($a=0;$a<=$all_add;$a++):
	$w_add=array('id'	=> $edit_add_id[$a]);
	$d_add=array('addres'	=> $edit_add_text[$a]);
	$this->Load->dml_general->update($d_add,'addreses',$w_add);
	endfor;
	//new :
	$new_add=$this->mockie_Screening->post('new_add');
	$all_add2=count($new_add);
	for($b=0;$b<=$all_add2;$b++):
	if(!empty($new_add[$b])):
	$d_add2=array('addres'	=> $new_add[$b],
				  'uid'		=> $this->uid);
	$this->Load->dml_general->save($d_add2,'addreses');
	endif;
	endfor;
	//===================== address ===================================================
	
	//===================== univ ===================================================
	//edit :
	$univ_id=$this->mockie_Screening->post('univ_id');
	$univ_edit=$this->mockie_Screening->post('univ_edit');
	$all_univ=count($univ_id);
	for($a=0;$a<=$all_univ;$a++):
	$w_univ=array('id'	=> $univ_id[$a]);
	$d_univ=array('university'	=> $univ_edit[$a]);
	$this->Load->dml_general->update($d_univ,'universities',$w_univ);
	endfor;
	//new :
	$new_univ=$this->mockie_Screening->post('new_univ');
	$all_univ2=count($new_univ);
	for($b=0;$b<=$all_add2;$b++):
	if(!empty($new_univ[$b])):
	$d_univ2=array('university'	=> $new_univ[$b],
				  'uid'		=> $this->uid);
	$this->Load->dml_general->save($d_univ2,'universities');
	endif;
	endfor;
	//===================== univ ===================================================
	
	
	//===================== univ ===================================================
	//edit :
	$web_id=$this->mockie_Screening->post('web_id');
	$web_edit=$this->mockie_Screening->post('web_edit');
	$all_web=count($web_id);
	for($a=0;$a<=$all_web;$a++):
	$w_web=array('id'	=> $web_id[$a]);
	$d_web=array('website'	=> $web_edit[$a]);
	$this->Load->dml_general->update($d_web,'websites',$w_web);
	endfor;
	//new :
	$new_web=$this->mockie_Screening->post('new_web');
	$all_web2=count($new_web);
	for($b=0;$b<=$all_web2;$b++):
	if(!empty($new_web[$b])):
	$d_web2=array('website'	=> $new_web[$b],
				  'uid'			=> $this->uid);
	$this->Load->dml_general->save($d_web2,'websites');
	endif;
	endfor;
	//===================== univ ===================================================
	
	header('location:index.php?page=setting');
	}
}
?>