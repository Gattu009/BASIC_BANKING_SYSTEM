<?php



       $co=mysqli_connect("localhost","root","","test");
        $sql=$co->query("SELECT * from bank  ;");
        echo"<center style='margin-top:100px;'><h2 style='style=margin-left:-19px'>CUSTOMERS LIST</h2></center>";
         echo "<table border='3' cellpadding='6' cellspacing='5' style='text-align:center;margin-top:50px;margin-left:450px; width:700px'>
 <tr style='background-color:#593c3c;color:white'>
 <th>ID</th>
 <th>NAME</th>
 <th>EMAIL</th>
 <th>BALANCE</th>
 <th>VIEW</th>

</tr>

 ";

$i=0;     

        while($ro = $sql->fetch_assoc())
{

if($i%2==0)
{
echo "<form action='view.php' method='POST'  >
<tr style='background-color:#6b6a6a'>
  <td>{$ro['id']}</td>
  <input type='hidden' value='{$ro['id']}' name='id'> 
  <td>{$ro['name']}</td>
  <td>{$ro['email']}</td>
  <td>{$ro['balance']}</td>
  <td><input type='submit' name='submit' value='VIEW' style='margin-top:10px;border-radius:8px'></form></td></tr>";
  

}	
else
{
	echo "<form action='view.php' method='POST'  >
<tr style='background-color:#c2bebe'>
  <td>{$ro['id']}</td>
  <input type='hidden' value='{$ro['id']}' name='id'> 
  <td>{$ro['name']}</td>
  <td>{$ro['email']}</td>
  <td>{$ro['balance']}</td>
  <td><input type='submit' name='submit' value='VIEW' style='margin-top:10px;border-radius:8px'></form></td></tr>";
  

}
$i=$i+1;
}
  
  


echo"</table>";














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
        <a class="nav-link" href="index.php#home"><i  style="font-size:20px; position: fixed ;top:16px;right:500px;" class="fa fa-home"><span style="font-size:12px">  HOME</span></i> </a>
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