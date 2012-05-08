<div id="messages_form">
<h4 style="margin-bottom:10px;">
Messsage form
	<strong id="close_button" onclick="close_modal();">X</strong>
	</h4>
<form method="post" action="#" style="margin-left:15px" id="form_messages">
<?php if(empty($data['id_re'])): ?>
<input type="hidden" name="re" id="re" value="<?php echo $data['re']; ?>" />
<?php else: ?>
<input type="hidden" name="id_re" id="id_re" value="<?php echo $data['id_re']; ?>" />
<?php endif; ?>
<table border="0" cellpadding="5px" cellspacing="0">
<tr><td>Subject</td><td>:</td><td><input type="text" name="subject" id="subject" size="30" /></td></tr>
<tr><td>Pesan</td><td>:</td><td><textarea name="pesan" id="pesan" cols="45" rows="25"></textarea></td></tr>
</table><br />
<br />

<button type="button" onclick="close_modal_messages();" style="float:left;">
Send
</button>
<button type="button" onclick="close_modal();" style="float:left; margin-left:10px">
Cancel
</button>
</form>
</div>