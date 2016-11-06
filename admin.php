<html>
<head>
You are here:<img src="images/13.png" width="20" height="15"> 
<a href="index.html">HOME</a><img src="images/13.png" width="20" height="15">
<strong>ADMIN PAGE</strong>
<style>

#header {
  //  background-color:MediumTurquoise;
    color:Black;
    text-align:center;
    padding:5px;
}
#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
a.home:hover{color:black;}
a.product:hover{color:black;}
a.details:hover{color:black;}
a.home
{
word-spacing:6 0px;
color:red;
padding:70px 40px;
text-align:center;
font-family:Arial,sans-serif;
font-variant:-caps;
font-size:300%;
}

a.product
{
word-spacing:60px;
color:blue;
padding:70px 70px;
text-align:center;
font-family:Arial,sans-serif;
font-variant:small-caps;
font-size:300%;
}
div.p
{
font-size:40px;
}
.error {color: #FF0000;}
</style>
</head>
<body  background="images/ba.jpg"> 
<div id="header">
<table align="left">
<td>
<tr><img src="logo.gif" width="160" height="130" align="left"><br/>
<div align="center">
<a class="home" href="lo.php">USER</a>
<a class="product " href="admin.php">ADMIN</a>
</tr></td></div>
</div>
</table>
<h2 align="center"> ADMIN LOGIN</h2>
<p style="color:red"> YOU CAN LOGIN TO COMPLAIN</p>
<form action='#' method='post'>
<table cellspacing='5'  align="center">
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/><input type='submit' name='submit' value='Cancel'/></td></tr>
</table>

</form>
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('complain') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from admin where Username='".$name."' and Password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$name;
    header('location:index2.html');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body>
</html>
</body>
</html>