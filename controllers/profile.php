<?php
class profile extends Controller{
	 function profile(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_users');
		 $this->Load->mockie_get_model('dml_buddy');
		 $this->Load->mockie_get_model('dml_notif');
		 $this->Load->mockie_get_model('dml_status');
		 $this->Load->mockie_get_model('dml_messages');		 
		 $this->Load->mockie_get_model('dml_information_contact');
		 $this->Load->mockie_get_model('dml_language');
		 $this->Load->mockie_get_model('dml_wall');
		 $guest=$this->mockie_Screening->real_escape('uid');
		 $this->uid=$this->mockie_Session->get('uid');
 		 $d=$this->Load->dml_buddy->check_buddy($this->uid,$guest);
 		 $this->info['udah_belum']=$d['num'];
		 //==========================================================
		 if(!empty($guest)):
		 	$this->uid_owner=$guest;
		 else:
		 	$this->uid_owner=$this->uid;
		 endif;
		 //===========================================================
		 if($guest==$this->uid || empty($guest)):
		 	$this->my_self=true;
		 else:
		 	$this->my_self=false;
		 endif;
		 //===========================================================
	 	if($this->info['udah_belum']>0 || $this->uid_owner==$this->uid || empty($guest)):
			$this->teman=true;
		else:
			$this->teman=false;
		endif;
		//============================================================
		 $this->info['status']=$d['result'];
		 $d=$this->mockie_Session->get('lang');
		 if(empty($d)):
		 $this->lang='english';
		 else:
		 $this->lang=$d;
		 endif;
         $this->info['universities']=$this->Load->dml_information_contact->univ($this->uid_owner);
		 $this->info['websites']=$this->Load->dml_information_contact->web($this->uid_owner);
		 $this->info['profile']=$this->Load->dml_information_contact->profile($this->uid_owner);
		 $this->pp=$this->Load->dml_users->pp($this->uid_owner);
		}

