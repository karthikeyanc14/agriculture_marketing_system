<?php
 mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("onlineagri") or die("Database Error"); 
echo $id=$_GET['id'];

$result=mysql_query("delete from scheme where id='$id'");

 header('location:aschema.php');
?>