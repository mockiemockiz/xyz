<script type="text/javascript">
function startUpload(){
    document.getElementById('f1_upload_process').style.visibility = 'visible';
    return true;
}

function stopUpload(success){
//callAJAX('index.php?page=album&sub=upload','dialog_content');
      var result = '';
      if (success == 1){
         document.getElementById('result').innerHTML =
           '<span class="msg">The file was uploaded successfully!<\/span><br/><br/>';
			   callAJAX('index.php?page=signup&sub=refresh_pp&ids=<?php echo $data['ids']; ?>','photo');
      }
      else {
         document.getElementById('result').innerHTML = 
           '<span class="emsg">There was an error during file upload!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      return true;   
}
</script>
<div style="margin-left:20px; width:100%; height:100px;">
<div class="inactive" style="color:#CCFF00;"><h3>1</h3><div class="kata"><br /> Upload Profile Pict </div></div>
<div class="inactive"><h3>2</h3><div class="kata"><br /> Edit Info </div></div>
<div class="inactive"><h3>3</h3><div class="kata"><br /> found buddy </div></div>
</div>

<div style="width:100%; height:auto; float:left; padding-bottom:10px; display:block;">
<div id="photo"></div>
<p id="f1_upload_process" style="display:none;">Loading...<br/><img src="loader.gif" /></p>
<p id="result" style="display:none;"></p>
<form id="form_upload" action="index.php?page=signup&sub=upload_profile" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
<input type="hidden" name="ids" value="<?php echo $data['ids']; ?>" />
<input type="file" name="photop" id="photop" />
<button type="submit"> 
	Upload 
	</button>
</form>
<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe> 
<br />
<br />
<br />
<br />
<br />
<br />
<br /><br />
<p style="color:#FFFFFF"> &nbsp; &nbsp; &nbsp; You can still upload your profile picture later</p>
</div>
<a href="?page=signup&sub=step2&ids=<?php echo $data['ids']; ?>" class="submit" style="float:right; margin-right:20px;">
Skip >>
</a>