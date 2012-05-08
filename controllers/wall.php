<?php
class wall extends Controller{
	 function wall(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Paging();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_users');
		 $this->Load->mockie_get_model('dml_wall');
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
		 $id_lang=array(21,31);
		 $this->language=$this->Load->dml_language->language($this->lang,$id_lang);
	 }

	function like(){
	$id=$this->mockie_Screening->real_escape('idw');
	$re=$this->mockie_Screening->real_escape('re');
	$old=$this->Load->dml_wall->check_like($id,'likes');
	$inc=$old['result'];
	if($this->Load->dml_wall->check_liked_id($this->uid,$id)==0): // check user sudah pernah like atau unlike sebelumnya
			if($old['num']==0 && $this->Load->dml_wall->check_wall($id)!='0'): // wall ada atau tidak
					$data=array('likes'	=> 1,
								'idw'	=> $id);
					$this->Load->dml_general->save($data,'likes');
			else:
					$data=array('likes'	=> $inc+1);
					$w=array('idw'		=> $id);
					$this->Load->dml_general->update($data,'likes',$w);
			endif;
		$data2=array('uid'		=> $this->uid,
					 'idw'		=> $id);
		$this->Load->dml_general->save($data2,'liked_id');
		if($re!=$this->uid):
		$data3=array('sender'			=> $this->uid,
					 'recepient'		=> $re,
					 'notification'	=> '17');
		$this->Load->dml_general->save($data3,'notifications');
		endif;
		$inc=$old['result']+1;
		echo $inc.' like/s this';
	else:
	echo $this->language[0][$this->lang];
	endif;
	}
	
	function unlike(){
	$id=$this->mockie_Screening->real_escape('idw');
	$old=$this->Load->dml_wall->check_like($id,'unlikes');
	$inc=$old['result'];
	if($this->Load->dml_wall->check_liked_id($this->uid,$id)==0):
		if($old['num']==0 && $this->Load->dml_wall->check_wall($id)!=0):
				$data=array('unlikes'	=> 1,
							'idw'	=> $id);
				$this->Load->dml_general->save($data,'likes');
				else:
				$data=array('unlikes'	=> $inc+1);
				$w=array('idw'		=> $id);
				$this->Load->dml_general->update($data,'likes',$w);
		endif;
	$data2=array('uid'		=> $this->uid,
				 'idw'		=> $id);
	$this->Load->dml_general->save($data2,'liked_id');
	$res=$inc+1;
	echo $res.' Unlike/s this';
	else:
	echo $this->language[0][$this->lang];
	endif;
	}
	
	function reply_box(){
	$idw=$this->mockie_Screening->real_escape('idw');
	$el=$this->mockie_Screening->real_escape('el');
	$data=array('idw'	=> $idw,'el'	=> $el);
	$this->Load->mockie_View('themes/default/profile/reply_box.php',$data);
	}
	
	function show_reply(){
	$ajax=$this->mockie_Screening->real_escape('ajax');
	$start=$this->mockie_Screening->real_escape('start');
	$id_lang=array(5,6,7,8,9,10,11,12,13,14,15,16);
	$lang=$this->Load->dml_language->language($this->lang,$id_lang);
	$id=$this->mockie_Screening->real_escape('idw');
	$all=$this->Load->dml_wall->all_show($id);
	$link='index.php?page=wall&sub=show_reply&ajax=1&idw='.$id.'&start=';
	$paging=array('limit'			    => 1,
				   'display_page'		=> 10,
				   'all'				=> $all,
				   'begin'				=> $start,
				   'link'				=> $link,
				   'display_link'		=> '0',
			   	   'page_elementAjax'	=> 'show_reply');
    $paging=$this->mockie_Paging->Load($paging);
    $replies=$this->Load->dml_wall->show_reply($paging['offset'],$paging['limit'],$id);
	$data=array('inc'		=> 'views/themes/default/profile/show_reply.php',
				'replies'	=> $replies,
				'paging'	=> $paging,
				'lang'			=> $lang,
				'lang2'			=> $this->lang);
	if($ajax || $d):
    	$this->Load->mockie_View('themes/default/profile/show_reply.php',$data);
    else:
    	$this->Load->mockie_View('themes/default/body2.php',$data);
    endif;
	}
	
	function post_reply(){
	$id=$this->mockie_Session->get('uid');
	$idw=$this->mockie_Screening->post('idw');
	$reply=$this->mockie_Screening->post('wr'.$idw);
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
	$data=array('idw'	=> $idw,'uid'	=> $id,'reply'	=> str_replace($code,$rep,$reply),'time'	=> $time);
	$this->Load->dml_general->save($data,'replies');
	$lr=$this->Load->dml_wall->last_reply($idw);
	$data=array('replies'	=> $lr);
	$this->Load->mockie_View('themes/default/profile/last_reply.php',$data);
	}
}
?>