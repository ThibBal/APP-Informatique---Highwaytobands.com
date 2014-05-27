<!DOCTYPE HTML >

<html>
  <head>
    <title>FORUM G1b uzuuzu</title>
    <meta charset="utf-8"/>
    <LINK rel="stylesheet" href="css/forum.css">
<?php
$donnees3 = $req3->fetch();
$donnees4 = $req4->fetch();
$donnees5 = $req5->fetch();
$dateMySQL2= $donnees4['date_creation'];
$date2 = new DateTime($dateMySQL2);   
?>
           <div id='d1'>
            <a href="index.php?page=forum_rubrique">Index du forum</a> /
            <a href="index.php?page=forum_sujet&R=<?php echo $donnees3['id_rubrique']; ?>"><?php echo $donnees3['titre_rub'];?></a> /
            <a href="index.php?page=forum_message&S=<?php echo $donnees4['id_sujet']; ?>"><?php echo $donnees4['titre_sujet'];?></a>
            </div>

            <h2 class="t1"><?php echo $donnees4['titre_sujet']; ?></h2>
            <a class="nouveau" href="index.php?page=message&M=<?php echo $donnees4['id_sujet']; ?>">Nouveau message</a>        

            <table>
            
                <tr>
                    <th class="a1"><?php echo $donnees4['titre_sujet']?></br><?php echo $donnees4['description']?></th>
                    
                    <th class="a1"><span class="pseudo" href="index.php?page=profil">
                		<?php  echo  $donnees5['login']; ?></span></br><?php echo $date2->format('d/m/Y H:i:s'); ?></th>

                </tr>
                <?php
                
                    while ($donnees = $req7->fetch()) 
                    {
                    $req2 = afficherPseudo($donnees['id_message']);
                    $donnees3 = $req2->fetch(); 
                	$req6=lienprofil ($donnees3['login']); 
                    $dn=$req6->fetch();
                    $dateMySQL= $donnees['date_publication'];
 					$date = new DateTime($dateMySQL);   
                    }
                       
				
//affichage des reponses au sujet donc message poster par les utilisateur 
                     echo '<tr>';
                     echo '<td class="a2">Re : </pre>'.$donnees4['titre_sujet'].'<br/>'.$donnees['text'].'</td>';
                				
                     echo '<td class="a2"><a class="login" href="?p=profil&id='.$dn['id_user'].'">'. $donnees3['login'].'</a></br>'; 
                     echo $date->format('d/m/Y H:i:s').'</td>';
                     echo '</tr>';
                    
                    
                ?>
            </table><br/>

            <a class="a3" href="index.php?page=message&M=<?php echo $donnees3['id_sujet']; ?>">Nouveau message</a>
  