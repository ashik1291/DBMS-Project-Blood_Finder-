<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Finder | Member Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
<div class="menu"> <div class="top"></div>
<br /><br /><br /><br /><br /><br />
                        <div id="tabsE">
                                <ul>
                                        <!-- CSS Tabs -->
<li><a href="index.php"><span>Home</span></a></li>
<li><a href="member_search.php"><span>Search Donor</span></a></li>
<li><a href="request_blood.php"><span>Request Blood</span></a></li>

<li><a href="contact_us.php"><span>Contact Us</span></a></li>

                                </ul>
    </div>
  </div>
</div>
<div class="content">
<br /><br />
<div class="link">Quik Links<br />
  <div class="links">
  <ul>
  <li><a href="about_us"><span>About Us</span></a><br />
    <br />
  </li>
<li><a href="tips.php"><span>Tips</span></a><br />
  <br />
</li>
<li><a href="eligibility.php"><span>Eligibility<br />
  <br />
</span></a></li>
<li><a href="contact_us.php"><span>Contact Us</span></a><br />
</li>
</ul>
  <p>&nbsp;</p>
  </div>
</div>
<br />
    <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
<br /><br /><br /><br /><br /><br /><br />

<div id="apDiv1">
<form id="form1" name="form1" method="post" action="insert_reqst.php">
  <table class="tbl_form" width="461" height="431">
    <tr>
      <td class="cptn" colspan="4"> Request for Blood</td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="156" height="31" class="field">Patient's Name</td>
      <td width="32" class="field">:</td>
      <td colspan="2">
        <input type="text" name="pat_name" id="textfield" />      </td>
    </tr>
    <tr>
      <td class="field">Type of Disease</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="typ_dis" id="textfield2" />      </td>
    </tr>
    <tr>
      <td class="field">Doctor's Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="doc_name" id="textfield3" />      </td>
    </tr>
    
    <tr>
      <td class="field">When Required</td>
      <td class="field">:</td>
      <td width="144">
        <input type="text" name="whn_req" id="textfield4" />      </td>
      <td width="109">YY-MM-DD</td>
    </tr>
    <tr>
      <td class="field">Contact Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="cont_num" type="text" id="textfield5" value="+880" />      </td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
      <td colspan="2"><span class="field">
        <select name="blood_gp" size="1" id="select">
          <option>- - Select - -</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="req_city" id="textfield8" /></td>
    </tr>
    <tr>
      <td height="97" class="field"><div align="center">Hospital Name/Address</div></td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="hosp_add" id="textarea" cols="30" rows="5"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" name="button" id="button" value="Submit" />      </td>
    </tr>
  </table>
  </form>
</div>
</div>
<div class="bottom" align="center">© Copyright 2017. All rights are Reserved.</div>

</body>
</html>
