<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product page</title>
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
</head>
<style>
body{ 
background:
}
.alert-info{ width:200%; }
</style>
<?php include "card/carddisp.php"; ?>
<body>
  <!-- Navbar starts here -->

  <!-- Navbar ends here -->

  <!-- Product Page starts here -->

  <!-- Mission Banner starts here -->
  <!--<div class="mission">
    <img src="images/missionBanner.jpg" width="100%" height="750px" alt="Mission Banner">
    <h1 class="missionHead">Lorem ipsum dolor sit amet </h1>
    <p class="col-xl-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, at? Deleniti labore delectus
      aperiam dolorem velit vel nobis illo! Fugiat odio eius unde quod dolorum dignissimos, quaerat repudiandae quas in
      suscipit! Officiis quisquam ipsam exercitationem, labore obcaecati quasi explicabo necessitatibus nemo minus, nam
      odit illo praesentium illum optio enim. Quae.</p>
    <h1>Orangutans saved till now:</h1>
    <div class="progress" style="width: 500px;position: absolute;top: 550px;height:30px;z-index: 2;left: 55px;font-size:40px;border-radius: 50px;">
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75"
        aria-valuemin="0" aria-valuemax="100" style="width: 40%">400</div>
    </div>
  </div>-->

  <!-- Mission banner ends here -->
  <br><br><br>
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  <div class="container">
 <center><div class="alert alert-warning"><h1>Palm Oil Free Products</h1></div><br></center>
  <?php include "productsdisplay.php"; ?>
 </div>
 <script>
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') 
	{
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
   {document.getElementById("dispuser").innerHTML=user; alert("Welcome "+user);
   }
   else
   {
   }
</script>
</body>

</html>