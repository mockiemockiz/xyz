<?php
class check extends Controller{
 function check(){
	 parent::Controller();
	 $this->mockie_Session();
     $this->Load->mockie_database();
	 $this->mockie_Screening();
 	 $this->Load->mockie_get_model('dml_check');
	 $get['page']=$this->mockie_Screening->real_escape('page');
	 $get['sub']=$this->mockie_Screening->real_escape('sub');
	 $pattern = "/^admin_/";
	 //$pattern2 = "/^profile/";
	 $hal_harus_login=array('profile','home','setting');
	 $pass=$this->mockie_Session->get('pass');
	 $pass2=$this->mockie_Session->get('pass_member');
	 
		 if(in_array($get['page'],$hal_harus_login)):
		 $istrue=$this->Load->dml_check->check_member($pass2);
			 if(empty($pass2) || $istrue==0):
			 $data=array('inc' => 'views/themes/default/errors/not_login.php');
			 $this->Load->mockie_View('themes/default/body.php',$data);
			 exit;
			 endif;
		 elseif(preg_match($pattern,$get['page'])):
			 if($pass=='' && $istrue==0):
			 $data=array('inc' => 'login.php');
			 $this->Load->mockie_View('admin/index.php',$data);
			 exit;
			 endif;
		 endif;
	 return $get;
}


function get(){
	 $get['page']=$this->mockie_Screening->real_escape('page');
	 $get['sub']=$this->mockie_Screening->real_escape('sub');
	 return $get;
}

}
 //$ses=array('delete from barang where barang.id_jenis = old.id_jenis;');
 //$this->Load->dml_helloworld->create_trigger('dodol','before','delete','jenis',$ses);
//http://mockizart.co.cc/89--Tutorial.html
//http://mockizart.co.cc/SQL(MySql)/102--Query-RPAD-(-Menambahkan-Karakter-ke-dalam-suatu-String).html
//http://mockizart.co.cc/index.php?cid=plugins--2--gallery
?>