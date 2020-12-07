<?php 

    require_once("connection.php");
    $query = " select * from readings ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Readings</title>
    <style>
    h3 {text-align: center;}
    </style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Student Roll No </td>
                                <td> Experiment No </td>
                                <td> Experiment Readings </td>
                                <td> Experiment Result </td>
                                <td> Marks/Grades </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $roll = $row['Roll_No'];
                                        $eno = $row['Experiment_No'];
                                        $read = $row['Exp_Readings'];
                                        $res = $row['Exp_Result'];
                                        $marks = $row['Exp_Marks'];
                            ?>
                                    <tr>
                                        <td><?php echo $roll ?></td>
                                        <td><?php echo $eno ?></td>
                                        <td><?php echo $read ?></td>
                                        <td><?php echo $res ?></td>
                                        <td><?php echo $marks ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $roll ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $roll ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>   
                            <h3 style="margin:10px;color:red">
                                Student Experiment Result/Grades
                            </h3>                                                                    
                                   

                        </table>
                        <a  href="http://localhost/CRUD/pdf-teacher/">
                        <button type="button" class="btn btn-warning" >Download as PDF</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>