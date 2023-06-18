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
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
  <tr>
     <td height="330" valign="top" bgcolor="#FFFFFF">
	 <center>
	 <br /><br />
	  <table width="70%" border="0" height="400px" bgcolor="#003300" >
	   <tr>
	   <td>
	   <CENTER><h2 style="color:#FFFF00">PRICE APPROVAL</h2>
	 
	  	  <form id="form1" name="form1" method="post" action="priceupdata.php">	
           
                <?php   mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 

				echo $proid=$_REQUEST['id']; 
			  $result = mysql_query("SELECT *FROM product where id='$proid' ");
$row1= mysql_fetch_array($result);
?>
              </p>              
            </div>
            <table width="382" height="370" border="0" align="center">		
      <tr>
        <td><span class="style16 style8"><strong>Product ID </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="proid" type="text" id="proid"  value="<?php echo $row1['id'];?>"/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style16 style8"><strong>Product Name</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="mname" type="text" id="mname"  value="<?php echo $row1['proname'];?>"/>
          </label>
        </span></td>
      </tr>
	    
        <tr>
        <td><span class="style16 style8"><strong>Qty</strong></span></td>
        <td><span class="style8">
            <input name="qty" type="text" id="qty"  value="<?php echo $row1['qty'];?>"/>
        </span></td>
      </tr>
      <tr>
        <td><span class="style16 style8"><strong>Price</strong></span></td>
        <td><span class="style8">
            <input name="price" type="text" id="price"  value="<?php echo $row1['price'];?>"/>
        </span></td>
      </tr>
	   
	  		     <tr>
       
        <td colspan="2" align="center"> 
          <input type="submit" name="Submit" value="Submit" />
		  <input type="reset" name="Reset" value="Reset" />
        </label></td>
      </tr>
    </table></form>  
	  </td>
  </tr>
</table>
</center>
</body>
</html>
