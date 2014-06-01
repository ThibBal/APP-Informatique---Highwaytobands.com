<!DOCTYPE HTML >
<html>
<?php include("header.php");?>  
<link rel="stylesheet" href="css/forum.css"/>
 <body>
     <div id='d1'>
            <a href="index.php?page=forum">Forum de Highway to Bands</a>
          </div>
          
            <table>
                <tr>
                    <th class="ce1">Rubrique</th>
                    <th class="ce2">Nombre de sujet</th>
                    <th class="ce3">Dernier message</br>écrit par :</th>
                </tr>
                <?php 
                while ($donnees = $req1 -> fetch()) 
                {
                $req2 = nombreSujet($donnees['titre_rub']);
                $donnees2 = $req2 ->fetch();
                $req3 = dernierMessageUser1($donnees['id_rubrique']);
                $donnees3 = $req3 ->fetch();
                $req4 = dernierMessageDate1($donnees['id_rubrique']);
            	$donnees4 = $req4 ->fetch();
                $req5=lienprofil ($donnees3['login'])  ; 
                $dn=$req5->fetch(); 
                $dateMySQL= $donnees4['date_publication'];
 				$date = new DateTime($dateMySQL);
                ?>
                
           
                    <tr> 
                        <td><a href="index.php?page=forum_sujet&R=<?php echo $donnees['id_rubrique'];?>"><?php echo $donnees['titre_rub']; ?></a>
                           </br><?php echo $donnees['description'];?></td>
                           <?php 
                         	 echo '<td>'.$donnees2['nb_sujet'].'</td>'; 
                           echo '<td>'.$donnees3['login'].'</td>';                         	 
                          ?>
                    </tr>               
            

             <?php   } ?>
            </table>
<?php include("footer.php");?>  
</body>
</html>
       
                