<h3> Mutual Buddies </h3>
<?php 
foreach($data['buddies'] as $b): 
?>
<a href="?page=profile&uid=<?php echo $b['uid']; ?>">
<img src="http://localhost/sillaturrahim/thumb_profile.php?img=<?php echo $b['pp']; ?>&w=75&h=90" style="margin:5px; float:left;" />
</a>
<?php endforeach; ?>