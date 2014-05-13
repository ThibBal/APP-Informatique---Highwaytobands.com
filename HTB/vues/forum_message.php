<!-- page forum message --!>
<?php
$donnees3 = $req3->fetch();
$donnees4 = $req4->fetch();
$donnees5 = $req5->fetch();
$dateMySQL2= $donnees4['date_creation'];
$date2 = new DateTime($dateMySQL2);   
?>
           <div class="index_forum">
            <a href="?p=forum_rubrique">Index du forum</a> /
            <a href="?p=forum_sujet&R=<?php echo $donnees3['id_rubrique']; ?>"><?php echo $donnees3['titre_rub'];?></a> /
            <a href="?p=forum_message&S=<?php echo $donnees4['id_sujet']; ?>"><?php echo $donnees4['titre_sujet'];?></a>
            </div>

            <h2 class="forum"><?php echo $donnees4['titre_sujet']; ?></h2>
            <a class="nouveau" href="?p=message&M=<?php echo $donnees4['id_sujet']; ?>">Nouveau message</a>        

            <table>
            <!-- affichage du sujet et de sa description --!>
                <tr>
                    <th class="titre_sujet1"><?php echo $donnees4['titre_sujet']?></br><?php echo $donnees4['description']?></th>
                    
                    <th class="titre_sujet1"><span class="pseudo" href="?p=profil">
                		<?php  echo  $donnees5['pseudo']; ?></span></br><?php echo $date2->format('d/m/Y H:i:s'); ?></th>

                </tr>
                <?php
                    while ($donnees = $req->fetch()) 
                    {
                    $req2 = afficherPseudo($donnees['id_message']);
                    $donnees3 = $req2->fetch(); 
                	$req6=lienprofil ($donnees3['pseudo']); 
                    $dn=$req6->fetch();
                    $dateMySQL= $donnees['date_publication'];
 					$date = new DateTime($dateMySQL);   
                       
				
//affichage des reponses au sujet donc message poster par les utilisateur 
                     echo '<tr>';
                     echo '<td class="message">Re : </pre>'.$donnees4['titre_sujet'].'<br/>'.$donnees['text'].'</td>';
                				
                     echo '<td class="deniermessage"><a class="pseudo" href="?p=profil&id='.$dn['id_user'].'">'. $donnees3['pseudo'].'</a></br>'; 
                     echo $date->format('d/m/Y H:i:s').'</td>';
                     echo '</tr>';
                        
                    }
                ?>
            </table><br/>

            <a class="nouveau" href="?p=message&M=<?php echo $donnees3['id_sujet']; ?>">Nouveau message</a>
  