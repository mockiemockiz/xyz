<?php
///============================================================================================
// author 	:Rifkimuhammad
// email	:rifkimuhammad89[a]gmail.com
// copyright by rifkimuhammad.
// this aplicatioon was protected by my soul :]
// u may change or evolving this application but dont replace this note...
// thanks to:
// allah S.W.T,muhammad S.A.W, ayah dan bunda, keluarga, raffie be a smart my lovely nephew, mylovely ezsta thanks for support ya beb :], diskusi web dan penghuninya tempat // saya melimpahkan masalah..hehehe thanks guys..,web tutorial yang bertebaran di internet dan buku web tempat saya belajar,kesendirian saya belajar web..
//==========================================================================================================
//connntroler system========================================================================================
class Controller {
    function Controller($var='Load',$class='f') {
	//make the object to use $this->Load->.......
        $this->$var = new $class($this);
		
	}
	
	function mockie_Screening(){
	require_once('system/system_filter.php');
	$this->mockie_Screening=new Screening($this);
	}
	
	function mockie_Session(){
	require_once('system/system_session.php');
	$this->mockie_Session=new Session($this);
	}
	
	function mockie_Paging(){
	require_once('system/system_paging.php');
	$this->mockie_Paging=new Paging($this);
	}
	
	function mockie_Captcha(){
	require_once('system/system_captcha.php');
	$this->mockie_Captcha=new Captcha($this);
	}
	
	function mockie_PHPlot($width='680',$height='300'){
	require_once('system/libs/phplot-5.0.7/phplot.php');
	$this->mockie_PHPlot=new PHPlot($width,$height);
	}
	
	function mockie_Dir(){
	require_once('system/system_directory.php');
	$this->mockie_Dir=new Dir($this);
	}
	
	function mockie_Zip(){
	require_once('system/system_zip.php');
	$this->mockie_Zip=new Zip($this);
	}
	
	function mockie_Upload(){
	require_once('system/system_upload.php');
	$this->mockie_Upload=new Upload($this);
	}
}


class f {
	
	//load database to your controller========================================================================
	function mockie_database(){
	require_once('system/system_model.php');
	}
	
	
	function plugins($plugins){
	require_once('plugins/'.$plugins.'/client_controller.php');
	}
	
	//function plugins($plugin_name){
	//include $plugin_name.'.php';
	//$this->$plugin_name=new $plugin_name;
	//}
	
	function mockie_Plugins($plug_path,$plug_name,$class){
	require_once($plug_path);
	$this->$plug_name=new $class;
	}
	
	//load Your Model to your controller and make an object to it;=============================================
	function mockie_get_model($ac) {
	$model='models/'.$ac.'.php';
	if(file_exists($model)):
	include $model;
    $this->$ac = new $ac;
	else:
	echo '<div style="border:2px solid #FF6600; 
	                  color:#333333; 
					  background:#FF9966;
					  width:auto;
					  padding:10px 10px 10px 10px;" ><strong>Error 404 Not Found : '.$model.'</strong> Not found Please create it first                      </div>';
	endif;
	}
	
	function mockie_get_model_plugins($path,$ac) {
	$model='plugins/'.$path;
	if(file_exists($model)):
	include $model;
    $this->$ac = new $ac;
	else:
	echo '<div style="border:2px solid #FF6600; 
	                  color:#333333; 
					  background:#FF9966;
					  width:auto;
					  padding:10px 10px 10px 10px;" ><strong>Error 404 Not Found : '.$model.'</strong> Not found Please create it first                      </div>';
	endif;
	}
	
	//Load the view GUI graphic user interface of your application ==============================================
	function mockie_View($inc,$data='',$class='',$function=''){
	$this->data=$data;
	if($class!=''):
    foreach($class as $value):
	$$value=new $value;
	endforeach;
    endif;
		if($function!=''):
			foreach($function as $key => $value):
			if(method_exists($key,$value)):
				$$key->$value();
			else:
				echo 'error';
			endif;
		endforeach;
	endif;
	if(file_exists('views/'.$inc)):
	include 'views/'.$inc;
	else:
	echo '<div style="border:2px solid #FF6600; 
	                  color:#333333; 
					  background:#FF9966;
					  width:auto;
					  padding:10px 10px 10px 10px;" ><strong>Error 404 Not Found : '.$inc.'</strong> Not found Please create it first                      </div>';
	endif;
	}
	
	function mockie_plugin($inc,$data=''){
	$this->data=$data;
	if(file_exists('plugins/'.$inc)):
	include 'plugins/'.$inc;
	else:
	echo '<div style="border:2px solid #FF6600; 
	                  color:#333333; 
					  background:#FF9966;
					  width:auto;
					  padding:10px 10px 10px 10px;" ><strong>Error 404 Not Found : '.$inc.'</strong> Not found Please create it first                      </div>';
	endif;
	}
 
}
?>