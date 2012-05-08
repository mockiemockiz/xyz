<?php
ini_set("display_errors",0);
include 'config.php';

include 'system/system_captcha.php';

include 'system/system_controller.php';

include 'system/system_permalink.php';

//=============================================================================================================
include 'controllers/check.php';
$check=new check();
$a=$check->get();
$page=$a['page'];
$sub=$a['sub'];
//==============================================================================================================

	if($page=='' && $sub==''):
		    $inc='controllers/'.LOAD_DEFAULT;
			if(file_exists($inc)):
			include $inc;
			$sd=new $CONFIG['DEFAULT'];
			$sd->index();
			else:
			echo '<iframe frameborder="0px" src="support/error.php?error=controller404&file='.$inc.'&lang='.$CONFIG['LANG'].'" style="width:100%; z-index:1000; position:absolute; left:0; top:0;"></iframe>';
			endif;
	elseif($page!='' && $sub==''):
	$inc='controllers/'.$page.'.php';
	    if(file_exists($inc)):
		include $inc;
		$sd=new $page;
		$sd->index();
		else:
		echo 'stupid';
		endif;
	elseif($page!='' && $sub!=''):
	$inc='controllers/'.$page.'.php';
		if(file_exists($inc)):
		include $inc;
		$sd=new $page;
		$sd->$sub();
		else:
		echo 'stupid';
		endif;
	endif;

if($CONFIG['Documentation']):
include 'docs/index.php';
endif;
?>