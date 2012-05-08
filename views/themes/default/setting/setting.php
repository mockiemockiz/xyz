<script type="text/javascript">
	$(function() {
		$("#tabs").tabs({
			ajaxOptions: {
				error: function(xhr, status, index, anchor) {
					$(anchor.hash).html("Couldn't load this tab. We'll try to fix this as soon as possible. If this wouldn't be a demo.");
				}
			}
		});
	});
	
function show_edit(id){
var el='#' + id + "_edit";
	if(document.getElementById(id).innerHTML=='Edit')
	{
	$(el).slideDown('slow');
	document.getElementById(id).innerHTML='hide';
	}
	else
	{
	$(el).slideUp('slow');
	document.getElementById(id).innerHTML='Edit';
	}
}
function klonengan(cl){
$('.'+cl).clone(true).insertAfter('.'+cl).removeClass(cl);
};


</script>



<div class="demo" style="font-size:10px;">

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Account Setting</a></li>
	</ul>
	<div id="tabs-1" style="padding-bottom:100px">
	<form method="post" action="?page=setting&amp;sub=save">
	<table cellpadding="15px" cellspacing="0">
	<tr>
		<?php foreach($data['profile'] as $p): ?>
		<td>Name</td>
		<td>:</td>
		<td style="border-bottom:1px solid #333;">
		<?php echo $p['long_name']; ?>
		&nbsp; &nbsp; &nbsp; &nbsp;
		<a href="#" id="name" onclick="show_edit(this.id);">Edit</a>
		<div id="name_edit" style="display:none">
		<table cellpadding="4px" cellspacing="0">
		<tr><td>First Name</td><td> :</td><td><input type="text" name="first_name" value="<?php echo $p['first_name']; ?>" /></td></tr>
		<tr><td>Middle Name</td><td> :</td><td><input type="text" name="middle_name" value="<?php echo $p['middle_name']; ?>"></td></tr>
		<tr><td>Surname</td><td> :</td><td><input type="text" name="surname" value="<?php echo $p['surname']; ?>"></td></tr>
		</table>
		</div>
		</td>
	<?php endforeach; ?>
	</tr>
	<tr>
		<td>Addresses</td>
		<td>:</td>
		<td style="border-bottom:1px solid #333;">
	<?php $a=0; foreach($data['add'] as $d): ?>
	<?php $a++; echo $a.'. '.$d['addres']; ?>
<br />

	<?php endforeach; ?>

		<div id="add_edit" style="display:none">
		<table cellpadding="4px" cellspacing="0">
		<?php foreach($data['add'] as $d): ?>
		<input type="hidden" name="edit_add_id[]" value="<?php echo $d['id']; ?>" />
		<tr><td>Addres</td><td> :</td><td><input type="text" name="edit_add_text[]" value="<?php echo $d['addres']; ?>" /></td></tr>
		<?php endforeach; ?>
		<tr class="add"><td>Addres</td><td> :</td><td><input type="text" name="new_add[]" value="" /></td></tr>
		</table>
		<img src="views/themes/default/icons/add.png" onclick="klonengan('add');"/>
		</div>
<br />
<br />

		<a href="#" id="add" onclick="show_edit(this.id);">Edit</a>

		</td>
	</tr>
	
	<tr>
		<td>Universities</td>
		<td>:</td>
		<td style="border-bottom:1px solid #333;">
		<?php
		$b=1; 
		foreach($data['univ'] as $val):
		echo $b++.'. '.$val['university'].'<br />';
		endforeach; 
		?>
		<div id="univ_edit" style="display:none">
		<table cellpadding="4px" cellspacing="0">
		<?php 
		foreach($data['univ'] as $val):
		?>
		<input type="hidden" name="univ_id[]" value="<?php echo $val['id']; ?>" />
		<tr>
		<td>University</td>
		<td> :</td>
		<td><input type="text" name="univ_edit[]" value="<?php echo $val['university']; ?>" /></td>
		</tr>
		<?php
		endforeach; 
		?>
		<tr class="univ_klon"><td>University</td><td> :</td><td><input type="text" name="new_univ[]" value="" /></td></tr>
		</table>
		<img src="views/themes/default/icons/add.png" onclick="klonengan('univ_klon');" />
		</div>
		<br />
<br />
<a href="#" id="univ" onclick="show_edit(this.id);">Edit</a>
		</td>
	</tr>
	
	
	<tr>
		<td>Websites</td>
		<td>:</td>
		<td style="border-bottom:1px solid #333;">
		<?php
		$b=1; 
		foreach($data['web'] as $val):
		echo $b++.'. '.$val['website'].'<br />';
		endforeach; 
		?>
		
		<div id="web_edit" style="display:none">
		<table cellpadding="4px" cellspacing="0">
		<?php 
		foreach($data['web'] as $val):
		?>
		<input type="hidden" name="web_id[]" value="<?php echo $val['id']; ?>" />	
		<tr><td>Website</td><td> :</td><td>http://<input type="text" name="web_edit[]" value="<?php echo $val['website']; ?>" /></td></tr>
		<?php
		endforeach; 
		?>
		<tr class="web_klon"><td>Website</td><td> :</td><td>http://<input type="text" name="new_web[]" value="" /></td></tr>
		</table>
		<img src="views/themes/default/icons/add.png" onclick="klonengan('web_klon');" />
		</div>
		<a href="#" id="web" onclick="show_edit(this.id);">Edit</a>
		</td>
	</tr>
	
	</table>
	 <button type="submit" onclick="post_status();" style="float:left;"> Save </button>
	 <a href="index.php?page=profile"> <button type="button" style="float:left;"> Cancel </button></a>
	 </form>
	</div>
</div>

</div><!-- End demo -->
