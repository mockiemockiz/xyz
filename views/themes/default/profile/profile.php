<div id="top">

	<div id="pp">
	<?php echo $data['pp']; ?>
	</div>
	
	<div id="status_box">
	<h1><?php echo $data['info']['profile'][0]['long_name']; ?> <?php echo $data['lang'][3][$data['lang2']]; ?> :</h1>
	<?php foreach($data['status'] as $ds): ?>
	<?php echo '<h3>'.$ds['status'].'</h3>'; ?>
	<?php endforeach; ?>
	</div>
	
	<div id="menu_top2">
  <ul id="menu_top">
    <li onclick="wall();" class="link"> <img src="views/themes/default/icons/wall.png" />
	<?php echo $data['lang'][14][$data['lang2']]; ?>
	</li>
    <li onclick="about_me();" class="link"> 
	<img src="views/themes/default/icons/female.png" /> 
	<?php echo $data['lang'][4][$data['lang2']]; ?>	</li>
    <li class="link" onclick="album();" > 
	<img src="views/themes/default/icons/album.png" />
	<?php echo $data['lang'][5][$data['lang2']]; ?>	</li>

	<?php if(!$data['my_self']): ?>
	<li onclick="open_modal('index.php?page=messages&amp;re=<?php echo $data['view_as']; ?>',600,580,100);"  class="link"><img src="views/themes/default/icons/envelope--pencil.png" />
	<?php echo $data['lang'][12][$data['lang2']]; ?>	
	</li>
	<?php if(!$data['info']['udah_belum']): ?>
	<li  onclick="open_modal('index.php?page=add_as_buddy&amp;uid=<?php echo $data['view_as']; ?>',300,125,100);"  class="link" id="add_as_buddy"><img src="views/themes/default/icons/user_add.png" />
	add as buddy	</li>
	<?php endif; ?>
	<?php endif; ?>
  <strong id="already_add" style="float:left; margin-left:20px;">
  <?php 
  if($data['info']['result']=='0'):
		 echo 'waiting confirmation';
  endif;
  ?>
  </strong>
  </ul>
</div>

</div>

<div id="left">
<div class="boxes_side" style="height:70px; padding-bottom:50px;">
<h3> <img src="views/themes/default/icons/search.png" /> <?php echo $data['lang'][13][$data['lang2']]; ?> </h3><br />
<br />

<form method="get" action="?page=find_buddies">
<input type="hidden" name="page" value="find_buddies" />
<input type="text" name="q" id="q" size="27" />
<button type="submit"><?php echo $data['lang'][13][$data['lang2']]; ?></button>
</form>
</div>
		<div class="boxes_side" id="buddies_box" style="height:200px; padding-bottom:50px;">

		</div>
        <?php if($data['view_as']!=$data['uid']): ?>
        <div class="boxes_side" id="mutual_buddies_box" style="height:200px; padding-bottom:50px;">

		</div>
        <?php endif; ?>
</div>
<div id="centre">

  <div id="wall_center">
  <?php if($data['teman']): ?>
    <div id="wall_box">
  	<form method="post" action="" id="status">
	  <textarea name="textarea1" id="w" class="expand" style="width:99%; border:1px solid #999999; margin:0 auto;" rows="7"></textarea>
	  
	  <div id="attach" style="height:30px; width:100%;">
				  <div class="menu_attach">
			    <img src="views/themes/default/emoticons/smiley-grin.png" id="i_smiley" />
	      </div>
  <button type="button" onclick="post_status();" style="float:right;"> Share </button>
	    </div>
  </form>		
  <div id="sb" style="width:100%; display:none; margin-top:10px;">
  <img src="views/themes/default/emoticons/smiley.png" onclick="smiley(':)','w')" />
  <img src="views/themes/default/emoticons/smiley-confuse.png" onclick="smiley('O.o?','w')" />
  <img src="views/themes/default/emoticons/smiley-cool.png" onclick="smiley('8)','w')" />
  <img src="views/themes/default/emoticons/smiley-cry.png" onclick="smiley('T.T','w')" />
  <img src="views/themes/default/emoticons/smiley-eek-blue.png" onclick="smiley('O.O','w')" />
  <img src="views/themes/default/emoticons/smiley-evil.png" onclick="smiley(':evil:','w')" />
  <img src="views/themes/default/emoticons/smiley-fat.png"  onclick="smiley(':fat:','w')" />
  <img src="views/themes/default/emoticons/smiley-grin.png" onclick="smiley(':D','w')" />
  <img src="views/themes/default/emoticons/smiley-kiss.png" onclick="smiley(':*','w')" />
  <img src="views/themes/default/emoticons/smiley-mad.png" onclick="smiley(':mad:','w')" />
  <img src="views/themes/default/emoticons/smiley-money.png" onclick="smiley('$.$','w')" />
  <img src="views/themes/default/emoticons/smiley-wink.png" onclick="smiley(':wink:','w')" />
  <img src="views/themes/default/emoticons/smiley-razz.png" onclick="smiley(':p','w')" />  </div>
    </div>
    <?php endif; ?>
	  
	
  <div id="wall">
   <?php //include($data['wall_inc']); ?> 
   
  </div>
  </div> <!-- wall center !-->
  
  
</div>

<div id="right">
<div class="boxes_side">
		<h3><img src="views/themes/default/icons/menu.png" /> <?php echo $data['lang'][16][$data['lang2']]; ?></h3>
		<ul>
		<li>
		<a href="?page=home"><?php echo $data['lang'][7][$data['lang2']]; ?></a></li>
		<li><a href="?page=profile"><?php echo $data['lang'][8][$data['lang2']]; ?></a></li>
		<li><a href="?page=setting"><?php echo $data['lang'][9][$data['lang2']]; ?></a></li>
		<?php if($data['view_as']==$data['uid']): ?>
		<li><a href="#" onclick="open_modal('index.php?page=profile&amp;sub=change_pp',400,185,100);" >
		<?php echo $data['lang'][17][$data['lang2']]; ?>
		</a></li>
		<?php endif; ?>
		<li><a href="?page=logout"><?php echo $data['lang'][15][$data['lang2']]; ?></a></li>
		</ul>
</div>

	<div class="boxes_side">
		<h3><img src="views/themes/default/icons/info.png" /> <?php echo $data['lang'][0][$data['lang2']]; ?> </h3>
			<h4><?php echo $data['lang'][2][$data['lang2']]; ?></h4>
			<?php
			foreach($data['info']['universities'] as $v):
			echo $v['university'].'<br />';
			endforeach; 
			?>
			<h4><?php echo $data['lang'][1][$data['lang2']]; ?>:</h4>
			<?php
			foreach($data['info']['websites'] as $v):
			echo '<a href="http://'.$v['website'].'">'.$v['website'].'</a><br />';
			endforeach; 
			?>
			<h4>Hometown :</h4>
			<?php
			echo $town;
			?>
		</div>

</div>
