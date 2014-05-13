<?php  

$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'toor');

if (!isset($_SESSION)){
session_start();
}
?>