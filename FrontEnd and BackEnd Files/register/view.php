<?php 

    require_once("connection.php");
    $query = " select * from records ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
    <style>
    h2 {text-align: center;}
    </style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> User ID </td>
                                <td> User Name </td>
                                <td> User Email </td>
                                <td> User Roll No </td>
                                <td> User Course </td>
                                <td> User Year </td>
                                <td> User Age </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['User_ID'];
                                        $UserName = $row['User_Name'];
                                        $UserEmail = $row['User_Email'];
                                        $UserRoll = $row['User_Roll'];
                                        $UserCourse = $row['User_Course'];
                                        $UserYear = $row['User_Year'];
                                        $UserAge = $row['User_Age'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserRoll ?></td>
                                        <td><?php echo $UserCourse ?></td>
                                        <td><?php echo $UserYear ?></td>
                                        <td><?php echo $UserAge ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>    
                            <h2 style="margin:5px;color:red">
                                Student Records
                            </h2>                                                                
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>