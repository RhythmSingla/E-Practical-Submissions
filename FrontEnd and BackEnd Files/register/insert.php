<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['roll'])|| empty($_POST['course'])|| empty($_POST['year']) || empty($_POST['age']) || empty($_POST['pwd']))
        {
            echo ' Please complete the Required fields ';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserRoll = $_POST['roll'];
            $UserCourse = $_POST['course'];
            $UserYear = $_POST['year'];
            $UserAge = $_POST['age'];
            $UserPwd = $_POST['pwd'];

            $query = " insert into records (User_Name, User_Email,User_Roll, User_Course, User_Year, User_Age, User_Pwd) values('$UserName','$UserEmail','$UserRoll','$UserCourse','$UserYear','$UserAge','$UserPwd')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view readonly.php");
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