	function index(){
	$id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16,22,23,25,26,28,29,33,34,35);
	$lang=$this->Load->dml_language->language($this->lang,$id_lang);
	if(file_exists(ABSOLUTE_PATH.'/uploads/'.$this->pp)):
	$pp='<img src="thumb_profile.php?img='.$this->pp.'&w=200&h=300&time='.time().'" />';
	else:
	$pp='<img src="uploads/profile_picts/unknown.gif" />';
	endif;
	$this->small_pp='<img src="http://localhost/xyz/thumb_profile.php?time='.time().'&img='.$this->pp.'&w=60&h=60" style="float:left; margin-right:5px;" />';
	$data=array('inc'			=> 'views/themes/default/profile/profile.php',
				'uid'			=> $this->uid,
				'view_as'		=> $this->uid_owner,
				'pp'			=> $pp,
				'new_buddy'		=> $this->Load->dml_notif->new_buddy($this->uid),
				'new_message'	=> $this->Load->dml_messages->new_message($this->uid),
				'my_self'		=> $this->my_self,
				'teman'			=> $this->teman,
				'lang'			=> $lang,
				'lang2'			=> $this->lang,
				'small_pp'		=> $this->small_pp,
				'status'		=> $this->status(),
				'info'			=> $this->info,
				'walls'			=> $wall['walls'],
				'wall_paging'	=> $wall['wall_paging']);
	$this->Load->mockie_View('themes/default/profile/index.php',$data);
	}
	
	function status($w=1){
	$last_status=$this->Load->dml_status->last_status($this->uid_owner);
	if($w=='1'):
   		return $last_status;
    else:
   		foreach($last_status as $ls):
		echo '<h3>'.$ls['status'].'</h3>';
		endforeach;
    endif;
	}
	
	function wall($w=1){
	$uid=$this->mockie_Session->get('uid');
	if(!empty($uid)):
	$load_as=
	$link='index.php?page=profile&sub=wall&uid='.$this->uid_owner.'&start=';
	else:
	$load_as=
	$link='index.php?page=profile&sub=wall&uid='.$this->uid_owner.'&start=';
	endif;
	$start=$this->mockie_Screening->real_escape('start');
	$paging=array('limit'			    => 5,
				   'display_page'		=> 4,
				   'all'				=> $this->Load->dml_wall->all($this->uid_owner),
				   'begin'				=> $start,
				   'link'				=> $link,
				   'display_link'		=> '0',
			   	   'page_elementAjax'	=> 'wall');
   $paging=$this->mockie_Paging->Load($paging);
   $walls=$this->Load->dml_wall->walls($paging['offset'],$paging['limit'],$this->uid_owner);
   $inc=0;
   foreach($walls as $d):
   $inc++;
   $wall[$inc]['time']=$d['time'];
   $wall[$inc]['status']=$d['status'];
   $wall[$inc]['recepient']=$d['recepient'];
   $wall[$inc]['uid_sender']=$d['uid_sender'];
   $wall[$inc]['pp']=$d['pp'];
   $wall[$inc]['id']=$d['id'];
   $wall[$inc]['unlikes']=$d['unlikes'];
   $wall[$inc]['likes']=$d['likes'];
   $wall[$inc]['replies']=$this->Load->dml_wall->replies($d['id']);
   $wall[$inc]['sender']=$d['sender'];
   endforeach;
   //print_r($time);
   $id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16,31,32);
   $lang=$this->Load->dml_language->language($this->lang,$id_lang);
   $data=array('walls'				=> $wall,
   			   'my_self'			=> $this->my_self,
   			   'wall_paging'		=> $paging,
			   'lang'				=> $lang,
			   'view_as'			=> $this->uid_owner,
			   'lang2'				=> $this->lang);
	if($this->teman):
		 if($w=='1'):
			$this->Load->mockie_View('themes/default/profile/wall.php',$data);
		 else:
			return $data;
		 endif;
	else:
	$this->Load->mockie_View('themes/default/errors/not_buddy.php',$data);
	endif;
   }
   
   /*
   function wall($w=1){
	$uid=$this->mockie_Session->get('uid');
	if(!empty($uid)):
	$load_as=
	$link='index.php?page=profile&sub=wall&uid='.$this->uid_owner.'&start=';
	else:
	$load_as=
	$link='index.php?page=profile&sub=wall&uid='.$this->uid_owner.'&start=';
	endif;
	$start=$this->mockie_Screening->real_escape('start');
	$paging=array('limit'			    => 5,
				   'display_page'		=> 2,
				   'all'				=> $this->Load->dml_wall->all($this->uid_owner),
				   'begin'				=> $start,
				   'link'				=> $link,
				   'display_link'		=> '0',
			   	   'page_elementAjax'	=> 'wall');
   $paging=$this->mockie_Paging->Load($paging);
   $walls=$this->Load->dml_wall->walls($paging['offset'],$paging['limit'],$this->uid_owner);
   $data=array('walls'				=> $walls,
   			   'wall_paging'		=> $paging);
   if($w=='1'):
   $this->Load->mockie_View('themes/default/profile/wall.php',$data);
   else:
   return $data;
   endif;
   }
   */
	
	function post_status(){
	$pas=$this->mockie_Session->get('pass_member');
	$re=$this->mockie_Screening->real_escape('uid');
	if(empty($re)):
			$recepient=$this->uid;
		else:
			$recepient=$re;
	endif;
	$sender=$this->uid;
	if($this->Load->dml_users->check_pass($pas)=='1'):
	$status=$this->mockie_Screening->post('w');
	$share=$this->mockie_Screening->post('check1');
	$code=array(':)','O.o?','8)','T.T','O.O',':evil:',':fat:',':D',':*',':mad:','$.$',':wink:',':p');
	$rep=array(
	'<img src="views/themes/default/emoticons/smiley.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-confuse.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-cool.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-cry.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-evil.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-fat.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-grin.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-kiss.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-mad.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-money.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-wink.png" alt="" />',
	'<img src="views/themes/default/emoticons/smiley-razz.png" alt="" />');
	$time=date("Y-m-d h:i:s");
	$data=array('status'			=> str_replace($code,$rep,$status),
				'recepient'			=> $recepient,
				'sender'			=> $sender,
				'time'				=> $time);
	$this->Load->dml_general->save($data,'wall');
	endif;
	$this->status(0);
	}
	
	function change_pp(){
	$this->Load->mockie_View('themes/default/modal_messages/change_pp.php',$data);
	}
	
	function change_pp_exe(){
	$result=1;
	$uid=$this->uid;
	$pn=$this->mockie_Screening->post('name_photo');
	$p=$_FILES['photopp'];
		  $old=$p["name"];
		  $ext=end(explode('.',$p["name"]));
		  $date=date("Y-m-d h:i:s");
		  $name=md5("$old/$date/$uid");
		  $data=array('profile_pict'		=> 'profile_picts/'.$name.'.'.$ext);
		  $w=array('uid'	=> $uid);
		 $upload=move_uploaded_file($p["tmp_name"],ABSOLUTE_PATH."/uploads/profile_picts/" .$name.'.'.$ext);
		 if($upload):
		 		 $save=$this->Load->dml_general->update($data,'profile_pict',$w);
				 if(!$save && !$upload):
				 $result=0;
				 endif;
		 endif;
	sleep(1);
	echo '<script language="javascript" type="text/javascript">
   window.top.window.stopUpload('.$result.');
	</script>';
	}
	
}
?>
