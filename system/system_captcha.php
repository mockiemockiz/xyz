<?php
class Captcha{
function Load($pass='')
{
		//$place_session = $pass['session'];
		$width = $pass['width'];
		$height = $pass['height'];
		
		  ini_set("session.save_path",SESSION_SAVE);
		  session_start();
		  $md5_hash = md5(rand(0,999)*5);
		  $dmcs_captcha = substr($md5_hash, 15, 6);
		  $_SESSION["dmcs_captcha"] = $dmcs_captcha;
		  $image = ImageCreate($width, $height);
		  $white = ImageColorAllocate($image, 154, 124, 16);
		  $black = ImageColorAllocate($image, 243, 243, 242);
		  $grey = ImageColorAllocate($image, 204, 204, 204);
		  $bg = ImageColorAllocate($image, 180, 179, 177);
		  $font = imageloadfont('azimov.gdf');
		  ImageFill($image, 0, 0, $black);
		  ImageString($image,5, 50, 0, 'E-Rafael', $bg);
		  ImageString($image,5, 0, 0, 'E-Rafael', $bg);
		  ImageString($image,5, 22, 15, 'E-Rafael', $bg);
		  ImageString($image,5, 5, 27, 'E-Rafael', $bg);
		  ImageString($image, $font, 30, 7, $dmcs_captcha, $white);
		  ImageRectangle($image,0,0,$width-1,$height-1,$grey);
		  imageline($image, 4, $height/2, $width, $height/2, $grey);
		  imageline($image, 4, $height/5, $width, $height/5, $grey);
		  imageline($image, $width/2, 0, $width/2, $height, $grey);
		  header("Content-Type: image/jpeg");
		  ImageJpeg($image);
		  ImageDestroy($image);
}
}
?>