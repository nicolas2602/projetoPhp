<html>
<body>

<h1> Edit City</h1>



<?php 

include 'connect.php';
include 'CheckLogin.php';
include 'checkAdmin.php';

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $nameCity=$_POST['name'];

    $sqlUpdateCity="update city set nameCity = '$nameCity' where IdCity={$id}";
    mysqli_query($con, $sqlUpdateCity);
    header('location: reg_city.php');
}

//    echo "IdCity = " . $_GET['IdCity'] . " Name = " . $_GET['nameCity'];
   $id = $_GET['IdCity'];
   $name = $_GET['nameCity'];
   $sqlGetCity="select * from city where IdCity=($id)";
   $queryGetCity= mysqli_query($con, $sqlGetCity);
   $resultCity=mysqli_fetch_assoc($queryGetCity);

?>

<form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        ID 
                        <input readonly="readonly" type="text" name="id" value="<?php echo $resultCity['IdCity']?>">
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
                        <input type="submit" value="submit" name="update">
                               
                    </td>
                </tr>
                
                </tr>
            </table>
</form>

</body>
</html>



