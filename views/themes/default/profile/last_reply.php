 <ul class="wall_items" style="margin-top:3px;">
  <?php foreach($data['replies'] as $r): ?>
  <li class="wall_items" style="margin:0; padding-top:5px;">
  <img src="http://localhost/xyz/thumb_profile.php?img=<?php echo $r['pp']; ?>&w=60&h=60" style="float:left; margin-right:5px;" />
  <a href="?page=profile&uid=<?php echo $r['uid_sender']; ?>"><?php echo $r['sender']; ?></a>
  <br />
  <p class="time"><?php echo $r['time']; ?></p>
  <?php echo $r['reply']; ?>
  </li>
  <?php endforeach;?>
  <div id="<?php echo $w['id']; ?>last_reply"></div>
  </ul>