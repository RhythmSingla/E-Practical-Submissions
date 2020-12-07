<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age'])|| empty($_POST['course']) || empty($_POST['pwd']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['age'];
            $UserCourse= $_POST['course'];
            $UserPwd= $_POST['pwd'];

            $query = " insert into records_teach (User_Name, User_Email,User_Age,User_Course, User_Pwd) values('$UserName','$UserEmail','$UserAge','$UserCourse','$UserPwd')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
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