<!--

<div id="left">

</div>
!-->
<div style="width:100%; margin-left:10px; float:left;">

  <div id="wall_center">
 <ul class="wall_items">
 <?php foreach($data['news'] as $w): ?>
 <li style="background:#9dd5fe; border:1px solid #6ca3cc;">
 <img src="http://localhost/xyz/thumb_profile.php?img=<?php echo $w['pp']; ?>&w=60&h=60" style="float:left; margin-right:5px;" />
  <a href="?page=profile&uid=<?php echo $w['uid_sender']; ?>"><?php echo $w['sender']; ?></a>
  <br />
  <p class="time"><?php echo $w['time']; ?></p>
  <?php echo $w['status']; ?>
 </li>
 <?php endforeach; ?>
 </ul>
 <?php echo $data['paging']['paging']; ?>
  </div> <!-- wall center !-->
  
  
</div>