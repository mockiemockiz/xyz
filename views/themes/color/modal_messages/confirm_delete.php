<div id="confirm_delete">
<h4 style="margin-bottom:10px;">Confirmation<strong id="close_button" onclick="close_modal();">X</strong></h4>
<div style="margin-left:10px;">
<?php echo $data['lang'][0][$data['lang2']]; ?>
<br />
<br />
<br />

<div style="width:100%;">
<?php if($data['re']): ?>
  <button type="button" onclick="callAJAX('index.php?page=delete_wall&sub=delete_reply&idw=<?php echo $data['idw']; ?>','confirm_delete');" style="float:left;">
    delete now
    </button>
<?php else: ?>
    <button type="button" onclick="callAJAX('index.php?page=delete_wall&sub=delete&idw=<?php echo $data['idw']; ?>','confirm_delete');" style="float:left;">
    delete now
    </button>
   <?php endif; ?>
    &nbsp; &nbsp;
    <button type="button" onclick="close_modal();" style="float:left; margin-left:10px;">
    cancel
    </button>
</div>
</div>
</form>
</div>