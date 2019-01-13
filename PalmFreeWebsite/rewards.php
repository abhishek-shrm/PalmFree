<?php SESSION_start(); ?>
<html>
<head><title>Palm Free| Home</title></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.form-inline {
  border-radius: 1.5rem !important;
}
</style>
<?php include "Nav-bar/index.html"; ?>
<style>
body {
  /*background: #f1f2f7;*/
  background: #a8ff78;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #78ffd6, #a8ff78);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #78ffd6, #a8ff78); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  display: table;
  font-family: 'Open Sans' sans-serif;
  width: 100%; }
//  .alert-grey{background-color:#d3d3d3;}

</style>
<body>

<!-- nav bar -
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">PalmFree</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- nav -->
<br>
<div class="container">
<div class="row">
<div class="col-md-4"><div class=" alert alert-light"><center><h1>Coin Balance<br><br><b><img src='http://2018.igem.org/wiki/images/e/e6/T--Tec-Chihuahua--EcoCoins.png' height=32 width=26> <?php echo $_SESSION["Coins"]; ?></b></h1></center><br><font color="red">Coins are rewarded for each palmfree purchase you made through us.</font></div></div>
<div class="col-md-8"><div class="alert alert-light"><h1  style="color:green">Hello, <b><?php echo $_SESSION["Name"]; ?></b></h1><br>Your Progress:<?php echo $_SESSION["Coins"];?>/1000<br><br>
<div class="w3-light-grey w3-xlarge w3-round-xlarge">
  <div class="w3-container w3-blue w3-round-xlarge" style="width:<?php echo $_SESSION["Coins"]/10;?>%"><?php echo $_SESSION["Coins"];?></div>
</div>
<p id="demo"></p>
</div>
<div class="alert alert-warning"><h3>PalmFree T-Shirts<p style="text-align:right"><img src='http://2018.igem.org/wiki/images/e/e6/T--Tec-Chihuahua--EcoCoins.png' height=30 width=25> 900<br><br><button class="btn btn-danger"  onclick="buygoodies(900)">Redeem Coins</button></p> </h3></div>
<div class="alert alert-warning"><h3>PalmFree Mugs<p style="text-align:right"><img src='http://2018.igem.org/wiki/images/e/e6/T--Tec-Chihuahua--EcoCoins.png' height=30 width=25> 300<br><br><button class="btn btn-danger"  onclick="buygoodies(900)">Redeem Coins</button></p> </h3></div>
<div class="alert alert-warning"><h3>PalmFree Stationery items<p style="text-align:right"><img src='http://2018.igem.org/wiki/images/e/e6/T--Tec-Chihuahua--EcoCoins.png' height=30 width=25> 500<br><br><button class="btn btn-danger"  onclick="buygoodies(900)">Redeem Coins</button></p> </h3></div>
</div>

</div><!-- row -->
</div><!-- container -->
<script>
var coins=<?php echo $_SESSION["Coins"]; ?>;
document.cookie = "username=<?php echo $_SESSION["Name"]; ?>";
if(coins>1000)
{
	document.getElementById("demo").innerHTML="<center><h2><font color='green'><b>Congratulations</b></font></h2></center>";
}
function buygoodies(price)
{
	if(price<=coins)
		window.location.href="";
	 else
		 alert("Not Enough coins");
}


function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
var user=getCookie("username");
if(user!="")
   {document.getElementById("dispuser").innerHTML=user; 
   }
   else
   {
   }
</script>
</body>
</html>