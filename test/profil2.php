<?php
ob_start();
include_once('inc/header.php');
    


$utilisateur_id =(int) $_SESSION['id'];


if(empty($utilisateur_id)){
    header('location: gestionmembre.php');
}
$req= $pdo->prepare("SELECT * FROM membre where id_membre=?");
$req->execute(array($utilisateur_id));

$voir_utilisateur = $req->fetch();

if(!isset($voir_utilisateur['id_membre'])){
    header('location: gestionmembre.php');

}
/*else{

    echo"<ul>";
echo "<li>";
echo "Bonjour ". $voir_utilisateur['pseudo']."<br>";
echo "</li><li>";
    echo $voir_utilisateur['id_membre']."<br>";

echo "</li><li>";
echo $voir_utilisateur['nom']."<br>";
echo "</li><li>";
echo $voir_utilisateur['prenom']."<br>";
echo "</li><li>";
echo $voir_utilisateur['telephone']."<br>";
echo "</li><li>";
echo $voir_utilisateur['email']."<br>";
echo "</li><li>";
if($voir_utilisateur['civilite']=='m'){
echo "Homme<br>";
}elseif($voir_utilisateur['civilite']=='f'){
    echo "Femme<br>";
}
echo "</li><li>";
if($voir_utilisateur['statut']==1)
{
echo "Adimin<br>";
}elseif($voir_utilisateur['statut']==2)
{
    echo "Utilisateur<br>";
} else{
    echo "Utilisateur<br>";  
}
echo "</li>";
echo"<ul>";

}
// else{echo 'erreur';}*/
ob_end_flush();

?>





<section>
        <h1>Page Profil</h1>
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
                    <th>VOIR PROFIL</th>



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
                    <td><a href="voir-profil.php?id=<?= $voir_utilisateur['id_membre']  ?>" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                    

                <?php
                echo "</tr>";
            echo "</table>"
            ?>
        </section>


<?php
    include_once("inc/footer.php");
?>