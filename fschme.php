<?php session_start();
 $uname=$_SESSION['uname'];
  
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Agriculture</title>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
<!--
.style10 {color: #FFFF00;text-decoration:none;}
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {
	color: #FF6600;
	font-weight: bold;
	text-decoration:none;s
}
.style14 {color: #FFFF33;text-decoration:none;}
.style15 {
	color: #00FF00;
	font-size: larger;
}
-->
</style>
</head>

<body bgcolor="#CCCC33" ><center>
<table width="90%" border="0" cellpadding="0" cellspacing="0" bgcolor="#003300">
  <!--DWLayoutDefaultTable-->
  <tr>
    <td width="741" height="150" valign="top"><label>
      <div align="right">
        <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script></div></div>
<br /><br /> <center> <span class="style11">ONLINE PORTAL FOR THE INTEGRATED<br /> AGRICULTURAL SYSTEM</span><span class="style12"></span> &nbsp;</td>
  </tr>
   <tr>
   <td><center>
     <img src="image/1.jpg" width="734" height="131" />
   </center></td>
  </tr> <tr>
    <td height="58" valign="top"><center><table width="100%" height="58" border="0">
        <tr>
        <td><div align="center" class="style13"><a href="fschme.php" class="style10">SCHEME DETAILS</a></div></td>
        <td><div align="center" class="style13"><a href="productadd.php" class="style14">PRODUCT ADD</a></div></td>
		<td><div align="center" class="style13"><a href="productorder.php" class="style10">PRODUCT ORDER</a></div></td>
		<td><div align="center" class="style13"><a href="productview.php" class="style10">PRODUCT VIEW</a></div></td>
		<td><div align="center" class="style13"><a href="fuserdetails.php" class="style10">USER DETAILS</a></div></td>
        <td><div align="center" class="style13"><a href="index.php" class="style10">SIGN OUT</a></div></td>
      </tr>
    </table>
    </center></td>
  </tr>
  <tr><td height="221" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="">

      <center> <h2 style="color:#FF0000; text-align:right">Farmer:<?php echo $uname;?><br /><br />
     <center><img src="image/d.jfif" />

<center>
<br />
      <p align="right"> <a href="apply.php" style="background:#6666CC;text-decoration:none; padding:15PX; color:#FFFFFF">APPLY SCHEME</a></p>
      <p align="center" class="style8 style9 style15"><strong>SCHEME DETAILS </strong></p>
     
	  <table width="90%"   border="1" align="center" cellpadding="5px" cellspacing="0">
  <tr bgcolor="#333333">
    <td width="83" bgcolor="#66CC66"><strong>SCHEME ID </strong></td>
    <td width="94" bgcolor="#66CC66"><strong>SCHEME</strong></td>
	<td width="58" bgcolor="#66CC66"><strong>LOAN AMOUNT</strong></td>
    <td width="57" bgcolor="#66CC66"><strong>MORE DETAILS</strong></td>
	   <td width="57" bgcolor="#66CC66"><strong></strong></td>
	  
  </tr>
  <?php
  
  
  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
 
  $sel=mysql_query("select * from scheme") or die("Table Error");
						while($row=mysql_fetch_array($sel))
						{
						$img=$row['img']
						?>
  <tr bgcolor="#FFFFFF">
    <td><span class="style22"><?php echo $row['id'];?></span></td>
    <td><span class="style22"><?php echo $row['ename'];?></span></td>
	<td><span class="style22"><?php echo $row['amt'];?></span></td>
    <td><span class="style22"><?php echo $row['edesc'];?></span></td>
    <td><?php echo '<a href=delete.php?id='.$row['id'].' style="color:#0000FF; font-weight:bold; text-decoration:none;"><img src=image/delete.png height=20></a>'?> </div></td>
	 
  </tr>
  <?php
  }
  ?>
 </table>      
 
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </form>    </td>
  </tr>
</table>
</center>
</body>
</html>

