<h3> <img src="views/themes/default/icons/friends.png" /> <?php echo $data['lang'][12][$data['lang2']]; ?></h3>
<?php 
foreach($data['buddies'] as $b): 
?>
<a href="?page=profile&uid=<?php echo $b['uid']; ?>" title="<?php echo $b['name']; ?>">
<img src="http://localhost/xyz/thumb_profile.php?img=<?php echo $b['pp']; ?>&w=75&h=90" style="margin:5px; float:left;" />
</a>
<?php endforeach; ?>
<a href="?page=buddies&uid=<?php echo $data['view_as']; ?>" style="width:100%; float:left;">
<?php echo $data['all']; ?> <?php echo $data['lang'][13][$data['lang2']]; ?>
</a>
