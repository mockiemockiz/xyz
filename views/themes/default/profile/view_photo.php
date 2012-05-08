<div id="album_list" style="border:0; border-bottom:1px solid #666666;">
<?php foreach($data['photos'] as $a): ?>
<div class="album_box" style="margin-top:10px;" onclick="open_modal_photo('index.php?page=album&sub=view_large&pid=<?php echo $a['pid']; ?>&uid=<?php echo $data['uid']; ?>',610,660,30);" >
<img src="http://localhost/xyz/thumb_profile.php?img=albums/<?php echo $a['file']; ?>&w=160&h=200" title="<?php echo $a['name']; ?>-<?php echo $a['location']; ?>" /></div>
<?php endforeach; ?>
</div>
