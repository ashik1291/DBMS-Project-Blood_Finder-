<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<head>
<link href="Style.css" rel="stylesheet" type="text/css" />




<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div class="header">
<div class="menu"> 
<div class="top"></div>
<br /><br /><br />
<div class="baner">Blood Finder</div>
<br/><br/><br/>
                        <div id="tabsE">
                                <ul>
                                        <!-- CSS Tabs -->
<li><a href="index.php"><span>Home</span></a></li>
<li><a href="contact_us.php"><span>Contact Us</span></a></li>

                                </ul>
    </div>
  </div>
</div>

<div class="content">
<div class= "qt1">Matched Donors:<br/></div>

<?php
include('db.php');
$bg=$_POST["bg"];
$city=$_POST["city"];



$sql="SELECT * FROM donor_reg WHERE b_gp like '%$bg%' and city like '%$city%'    ";
 $result=mysql_query($sql);
 

?>


	<?php 
	  while($row=mysql_fetch_array($result))
	  {
	 
  echo '<div class="nw">';
 
	echo '<table><tr ><td width="350"> Name</td>';
	  echo '<td> '.$row['name'].'</td>' ;
	echo '</tr>';
	echo '<tr><td>Age</td>';
	  echo '  <td>'.$row['age'].'</td>' ;
	  echo '</tr>';
	  echo '<tr><td>Gender</td>';
	   echo ' <td> '.$row['gender'] .'</td>';
	  echo '</tr><tr><td>Blood Group</td>';
	
	  echo ' <td> '.$row['b_gp'].'</td>' ;
	  echo '</tr><tr><td>Last Donated Date</td>';
	  echo '  <td>'.$row['ldd'].'</td>' ;
	  echo '</tr><tr><td>Location</td>';
	  echo ' <td> '.$row['city'] .'</td>';
	  echo '</tr>';
	  echo '<tr><td>Contact Number</td>';
	  echo '  <td>'.$row['mob_num'].'</td>' ;
	  echo '</tr><tr><td>E-Mail</td>';
	  echo '  <td>'.$row['e_mail'].'</td>' ;
	  echo '</tr>'; 
	  echo '</table>';
	   

	   echo '<iframe src="msg.php" width="900" height="125" frameborder="0"></iframe>';
    echo '</div>';
	echo '</br>';
	}
	
	  ?>

</div>
<div class="bottom" align="center">© Copyright 2017. All rights are Reserved.</div>
</body>
</html>
   
    
  