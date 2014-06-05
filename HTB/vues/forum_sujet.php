<!DOCTYPE HTML >
<html>
<?php include("header.php");?>  
<link rel="stylesheet" href="css/forum.css"/>
<body>
<?php $donnees5 = $req5->fetch();?>
              
<div id='d1'>
        <a href="index.php?page=forum">Forum de Highway to Bands</a> /
        <a href="index.php?page=forum_sujet&R=<?php echo $donnees5['id_rubrique']; ?>"><?php echo $donnees5['titre_rub'];?></a> /
      </div>

            <div class="nouveau"><a class="publier" href="index.php?page=sujet&R=<?php echo $_GET['R'];?>">Publier un sujet</a></div>

        <table>
            <tr>
                <th class="ce1">Sujet</th>
                <th class="ce2">Nombre de messages</th>
                <th class="ce3">Dernier message</br>écrit par :</th>
            </tr>

            <?php   
            include('modeles/user.php');
            while ($donnees = $req8->fetch()) {
                $req2 = nombreMessage($donnees['titre_sujet']);
                $donnees2 = $req2 ->fetch();

                $dernier = derniermessage($donnees['id_sujet']);

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
                $data=auteur_message($donnees['id_user']);
                $data2=auteur_message($dernier['id_user']); 
                ?>
           
             <tr>
                <td class="titre"><a href="index.php?page=forum_message&S=<?php echo $donnees['id_sujet'];?>"><?php echo $donnees['titre_sujet'];?></a>
                </br> par : <a href="index.php?page=compte&id=<?php echo ($data['id']); ?>"><?php echo $data['login'];?></a></br>  
                <?php echo $date->format('d/m/Y');?></td>
                <?php echo '<td class="nbrsujet">'. $donnees2['nb_message'].'</td>'; ?>

                <td class="deniermessage"><a href="index.php?page=compte&id=<?php echo ($data2['id']); ?>"><?php echo $data2['login'];?></a></br>
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
        <?php include("footer.php");?>
    </body>
        </html>