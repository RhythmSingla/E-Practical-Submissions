<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserRoll = $_POST['roll'];
        $UserCourse = $_POST['course'];
        $UserYear = $_POST['year'];
        $UserAge = $_POST['age'];

        $query = " update records set User_Name = '".$UserName."', User_Email='".$UserEmail."', User_Roll='".$UserRoll."' , User_Course='".$UserCourse."',  User_Year='".$UserYear."', User_Age='".$UserAge."' where User_ID='".$UserID."'";
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