<?php
include_once('inc/header.php');



?>

<section>
<h1>Page Espace Admin</h1>


        <table class="tableAdmin">
                <tr>
                    <th>ID</th>
                    <th>PSEUDO</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>TELEPHONE</th>
                    <th>EMAIL</th>
                    <th>CIVILITE</th>
                    <th>STATUT</th>

                </tr>
                <?php
                echo"<tr>";
                 echo"<td>" .$voir_utilisateur['id_membre']."</td>";
                    echo"<td>" .$voir_utilisateur['pseudo']."</td>";
                    echo"<td>" .$voir_utilisateur['nom']."</td>";
                    echo"<td>" .$voir_utilisateur['prenom']."</td>";
                    echo"<td>" .$voir_utilisateur['telephone']."</td>";
                    echo"<td>" .$voir_utilisateur['email']."</td>";
                    echo "<td>";
                    if($voir_utilisateur['civilite']=='m'){
                        echo "Homme<br>";
                        }elseif($voir_utilisateur['civilite']=='f'){
                            echo "Femme<br>";
                        }
                        echo "</td>";
                    echo "<td>";
                    if($voir_utilisateur['statut']==1)
                    {
                    echo "Adimin<br>";
                    }elseif($voir_utilisateur['statut']==2)
                    {
                        echo "Utilisateur<br>";
                    } else{
                        echo " Utilisateur<br>";  
                    }
                    echo "</td>";?>

                <?php
                echo "</tr>";
            echo "</table>"
            ?>
</section>

<?php include_once('inc/footer.php');?>