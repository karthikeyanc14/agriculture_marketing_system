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
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {
	color: #FF6600;
	font-weight: bold;text-decoration:none;
}
.style14 {color: #FFFF33;text-decoration:none;}
.style15 {color: #FFFFCC}
.style19 {color: #00FF00}
.style20 {font-size: larger}
-->
</style>
</head>

<body bgcolor="#CCCC33" ><center>
<table width="90%" border="0" cellpadding="0" cellspacing="0" bgcolor="#003300">
  <!--DWLayoutDefaultTable-->
  <tr>
    <td width="741" height="150" valign="top" bgcolor=""><label>
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
    <td height="58" valign="top"><center><table width="100%" height="58" border="0" >
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
  <td width="100%" bgcolor="#FFFFFF">
  <center><br /><br />
   <table width="50%" border="0" height="200px" bgcolor="#003300" >
	   <tr>
	   <td >
	   
	     <?php
mysql_connect("localhost","root","") or die("Connection Error");//server

mysql_select_db("onlineagri") or die("Database Error"); //database


$id=$_POST["id"];
$proname=$_POST["proname"];
$price=$_POST["price"];
$prod=$_POST["prod"];
$protype=$_POST["protype"];

$qty=$_POST["qty"];


$fname1=$_FILES["img"]["name"];
move_uploaded_file($_FILES["img"]["tmp_name"],"" . $fname1);
 




$q="INSERT INTO product VALUES('$id','$proname','$price','$prod','$protype','$fname1','$uname','$qty')"; //insert statement

$status=mysql_query($q);

echo "<br><br><br><center><h1 style=color:#00FF00; font-size:16px>Successfully Saved</h1></center>";




?></td>
  </tr>
</table>
  <br /><br /><br />
  </td>
  </tr>
</table>
</center>
</body>
</html>

