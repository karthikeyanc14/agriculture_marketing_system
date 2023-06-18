<?php session_start();?>
<?php
echo $uname=$_POST['uname'];
echo $pass=$_POST['pass'];
echo $etype=$_POST['etype'];

mysql_connect("localhost", "root" ,"") or die("Connection Error");  //Connection Mysql
mysql_select_db("onlineagri") or die("Database Error"); // Connection Database
$q=mysql_query("select * from register where uname='$uname' and pass='$pass' and etype='$etype'");   // fetch Record 
$r=mysql_fetch_array($q);
 
if($uname=="admin" && $pass=="admin"  && $etype=="admin")
{
header("location:adminmain.html");
}

else if($r['uname']==$uname && $r['pass']==$pass && $r['etype']=="Seller")
{
echo  $_SESSION['uname'] = $r['uname'];
header("location:farmarmain.php");


}

else if($r['uname']==$uname && $r['pass']==$pass && $r['etype']=="Buyer")

{
echo  $_SESSION['uname'] = $r['uname'];
header("location:usermain.php");
}



else
{
echo "Invalid User";

}	
?> 