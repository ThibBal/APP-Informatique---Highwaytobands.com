<?php  

//$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'toor');
$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'htb', 'htb');


if (!isset($_SESSION)){
session_start();
}
?>