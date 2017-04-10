<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Finder | Member Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<body>
<?php
include("db.php"); 

$uname=$_POST['uname'];
$pass=$_POST['pass'];

if ($uname==""  or $pass=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
else
{
$sql="SELECT * FROM member_reg WHERE uname='".$uname."' and pass='".$pass."'";
 $result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){}

else
{

header('location: member_login.php');
}
}
?>

<div class="header">
<div class="menu"> <div class="top"></div>
<br /><br /><br /><br /><br /><br />
                        <div id="tabsE">
                                <ul>
                                        <!-- CSS Tabs -->
<li><a href="index.php"><span>Home</span></a></li>
<li><a href="#"><span>Profile</span></a></li>
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
  <li><a href="about_us.php"><span>About Us</span></a><br />
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
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="apDiv1">
<form id="form1" name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="160">
    <tr>      </tr>
    <tr>
      <td colspan="3" class="cptn">
	  <?php 


	  while($row=mysql_fetch_array($result))
	  {
	  echo ' Hi, Mr.  &nbsp;&nbsp;'.$row['name'] ;
	
	  ?>      </td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field" width="200">Name</td>
      <td class="field" width="5">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['name'] ;  
	  
	  ?></td>
    </tr>
    
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['mob_num'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['e_mail'] ;  
	  }
	  ?>      </td>
    </tr>
    <tr>
      <td class="field">&nbsp;</td>
      <td class="field">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>    </tr>
    <tr>      </tr>
  </table>
  </form>
</div>
</div>
<div class="bottom" align="center">© Copyright 2017. All rights are Reserved.</div>

</body>
</html>
