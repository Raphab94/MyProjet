<?php
ob_start();
    include_once("inc/init.php");
    
    
    
$utilisateur_id =(int) trim($_GET['id']);


if(empty($utilisateur_id)){
    header('location: gestionmembre.php');
}
$req= $pdo->prepare("SELECT * FROM membre where id_membre=?");
$req->execute(array($utilisateur_id));

$voir_utilisateur = $req->fetch();

// if(!isset($voir_utilisateur['id_membre'])){
//     header('location: gestionmembre.php');

// }else{

//     echo"<ul>";
// echo "<li>";
// echo "Bonjour ". $voir_utilisateur['pseudo']."<br>";
// echo "</li><li>";
//     echo $voir_utilisateur['id_membre']."<br>";

// echo "</li><li>";
// echo $voir_utilisateur['nom']."<br>";
// echo "</li><li>";
// echo $voir_utilisateur['prenom']."<br>";
// echo "</li><li>";
// echo $voir_utilisateur['telephone']."<br>";
// echo "</li><li>";
// echo $voir_utilisateur['email']."<br>";
// echo "</li><li>";
// if($voir_utilisateur['civilite']=='m'){
// echo "Homme<br>";
// }elseif($voir_utilisateur['civilite']=='f'){
//     echo "Femme<br>";
// }
// echo "</li><li>";
// if($voir_utilisateur['statut']==1)
// {
// echo "Adimin<br>";
// }elseif($voir_utilisateur['statut']==2)
// {
//     echo "Utilisateur<br>";
// } else{
//     echo "Utilisateur<br>";  
// }
// echo "</li>";
// echo"<ul>";

// }
// else{echo 'erreur';}
$message="";
if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])){

    $erreur=FALSE;

    $pseudo=$_POST['pseudo'];
    $mdp=$_POST['password'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $phone=$_POST['telephone'];

//     if(empty($pseudo) || iconv_strlen($pseudo)>=20 ){
//         $erreur=TRUE;
//          $message.="pas de pseudo rentré<br>";
//         }
//     if(iconv_strlen($mdp) < 8 || iconv_strlen($mdp)>16 )
//     {
//         $erreur=TRUE;
//      $message.="mot de pas non valide<br>";}
//     if(!is_numeric($phone)){ 
//         $erreur=TRUE;
//         $message.="pas de caractere numerique<br>";
//     }
//     if(filter_var($email , FILTER_VALIDATE_EMAIL)==FALSE)
//     {
//         $erreur=TRUE;
//         $message.="format non valide";
//     }
//     if($erreur==FALSE){

//         $mdp=password_hash($mdp, PASSWORD_DEFAULT);
// }
        $modification = $pdo->query("UPDATE membre SET  pseudo = '$pseudo', mdp = '$mdp', nom = '$nom', prenom = '$prenom', telephone = '$phone', email = '$email' WHERE id_membre = '$utilisateur_id'");

    // $modification->bindParam(':id_membre', $utilisateur_id, PDO::PARAM_STR);
    // $modification->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    // $modification->bindParam(':password', $mdp, PDO::PARAM_STR);
    // $modification->bindParam(':nom', $nom, PDO::PARAM_STR);
    // $modification->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    // $modification->bindParam(':phone', $phone, PDO::PARAM_STR);
    // $modification->bindParam(':email', $email, PDO::PARAM_STR);
    
        //   $modification->execute($pseudo,$mdp, $nom, $prenom, $phone, $email, $utilisateur_id);
        //$modification->execute(array($utilisateur_id));
        
        /*print_r($modification);*/
        
     //header('location:connexion.php');

}
ob_end_flush();
include_once("inc/header.php");
?>


<section>
        <h1>page modification profil</h1>
        <table class="tableAdmin1">
                <tr>
                    <th>ID</th>
                    <th>PSEUDO</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>TELEPHONE</th>
                    <th>EMAIL</th>
                    <th>CIVILITE</th>
                    <th>STATUT</th>
                    <th>Voir</th>
                  
                    <th>Suppr</th>
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
           
            <td><a href="supprimer-profil.php?id=<?= $voir_utilisateur['id_membre'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                <?php
                echo "</tr>";
            echo "</table>"
            ?>
    <form action="" method="post" class="formModif">
       <table>
        <tr><td><label for="Pseudo">Pseudo </label></td>
        <td><input type="text" name="pseudo" value="<?=$voir_utilisateur['pseudo']?>"></td></tr>
        
        <tr><td><label for="mdp">Mot De Passe</label></td>
        <td><input type="password" name="password" value="<?=$voir_utilisateur['mdp']?>"></td></tr>
       
        
        <tr><td><label for="nom">Nom</label><br>
        <td><input type="text" name="nom"value="<?=$voir_utilisateur['nom']?>" ></td></tr>
        
        <tr><td><label for="Prenom">Prenom</label></td>
        <td><input type="text" name="prenom" value="<?=$voir_utilisateur['prenom']?>"></td></tr>
        
        <tr><td><label for="Email">Email</label></td>
        <td><input type="Email" name="email" value="<?=$voir_utilisateur['email']?>"></td></tr>
    
        <tr><td><label for="Telephone">Telephone</label></td>
        <td><input type="text" name="telephone" value="<?=$voir_utilisateur['telephone']?>"></td></tr>


        
        <tr><td></td><td><input type="submit" name="modifier" value="modifier"></td></tr>
        

    </form>
</section>


<?php
    include_once("inc/footer.php");
?>