<?php session_start();?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Agriculture</title>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
<!--
.style10 {color: #FFFF00; text-decoration:none;}
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {
	color: #FF6600;
	font-weight: bold;
}
.style14 {color: #FFFF33;text-decoration:none;}
.style16 {font-size: medium; font-weight: bold; }
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
  </tr>
  <tr>
    <td height="58" valign="top"><center><table width="739" height="58" border="0">
      <tr>
        <td><div align="center" class="style13"><a href="usermain.php" class="style10">HOME</a></div></td>
        <td><div align="center" class="style13"><a href="userview.php" class="style14">PRODUCT VIEW</a></div></td>
		<td><div align="center" class="style13"><a href="orderbooking.php" class="style10">ORDER BOOKING</a></div></td>
		<td><div align="center" class="style13"><a href="orderstatus.php" class="style10">ORDER STATUS</a></div></td>  <td><div align="center" class="style13"><a href="index.php" class="style10">SIGN OUT</a></div></td>
      </tr>
    </table>
    </center></td>
  </tr>
 <tr>
    <td height="30" valign="top" bgcolor="#666666" style="color:#FFFF00; font-size:18px; text-transform:uppercase; text-align:right">
	 
	 User:<?php echo $uname=$_SESSION["uname"];?>
  
	    
     </td>
  </tr>
  <tr>
    <td height="330" valign="top" bgcolor="#FFFFFF">
	  <h1 style="color:#FF0000; text-align:center; font-size:18px">ORDER STATUS</h1>
	  <table width="50%" height="70px" border="1" align="center" cellpadding="15px" cellspacing="0">
  <tr bgcolor="#333333">
    <td bgcolor="#66CC66"><span class="style9"><strong>Product ID</strong></span></td>
    <td bgcolor="#66CC66"><span class="style9"><strong>Product NAME </strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Qty </strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Price </strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Total </strong></span></td>
    <td bgcolor="#66CC66"><span class="style9"><strong>Product type</strong></span></td>
    <td bgcolor="#66CC66"><span class="style9"><strong>Buyer Name</strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Buyer Address</strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Buyer Phone</strong></span></td>
	<td bgcolor="#66CC66"><span class="style9"><strong>Order status</strong></span></td>
  </tr>
  <?php
  
  
  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
 
  $sel=mysql_query("select * from tb_order where oname='$uname'") or die("Table Error");
						while($row=mysql_fetch_array($sel))
						{
						$img=$row['img']
						?>
  <tr bgcolor="#FFFFFF">
    <td><span class="style16"><?php echo $row['id'];?></span></td>
    <td><span class="style16"><?php echo $row['proname'];?></span></td>
	<td><span class="style16"><?php echo $row['qty'];?></span></td>
	<td><span class="style16"><?php echo $row['price'];?></span></td>
	<td><span class="style16"><?php echo $row['tot'];?></span></td>
    <td><span class="style16"><?php echo $row['protype'];?></span></td>
     	<td><span class="style16"><?php echo $row['oname'];?></span></td>
		<td><span class="style16"><?php echo $row['oaddress'];?></span></td>
		<td><span class="style16"><?php echo $row['oph'];?></span></td>
		<td><span class="style16"><?php echo $row['status'];?></span></td>
  </tr>
  <?php
  }
  ?>
</table>
	  
	  </td>
  </tr>
</table>


	  
	  
	  </td>
  </tr>
</table>
</center>
</body>
</html>