<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="views/themes/default/css/style.css" rel="stylesheet" type="text/css" />
<link href="views/themes/default/css/modal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="views/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="views/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<link type="text/css" href="views/jquery/css/custom-theme/jquery-ui-1.8.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="views/js/ajax.js"></script>
<script type="text/javascript" src="views/js/modal.js"></script>
<script type="text/javascript" src="views/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="views/js/jquery.roundabout-shapes-1.1.min.js"></script>
<script type="text/javascript" src="views/js/jquery.roundabout.min.js"></script>
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
</head>
<body>
<!-- modal buat nikah hehehehhe alias modal ---------------------------- !-->
<div id="dialog-sl"></div>

<div id="dialog_content"></div>
<!-- modal buat nikah hehehehhe alias modal ---------------------------- !-->
<div id="tengah">
  <div id="logo">
    <div style="float:right; margin:5px; color:#FFFFFF">
      <form method="post" action="?page=language&sub=set&to=profile">
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
  <ul id="myRoundabout">
    <li>
      <h3><img src="views/themes/default/icons/user.png" alt="sign up" />Sign In</h3>
      <?php echo($data['lang'][2][$data['lang2']]); ?><br />
      <button type="button" onclick="open_modal('views/themes/default/login/form_login.php',300,140,100);"  style="margin-left:35%; margin-top:10%;">SIGN IN</button>
    </li>
    <li>
      <h3><img src="views/themes/default/icons/daftar.png" alt="sign up" />Sign Up</h3>
      <?php echo($data['lang'][2][$data['lang2']]); ?><br />
      <button type="button" onclick="open_modal('views/themes/default/signup/form_signup.php',350,550,10);" style="margin-left:35%; margin-top:10%;">SIGN UP</button>
    </li>
    <li>
      <h3><img src="views/themes/default/icons/advert.png" alt="sign up" /><a href="?page=about_us">About Us</a></h3>
      <?php echo($data['lang'][2][$data['lang2']]); ?> </li>
    <li>
      <h3><img src="views/themes/default/icons/help.png" alt="sign up" /><a href="?page=help">Help</a></h3>
      <?php echo($data['lang'][1][$data['lang2']]); ?> <br />
	  <a href="?page=help">
	  <button type="button" onclick="open_modal('views/themes/default/login/form_login.php',300,140,100);"  style="margin-left:35%; margin-top:10%;">Help me</button>
	  </a>
	  </li>
  </ul>
  <div id="footer"> <img src="views/themes/default/icons/red.png" alt="sign up" /> <?php echo($data['lang'][0][$data['lang2']]); ?>
    <p style="color:#CCFF00">
	<a href="?page=privacy_policy">Privacy Policy</a> |
	<a href="?page=tos"> Terms of service</a> | 
	<a href="?page=copyright"> Copyright Policy </a>
	</p>
  </div>
</div>
</body>
</html>
