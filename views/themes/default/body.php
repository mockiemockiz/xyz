<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="views/themes/default/css/style.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/notice.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/modal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="views/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="views/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<link type="text/css" href="views/jquery/css/custom-theme/jquery-ui-1.8.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="views/js/ajax.js"></script>
<script type="text/javascript" src="views/js/modal.js"></script>

<script type="text/javascript" src="views/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="views/js/jquery.roundabout-shapes-1.1.min.js"></script>
<script type="text/javascript" src="views/js/jquery.roundabout.min.js"></script>
<!-- upload !-->
<link href="views/uploadify/example/css/default.css" rel="stylesheet" type="text/css" />
<link href="views/uploadify/example/css/uploadify.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="views/uploadify/example/scripts/swfobject.js"></script>
<script type="text/javascript" src="views/uploadify/example/scripts/jquery.uploadify.v2.1.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#uploadify").uploadify({
		'uploader'       : 'views/uploadify/example/scripts/uploadify.swf',
		'script'         : 'views/uploadify/example/scripts/uploadify.php?uid=<?php echo strip_tags($_GET['ids']); ?>',
		'cancelImg'      : 'views/uploadify/example/cancel.png',
		'folder'         : 'uploads/profile_picts',
		'queueID'        : 'fileQueue',
		'auto'           : true,
		'multi'          : false
	});
});
</script>

<!-- upload !-->
<script type="text/javascript">
   // <![CDATA[
   $(document).ready(function() {
      $('ul#myRoundabout').roundabout();
   });
   $('ul#myRoundabout').roundabout({
         duration: 11200 // in milliseconds, of course
      });
   // ]]>
  
</script>
<script type="text/javascript">
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 1000;
	$(function() {
		$('#dialog').dialog({
			autoOpen: false,
			show: 'blind',
			hide: 'explode',
			maxWidth: 600
		});
		
		$('#signup').click(function() {
			$('#dialog').dialog('open');
			return false;
		});
	});
	</script>

</head>

<body>
<div id="dialog-sl"></div>

<div id="dialog_content"></div>
<div id="tengah2" style="color:#000000;">
<div id="logo">
  <img src="views/themes/default/images/logo.gif" style="margin-left:11px;" /></div>

<?php include $data['inc']; ?>

<div id="footer"> 
<p style="color:#CCFF00">About Us | Privacy Policy | Terms of service | Copyright Policy</p>
</div>
<div class="clearer"></div>
</div>
</body>
</html>
