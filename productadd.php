<?php session_start();
$uname=$_SESSION['uname']; 
  

mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
 $qry="SELECT id FROM product ORDER BY id DESC";
  $set=mysql_query($qry);
  $data=mysql_fetch_assoc($set);
  $id1=$data['id'];
  $id=$id1+1;


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
  <tr><td height="221" valign="top" bgcolor="#FFFFFF">
  
  <center> <h2 style="color:#FF0000; text-align:right">Farmer:<?php echo $uname;?><br />
  <form id="form1" name="form1" method="post" action="prodata.php " enctype="multipart/form-data">
<p>&nbsp;</p>
<center>
 <table width="70%" border="0" height="400px" bgcolor="#003300" >
	   <tr>
	   <td>


<table width="400" height="348" border="0" align="center">
      <tr>
        <td height="56" colspan="2"><div align="center" class="style15"><span class="style19 style8 style20"><strong>UPLOAD DETAILS</strong></span></div></td>
        </tr>
      <tr>
        <td><span class="style8 style19"><strong>Upload ID </strong></span></td>
        <td> 
          <input name="id" type="text" id="id" value="<?php echo $id;?>" required/>          </td>
      </tr>
      <tr>
        <td><span class="style8 style19"><strong>Product Name</strong></span></td>
        <td> 
          <input name="proname" type="text" id="proname" required/>           </td>
      </tr>
	   <tr>
        <td><span class="style8 style19"><strong>Qty</strong></span></td>
        <td> 
          <input name="qty" type="number" id="qty"  required/>           </td>
      </tr>
	    <tr>
        <td><span class="style8 style19"><strong>Price</strong></span></td>
        <td> 
          <input name="price" type="text" id="price" required/>           </td>
      </tr>
       
      <tr>
        <td><span class="style8 style19"><strong>Details</strong></span></td>
        <td><span class="style8 style15">
          <label>
          <textarea name="prod" id="prod" required></textarea>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style8 style19"><strong>Types</strong></span></td>
        <td><span class="style8 style15">
          <label>
          <select name="protype" id="protype" required>
            <option>Seeds</option>
            <option>Plants</option>
			<option>fruits</option>
			<option> vegetables</option>
          </select>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style19 style8"><strong>Upload Image</strong></span></td>
        <td><span class="style8 style15">
          <label>          </label>
          <input name="img" type="file" id="img"  required />
        </span></td>
      </tr>
      
      <tr>
        <td><span class="style15"></span></td>
        <td><span class="style15">
          <label>
            <input type="submit" name="Submit" value="Submit" />
            <input type="reset" name="Submit2" value="Reset" />
            </label>
        </span></td>
      </tr>
    </table>
     
   
    </form>    </td>
  </tr>
</table>
</center>
</body>
</html>
