<h4 style="margin-bottom:10px;"><?php echo $data['name']; ?>
	<strong id="close_button" onclick="close_modal_photo();">X</strong>
	</h4>
<img src="http://localhost/xyz/thumb_profile.php?time=<?php echo time(); ?>&img=albums/<?php echo $data['file']; ?>&w=480&h=500" style="margin:0 auto;" /><br />
<br />
<?php if($data['my_self']): ?>
<button type="button" onclick="delete_photo('index.php?page=album&sub=delete_photo&file=<?php echo $data['file']; ?>&aid=<?php echo $data['aid']; ?>','album_list');">
Delete
</button>
<?php endif; ?>
