<br />
<br />
<button type="button" style="float:left; margin-left:8px;"  onclick="callAJAX('index.php?page=messages&sub=inbox&ajax=1','messages_box');"> Back to inbox </button><br />
<br />

<div id="read_message">
<?php foreach($data['pesan'] as $i): ?>
<div id="header_message">
<div class="pp_messages" style="margin:7px;">
        <img src="http://localhost/sillaturrahim/thumb_profile.php?img=<?php echo $i['pp']; ?>&w=80&h=100" style="float:left;" />
</div>
    <br /> 
	<?php 
	$id=$i['id'];
	$s=$i['subject'];
	$hash=md5("$id/$s"); 
	?>
Sender :<a href="?page=profile&uid=<?php echo $i['uid']; ?>"><?php echo $i['full_name']; ?></a><br /><br />
Subject : <?php echo $i['subject']; ?><br /><br />
Time : <?php echo $i['time']; ?><br />
<br />

</div>
<br />
<br />
<?php echo $i['pesan']; ?>
<?php endforeach; ?>
</div>