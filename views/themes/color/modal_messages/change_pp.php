<h4> Change Profile Pict
	<strong id="close_button" onclick="close_modal();">X</strong>
</h4>
<br />
<br />
<p id="f1_upload_process" style="display:none;">Loading...<br/><img src="loader.gif" /></p>
<p id="result"></p>
	<form id="form_upload" action="index.php?page=profile&sub=change_pp_exe" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
	<div style="width:100%; float:left; height:70px;">
	<input type="file" name="photopp" />
	</div>
	<div style="margin-right:10px; margin-top:30px; width:100%;">
	
	<button type="button"  id="opener_create_album" style="float:right;"  onclick="close_modal();"> Cancel</button>
	
	<button type="submit" style="float:right;"> 
	Upload 
	</button>
	
	</div>
	</form>
	<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe> 