<?php

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];


    if(isset($_POST['btntest']))



    {
        $host="localhost";
        $user="root";
        $password="";
        $db="test";



        $conn=mysqli_connect($host,$user,$password,$db);



        $insert= "insert into registration values('$email','$password')";
        mysqli_query( $conn, $insert );
        if ($conn) {
            echo ("<h1 style='color:green;'>Your Registration is Done</h1>");
        }

        else{
            echo ("<h1 style='color:red;'>Your Registration is Failed</h1>");


        }





    



    }


?>