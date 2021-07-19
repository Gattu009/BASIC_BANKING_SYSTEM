<?php
session_start();


if (isset($_POST['submit']))
{
	$x=$_POST['id'];
	$_SESSION['id']=$x;

       $co=mysqli_connect("localhost","root","","test");
        $sql=$co->query("SELECT * from bank where id=$x;");
         
   

$i=0;  
echo "<center style='margin-top:100px'><h2>ACCOUNT DETAILS</h2></center>";   

        while($ro = $sql->fetch_assoc())
{


echo"
<div style='margin-left:400px;margin-top:30px;letter-spacing:4px;font-size:15px;border:solid;width:50%;'><br>
<hr style='width:100%'>
<b>&nbspACCOUNT HOLDER NAME</b><br><br>&nbsp{$ro['name']}<hr style='width:30%'><br>
<b>&nbspEMAIL</b><br><br>&nbsp{$ro['email']}<hr style='width:30%'><br>
&nbsp<img src='sam.png' width=300px height=300px style='position:fixed;top:260px;right:50px;left:840px;border-radius:25px'><br>
<b>&nbspCURRENT BALANCE</b><br><br>&nbsp{$ro['balance']}<hr style='width:30%'><br>
<br>

<br>";





  
  

}



}











  ?>
  <!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<title></title>
	<style>
	body{
	 background-color: lightblue;
	   overflow-x: hidden;

    }

</style>
</head>
<body>
	     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <a class="navbar-brand" href="#"><i class="fas fa-piggy-bank" style="color:#03cafc"></i><span style="letter-spacing: 3px;color:#03cafc">  GATTU MINI BANK</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php#home"><i  style="font-size:20px; position: fixed ;top:16px;right:700px;" class="fa fa-home"><span style="font-size:12px">  HOME</span></i> </a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="data.php"><i style="font-size:20px; position: fixed ;top:16px;right:500px;" class='fas fa-file-alt'><span style="font-size:12px"> STATUS</span></i></a>
       
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php#gattu"><i style="font-size:20px; position: fixed ;top:16px;right:300px;" class='fas fa-user-friends'><span style="font-size:12px">  ABOUT US</span></i></a>

      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php#cont"><i style="font-size:20px; position: fixed ;top:16px;right:100px;"  class='fas fa-phone'><span style="font-size:12px">  CONTACT US</span></i></a>
       
      </li>
    </ul>

  </div>
   

    
</nav>
<button  class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" style="margin-bottom:20px;margin-left:500px">START THE TRANSFER</button>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasTopLabel">PROVIDE THE DETAILS BELOW</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form action="send.php" method="POST">

<label >SELECT THE SENDER NAME:</label>
<select name="user" >
 
  <option >RAMU</option>
  <option >SAM</option>
  <option>ABDUL</option>
   <option >SHIV</option>
  <option >TONY</option>
  <option >CHANDANA</option>
  <option>SRI</option>
   <option >ZORA</option>
  <option >HARSHAD</option>
  <option >SHRUTHI</option>

</select><br><br>
<input type="text" name="am" placeholder="ENTER THE AMOUNT" requried >
    	<input type="submit" value="TRANSFER" name="transfer">
    </form>
  </div>
</div>

</body>
</html>