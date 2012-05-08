<?php
class album extends Controller{
	 function album(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_users');
		 $this->Load->mockie_get_model('dml_status');
		 $this->Load->mockie_get_model('dml_information_contact');
		 $this->Load->mockie_get_model('dml_language');
		 $this->Load->mockie_get_model('dml_wall');
		 $this->Load->mockie_get_model('dml_album');
		 $guest=$this->mockie_Screening->real_escape('uid');
		 $this->uid=$this->mockie_Session->get('uid');
		 if(!empty($guest)):
		 $this->uid_owner=$guest;
		 else:
		 $this->uid_owner=$this->uid;
		 endif;
 		if($guest==$this->uid || empty($guest)):
		 	$this->my_self=true;
		 else:
		 	$this->my_self=false;
		 endif;
		 $this->lang=$this->mockie_Session->get('lang');
	 }

	function index(){
	//$id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16);
	//$lang=$this->Load->dml_language->language($this->lang,$id_lang);
	$album_list=$this->Load->dml_album->album_list($this->uid_owner);
	$data=array('inc'			=> 'views/themes/default/profile/profile.php',
				'view_as'		=> $this->uid_owner,
				'my_self'		=> $this->my_self,
				'album_list'	=> $album_list);
	$this->Load->mockie_View('themes/default/profile/album.php',$data);
	}
	
	function create(){
	$name=$this->mockie_Screening->post('name');
	$location=$this->mockie_Screening->post('location');
	$uid=$this->uid;
	$t=date("Y-m-d h:i:s");
	$aid=md5("$uid/$t/$name");
	$data=array('name'		=> $name,
				'location'	=> $location,
				'uid'		=> $uid,
				'aid'		=> $aid);
	$this->Load->dml_general->save($data,'album');
	$this->index();
	}
	
	function upload_photo_form(){
	$album_list=$this->Load->dml_album->album_list($this->uid);
	$data=array('list'		=> $album_list);
	$this->Load->mockie_View('themes/default/modal_messages/upload_photo.php',$data);
	}
	
	function upload(){
	$result=1;
	$uid=$this->uid;
	$pn=$this->mockie_Screening->post('name_photo');
	$album=$this->mockie_Screening->post('album');
	$p=$_FILES['photo'];
	$all=count($p);
		for($s=0;$s<$all;$s++):
		if(!empty($p["name"][$s])):
		  $old=$p["name"][$s];
		  $ext=end(explode('.',$p["name"][$s]));
		  $date=date("Y-m-d h:i:s");
		  $name=md5("$old/$date/$uid");
		  $data=array('name'	=> $pn[$s],
		  			  'pid'		=> $name,
		  			  'file'	=> $name.'.'.$ext,
		  			  'aid'		=> $album[$s],
					  'uid'		=> $uid);
		 $save=$this->Load->dml_general->save($data,'photos');
		 $upload=move_uploaded_file($p["tmp_name"][$s],ABSOLUTE_PATH."/uploads/albums/" .$name.'.'.$ext);
				 if(!$save && !$upload):
				 $result=0;
				 endif;
		endif;
		endfor;
		
	sleep(1);
	echo '<script language="javascript" type="text/javascript">
   window.top.window.stopUpload('.$result.');
	</script>';
	}
	
	function delete_photo(){
	$file=$this->mockie_Screening->real_escape('file');
	$aid=$this->mockie_Screening->real_escape('aid');
	if($this->Load->dml_album->check_delete_photo($file,$this->uid)):
	$this->Load->dml_general->delete('photos',"file='".$file."'");
	endif;
	$this->view_album($aid);	
	}
	
	function view_album($a=''){
	if(!empty($a)):
	$aid=$a;
	$uid=$this->uid;
	else:
	$aid=$this->mockie_Screening->real_escape('aid');
	$uid=$this->mockie_Screening->real_escape('uid');
	endif;
	$photo=$this->Load->dml_album->view_album($uid,$aid);
	$data=array('photos'	=> $photo,
				'uid'		=> $uid);
	$this->Load->mockie_View('themes/default/profile/view_photo.php',$data);
	}
	
	function view_large(){
	$pid=$this->mockie_Screening->real_escape('pid');
	$uid=$this->mockie_Screening->real_escape('uid');
	if($uid==$this->uid):
	$my_self=true;
	else:
	$my_self=false;
	endif;
	$photo=$this->Load->dml_album->view_large($pid);
	$data=array('file'		=> $photo[0]['file'],
				'name'		=> $photo[0]['name'],
				'aid'		=> $photo[0]['aid'],
				'my_self'	=> $my_self,
				'pid'		=> $pid);
	$this->Load->mockie_View('themes/default/modal_messages/view_large.php',$data);
	}
	
	
	
}
?>