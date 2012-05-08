<?php
include 'system/thumbnail_class.php';
include 'config.php';
$src=addslashes($_GET['img']);
$wh=$_GET['w'];
$hg=$_GET['h'];
$thumb=new image_thumbnail;
$thumb->size_thumbnail($wh,$hg);
$thumb->image_source(ABSOLUTE_PATH."/uploads/$src");
?>