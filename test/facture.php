<?php
include_once('inc/header.php');
?>

<main class="m-5">
<h1>Page Facture</h1>

<table border="2"  style="border-collapse : collapse; width:70%; " class="table table-bordered text-center">
                <tr>
                    <th>NUMERO FACTURE</th>
                    <th>PSEUDO</th>
                    <th>CIVILITE</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>TELEPHONE</th>
                    <th>ADRESSE</th>
                    <th>EMAIL</th>
                    <th>STATUT</th>
                    <th>DATE</th>
                    <th>TOTAL</th>

                </tr>
                <?php
                echo"<tr>";
                 echo"<td>" .$voir_utilisateur['id_facture']."</td>";
                    echo"<td>" .$voir_utilisateur['pseudo_membre']."</td>";
                    echo "<td>";
                    if($voir_utilisateur['civilite']=='m'){
                        echo "Homme<br>";
                        }elseif($voir_utilisateur['civilite']=='f'){
                            echo "Femme<br>";
                        }
                        echo "</td>";
                    echo"<td>" .$voir_utilisateur['nom']."</td>";
                    echo"<td>" .$voir_utilisateur['prenom']."</td>";
                    echo"<td>" .$voir_utilisateur['telephone']."</td>";
                    echo"<td>" .$voir_utilisateur['adresse']."</td>";
                    echo"<td>" .$voir_utilisateur['email']."</td>";
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
                    echo "</td>";
                    echo"<td>" .$voir_utilisateur['date_facture']."</td>";
                    echo"<td>" .$voir_utilisateur['total_facture']."</td>";
                echo "</tr>";
            echo "</table>"
            ?>
</main>

<?php include_once('inc/footer.php'); ?>