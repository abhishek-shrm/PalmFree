<html>
<head>
</head>
<body>
<?php
SESSION_Start();
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="palmfree";
$kid=$_POST["userid"];
$pswd=$_POST["userpassword"];
$flag=0; $status=0;


$connect3=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from user";
$result = $connect3->query($sql);
while($rs = $result->fetch_assoc()) 
{
if($kid==$rs["Contact"] && $pswd==$rs["Password"])
   { $flag=1;
	   $_SESSION["Name"]=$rs["Name"];
	   $_SESSION["Coins"]=$rs["Coins"];
	   $_SESSION["Contact"]=$rs["Contact"];
   }
}
if($flag==0)
 $status=-1;
else

	//include "rewards.php"; }

?>
<body>
<script>
var str=<?php echo $status;?>;
if(str==-1)
{
alert("Login Failed\n User-ID/Password is incorrect");
window.location.href = "index.html";
}
else
 {document.cookie ="username=<?php echo $_SESSION['Name'];?>";
alert("Login Successfull");
window.location.href = "index.html";}
</script>
</body>
</html>