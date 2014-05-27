<!DOCTYPE HTML >

<html>
  <head>
    <title>FORUM G1b uzuuzu</title>
    <meta charset="utf-8"/>
    <LINK rel="stylesheet" href="css/forum.css">

                    <div id='d1'>
                    <a href="index.php?page=forum_rubrique">Index du forum</a> /
                    <a href="index.php?page=forum_sujet&R=<?php $donnees5 = $req5->fetch(); echo $donnees5['id_rubrique'];?>"><?php echo $donnees5['titre_rub'];?></a>
                    </div>
             
                 
                    <h2 class="t1"> <?php echo $donnees5['titre_rub']; ?></h2> 
                <a class="publier" href="index.php?page=sujet&SU=<?php echo $donnees5['id_rubrique'];?>">Publier un sujet</a>

            <table>
                <tr>
                    <th class="ce1">Sujet</th>
                    <th class="ce2">Nombre de messages</th>
                    <th class="ce3">Dernier message</br>écrit par :</th>
                </tr>

                <?php   
                while ($donnees = $req8->fetch()) {
                    $req2 = nombreMessage($donnees['titre_sujet']);
                    $donnees2 = $req2 ->fetch();
                    $req3 = dernierMessageUser2($donnees['id_sujet']);
                    $donnees3=$req3->fetch();
                    $req4 =  dernierMessageDate2($donnees['id_sujet']);
                    $donnees4=$req4->fetch();
                    $req6 = pseudoSujet($donnees['id_sujet']);
                    $donnees6=$req6->fetch();
                    $req5=lienprofil ($donnees3['login'])  ; 
                    $dn=$req5->fetch();
                    $dateMySQL= $donnees['date_creation'];
 					$date = new DateTime($dateMySQL);
 					$dateMySQL2= $donnees4['date_publication'];
 					$date2 = new DateTime($dateMySQL2);   
                    ?>
               
                 <tr>
                    <td class="titre"><a href="index.php?page=forum_message&S=<?php echo $donnees['id_sujet'];?>"><?php echo $donnees['titre_sujet'];?></a>
                    </br> par : <a class="pseudo" href="index.php?page=profil&id=<?php echo $donnees6['id_user'] ?>"><?php echo $donnees6['login'];?></a>  <?php echo $date->format('d/m/Y H:i:s');?></td>
                    <?php echo '<td class="nbrsujet">'. $donnees2['nb_message'].'</td>'; ?>
                    <td class="deniermessage"><a class="pseudo" href="index.php?page=profil&id=<?php echo $dn['id_user'] ?>"><?php echo $donnees3['login'];?></a></br>
                    <?php 
                    if (empty($donnees4['date_publication']))
                    {
                    }
                    else
                    {
                    echo $date2->format('d/m/Y H:i:s'); 
                    }
                    ?></td>
                    
                    </tr>
              <?php 
              
                }
                
                    ?>
            </table> </br>
			<a class="publier" href="index.php?page=sujet&SU=<?php echo $donnees5['id_rubrique'];?>">Publier un sujet</a>
              

