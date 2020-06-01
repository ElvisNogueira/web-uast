<?php

session_status();

if (isset($_SESSION["login"])){

}else{
    header("Location: ../view/login.php");
}