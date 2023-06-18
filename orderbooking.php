<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Agriculture</title>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">

.style10 {color: #FFFF00; text-decoration:none;}
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {
	color: #FF6600;
	font-weight: bold;text-decoration:none;
}
.style14 {color: #FFFF33;text-decoration:none;}
.style15 {color: #00FF00}
.style16 {
	font-size: larger;
	font-weight: bold;
	color: #00FF00;
}

</style>
<script type="text/JavaScript">

function MM_jumpMenu(targ,selObj,restore){ 
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

</script>
<script>
  
function validate()
{

var mobile=document.register.mobile;
  


if(mobile.value == "")
{
alert("Enter Phone Number");
mobile.focus();
return false;
}

var re1=/^[0-9]+$/;
	
	
if( document.register.mobile.value.length >=1 && document.register.mobile.value.length <=9 || document.register.mobile.value.length >=11 || !re1.test(document.register.mobile.value))
{
     alert( "Please provide a Valid contact no." );
	 document.register.mobile.style.borderColor="green";
     document.register.mobile.focus() ;
     return false;
}


}
</script>

</head>

<body bgcolor="#CCCC33" ><center>
<table width="90%" border="0" cellpadding="0" cellspacing="0" bgcolor="#003300">
  
  <tr>
    <td width="741" height="150" valign="top"><label>
      <div align="center">
        <p>&nbsp;</p>
        <p class="style10"><span class="style11">FARMER BASED ONLINE PORTAL FOR THE INTEGRATED<br /> AGRICULTURAL SYSTEM</span><span class="style12"></span></p>
      </div>
    </label>
    &nbsp;</td>
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
    </center></td> </tr>
	<tr>
    <td height="30" valign="top" bgcolor="#666666" style="color:#FFFF00; font-size:18px; text-transform:uppercase; text-align:right">
	 
	 User:<?php echo $uname=$_SESSION["uname"];?>
  
	    
     </td>
  </tr>
  <tr><td height="221" valign="top" bgcolor="#FFFFFF">
  
   <center>
   <br /><br />
  <form name="register" onSubmit="return validate()"  enctype="multipart/form-data" action="oupdate.php" method="post">
 <table width="70%" border="0" height="400px" bgcolor="#003300" >
	   <tr>
	   <td>
	  
      
      <p align="center" class="style16">PLACE YOUR ORDER </p>
      <p align="center" class="style16">&nbsp;</p>
      <table width="382" height="470" border="0" align="center">
       
		<tr>
    <td width="199"><span class="style15 style8"><strong>Select Order ID</strong></span></td>
    <td width="173"><label>
	
       <select  name="jobs" class="text"  onchange="MM_jumpMenu('parent',this,0)">
	 <option>Select Order ID</option>
		 <?php
		  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error");
			  $q5=mysql_query("select * from product ");
				while($r=mysql_fetch_assoc($q5))

			{
				 echo "<option value=orderbooking.php?id=".$r['id'].">".$r['id']."</option>";
								}
								$id=$_REQUEST['id'];	
		 
		   ?>	
	 </select>
 <?php $result = mysql_query("SELECT *FROM product where id='$id' ");
$row1= mysql_fetch_array($result);
?>   
    </label></td>
  </tr>
		 <tr>
        <td><span class="style15 style8"><strong>Order Date </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="odate" type="text" id="odate"  value="<?php echo date('d-m-Y');?>" required/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Product ID </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="proid" type="text" id="proid"  value="<?php echo $row1['id'];?>" required/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Product Name</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="proname" type="text" id="proname"  value="<?php echo $row1['proname'];?>" required/>
          </label>
        </span></td>
      </tr>
        <tr>
        <td><span class="style15 style8"><strong>Qty</strong></span></td>
        <td><span class="style8">
            <input name="qty" type="text" id="qty"  value="<?php echo $row1['qty'];?>" required/>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Price</strong></span></td>
        <td><span class="style8">
            <input name="price" type="text" id="price"  value="<?php echo $row1['price'];?>" required/>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Product Type</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="protype" type="text" id="protype" value="<?php echo $row1['protype'];?>" required/>
          </label>
        </span></td>
      </tr>
	  <tr>
        <td><span class="style15 style8"><strong>Farmer Name </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="fname" type="text" id="fname"  value="<?php echo $row1['uname'];?>" required/>
          </label>
        </span></td>
      </tr>
	  
      <tr>
        <td><span class="style15 style8"><strong>Name </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="oname" type="text" id="oname" required/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Address </strong></span></td>
        <td><textarea name="oaddress" rows="5" cols="25" id="oaddress" required></textarea></td>
      </tr>
	  <tr>
        <td><span class="style15 style8"><strong>Phone </strong></span></td>
        <td><input name="mobile" type="text" id="mobile"  maxlength="10" /></td>
      </tr>
	   
   <tr> 
     
	 <td class="style15 style8" colspan="2" align="center"> Payment Details</td>
  </tr>
    <tr> 
    
	<td class="style15 style8">Payment Type</td>
    <td class="style15 style8"> <input name="r1" type="radio" value="Cash" id="r1" />Debit<Br />
	<input name="r1" type="radio" value="CreditCard" id="r2" />CreditCard<br />
	<input name="r1" type="radio" value="Cash" id="r1" />Cash on Delivery
	
	
	</td>
  </tr>
   <tr> 
    
	<td class="style15 style8">Bank Name</td>
    <td>
	<select name="bank" class="txt" id="bank" style="height:25px">
	 			<option selected="selected">Select Bank </option>
                   
                  <option>SBI </option>
				  <option>KVB</option>
				  <option>Canara</option>
				  
                </select>
	</td>
  </tr>
   <tr> 
   
	<td class="style15 style8">Card Number</td>
    <td> <input name="acno" type="text"  class="txt" id="acno" maxlength="15"/></td>
  </tr>
  <tr> 
   
	<td class="style15 style8">CVV</td>
    <td> <input name="cvv" type="text"  class="txt" id="cvv" maxlength="3"/></td>
  </tr>
	   <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="submit" name="Submit" value="Submit" />
		  <input type="reset" name="Reset" value="Reset" />
        </label></td>
      </tr>
    </table>  </form>    </td>
  </tr>
</table>
</center>
</body>
</html>