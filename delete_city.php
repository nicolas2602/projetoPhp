<html>
<body>

<h1> Edit City</h1>



<?php 

include 'connect.php';
include 'CheckLogin.php';

if(isset($_POST['del'])){
    $id=$_POST['id'];
    $nameCity=$_POST['name'];

    $sqlDeleteCity="delete from city where IdCity={$id}";
    mysqli_query($con, $sqlDeleteCity);
    header('location: reg_city.php');
}

if(isset($_POST['notdel'])){
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
                        <!---ID ---> 
                        <input type="hidden" name="id" value="<?php echo $resultCity['IdCity']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                       Deseja exluir a cidade <?php echo $resultCity['nameCity'] ?>
                        <input type="text" name="name" value="<?php echo $resultCity['nameCity']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="Delete" name="del">
                               
                    </td>

                    <td>
                        <input type="submit" value="Not Delete" name="notdel">
                               
                    </td>
                </tr>
                
                </tr>
            </table>
</form>

</body>
</html>



