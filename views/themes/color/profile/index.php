<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="10000"/>
<title>Untitled Document</title>
<link href="views/themes/default/css/profile.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/notice.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/modal.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/wall.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/paging.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/notif.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="views/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="views/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<link type="text/css" href="views/jquery/css/custom-theme/jquery-ui-1.8.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="views/js/ajax.js"></script>
<script type="text/javascript" src="views/js/modal.js"></script>
<script type="text/javascript" src="views/js/jquery.textarea-expander.js"></script>
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
		'script'         : 'views/uploadify/example/scripts/uploadify.php',
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
	  $('#i_smiley').toggle(function(){
	  $('#sb').show('slow');
	  },
	  function(){
	  $('#sb').hide('slow');
	  });
	  
	$(function() {
		$("#check").button();
		$("#format").buttonset();
	});
$(".link").hover(
function () {
$(this).animate({ 
		paddingRight:"0.35in",
      }, 500 );
}, 
function () {
$(this).animate({ 
		paddingRight:"0.1in"
      }, 500 );
}
);
	
   });
   $('ul#myRoundabout').roundabout({
         duration: 11200 // in milliseconds, of course
      });
   // ]]>
function post_status(){
postAJAX('index.php?page=profile&sub=post_status&uid=<?php echo $data['view_as']; ?>','status_box','status');
$('#wall').slideUp(1000);
$('#wall').load('index.php?page=profile&sub=wall&uid=<?php echo $data['view_as']; ?>');
$('#wall').slideDown(1000);
}
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
	
function about_me(){
$('#wall_box').fadeOut(1500);
$('#left').fadeIn(1500);
$('#centre').css("width","54%");
callAJAX('index.php?page=about_me&uid=<?php echo $data['view_as']; ?>','wall');
}

function wall(){
$('#wall_box').fadeIn(1500);
$('#wall').fadeIn(1500);
$('#left').fadeIn(1500);
$('#centre').css("width","54%");
callAJAX('index.php?page=profile&sub=wall&uid=<?php echo $data['view_as']; ?>','wall');
}

function album(){
$('#wall_box').fadeOut(1500);
$('#left').fadeOut('fast');
$('#wall').fadeIn(1500);
$('#right').css("float","right");
$('#centre').css("width","76%");
callAJAX('index.php?page=album&uid=<?php echo $data['view_as']; ?>','wall');
}

function startUpload(){
    document.getElementById('f1_upload_process').style.visibility = 'visible';
    return true;
}

function stopUpload(success){
//callAJAX('index.php?page=album&sub=upload','dialog_content');
      var result = '';
      if (success == 1){
         document.getElementById('result').innerHTML =
           '<span class="msg">The file was uploaded successfully!<\/span><br/><br/>';
		   setTimeout("location.reload(true);",5000);
      }
      else {
         document.getElementById('result').innerHTML = 
           '<span class="emsg">There was an error during file upload!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      return true;   
}


function close_modal_delete_wall(){
$('#dialog-sl').fadeOut(1500);
$('#dialog_content').fadeOut(1500);
wall();
}

function body_on_load(){
wall();
$('#buddies_box').load('index.php?page=buddies&uid=<?php echo $data['view_as']; ?>&ajax=1');
$('#mutual_buddies_box').load('index.php?page=buddies&sub=mutual_buddies&uid=<?php echo $data['view_as']; ?>');
}

</script>

</head>
<body onfocus="wall();" onload="body_on_load();">
<!-- modal buat nikah hehehehhe alias modal ---------------------------- !-->
<div id="dialog-sl"></div>

<div id="dialog_content"></div>
<div id="photo_content">
</div>
<!-- modal buat nikah hehehehhe alias modal ---------------------------- !-->

<div id="tengah2">
<div id="logo">
<div id="menu">
    <a href="index.php?page=messages&sub=inbox">
    <div id="message"> 
	<?php echo($data['new_message']>0)?$data['new_message']:''; ?>
    </div>
    </a>
	<?php if($data['new_buddy']>0): ?>
    <a href="index.php?page=notifications&sub=request_buddy">
	<div id="friend" title="<?php echo $data['new_buddy']; ?> New Request Friend"  onclick="open_modal('index.php?page=notifications&sub=request_buddy',500,265,100);">    <?php echo $data['new_buddy']; ?>
    </div>
    </a>
	<?php else: ?>
    <div id="friend" title="0 New Request Friend"></div>
    <?php endif; ?>
</div>

<div style="float:right; margin:5px; margin-top:17px; color:#FFFFFF">
      <form method="post" action="?page=language&sub=set">
	  <input type="hidden" name="to" value="profile" />
        Change Language :
        <select name="lang" onchange="submit();">
          <option>Select Language</option>
          <option>indonesia</option>
          <option>Italy</option>
          <option>english</option>
          <option>arab</option>
        </select>
      </form>
    </div>
	
	
</div>



<?php include $data['inc']; ?>
<div class="clearer"></div>
<div id="footer"> 
<p style="color:#CCFF00">
<a href="?page=privacy_policy">Privacy Policy</a> |
	<a href="?page=tos"> Terms of service</a> | 
	<a href="?page=copyright"> Copyright Policy </a>
	</p>
</div>
<div class="clearer"></div>

</div>
</body>
</html>
