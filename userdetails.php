<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Agriculture</title>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
<!--
.style10 {color: #FFFF00}
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {
	color: #FF6600;
	font-weight: bold;
}
.style14 {color: #FFFF33}
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
  </tr>
  <tr>
    <td height="58" valign="top"><center><table width="739" height="58" border="0">
       <tr>
        
        <td><div align="center" class="style13"><a href="productadd.php" class="style14">PRODUCT ADD</a></div></td>
		<td><div align="center" class="style13"><a href="productorder.php" class="style10">PRODUCT ORDER</a></div></td>
		<td><div align="center" class="style13"><a href="productview.php" class="style10">PRODUCT VIEW</a></div></td>
		<td><div align="center" class="style13"><a href="userdetails.php" class="style10">USER DETAILS</a></div></td>  <td><div align="center" class="style13"><a href="index.php" class="style10">SIGN OUT</a></div></td>
      </tr>
    </table>
    </center></td>
  </tr>
  <tr><td height="221" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="">

     
<center>
      
      <p align="center" class="style8 style9 style15"><strong>USER DETAILS </strong></p>
     
	  <table width="75%" height="20px" border="1" align="center" cellpadding="5px" cellspacing="0">
  <tr bgcolor="#333333">
    <td bgcolor="#66CC66"><strong>User Id </strong></td>
    <td  bgcolor="#66CC66"><strong>User Name</strong></td>
	<td   bgcolor="#66CC66"><strong>Gender</strong></td>
    <td   bgcolor="#66CC66"><strong>Age</strong></td>
	<td   bgcolor="#66CC66"><strong>Address</strong></td>
    <td   bgcolor="#66CC66"><strong>Phone No </strong></td>
	 
  </tr>
  <?php
  
  
  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
 
  $sel=mysql_query("select * from register where etype='User'") or die("Table Error");
						while($row=mysql_fetch_array($sel))
						{
						$img=$row['img']
						?>
  <tr bgcolor="#FFFFFF">
    <td><span class="style22"><?php echo $row['id'];?></span></td>
    <td><span class="style22"><?php echo $row['oname'];?></span></td>
	<td><span class="style22"><?php echo $row['gender'];?></span></td>
    <td><span class="style22"><?php echo $row['age'];?></span></td>
    <td><span class="style22"><?php echo $row['add'];?></span></td>
	<td><span class="style22"><?php echo $row['ph'];?></span></td>
	 
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
      <p>&nbsp;</p>
    </form>    </td>
  </tr>
</table>
</center>
</body>
</html>

