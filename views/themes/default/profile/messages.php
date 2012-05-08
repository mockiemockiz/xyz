<div id="messages_box">
<br />
<br />
<div style="width:99%; height:80px;">
<button type="button" onclick="post_check('index.php?page=messages&sub=delete','messages_box','form_inbox');" style="float:left; margin-left:8px;"> Delete </button>
<button type="button" onclick="check_all('form_inbox');" id="tombolCheck" style="float:left; margin-left:8px;"> Check All </button>
<button type="button" style="float:left; margin-left:8px;"  onclick="callAJAX('index.php?page=messages&sub=inbox&ajax=1','messages_box');"> Back to inbox </button>
</div>

<form method="post" action="#" id="form_inbox">
<?php foreach($data['inbox'] as $i): ?>
<div class="messages_list" <?php echo($i['status']=='0')? 'style="background:#afdafa;"':''; ?>>
<div style="float:left;">
    <input type="checkbox" name="check[]" id="check[]" value="<?php echo $i['id']; ?>" style="float:left; margin-top:50px;" />
</div>
    <div class="pp_messages">
        <img src="http://localhost/xyz/thumb_profile.php?img=<?php echo $i['pp']; ?>&w=80&h=100" style="float:left;" />
    </div>
        <div class="pesan" onclick="callAJAX('index.php?page=messages&sub=read_messages&idm=<?php echo $i['id']; ?>','messages_box');">
        <?php echo $i['subject']; ?><a href="#" style="color:#CCFF00; text-decoration:none;">Read Message</a>
        </div>
</div>
<?php endforeach; ?>
<?php echo $data['paging_inbox']['paging']; ?>
</form>
</div>