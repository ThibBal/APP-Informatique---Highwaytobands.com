<!DOCTYPE HTML >
<html>
<?php include("header.php");?>  
<link rel="stylesheet" href="css/forum.css"/>
 <body>
<?php
$donnees3 = $req3->fetch();
$donnees4 = $req4->fetch();
$donnees5 = $req5->fetch();
?>
           <div id='d1'>
             <a href="index.php?page=forum">Forum de Highway to Bands</a> /
            <a href="index.php?page=forum_sujet&R=<?php echo $donnees3['id_rubrique']; ?>"><?php echo $donnees3['titre_rub'];?></a> /
            <a href="index.php?page=forum_message&S=<?php echo $donnees4['id_sujet']; ?>"><?php echo $donnees4['titre_sujet'];?></a>
            </div>

           <div class="nouveau"><a href="index.php?page=message&S=<?php echo $_GET['S'];?>">Nouveau message</a></div>       

<?php 
include('modeles/user.php');
while ($donnees = $req8->fetch()) 
           { 
            $data=auteur_message($donnees['id_user']);
            $dateMySQL= $donnees['date_publication'];
                    $date = new DateTime($dateMySQL);  
            ?>

<div class=message>   
    <div class=photoprofil><img src="img/membres/<?php echo($data['photo']); ?>"></br>
        <a href="index.php?page=compte&id=<?php echo ($data['id']); ?>"><?php echo ($data['login']);  ?></a></br>
    <h5><?php  echo $date->format('d/m/Y H:i:s'); ?></h5></div>   
    <div class=messageforum><?php echo ($donnees['text']);  ?></br> 
  </div>   
</div>
<?php } ?>


   <div class="nouveau"><a href="index.php?page=message&S=<?php echo $_GET['S'];?>">Nouveau message</a></div>   


<?php include("footer.php");?>
        </body>
            </html>