<?php

    include 'connect.php';
    include 'CheckLogin.php';
    
       $s="select * from reg where id='$_SESSION[id]'";
       $qu= mysqli_query($con, $s);
       $f=mysqli_fetch_assoc($qu);

?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <center><body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="edit.php">Editar <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="delete.php">Deletar</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
      <a class="nav-item nav-link" href="viewall.php">Visualizar</a>
      <a class="nav-item nav-link" href="reg_city.php">Registrar Cidade</a>
    </div>
  </div>
</nav>

<table>
    <tr>
        <td>
            Name
        </td>
<br>
<td>
            
<?php echo $f['name'];?>
            </td>
    </tr>
    <tr>
    <td> Username</td>
    
    <td>
            
<?php
echo $f['username'];?>
        </td></tr>
<tr><td> Password</td>
    <td>
<?php
echo $f['password']."<br>";?>
    </td></tr>
  <tr><td> City </td>   <td>           
 <?php
 echo $f['city']."<br>";?></td></tr>
  <tr>
      <td>Gender</td>
      <td><?php
echo $f['gender']."<br>";?></td>
  </tr>
  <tr><td> Image</td><td>

 <img src="<?php
echo $f['image'];?>" width="100px" height="100px">
</td>

</tr>
</table>

<a href="edit.php">Edit</a>
<a href="delete.php">Delete</a>
<a href="logout.php">Logout</a>
<a href="viewall.php">View All Users</a>
<a href="reg_city.php">Registrar Cidade</a> 

    </body></center>
</html>