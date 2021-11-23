<?php

    session_start();
    require_once "connect.php";

    $connection =  @new mysqli($host,$db_user,$db_password,$db_name);    // polaczenie z baza

    if($connection->connect_errno!=0)
    {
        echo "Error: ".$connection->connect_errno." Opis: ".$connection->connect_error;
    }
    else
    {
        $login     =  $_POST['login'];
        $password  =  $_POST['password'];

        $sql = "SELECT * FROM user WHERE Name = '$login' AND Password ='$password'";
        
        
        if ($query_resoult = @$connection->query($sql))
        
    
        {
            $user_exist = $query_resoult->num_rows;
            if($user_exist>0)
            {
                $row = $query_resoult->fetch_assoc();
                $_SESSION['user'] = $row['Name'];
                $_SESSION['event'] = $row['Ticket'];



                $query_resoult->free_result();
                header('Location: user_profile.php');

            }
            else
            {
                header('Location: login_failed_screen.php');
            }
        }
     



        $connection->close();
    }

?>