<?php

function getConnection(){
    $connection = new mysqli("127.0.0.1", "root", "", "gym_bd");

    if(mysqli_connect_errno()){
        echo "Conexão falhou: " .mysqli_connect_error();
        exit(0);
    }else{
        return $connection;
    }
}
