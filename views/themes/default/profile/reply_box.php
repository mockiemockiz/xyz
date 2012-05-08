<div class="wall_box" id="<?php echo $data['el']; ?>">
<button type="button" onclick="close_rb('<?php echo $data['el']; ?>');" style="padding:2px; font-size:11px;">X</button>
	<form method="post" action="" id="reply<?php echo $data['idw']; ?>">
	<input type="hidden" id="idw" name="idw" value="<?php echo $data['idw']; ?>" />
	<textarea name="textarea1" id="wr<?php echo $data['idw']; ?>" class="expand" style="width:99%; border:1px solid #999999; margin:0 auto;" rows="3"></textarea>
	
		<div id="attach" style="height:30px; width:100%;">
			<button type="button" onclick="post_reply('<?php echo $data['el']; ?>','<?php echo $data['idw']; ?>last_reply','reply<?php echo $data['idw']; ?>');" style="float:right;"> Share </button>
		</div>
	</form>		
<img src="views/themes/default/emoticons/smiley.png" onclick="smiley(':)','wr<?php echo $data['idw']; ?>')" />
<img src="views/themes/default/emoticons/smiley-confuse.png" onclick="smiley('O.o?','wr<?php echo $data['idw']; ?>')" />
<img src="views/themes/default/emoticons/smiley-cool.png" onclick="smiley('8)','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-cry.png" onclick="smiley('T.T','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-eek-blue.png" onclick="smiley('O.O','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-evil.png" onclick="smiley(':evil:','wr<?php echo $data['idw']; ?>')" />
<img src="views/themes/default/emoticons/smiley-fat.png"  onclick="smiley(':fat:','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-grin.png" onclick="smiley(':D','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-kiss.png" onclick="smiley(':*','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-mad.png" onclick="smiley(':mad:','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-money.png" onclick="smiley('$.$','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-wink.png" onclick="smiley(':wink:','wr<?php echo $data['idw']; ?>')"  />
<img src="views/themes/default/emoticons/smiley-razz.png" onclick="smiley(':p','wr<?php echo $data['idw']; ?>')"  />
	</div>