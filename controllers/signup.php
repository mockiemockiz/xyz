<?php
class signup extends Controller{
	 function signup(){
		 parent::Controller();
		 $this->mockie_Session();
		 $this->Load->mockie_database();
		 $this->mockie_Screening();
		 $this->mockie_Upload();
		 $this->Load->mockie_get_model('dml_general');
		 $this->Load->mockie_get_model('dml_users');
	 }
	 
	 function index(){
	 $fname=$this->mockie_Screening->post('fname');
	 $mname=$this->mockie_Screening->post('mname');
	 $sname=$this->mockie_Screening->post('sname');
	 $date=$this->mockie_Screening->post('date');
	 $month=$this->mockie_Screening->post('month');
	 $genre=$this->mockie_Screening->post('genre');
	 $year=$this->mockie_Screening->post('year');
	 $dob=$year.'-'.$month.'-'.$date;
	 //=========================== akhir variable yg di masukin ke table profile =============================
	 
	 $email=trim($this->mockie_Screening->post('email'));
	 $pass1=$this->mockie_Screening->post('pass1');
	 $pass2=$this->mockie_Screening->post('pass2');
	 $time=date("Y-m-d");
	 $pass=md5("$email/$pass1/m0ck1m0ck1");
	 $uid=md5("$year/$month/$date/$email/$time");
	 
	  //=========================== akhir variable yg di masukin ke table users =============================
	  
	 $data_profile=array('uid'			=> $uid,
	 					 'dob'			=> $dob,
						 'genre'		=> $genre,
						 'first_name'	=> $fname,
						 'middle_name'	=> $mname,
						 'surname'		=> $sname);
						 
	 $data_users=array('email'			=> $email,
	 				   'pass'			=> $pass,
					   'uid'			=> $uid,
					   'registred'		=> $time);
	 
	 //=========================== akhir variable yg di masukin ke table users =============================
	 
	 if($this->Load->dml_general->save($data_users,'users')==true && $this->Load->dml_general->save($data_profile,'profile')==true):
	 header('location:index.php?page=signup&sub=verification&ids='.md5("$year/$month/$date/$email/$time"));
	 else:
	 echo '<div class="error">error.. please try again</div>';
	 $this->Load->mockie_View('themes/default/signup/form_signup.php',$data);
	 endif;
	}
	
	function verification(){
	$uid=$this->mockie_Screening->real_escape('ids');
	if($this->Load->dml_users->check_signup($uid)):
	$pass=$this->Load->dml_users->pass($uid);
	$inc='views/themes/default/signup/step1.php';
	$_SESSION['uid']=$uid;
	$_SESSION['pass']=$pass;
	else:
	$inc='views/themes/default/errors/not_registered.php';
	endif;
	$data=array('inc'		=> $inc,
				'ids'		=> $uid);
	$this->Load->mockie_View('themes/default/body.php',$data);
	}
	
	function upload_profile(){
	$result=1;
	$uid=$this->mockie_Screening->post('ids');
	$p=$_FILES['photop'];
	$old=$p["name"];
	$ext=end(explode('.',$p["name"]));
	$time=date("Y-m-d h:i:s");
	$name=md5("$uid/$old/$time");
	if(move_uploaded_file($p["tmp_name"],ABSOLUTE_PATH."/uploads/profile_picts/" .$name.'.'.$ext)):
	$data=array('profile_pict'	=> 'profile_picts/'.$name.'.'.$ext,
				'uid'			=> $uid);
	$this->Load->dml_general->save($data,'profile_pict');
	else:
	$result=0;
	endif;
	sleep(1);
	echo '<script language="javascript" type="text/javascript">
   window.top.window.stopUpload('.$result.');
	</script>';
	}
	
	function refresh_pp(){
	$uid=$this->mockie_Screening->real_escape('ids');
	$d=$this->Load->dml_users->pp($uid);
	echo '<img src="http://localhost/xyz/thumb_profile.php?img='.$d.'&w=160&h=200" />';
	}
	
	function step2(){
	$uid=$this->mockie_Screening->real_escape('ids');
	if($this->Load->dml_users->check_signup($uid)):
	$inc='views/themes/default/signup/step2.php';
	else:
	$inc='views/themes/default/errors/not_registered.php';
	endif;
	$data=array('inc'		=> $inc,
				'ids'		=> $uid);
	$this->Load->mockie_View('themes/default/body.php',$data);
	}
	
	function save_step2(){
	$uid=$this->mockie_Screening->real_escape('ids');
	if($this->Load->dml_users->check_signup($uid)):
	$un=$this->mockie_Screening->post('university');
	$add=$this->mockie_Screening->post('add');
	$type=$this->mockie_Screening->post('ebuddy');
	$cl=$this->mockie_Screening->post('cl');
	$ht=$this->mockie_Screening->post('ht');
	$im=$this->mockie_Screening->post('im');
	$web=$this->mockie_Screening->post('web');
	$where=array('uid'	 => $uid);
	
	$dataun=array('university'	=> $un,
				  'uid'			=> $uid);
	$dataadd=array('addres'	=> $add,
				  'uid'			=> $uid);
	$dcl=array('current_location'	=> $cl,
			   'home_town'			=> $ht);
	$dim=array('im'		=> $im,
			   'type'	=> $type,
				  'uid'			=> $uid);
	$dweb=array('website'	=> $web,
				  'uid'			=> $uid);
	
	$data2=array('status'	=> '1');			  
	$this->Load->dml_general->update($data2,'users',$where);
	$this->Load->dml_general->save($dataun,'universities',$where);
	$this->Load->dml_general->save($dataadd,'addreses',$where);
	$this->Load->dml_general->update($dcl,'profile',$where);
	$this->Load->dml_general->save($dim,'im',$where);
	$this->Load->dml_general->save($dweb,'websites',$where);
	$inc='views/themes/default/signup/step3.php';
	else:
	$inc='views/themes/default/errors/not_registered.php';
	endif;
	$data=array('inc'		=> $inc);
	$this->Load->mockie_View('themes/default/body.php',$data);
	}
}
?>