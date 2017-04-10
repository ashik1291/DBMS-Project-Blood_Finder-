<!DOCTYPE HTML>
<head>

<link href="Style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include('db.php');
$bg=$_POST["blood_gp"];
$city=$_POST["city"];


$sql="SELECT * FROM blood_req WHERE blood_gp like '%$bg%' and req_city like '%$city%'  ORDER BY whn_req";
 $result=mysql_query($sql);

?>

<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="586" height="110" class="tbl_form" align="center">
    <tr>      </tr>
    <tr>
      <td colspan="8" class="cptn">Search Blood Requests</td>
      </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
    <tr>
      
      <td class="field">      Blood Group</td>
      <td class="field">&nbsp;</td>
      <td class="field"><select name="b_gp" size="1" id="select">
        <option>- - Select - -</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>
      </select></td>
      <td class="field">City</td>
      <td class="field">&nbsp;</td>
      <td><span class="field">
        <input name="city" type="text" id="textfield4" size="35" />
      </span></td>
      <td><input type="submit" name="button" id="button" value="Search" /></td>
    </tr>
    
    <tr>    </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
  </table>
  </form>
	<?php 
	  while($row=mysql_fetch_array($result))
	  {
	 
  echo '<div class="nw">';
	echo '<table><tr ><td width="350">Patient Name</td>';
	  echo '<td> '.$row['pat_name'].'</td>' ;
	echo '</tr>';
	echo '<tr><td>Type of Disease</td>';
	  echo '  <td>'.$row['typ_dis'].'</td>' ;
	  echo '</tr>';
	  echo '<tr><td>Docter Name</td>';
	   echo ' <td> '.$row['doc_name'] .'</td>';
	  echo '</tr><tr><td>When Required</td>';
	  echo ' <td> '.$row['whn_req'].'</td>' ;
	  echo '</tr><tr><td>Contact Number</td>';
	  echo '  <td>'.$row['cont_num'].'</td>' ;
	 echo '</tr><tr><td>Blood Group</td>';
	  echo ' <td> '.$row['blood_gp'].'</td>' ;
	  echo '</tr><tr><td>Required City</td>';
	  echo '  <td>'.$row['req_city'] .'</td>';
	  echo '</tr><tr><td>Hospital/Address</td>';
	  echo '  <td>'.$row['hosp_add'].'</td>' ;
	  
	  echo '</tr>';
	  echo '</table>';
    echo '</div>';
	echo '</br>';
	}
	  ?>
   
    
  </table>

</div>
</body>
</html>