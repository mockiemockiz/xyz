<div style="width:72%; height:auto; padding-bottom:100px; float:left;">
<?php foreach($data['buddies'] as $b): ?>
<div class="messages_list">
<a href="?page=profile&uid=<?php echo $b['uid']; ?>">
    <div class="pp_messages">
        <img src="http://localhost/sillaturrahim/thumb_profile.php?img=<?php echo $b['pp']; ?>&w=80&h=100" style="float:left;" />
    </div>
        <div class="pesan">
		<?php echo $b['name']; ?>
        </div>
</a>
</div>

<?php endforeach; ?>
<?php echo $data['paging']['paging']; ?>
</div>