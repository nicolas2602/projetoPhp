<?php
include 'connect.php';
include 'checkAdmin.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<a href="home.php" class="btn btn-light d-flex justify-content-around">Home</a>

<table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  

<?php
$sq="select * from reg";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td><?php echo $f['name']?></td>
        <td><?php echo $f['username']?></td>
    </tr>

    <?php
}
?>


</table>