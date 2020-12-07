<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $roll = $_GET['ID'];
        $eno = $_POST['eno'];
        $read = $_POST['read'];
        $res = $_POST['result'];
        $marks = $_POST['marks'];

        $query = " update readings set Experiment_No = '".$eno."', Exp_Readings='".$read."' ,Exp_Result='".$res."' ,Exp_Marks='".$marks."' where Roll_No='".$roll."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>