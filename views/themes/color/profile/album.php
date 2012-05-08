<div style="margin-top:10px; margin-bottom:10px;">
<?php if($data['my_self']): ?>
<button type="button" onclick="open_modal('views/themes/default/modal_messages/create_album.php',500,200,100);" style="float:left;">
<em style="font-size:20px"> + </em>Create Album 
</button>
<button type="button" onclick="open_modal('index.php?page=album&sub=upload_photo_form',500,565,100);" style="float:left;">
<em style="font-size:20px"> + </em>Upload Photo
</button>
<?php endif; ?>
</div>
<div id="album_list">
<?php foreach($data['album_list'] as $a): ?>
<div class="album_box" onclick="callAJAX('index.php?page=album&sub=view_album&aid=<?php echo $a['aid']; ?>&uid=<?php echo $data['view_as']; ?>','album_list')"><?php echo $a['name']; ?></div>
<?php endforeach; ?>
</div>
