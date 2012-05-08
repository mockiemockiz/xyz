<div id="about_me">
<h4 class="about_me_header">Profile</h4>
<table border="0" cellpadding="7px" cellspacing="0">
<?php foreach($data['profile'] as $p): ?>
<tr>
<td>Nama</td> <td>:</td><td> <?php echo $p['long_name']; ?></td>
</tr>
<?php endforeach; ?>

<tr><td><h4 class="about_me_header"><?php echo $data['lang'][2][$data['lang2']]; ?></h4></td></tr>
<?php $a=1; foreach($data['add'] as $p):  ?>
<tr>
<td><?php echo $data['lang'][2][$data['lang2']]; ?> <?php echo $a++; ?></td> <td>:</td><td> <?php echo $p['addres']; ?></td>
</tr>
<?php endforeach; ?>

<tr><td><h4 class="about_me_header"><?php echo $data['lang'][1][$data['lang2']]; ?></h4></td></tr>
<?php $a=1; foreach($data['univ'] as $p):  ?>
<tr>
<td><?php echo $data['lang'][1][$data['lang2']]; ?> <?php echo $a++; ?></td> <td>:</td><td> <?php echo $p['university']; ?></td>
</tr>
<?php endforeach; ?>

<tr><td><h4 class="about_me_header"><?php echo $data['lang'][0][$data['lang2']]; ?></h4></td></tr>
<?php $a=1; foreach($data['web'] as $p):  ?>
<tr>
<td><?php echo $data['lang'][0][$data['lang2']]; ?> <?php echo $a++; ?></td> <td>:</td><td> <?php echo $p['website']; ?></td>
</tr>
<?php endforeach; ?>

</table>
</div>