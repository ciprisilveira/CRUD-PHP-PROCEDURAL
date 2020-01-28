<?php
    # coneção com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "asdf";
    $db_name = "crud";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    mysqli_set_charset($connect, "UTF-8");
    
    if(mysqli_connect_errno()){
        echo "Erro na conexão: " . mysqli_connect_errno();
    }

?>