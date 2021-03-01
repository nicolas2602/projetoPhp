<?php
include 'connect.php';
include 'CheckLogin.php';

if(isset($_POST['sub'])){
    $nameCity=$_POST['nameCity'];


    $sqlInsertCity="insert into city (nameCity) values ('$nameCity');";
    mysqli_query($con, $sqlInsertCity);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form method="GET" enctype="multipart/form-data">
           <h1>Cidade</h1>

        <form method="POST" enctype="multipart/form-data">
           <h1>Registrar Cidade</h1>

           
            <table>
                <tr>
                    <td>
                        Nome da cidade
                        <input type="text" name="nameCity">
                    </td>
                </tr>
                    
                    <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="home.php">Home</a>
                               
                    </td>
                </tr>
            </table>


            <table border='1'>
    <tr>
        <th>
            Nome da cidade
        </th>

        <th>
            ID
        </th>
    </tr>
            <?php
$sq="select * from city";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['nameCity']?>
        </td>

        <td>
          <a href="edit_city.php?IdCity=<?php echo $f['IdCity']?>&nameCity=<?php echo $f['nameCity']?>">Edit</a>
        </td>
    </tr>
    <?php
}
?>

      </table>
    </body>
</html>