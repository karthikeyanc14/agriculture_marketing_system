<?php session_start();
 $uname=$_SESSION['uname'];

?>
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
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
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
	 <center>
	 <br /><br />
	  <table width="70%" border="0" height="400px" bgcolor="#003300" >
	   <tr>
	   <td>
	   <center><h2 style="color:#FFFFFF; font-size:18px">APPLY SCHEME</h2>
	 
	  	  <form name="register" onSubmit="return validate()"  enctype="multipart/form-data" method="post" action="applydate.php">	
            <div align="center">
              <p><span class="style16"><strong>Select Scheme ID</strong></span>
                <select  name="jobs" class="text"  onchange="MM_jumpMenu('parent',this,0)">
				<option>Select Order</option>
                  <?php
		  mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error");
			  $q5=mysql_query("select * from scheme ");
				while($r=mysql_fetch_assoc($q5))
							{
				 echo "<option value=apply.php?proid=".$r['id'].">".$r['id']."</option>";
								} echo $proid=$_REQUEST['proid']; 
		   ?>
                </select>
                <?php 
			  $result = mysql_query("SELECT *FROM scheme where id='$proid' ");
$row1= mysql_fetch_array($result);
?>
              </p>              
            </div>
            <table width="382" height="470" border="0" align="center">		
      <tr>
        <td><span class="style16 style8"><strong>SCHEME ID </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="proid" type="text" id="proid"  value="<?php echo $row1['id'];?>" required/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style16 style8"><strong>SCHEME NAME</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="mname" type="text" id="mname"  value="<?php echo $row1['ename'];?>" required/>
          </label>
        </span></td>
      </tr>
	    <tr>
        <td><span class="style16 style8"><strong>APPLY DATE</strong></span></td>
        <td><span class="style8">
            <input name="qty" type="text" id="qty"  value="<?php echo date('d-m-y');?>" required/>
        </span></td>
      </tr>
       
      <tr>
        <td><span class="style16 style8"><strong>AMOUNT</strong></span></td>
        <td><span class="style8">
            <input name="price" type="text" id="price"  value="<?php echo $row1['amt'];?>" required/>
        </span></td>
      </tr>
	  <tr>
        <td><span class="style16 style8"><strong>MORE DETAILS</strong></span></td>
        <td><span class="style8">
            <input name="edesc" type="text" id="edesc"  value="<?php echo $row1['edesc'];?>" required/>
        </span></td>
      </tr>
      
      <tr>
        <td><span class="style16 style8"><strong>NAME</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="fname" type="text" id="fname"  required />
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style16 style8"><strong>ADDRESS </strong></span></td>
        <td><input name="address" type="text" id="address"  required/></td>
      </tr>
	  <tr>
        <td><span class="style16 style8"><strong>PHONE </strong></span></td>
        <td><input name="mobile" type="text" id="mobile" required maxlength="10" /></td>
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
