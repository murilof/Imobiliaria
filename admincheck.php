<?php

    $host="localhost";  
    $username="root";  
    $password="root"; 
    $db_name="BD"; 
    $tbl_name="login"; 

    mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysql_select_db("$db_name")or die("cannot select DB");


    $myusername=$_POST['login']; 
    $mypassword=$_POST['senha']; 


    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);
    $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
    $result=mysql_query($sql);

    $count=mysql_num_rows($result);

    if($count==1){
        session_register("myusername");
        session_register("mypassword"); 
        header("location: success.php");
    }else {
        echo "Usuário ou senha incorreto";
    }

?>