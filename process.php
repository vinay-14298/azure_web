<?php

    $username=$_POST['user'];
    $password=$_POST['pass'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysql_real_escape_string($username);
    $password=mysql_real_escape_string($password);
    

    mysql_connect("vinaybabu-01.mysql.database.azure.com","vinaybabu@vinaybabu-01","");
    mysql_select_db("login");


    $result=mysql_query("select * from users where username='$username' and password='$password'")
              or die("Failed to query database",mysql_error());

    $row=mysql_fetch_error($result);

    if ($row['username']==$username && $row['password'] ==$password) {
        echo "Login success!!!!",$row['username'];
    } else {
        echo "Failed to login";
    }
    


?>