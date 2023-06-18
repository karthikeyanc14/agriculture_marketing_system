<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Agriculture</title>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
<!--
.style8 {color: #FFFFFF}
.style9 {font-size: x-large}
.style10 {color: #FFFF00}
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {
	color: #FF6600;
	font-weight: bold;
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
       <td><div align="center"><a href="index.php" class="style2 style10">HOME</a></div></td>
        <td><div align="center"><a href="reg.php" class="style13">REGISTER</a></div></td>
        <td><div align="center"><a href="login.php" class="style13">LOGIN</a></div></td>
		<td><div align="center"><a href="feed.php" class="style13">FEEDBACK</a></div></td>
      </tr>
    </table>
    </center></td>
  </tr>
  <tr>
    <td height="221" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="">
	<CENTER>
	<BR /><BR />
	 <table width="70%" border="0" height="200px" bgcolor="#003300" >
	   <tr>
	   <td>
      	  <p>
      	    <?php
	 mysql_connect("localhost","root","") or die("Connection Error");
   mysql_select_db("onlineagri") or die("Database Error");
	$edate=$_POST["edate"];
	$uname=$_POST["uname"];
	$phone=$_POST["mobile"];
	$feed=$_POST["feed"];
 
	
	 $qry="INSERT INTO tb_feed VALUES('$edate','$uname','$phone','$feed')";
            $status=mysql_query($qry);
            
		echo "<h1 style=color:#00FF00><br><br><center>Successfully Feedback</center></h1>";

	
	
	?></TD></TR></TABLE>
   	      </p>
		  <BR /><BR /><BR />
      	  
    </form>    </td>
  </tr>
</table>
</center>
</body>
</html>
