<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
 $qry="SELECT fid FROM register ORDER BY fid DESC";
  $set=mysql_query($qry);
  $data=mysql_fetch_assoc($set);
  $id1=$data['fid'];
  $id=$id1+1;


 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
<!--
.style2 {color: #FFFFFF; font-weight: bold; }
.style8 {color: #FFFFFF}
.style9 {
	font-size: x-large;
	color: #00FF00;
}
.style10 {color: #FFFF00;text-decoration:none;}
.style11 {font-size: xx-large; font-weight: bold; text-align:center; color:#FFFFFF}
.style12 {font-size: xx-large}
.style13 {color: #FFFF00; font-weight: bold;text-decoration:none; }
.style15 {color: #00FF00}
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
    </table></center></td>
  </tr>
  <TR>
  <TD height="40PX" bgcolor="white">
  <marquee style="color:#FF0000">WELCOME TO AGRICULTURE TODAY PRICE TAG : CARROT:Rs.50,onion:Rs.100</marquee>
  </TD>
  </TR>
  <tr>
    <td height="221" valign="top" bgcolor="#FFFFFF"><div align="center">
	
	  <table width="70%" border="0" height="400px" bgcolor="#003300" >
	   <tr>
	   <td>
      
      <center><p class="style9"><strong>LOGIN</strong></p>
    </div>
      <form id="form1" name="form1" method="post" action="logdata.php">
      <center>
        <table width="353" border="0" height="200PX">
           
           
                
         
         <tr>
            <td><span class="style15">
              <label>User Name</label>
              &nbsp;</span></td>
            <td><label>
              <input name="uname" type="text" id="uname" required />
            </label></td>
          </tr>
		  <tr>
            <td><span class="style15">
              <label>Password</label>
              &nbsp;</span></td>
            <td><label>
              <input name="pass" type="password" id="pass"  required/>
            </label></td>
          </tr>
		   <tr>
            <td><span class="style15">
              <label>User Type</label>
              &nbsp;</span></td>
            <td> 
              <span class="style8">
              <input name="etype" type="radio" value="Seller" />
              Seller
              <input name="etype" type="radio" value="Buyer" />
             Buyer			
			   <input name="etype" type="radio" value="admin" />Admin
			  
			     </span></td>
          </tr>
		  
          <tr>
            <td colspan="2" align="center"><label>
              <input type="submit" name="Submit" value="LOGIN" />
            
             
              <input type="reset" name="Submit2" value="CLEAR" />
            </label></td>
          </tr>
        </table>
        </center>
      
      </form>    </td>
  </tr>
</table></center>
</body>
