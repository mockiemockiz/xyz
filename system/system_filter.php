<?php
class Screening extends Model{
	
	function real_escape($get='')
	{
	$find=array('+','union','select','database()',';','--','\x00','/x1a','?','\n','\r');
	$ge=addslashes(mysql_real_escape_string($_GET[$get]));
	$fil=str_replace($find,'',$ge);
	return $fil;
	}
	
	function post($data)	
	{
	$all=count($_POST[$data]);
	$find=array('+','union','select','database()',';','--','\x00','/x1a','?','\n','\r');
	if(is_array($_POST[$data])):
		for($a=0;$a<$all;$a++):
		$ge=addslashes(mysql_real_escape_string($_POST[$data][$a]));
		$fil=str_replace($find,'',$ge);
		$res[]=$fil;
		endfor;
	return $res;
	else:
	$ge=addslashes(mysql_real_escape_string($_POST[$data]));
	$fil=str_replace($find,'',$ge);
	return $fil;
	endif;
	}
	

	function vamail($email='')
	{
	 //cek ada satu karakter @ dan berada pada posisi yang pas
    if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    return false;
    }
  // Pisahkan teks email sebelum dan sesudah @, lalu verifikasi apakah teksnya benar2 valid
	  $email_array = explode("@", $email);
	  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
     if (!ereg("^(([A-Za-z0-9!#$%&#038;'*+/=?^_`{|}~-][A-Za-z0-9!#$%&#038;'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
      return false;
    }
  }  
  //domain di cek valid ato ga, infonya diambil dari email array di atas
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { 
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; 
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
	}
}
?>
