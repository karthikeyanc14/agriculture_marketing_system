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
	text-decoration:none;
}
.style14 {color: #FFFF33;text-decoration:none;}
.style15 {
	color: #00FF00;
	font-weight: bold;
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
        
        <td><div align="center" class="style13"><a href="farmerdetail.php" class="style14">SELLER  DETAILS</a></div></td>
		<td><div align="center" class="style13"><a href="userdetail.php" class="style10">BUYER DETAILS</a></div></td>
	<td><div align="center" class="style13"><a href="productdetail.php" class="style10">PRODUCT DETAILS</a></div></td>
		<td><div align="center" class="style13"><a href="orderdetail.php" class="style10">ORDER DETAILS</a></div></td> 
		<td><div align="center" class="style13"><a href="scheme.php" class="style14">SCHEME  DETAILS</a></div></td>
		<td><div align="center" class="style13"><a href="feeddetail.php" class="style10">FEEDBACK</a></div></td> <td><div align="center" class="style13"><a href="index.php" class="style10">SIGN OUT</a></div></td>
      </tr>
    </table>
    </center></td>
  </tr>
  <tr><td height="221" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="">

     
<center>
      
      <p align="center" class="style9 style8 style15">ORDER DETAILS </p>
     
	  <table width="84%" height="95" border="1" align="center" cellpadding="5px" cellspacing="0">
  <tr bgcolor="#333333">
    <td width="69" height="63" bgcolor="#66CC66"><strong>Product ID </strong></td>
	<td width="91" bgcolor="#66CC66"><strong>Order Date</strong></td>
    <td width="91" bgcolor="#66CC66"><strong>Product Name</strong></td>
	<td width="41" bgcolor="#66CC66"><strong>Qty </strong></td>
	<td width="41" bgcolor="#66CC66"><strong>Price </strong></td>
	<td width="41" bgcolor="#66CC66"><strong>Total </strong></td>
    <td width="96" bgcolor="#66CC66"><strong>Product Type</strong></td>
	<td width="62" bgcolor="#66CC66"><strong>Name</strong></td>
    <td width="71" bgcolor="#66CC66"><strong>Address</strong></td>
	 <td width="71" bgcolor="#66CC66"><strong>Phone No</strong></td>
	 <td width="65" bgcolor="#66CC66"><strong>Status</strong></td>
  </tr>
  <?php
  
  
  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
 
  $sel=mysql_query("select * from tb_order") or die("Table Error");
						while($row=mysql_fetch_array($sel))
						{
						$img=$row['img']
						?>
  <tr bgcolor="#FFFFFF">
    <td><span class="style22"><?php echo $row['id'];?></span></td>
	 <td><span class="style22"><?php echo $row['odate'];?></span></td>
    <td><span class="style22"><?php echo $row['proname'];?></span></td>
	<td><span class="style22"><?php echo $row['qty'];?></span></td>
	<td><span class="style22"><?php echo $row['price'];?></span></td>
	<td><span class="style22"><?php echo $row['tot'];?></span></td>
    <td><span class="style22"><?php echo $row['protype'];?></span></td>
    <td><span class="style22"><?php echo $row['oname'];?></span></td>
	<td><span class="style22"><?php echo $row['oaddress'];?></span></td>
	<td><span class="style22"><?php echo $row['oph'];?></span></td>
	<td><span class="style22"><?php echo $row['status'];?></span></td>
  </tr>
  <?php
  }
  ?>
 </table> 
      </center>
 
    </form>    </td>
  </tr>
</table>
</center>
</body>
</html>

