<div class='row'>
<?php 
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="palmfree";
$cate=$_GET["category"];
$connect=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from products";
$result = $connect->query($sql);
while($row = $result->fetch_assoc())
{ 
$category=$row['Category']; 
if($cate==$category || $cate=='all')
{
$pi=$row['ProductImage'];
$name=$row['ProductName'];
$link=$row['ProductLink'];
$price=$row['ProductPrice'];
	echo "<div class='col-md-4' ><div class='alert alert-light  border border-success' style='color:black'><center>Category: $category<br><img src='$pi'height=200 width=200><br>$name<hr><h2>₹ $price</h2><br><a href='$link' target='_blank'><button class='btn btn-block btn-warning'>Buy Now</button></a></center></div></div>";
}

 /*echo"<div class='card'><img src='$pi' alt='Denim Jeans' width=200 height=200><h3>$name</h3><p class='price'>Rs $price</p><p><a href='$link' target='_blank'><button>Buy Now</button></a></p></div>";*/
}
?>
</div>