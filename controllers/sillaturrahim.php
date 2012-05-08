<?php
class sillaturrahim extends Controller{
	 function sillaturrahim(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $d=$this->mockie_Session->get('lang');
		 if(empty($d)):
		 $this->lang='english';
		 else:
		 $this->lang=$d;
		 endif;
	 }

	function index(){
	$lang=$this->Load->dml_language->language($this->lang,array(2,3,4,36));
	$data=array('lang'	=> $lang,
				'lang2'	=> $this->lang);
	$this->Load->mockie_View('themes/default/index.php',$data);
	}
}
?>