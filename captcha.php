<?php
include 'config.php';

include 'system/system_captcha.php';

$ab=new Captcha;
$pass=array('width'	=> 170,'height'=>50);
$ab->Load($pass);
?>
