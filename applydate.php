
<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
<!--
.style10 {color: #FFFF00; text-decoration:none}
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {
	color: #FF6600;
	font-weight: bold;text-decoration:none
}
.style14 {color: #FFFF33;text-decoration:none}
.style16 {color: #00FF00}
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
 <tr>
    <td height="30" valign="top" bgcolor="#666666" style="color:#FFFF00; font-size:18px; text-transform:uppercase; text-align:right">
 User:<?php echo $uname=$_SESSION["uname"];?>
  
	    
     </td>
  </tr>
  <tr>
    <td height="330" valign="top" bgcolor="#FFFFFF"><br /><br />
	<center>
	 <table width="70%" border="0" height="300px" bgcolor="#003300" >
	   <tr>
	   <td>>
	  
		     <?php
mysql_connect("localhost","root","") or die("Connection Error");//server

mysql_select_db("onlineagri") or die("Database Error");
   
   
   
 $proid=$_POST["proid"];
 $proname=$_POST["mname"];
 $qty=$_POST["qty"];
 $price=$_POST["price"];
 $edesc=$_POST["edesc"];
 
  


$fname=$_POST["fname"];
$adds=$_POST["address"];
$ph=$_POST["mobile"];
  
 

$q="insert into apply values('','$proid','$proname','$qty','$price','$edesc','$fname','$adds','$ph')";
$status=mysql_query($q);

 

 

echo "<br><br><br><center><h1 style=color:#FFFF00; font-size:16px>Successfully Applied</h1></center>";







?>

	 </td>
  </tr>
</table>
  <br /><br />
	  </td>
  </tr>
</table>


	  
	  
	  </td>
  </tr>
</table>
</center>
</body>
</html>
