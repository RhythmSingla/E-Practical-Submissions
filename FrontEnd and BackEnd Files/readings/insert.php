<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['roll']) || empty($_POST['eno']) || empty($_POST['read']) || empty($_POST['result']))
        {
            echo ' PLEASE ENTER THE REQUIRED FIELDS ';
        }
        else
        {
            $roll = $_POST['roll'];
            $eno = $_POST['eno'];
            $read = $_POST['read'];
            $res = $_POST['result'];

            $query = " insert into readings (Roll_No, Experiment_No,Exp_Readings, Exp_Result) values('$roll','$eno','$read','$res')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view1.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }