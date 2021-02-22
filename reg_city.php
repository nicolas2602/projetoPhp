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
        <form method="POST" enctype="multipart/form-data">
           <h1>Cidade</h1>
           
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
                        <a href="login.php">Login</a>
                               
                    </td>
                </tr>
            </table>
    </body>
</html>