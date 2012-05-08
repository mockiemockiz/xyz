<?
/*//////////////////////////////////////////////////////////////////////

Description:       Liberty Reserve Sample Store
Release Date:     Sep 20, 2007

Designed and Developed by Liberty Reserve development team.
Copyright (c) 2007 Liberty Reserve.
Website: http://www.libertyreserve.com
Contact email: tech@libertyreserve.com

This program is distributed in the hope that it will be useful but 
WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  

//////////////////////////////////////////////////////////////////////*/


?>
<h1>Payment Failed</h1>

<p>
  You have canceled the following purchase:
</p>
  
<table>
  <tr>
    <td>
      Order ID:
    </td>
    <td>
      <?php echo $_REQUEST["order_id"]; ?>
    </td>
  </tr>  
  <tr>
    <td>
      Name:
    </td>
    <td>
      <?php echo $_REQUEST["item_name"]; ?>
    </td>
  </tr>  
  <tr>
    <td>
      Price:
    </td>
    <td>
      <?php echo $_REQUEST["lr_amnt"]; ?>
    </td>
  </tr>  
</table>
  
<p>
  <a href="index.php">Return to the main page</a>
</p>  
  
<h2>Liberty Reserve fields sent here</h2>

<table>
  <thead>
    <tr>
      <th style="text-align: left">
        Name
      </th>
      <th style="text-align: left">
        Value
      </th>
      <th>&nbsp;
        
      </th>
    </tr>
  </thead>
  <tbody>
  <strong><?php print_r($_REQUEST); ?></strong>      
<?
$reqKeys = array_keys ($_REQUEST);
foreach($reqKeys as &$key) {
; ?>
    <tr>
      <td><?php echo $key; ?></td>
      <td><?php echo $_REQUEST[$key]; ?></td>
      <td><?php echo ereg("^lr_[a-z_]*$", $key) ? "<div style=\"background: #cc0000; color: #ffffff; padding: 5px; marging: 2px; text-align: center;\">LR</div>" : "&nbsp;"; ?></td>
    </tr>
<?
}
; ?>
  </tbody>
</table>

<?

showFooter();
; ?>
