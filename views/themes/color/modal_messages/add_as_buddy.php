	<h4> Add As Buddy
	<strong id="close_button" onclick="close_modal();">X</strong>
	</h4>
<p style=" margin-left:5px; margin-top:10px;">Are you sure wanna adding this person as your buddy </p>

<div style="margin-right:10px; height:150px; text-align:center">
	<button type="button"  id="opener_create_album" style="float:right;"  onclick="close_modal();"> Cancel</button>
	<button type="button" style="float:right;" onclick="callAJAX('index.php?page=add_as_buddy&sub=add&uid=<?php echo $data['re']; ?>','dialog_content'); close_modal_buddy(); " > 
	Add as Buddy 
	</button>
	</div>