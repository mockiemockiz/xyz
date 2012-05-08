<?php

$CONFIG['LANG']='ID';

//========================= Default Controller ==================
$CONFIG['EXTENSION']='.php';

$CONFIG['DEFAULT']='sillaturrahim';

//================================================================


$CONFIG['Documentation']=0;

//========================== setting to connect mysql ===============
$CONFIG['USER']='root';

$CONFIG['PASS']='';

$CONFIG['HOST']='localhost';

$CONFIG['DB']='xyz';

$CONFIG['PROFILING']=1;
//=================================================================


//=================================================================
$CONFIG['URL']='http://localhost/xyz';
//=================================================================

//=========================== session save folder =================
define('SESSION_SAVE','dodol');
//=================================================================

//=============================== path ============================
define('ABSOLUTE_PATH',dirname(__FILE__));
//=================================================================


define('MAIN_PATH',$CONFIG['URL']);

define('main_path',$CONFIG['URL']);

define('LOAD_DEFAULT',$CONFIG['DEFAULT'].$CONFIG['EXTENSION']);
?>