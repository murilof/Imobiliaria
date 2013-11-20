<?php

    $host="localhost";  
    $username="root";  
    $password="root"; 
    $db_name="imobiliaria"; 
    $tbl_name="login"; 

    mysql_connect("$host", "$username", "$password")or die("aaaaConexao nao pode ser estabelecida com o Banco de Dados."); 
    mysql_select_db("$db_name")or die("bbbbbConexao nao pode ser estabelecida com o Banco de Dados.");


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
        header("location: adminmenu.php");
    }else {
        echo "Usuário ou senha incorreto";
    }

?>