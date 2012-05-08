<div style="margin-left:20px; width:100%; height:100px;">
<div class="inactive"><h3>1</h3><div class="kata"><br /> Upload Foto Profile </div></div>
<div class="inactive" style="color:#003399; border-bottom-color:#003399;"><h3>2</h3><div class="kata"><br /> Edit Info </div></div>
<div class="inactive"><h3>3</h3><div class="kata"><br /> found buddy </div></div>
</div>

<div style="width:100%; margin-left:20px; height:auto; float:left; padding-bottom:10px; display:block;">
<form method="post" action="?page=signup&sub=save_step2&ids=<?php echo $data['ids']; ?>">
<table width="530">
<tr>
<td width="147">
University</td>
<td width="11">
:</td>
<td width="356">
<input type="text" name="university" />
</td>
</tr>
<tr>
<td width="147">
Addresses</td>
<td width="11">
:</td>
<td width="356">
<input type="text" name="add" />
</td>
</tr>

<tr>
<td width="147">
Current Location</td>
<td width="11">
:</td>
<td width="356">
<input type="text" name="cl" />
</td>
</tr>

<tr>
<td width="147">
Hometown</td>
<td width="11">
:</td>
<td width="356">
<input type="text" name="ht" />
</td>
</tr>

<tr>
<td width="147">
IM Screen</td>
<td width="11">
:</td>
<td width="356">
<input type="text" name="im" />
<select name="ebuddy">
<option>Yahoo!</option>
<option>Msn</option>
<option>Google Talk</option>
<option>Icq</option>
</select>
</td>
</tr>

<tr>
<td width="147">
Website</td>
<td width="11">
:</td>
<td width="356">
<input type="text" name="web" />
</td>
</tr>
<tr>
<td width="147"></td>
<td width="11"></td>
<td width="356">
<input type="submit" class="submit" value=" &nbsp; &nbsp; save &nbsp;  &nbsp;" />
</td>
</tr>

</table>
</form>
</div>
<a href="?page=signup&sub=step2" class="submit" style="float:right; margin-right:20px;">
Next >>
</a>
