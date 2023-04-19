<?php 

    require_once("connection2.php");
    $query = " select * from contact ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>View queries</title>
</head>

</div>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <td> Name </td>
                                <td> Email </td>
                                <td> Query </td>
                               
                            </tr>
</thead>
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $name = $row['name'];
                                        $mail = $row['email'];
                                        $query = $row['query'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $name?></td>
                                        <td><?php echo $mail ?></td>
                                        <td><?php echo $query ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>