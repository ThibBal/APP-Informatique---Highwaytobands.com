<?php
  function login(){
  	session_start();
$_SESSION["login"]=$_POST["login"];
$_SESSION["password"]=$_POST["password"];
  
try {$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');}
catch (Exception $e) {die("Problème d'accès");}
  
if(($_SESSION["login"] == "") or($_SESSION['password'] == "")) {
    echo "Veuillez remplir les champs";
}
else {
    $st = $bdd->query("SELECT COUNT(*) FROM membre WHERE login='".$_SESSION['login']."' AND password='".$_SESSION["password"]."'")->fetch();
    if ($st['COUNT(*)'] == 1){
$_SESSION['login']=$login;
$_SESSION['id']=$id;
    }
    	
         
}

include ('accueil.php');
?>
 }


<?php
 
  
 function login() {
 
          if(!empty($_POST['login']) && !empty($_POST['password'])) {
 
                // On éxécute une requête pour détecter si le login entré existe dans la base
                $query = mysql_query("SELECT * FROM users WHERE login = '".$_POST['login']."'");
 
                // Si on a un résultat => il existe
                if(mysql_num_rows($query) == 1) {
                    $user = mysql_fetch_object($query);
 
                    // On vérifie la concordance des mots de passe (en md5)
                    if(md5($_POST['password']) == $user->password) {
 
                        // Si on arrive jusque ici c'est que le couple login / mot de passe est résolu
                        // On lance donc la session
 
                        session_start();
                        $_SESSION['id'] = $user->id;
                        $_SESSION['login'] = $user->login;
 
                    } else {
                        echo 'Mauvais mot de passe pour cet utilisateur.';
                    }
 
                } else {
                    echo 'Ce login n\'existe pas dans notre base.';
                }
            } else {
                echo 'Vous devez remplir tous les champs !';
            }
        }
    }
 


function logout() {
    session_start();
    unset($_SESSION);
    session_destroy();
    header ('Location: index.php');
}

