<?php
class delete_wall extends Controller{
	 function delete_wall(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_language');
		 $this->uid=$this->mockie_Session->get('uid');
		 $d=$this->mockie_Session->get('lang');
		 if(empty($d)):
		 $this->lang='english';
		 else:
		 $this->lang=$d;
		 endif;
		 $this->uid=$this->mockie_Session->get('uid');
		 $this->mockie_Paging();
		 $id_lang=array(19);
		 $this->language=$this->Load->dml_language->language($this->lang,$id_lang);
	 }

	function index(){
	$idw=$this->mockie_Screening->real_escape('idw');
	$reply=$this->mockie_Screening->real_escape('re');
	$data=array('idw'	=> $idw,
				're'	=> $reply,
   			    'lang'	=> $this->language,
				'lang2'	=> $this->lang);
	$this->Load->mockie_View('themes/default/modal_messages/confirm_delete.php',$data);
	}
	
	function delete(){
	$idw=$this->mockie_Screening->real_escape('idw');
	if(!empty($idw)):
	$w='id='.$idw;
	$this->Load->dml_general->delete('wall',$w);
	echo 'gone <br /><br /><button type="button" onclick="close_modal_delete_wall()">Ok</button>';
	endif;
	}
	
	function delete_reply(){
	$idw=$this->mockie_Screening->real_escape('idw');
	$w='id='.$idw;
	$this->Load->dml_general->delete('replies',$w);
	echo 'gone <br /><br /><button type="button" onclick="close_modal_delete_wall()">Ok</button>';
	}

}
?>