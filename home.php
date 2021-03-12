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
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Home</title>
    </head>
    <center>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-md-center">
   <center>   
    <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="edit.php">Editar <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="delete.php" onclick="confirmExclusao()">Deletar</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
      <a class="nav-item nav-link" href="viewall.php">Visualizar</a>
      <a class="nav-item nav-link" href="reg_city.php">Registrar Cidade</a>
    </div>
  </div>
  </center>
</nav>

<br><br>
<main role="main" class="container-fluid col-sm-6">
<div class="jumbotron bg-white rounded">
   
<div class="row justify-content-center">
      <div class="form-group col-md-3">
      <img src="<?php echo $f['image'];?>" width="110px" height="110px">
      </div>
</div>

    <div class="row justify-content-center">
      <div class="form-group col-md-3">
        <b><label class="sr-only">Name:</label></b>
         <label class="form-control mb-2 mr-sm-2"><?php echo $f['name'];?></label>
      </div>

    
      <div class="form-group col-md-3">
       <b><label class="sr-only">Username:</label></b>
       <label class="form-control mb-2 mr-sm-2"><?php echo $f['username'];?></label>
      </div>
    </div>

     <div class="row justify-content-center">
      <div class="form-group col-md-3">
        <b><label class="sr-only">Password:</label></b>
         <label class="form-control mb-2 mr-sm-2"><?php echo $f['password']."<br>";?></label>
      </div>  

       <div class="form-group col-md-3">
        <b><label class="sr-only">City:</label></b>
         <label class="form-control mb-2 mr-sm-2"> <?php echo $f['city']."<br>";?></label>
      </div>         
     </div>
    
     <div class="row justify-content-center">
      <div class="form-group col-md-3">
        <b><label class="sr-only">Gender:</label></b>
         <label class="form-control mb-2 mr-sm-2"><?php echo $f['gender']."<br>";?></label>
      </div>  

</main>
</div>

<BR/>

<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="edit.php" class="text-dark">Editar</a>
          </li>
   
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="delete.php" class="text-dark" onclick="confirmExclusao()">Deletar</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="logout.php" class="text-dark">Retornar</a>
          </li>
   
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="viewall.php" class="text-dark">Visualizar</a>
          </li>
       
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="reg_city.php" class="text-dark">Registrar Cidade</a>
          </li>
       
        </ul>
      </div>
     
    </div>
  
  </div>
 

  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright X-MAX
  </div>
  
</footer>
 
<script>
  function confirmExclusao() {
    if (confirm("Tem certeza que deseja deletar?")) {
      location.href="deletar_categoria.jsp?acao=deletar";
    }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </center>
</html>