<?php 

    require_once("connection.php");
    $query = " select * from records_teach ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Teacher Records</title>
    <style>
    h4 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
    </style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                                   

                        </table>
                        
                        <h4 style="color:red">
                            Registered Successfully.
                        </h4>   
                                    
                        <a href="http://localhost/CRUD/login_teach/"><button type="button" class="center btn btn-success">Proceed to LOGIN</button></a>
            
                    </div>
                    
                </div>
            </div>
        </div>
    
</body>
</html>