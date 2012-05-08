<ul class="wall_items">
  <?php
  if(count($data['walls'])>0): 
  foreach($data['walls'] as $w):
  ?>
  <li>
  <?php if($data['my_self']): ?>
  <strong class="delete" title="delete" onclick="open_modal('index.php?page=delete_wall&idw=<?php echo $w['id']; ?>',400,150,300);">X</strong>
  <?php endif; ?>
  <img src="http://localhost/sillaturrahim/thumb_profile.php?img=<?php echo $w['pp']; ?>&w=60&h=60" style="float:left; margin-right:5px;" />
  <a href="?page=profile&uid=<?php echo $w['uid_sender']; ?>"><?php echo $w['sender']; ?></a>
  <br />
  <p class="time"><?php echo $w['time']; ?></p>
  <?php echo $w['status']; ?>
  <br /><br />
  
  <div class="footer_wall">
  <img src="views/themes/default/icons/thumb-up.png" class="tombol" onclick="callAJAX('index.php?page=wall&sub=like&idw=<?php echo $w['id']; ?>&re=<?php echo $data['view_as']; ?>','<?php echo $w['id']; ?>');" style="float:left;" />
  <img src="views/themes/default/icons/thumb.png" class="tombol" onclick="callAJAX('index.php?page=wall&sub=unlike&idw=<?php echo $w['id']; ?>&re=<?php echo $data['view_as']; ?>','<?php echo $w['id']; ?>');" style="float:left;" />
  <div id="<?php echo $w['id']; ?>" style="float:left; color:#444; font-size:9px">
  &nbsp;
    <?php echo(!empty($w['likes'])) ? $w['likes'] : '0' ; ?> <?php echo $data['lang'][11][$data['lang2']]; ?> And 
    <?php echo(!empty($w['unlikes'])) ? $w['unlikes'] : '0' ; ?> UnLike(s) This  </div>
  
<img 
src="views/themes/default/icons/wall.png" 
class="tombol" 
onclick="callAJAX('index.php?page=wall&sub=reply_box&idw=<?php echo $w['id']; ?>&el=<?php echo $w['id']; ?>comments_box','<?php echo $w['id']; ?>comments_box'); document.getElementById('<?php echo $w['id']; ?>comments_box').style.display='block'; " 
style="float:left; margin-left:10px;">
    <div id="<?php echo $w['id']; ?>comments" style="float:left; color:#444; font-size:9px">
      &nbsp; <?php echo $w['reply']; ?> &nbsp;<?php echo $data['lang'][10][$data['lang2']]; ?>     </div>
	  
</div>
  <div id="<?php echo $w['id']; ?>comments_box" style="float:left; width:98%; color:#444; font-size:9px">
  </div>
  <div class="replies_box">
  <?php  if(count($w['replies'])>0): ?>
  <ul class="wall_items" style="margin-top:3px;">
  <?php foreach($w['replies'] as $r): ?>
  <li class="wall_items" style="margin:0; padding-top:5px;">
   <?php if($data['my_self']): ?>
   <strong class="delete" title="delete" onclick="open_modal('index.php?page=delete_wall&re=1&idw=<?php echo $r['id']; ?>',400,150,300);">X</strong>
  <?php endif; ?>
  <img src="http://localhost/sillaturrahim/thumb_profile.php?img=<?php echo $r['pp']; ?>&w=60&h=60" style="float:left; margin-right:5px;" />
  <a href="?page=profile&uid=<?php echo $r['uid_sender']; ?>"><?php echo $r['sender']; ?></a>
  <br />
  <p class="time"><?php echo $r['time']; ?></p>
  <?php echo $r['reply']; ?>
  </li>
  <?php endforeach;?>
  <a href="?page=wall&sub=show_reply&idw=<?php echo $w['id']; ?>">view all comments</a>
  </ul>
  <?php  endif; ?>
  </div>
  </li>
  <?php endforeach;?>
  </ul>
  <?php  echo $data['wall_paging']['paging']; endif; ?>