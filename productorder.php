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
	 <center>
	 
	  <table width="70%" border="0" height="400px" bgcolor="#003300" >
	   <tr>
	   <td>
	 
	  	  <form id="form1" name="form1" method="post" action="pro_update.php">	
            <div align="center">
              <p><span class="style16"><strong>Select Order ID</strong></span>
                <select  name="jobs" class="text"  onchange="MM_jumpMenu('parent',this,0)">
				<option>Select Order</option>
                  <?php
		  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error");
			  $q5=mysql_query("select * from tb_order where uname='$uname' and status='pending' ");
				while($r=mysql_fetch_assoc($q5))
							{
				 echo "<option value=productorder.php?proid=".$r['id'].">".$r['id']."</option>";
								} echo $proid=$_REQUEST['proid']; 
		   ?>
                </select>
                <?php 
			  $result = mysql_query("SELECT *FROM tb_order where id='$proid' ");
$row1= mysql_fetch_array($result);
?>
              </p>              
            </div>
            <table width="382" height="470" border="0" align="center">		
      <tr>
        <td><span class="style16 style8"><strong>Product ID </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="proid" type="text" id="proid"  value="<?php echo $row1['proid'];?>"/>
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
        <td><span class="style16 style8"><strong>Booking Date</strong></span></td>
        <td><span class="style8">
            <input name="qty" type="text" id="qty"  value="<?php echo $row1['odate'];?>"/>
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
        <td><span class="style16 style8"><strong>Total</strong></span></td>
        <td><span class="style8">
            <input name="price" type="text" id="price"  value="<?php echo $row1['tot'];?>"/>
        </span></td>
      </tr>
      <tr>
        <td><span class="style16 style8"><strong>Product Type</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="protype" type="text" id="protype" value="<?php echo $row1['protype'];?>"/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style16 style8"><strong>Name </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="fname" type="text" id="fname" value="<?php echo $row1['oname'];?>"/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style16 style8"><strong>Address </strong></span></td>
        <td><input name="address" type="text" id="address" value="<?php echo $row1['oaddress'];?>"/></td>
      </tr>
	  <tr>
        <td><span class="style16 style8"><strong>Phone </strong></span></td>
        <td><input name="ph" type="text" id="ph" value="<?php echo $row1['oph'];?>"/></td>
      </tr>
	  		<tr>
		<td><span class="style16">
		  <label>Approval		  </label>
            &nbsp;</span></td>
	<td> 	<select name="status">
			<option>Approved</option>
			<option>Rejected</option>
				</select>
			</td>		</tr>      <tr>
       
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
