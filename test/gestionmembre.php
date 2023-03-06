<?php

include_once('inc/header.php');



        if(isset($_SESSION['id_membre'])){
            $afficher_membres = $pdo->prepare("SELECT * FROM membre");

            //$afficher_membres->execute(array($_SESSION['id_membre']));
        }else{
            $afficher_membres = $pdo->prepare("SELECT id_membre, pseudo, statut  FROM membre");
 

            $afficher_membres->execute();
            
                    
                    
        }


// // foreach($afficher_membres as $am){
// //     echo $am['id_membre'], " ". $am['prenom'] ."<br>";
// // }


?>

<section>
<h1>Page Gestion Membre</h1>

<?php        

    echo '<table class="tableAdmin">';
    echo "<tr>";
    for($i = 0; $i < $afficher_membres->columnCount(); $i++) {
        $infos_colonne = $afficher_membres->getColumnMeta($i);
        echo '<th>' . ucfirst($infos_colonne['name']) . '</th>';
        
        
        

    }
    
    echo'<th>Voir</th>';
    echo'<th>Modif</th>';
    
    
    while ($ligne = $afficher_membres->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
        //  foreach($ligne as $indice => $valeur)
            foreach($ligne as $valeur)
            {
                echo '<td>' . $valeur . '</td>';
                    
            }
            
            
        
            ?>
            
            <td><a href="voir-profil.php?id=<?= $ligne['id_membre']  ?>" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
            <td><a href="modifier-profil.php?id=<?= $ligne['id_membre'] ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a></td>
            
            


    <?php
        echo '</tr>';
    }
    echo '</table>';
    ?>
    
    <a href="inscription.php" class="btn btn-danger"><i class="fas fa-trash-alt">Ajout Membre</i></a>
</section>



<?php
    include_once("inc/footer.php");
?>