<html>
<body>

<h1> Edit City</h1>



<?php 

include 'connect.php';
include 'CheckLogin.php';

   echo "IdCity = " . $_GET['IdCity'] . " Name = " . $_GET['nameCity'];

   $sqlGetCity="select * from city where IdCity=1";
   $queryGetCity= mysqli_query($con, $sqlGetCity);
   $resultCity=mysqli_fetch_assoc($queryGetCity);

?>

<form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                       <!-- ID -->
                        <input type="hidden" name="text" value="<?php echo $resultCity['IdCity']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Cidade
                        <input type="text" name="name" value="<?php echo $resultCity['nameCity']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
                
                </tr>
            </table>
</form>

</body>
</html>



