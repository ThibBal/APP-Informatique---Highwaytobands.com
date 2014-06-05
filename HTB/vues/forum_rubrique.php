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
                    <th class="ce3">Dernier message écrit par :</th>
                </tr>
                <?php 
                include('modeles/user.php');
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
                
           
                    <tr class="c1" onmouseover="javascript:this.className='c1h';" onmouseout="javascript:this.className='c1';">
                        <td><div class="a1"><a href="index.php?page=forum_sujet&R=<?php echo $donnees['id_rubrique'];?>">
                        <?php echo $donnees['titre_rub']; ?></a></div>
                           </br><div class="a2"><?php echo $donnees['description'];?></div></td>
                           <div class="centre"><?php 
                         	 echo '<td class="align">'.$donnees2['nb_sujet'].'</td>'; 
                           echo '<td class="align"><a href="index.php?page=compte&id='.$donnees3['id'].'">'.$donnees3['login'].'</a></td>';                         	 
                          ?></div>
                    </tr>               
            

             <?php   } ?>
            </table>
<?php include("footer.php");?>  
</body>
</html>
       
                