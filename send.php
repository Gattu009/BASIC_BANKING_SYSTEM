<?php
session_start();
if (isset($_POST['transfer']))
{
	$x=$_SESSION['id'];
	$a=$_POST['am'];
	$y=$_POST['user'];

       $co=mysqli_connect("localhost","root","","test");
       $c=mysqli_connect("localhost","root","","test");
       $cp=mysqli_connect("localhost","root","","test");
        
        $sq="INSERT INTO `trans`(`send`, `receive`, `amount`, `date`) VALUES ('$x','$y','$a',current_timestamp())";
        $t="";
        $f=0;
$u=$co->query("SELECT * from bank where id=$x;");

while($rt=$u->fetch_assoc())
{
	$t=$rt['name'];
	$f=$rt['balance'];

}
if($f>=$a)
{


        $s="update `bank` set balance=balance-$a where id=$x";
        $p="update `bank` set balance=balance+$a where name='$y'";
  if($c->query($sq)==true)
{
  
}
if($co->query($s)==true)
{
  echo '<script>alert("TRANSACTION SUCCESSFUL")</script>';
}
if($cp->query($p)==true)
{
  
}


  $l=$c->query("SELECT * from trans where send=$x and receive='$y';");
         
  



        while($r = $l->fetch_assoc())
{
echo"
<div style='margin-left:400px;margin-top:100px;letter-spacing:4px;font-size:15px;border:solid;width:50%;text-align:center'><br>
<h3>TRANSACTION DETAILS</h3>
<hr style='width:100%'>
<b>&nbspSENDER</b><br><br>&nbsp{$t}<hr style='width:100%'><br>
<b>&nbspRECEVIER</b><br><br>&nbsp{$r['receive']}<hr style='width:100%'><br>

<b>&nbspAMOUNT</b><br><br>&nbsp{$r['amount']}<hr style='width:100%'><br>
<br>


<b>&nbspTRANSACTION DATE</b><br><br>&nbsp{$r['date']}<br><br>
";


         
break;




}
}
else
{
	echo '<script>alert("TRANSACTION UNSUCCESSFUL!!")</script>';
	echo"
<div style='margin-left:400px;margin-top:100px;letter-spacing:4px;font-size:15px;border:solid;width:50%;text-align:center'><br>
<h3>TRANSACTION DETAILS</h3>
<hr style='width:100%'>
<h5 style='letter-spacing:3px'>THIS TRANSACTION IS CANCELED DUE TO INSUFFICIENTS FUNDS !! PLEASE CHECK YOUR BALANCE !!</h5><br><br>
";
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

</body>
</html>