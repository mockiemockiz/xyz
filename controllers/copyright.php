<?php
class copyright extends Controller{
	 function copyright(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $this->Load->mockie_get_model('dml_buddy');
		 $this->Load->mockie_get_model('dml_information_contact');
		 $d=$this->mockie_Session->get('lang');
		 if(empty($d)):
		 $this->lang='english';
		 else:
		 $this->lang=$d;
		 endif;
	 }

	function index(){
		 $id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16);
		 $lang=$this->Load->dml_language->language($this->lang,$id_lang);
	$data=array('inc'	=> 'views/themes/default/copyright.php',
				'lang'			=> $lang,
				'lang2'			=> $this->lang);
	$this->Load->mockie_View('themes/default/body3.php',$data);
	}

}
?>