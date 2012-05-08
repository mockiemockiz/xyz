<div id="show_reply">
<?php
foreach($data['replies'] as $r):
?>
<ul class="wall_items">
<li>
<img src="http://localhost/sillaturrahim/thumb_profile.php?img=<?php echo $r['pp']; ?>&w=60&h=60" style="float:left; margin-right:5px;" />
<a href="?page=profile&uid=<?php echo $r['uid_sender']; ?>"><?php echo $r['sender']; ?></a>
  <br />
  <p class="time"><?php echo $r['time']; ?></p>
  <?php echo $r['reply']; ?><br />
</li>
</ul>
<?php
endforeach;
?>
<?php echo $data['paging']['paging']; ?>
</div>