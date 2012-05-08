<h4> Upload Photo
	<strong id="close_button" onclick="close_modal();">X</strong>
	</h4>
<br />
<br />
<p id="f1_upload_process">Loading...<br/><img src="loader.gif" /></p>
<p id="result"></p>
	<form id="form_upload" action="index.php?page=album&amp;sub=upload" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
	<table width="561" cellpadding="6px" cellspacing="0" style="margin-left:20px;">
	<tr>
		<td width="129">Name of Photo</td>
		<td width="5">:</td>
		<td width="389"><input type="text" name="name_photo[]" id="name_photo[]" />
		<br />
		<input type="file" name="photo[]" id="photo[]" />
		<br />
		<select name="album[]">
		<?php foreach($data['list'] as $a): ?>
		<option value="<?php echo $a['aid']; ?>"><?php echo $a['name']; ?></option>
		<?php endforeach; ?>
		</select>	
	</td>
	</tr>
	<tr>
		<td width="129">Name of Photo</td>
		<td width="5">:</td>
		<td width="389"><input type="text" name="name_photo[]" id="name_photo[]" />
		<br />
		<input type="file" name="photo[]" id="photo[]" />
		<br />
		<select name="album[]">
		<?php foreach($data['list'] as $a): ?>
		<option value="<?php echo $a['aid']; ?>"><?php echo $a['name']; ?></option>
		<?php endforeach; ?>
		</select>	
		</td>
	</tr>
	<tr>
		<td width="129">Name of Photo</td>
		<td width="5">:</td>
		<td width="389"><input type="text" name="name_photo[]" id="name_photo[]" />
		<br />
		<input type="file" name="photo[]" id="photo[]" />
		<br />
		<select name="album[]">
		<?php foreach($data['list'] as $a): ?>
		<option value="<?php echo $a['aid']; ?>"><?php echo $a['name']; ?></option>
		<?php endforeach; ?>
		</select>	
		</td>
	</tr>
	<tr>
		<td width="129">Name of Photo</td>
		<td width="5">:</td>
		<td width="389"><input type="text" name="name_photo[]" id="name_photo[]" />
		<br />
		<input type="file" name="photo[]" id="photo[]" />
		<br />
		<select name="album[]">
		<?php foreach($data['list'] as $a): ?>
		<option value="<?php echo $a['aid']; ?>"><?php echo $a['name']; ?></option>
		<?php endforeach; ?>
		</select>	
		</td>
	</tr>
	</table>
	<div style="margin-right:10px; margin-top:30px">
	
	<button type="button"  id="opener_create_album" style="float:right;"  onclick="close_modal();"> Cancel</button>
	
	<button type="submit" style="float:right;"> 
	Upload 
	</button>
	
	</div>
	</form>
	<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe> 