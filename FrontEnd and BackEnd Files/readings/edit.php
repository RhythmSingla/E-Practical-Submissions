<?php 

    require_once("connection.php");
    $roll = $_GET['GetID'];
    $query = " select * from readings where Roll_No='".$roll."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $roll = $row['Roll_No'];
        $eno = $row['Experiment_No'];
        $read = $row['Exp_Readings'];
        $res = $row['Exp_Result'];
        $marks = $row['Exp_Marks'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $roll ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Student Roll No " name="roll" value="<?php echo $roll ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Experiment Number " name="eno" value="<?php echo $eno ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Experiment Readings " name="read" value="<?php echo $read ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Experiment Result " name="result" value="<?php echo $res ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Marks/Grades " name="marks" value="<?php echo $marks ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>