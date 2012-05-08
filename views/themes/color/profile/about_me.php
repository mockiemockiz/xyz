<div id="about_me">
<h4 class="about_me_header">Profile</h4>
<table border="0" cellpadding="7px" cellspacing="0">
<?php foreach($data['profile'] as $p): ?>
<tr>
<td>Nama</td> <td>:</td><td> <?php echo $p['long_name']; ?></td>
</tr>
<?php endforeach; ?>

<tr><td><h4 class="about_me_header">Adresses</h4></td></tr>
<?php $a=1; foreach($data['add'] as $p):  ?>
<tr>
<td>Addres <?php echo $a++; ?></td> <td>:</td><td> <?php echo $p['addres']; ?></td>
</tr>
<?php endforeach; ?>

<tr><td><h4 class="about_me_header">Universities</h4></td></tr>
<?php $a=1; foreach($data['univ'] as $p):  ?>
<tr>
<td>University <?php echo $a++; ?></td> <td>:</td><td> <?php echo $p['university']; ?></td>
</tr>
<?php endforeach; ?>

<tr><td><h4 class="about_me_header">Websites</h4></td></tr>
<?php $a=1; foreach($data['web'] as $p):  ?>
<tr>
<td>Website <?php echo $a++; ?></td> <td>:</td><td> <?php echo $p['website']; ?></td>
</tr>
<?php endforeach; ?>

</table>
</div>