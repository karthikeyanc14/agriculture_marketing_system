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
.style10 {color: #FFFF00; text-decoration:none;}
.style11 {font-size:medium; font-weight: bold;}
.style12 {font-size: xx-large; color:#FFFF00}
.style13 {
	color: #FF6600;
	font-weight: bold;text-decoration:none;
}
.style14 {color: #FFFF33;text-decoration:none;}
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
<br /><br />
     <center> <span class="style12">FARMER BASED ONLINE PORTAL FOR THE INTEGRATED<br /> AGRICULTURAL SYSTEM</span><span class="style12"></span> 
    &nbsp;</td>
  </tr>
   <tr>
   <td><center>
   
        <img src="image/1.jpg" width="734" height="131" />
   </center></td>
  </tr>
  <tr>
    <td height="58" valign="top"><center>
	
	  
	<table width="100%" height="58" border="0">
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
  <tr>
      <td height="330" valign="top" bgcolor="#FFFFFF">
	  
	  <center> <h2 style="color:#FF0000; text-align:right">Farmer:<?php echo $uname;?><br /><br />
	  	  <h1 style="color:#FF0000; text-align:center; font-size:18px">PRODUCT VIEW</h1>
	  <table width="75%" height="100px" border="1" align="center" cellpadding="15px" cellspacing="0">
  <tr bgcolor="#333333">
    <td bgcolor="#66CC66"><span class="style9"><strong>Product ID </strong></span></td>
    <td bgcolor="#66CC66"><span class="style9"><strong>Product Name </strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Available Qty </strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Price </strong></span></td>
	
    <td bgcolor="#66CC66"><span class="style9"><strong>Details</strong></span></td>
    <td bgcolor="#66CC66"><span class="style9"><strong>Product Image</strong></span></td>
	 <td bgcolor="#66CC66"><span class="style9"><strong> </strong></span></td>
  </tr>
  <?php
  
  
  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
 
  $sel=mysql_query("select * from product where uname='$uname' ") or die("Table Error");
						while($row=mysql_fetch_array($sel))
						{
						$img=$row['img']
						?>
  <tr bgcolor="#FFFFFF">
    <td><span class="style11"><?php echo $row['id'];?></span></td>
    <td><span class="style11"><?php echo $row['proname'];?></span></td>
	<td><span class="style11"><?php echo $row['qty'];?></span></td>
	<td><span class="style11"><?php echo $row['price'];?></span></td>
	
    <td><span class="style11"><?php echo $row['protype'];?></span></td>
    <td><span class="style11"><?php echo "<img src=$img width=100 height=100></img>";?></span></td><td><?php echo '<a href=deletea.php?id='.$row['id'].' style="color:#0000FF; font-weight:bold; text-decoration:none;"><img src=image/delete.png height=20></a>'?> </div></td>
  </tr>
  <?php
  }
  ?>
</table>
	  
	  </td>
  </tr>
</table>
</center>
</body>
</html>
