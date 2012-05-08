	<h4> Create New album
	<strong id="close_button" onclick="close_modal();">X</strong>
	</h4>
<br />
<br />
	<form method="post" action="#" id="form_create_album">
	<table cellpadding="6px" cellspacing="0" style="margin-left:20px;">
	<tr><td>Name of album</td><td>:</td><td><input type="text" name="album" id="name"  /></td></tr>
	<tr><td>Location</td><td> : </td><td><input type="text" name="location" id="location"  /></td></tr>
	</table>
	<div style="margin-right:10px;">
	<button type="button"  id="opener_create_album" style="float:right;"  onclick="close_modal();"> Cancel</button>
	<button type="button" style="float:right;" onclick="postAJAX('index.php?page=album&sub=create','wall','form_create_album'); close_modal();" > 
	Create 
	</button>
	</div>
	</form>