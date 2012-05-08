<h3> Buddies </h3>
<?php 
foreach($data['buddies'] as $b): 
?>
<a href="?page=profile&uid=<?php echo $b['uid']; ?>" title="<?php echo $b['name']; ?>">
<img src="http://localhost/sillaturrahim/thumb_profile.php?img=<?php echo $b['pp']; ?>&w=75&h=90" style="margin:5px; float:left;" />
</a>
<?php endforeach; ?>
<a href="?page=buddies&uid=<?php echo $data['view_as']; ?>" style="width:100%; float:left;">View all <?php echo $data['all']; ?> buddies</a>
