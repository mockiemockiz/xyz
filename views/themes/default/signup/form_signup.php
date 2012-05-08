   	<h4 style="margin-bottom:30px;">Sign Up
	<strong id="close_button" onclick="close_modal();">X</strong>
	</h4>
	 <form method="post" action="?page=signup" id="sign" style="margin-top:10px;">
      <table border="0" cellpadding="10" cellspacing="0">
        <tr>
          <td width="100px"> First Name </td>
          <td>:</td>
          <td><input type="text" name="fname" size="25" id="fname" /></td>
        </tr>
        <tr>
        <tr>
          <td width="100px"> Middle Name </td>
          <td>:</td>
          <td><input type="text" name="mname" size="25" id="mname" /></td>
        </tr>
		<tr>
          <td width="100px"> Surname </td>
          <td>:</td>
          <td><input type="text" name="sname" size="25" id="sname" /></td>
        </tr>
        <tr>
          <td width="100px"> Email Address </td>
          <td>:</td>
          <td><input type="text" name="email" size="25" id="email" /></td>
        </tr>
        <tr>
          <td width="100px"> Date Of birth </td>
          <td>:</td>
          <td><select name="date" id="date">
              <?php for($a=1;$a<=12;$a++): ?>
              <option><?php echo $a; ?></option>
              <?php endfor; ?>
            </select>
            <select name="month" id="month">
              <?php for($a=1;$a<=31;$a++): ?>
              <option><?php echo $a; ?></option>
              <?php endfor; ?>
            </select>
            <select name="year" id="year">
              <?php for($a=1950;$a<=2000;$a++): ?>
              <option><?php echo $a; ?></option>
              <?php endfor; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td width="100px"> Genre </td>
          <td>:</td>
          <td><select name="genre" id="genre">
              <option>Male</option>
              <option>Female</option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="100px"> Password </td>
          <td>:</td>
          <td><input type="text" name="pass1" id="pass1" />
          </td>
        </tr>
        <tr>
          <td width="100px"> Re-Password </td>
          <td>:</td>
          <td><input type="text" name="pass2" id="pass2" />
          </td>
        </tr>
        <tr>
          <td width="100px"></td>
          <td></td>
          <td><input type="submit" value="sign up" class="submit" />
		  <button type="button" onclick="close_modal();">Cancel</button>
          </td>
        </tr>
      </table>
    </form>