<div style="width:72%; height:auto; padding-bottom:100px; float:left;">
<?php $c=1; foreach($data['new_buddies'] as $b): $c++; ?>
<div class="invitation" id="<?php echo $c; ?>">
<div class="pp_req">
    <img src="http://localhost/xyz/thumb_profile.php?img=<?php echo $b['pp']; ?>&w=80&h=100" />
</div>
    <div style="margin-left:18px; float:left;">
        <a href="index.php?page=profile&uid=<?php echo $b['uid']; ?>"><?php echo $b['full_name']; ?></a>
        <br />
        <br />
        <button type="button" onclick="callAJAX('index.php?page=notifications&sub=accept&id=<?php echo $b['id']; ?>','<?php echo $c; ?>');" style="float:left;">
       	 	<strong style="font-size:16px"> Accept </strong>
    	</button>
        <button type="button" onclick="callAJAX('index.php?page=notifications&sub=reject&id=<?php echo $b['id']; ?>','<?php echo $c; ?>');" style="float:left; margin-left:10px;">
       	 	<strong style="font-size:16px"> Reject </strong>
    	</button>
    </div>
</div>
<?php endforeach; ?>
<?php echo $data['paging']['paging']; ?>
</div>