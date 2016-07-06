<html>
<head>
<style>
#header{text-transform:uppercase;background-color:#FF9400;font-size:70px;color:white;text-align:center;padding:20px;display:block;font-family:Aharoni;}
ul{list-style-type:none;padding:0px;margin:0px;overflow:hidden;}
li{float:left;}
a.link1{background-color:#FF9400;display:block;text-transform:uppercase;border-right: 1px solid white;font-weight:bold;color:#FFFFFF;text-decoration:none;text-align:center;padding-left:50px;padding-right:50px;padding-top:10px;padding-bottom:10px;height:30px;}

</style>
</head>

<body background="pic1.jpg">
<div id="header" ><div style="padding:5px;position:absolute;"><img src="aurora logo.jpg" width="120" height="120"></div>aurora 2014</div>
<div id="header" style="padding:10px;font-size:20px;">annual cultural fest</div>
<div id="header" style="padding:8px;font-size:25px;background-color:#CC3333;">iiitm gwalior</div>
<img src="logo.bmp" width="55" height="75"style="margin-left:48%;">



<ul>
<li><a class="link1"  href="" style="margin-left:175px;">events</a></li>
<li><a class="link1"  href="http://www.iiitm.ac.in/">about IIIITM</a></li>
<li><a class="link1"  href="">photo gallery</a></li>
<li><a class="link1"  href="aurora form.html">register here</a></li>
<li><a class="link1"  href="aurora contacts.html">contact us</a></li>
</ul><br>

<div style="border:10px solid #CC3333;height:600px; position:absolute;width:1200px;  padding:10px;">
<div style="color:white; background-color:cc3300; align:center; font-size:30px;text-align:center;font-family:Arohni;">Congrats! You have registered successfully :)</div><br><br>
</div>
<div style="color:#CC3333; align:center; font-size:20px; margin-top:60px; text-align:center; font-family:comic sans;">Your Details are as follows: </div>

<div style="color:white; background-color:ff9400; float:center; margin-left:180px; margin-top:50px; font-size:30px; width:900px; text-align:center;font-family:Arohni;">
<?php
$con=mysqli_connect("localhost","root","","mysql");
echo "Name: ".$_POST[name];
echo "username: ".$_POST[uname];
echo "contact number: ".$_POST[cno];
echo "email-id: ".$_POST[email];?>
</div><br><br>
</div>

<?php
$con=mysqli_connect("localhost","root","","mysql");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO aurora VALUES('$_POST[name]','$_POST[uname]','$_POST[email]',$_POST[cno],'$_POST[pword]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: '. mysqli_error($con));
  }
  
 else echo " Record added";

mysqli_close($con);
?>

</body>
</html>