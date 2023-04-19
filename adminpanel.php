<?php 

    require_once("connection.php");
    $query = " select * from user_orders ";
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
    <title>View Records</title>
</head>
<div class="button">
    <form action="contactadmin.php" method="POST">
        <input type="submit" value="feedbacks" class="btn btn-primary" style="float: right;">
    </form>
</div>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <td> User ID </td>
                                <td> Product </td>
                                <td> price </td>
                               
                            </tr>
</thead>
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['Order_Id'];
                                        $ItemName = $row['Item_Name'];
                                        $Price = $row['Price'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $ItemName ?></td>
                                        <td><?php echo $Price ?></td>
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