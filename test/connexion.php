<?php
ob_start();
include_once("inc/header.php");

    

$message="";
$erreur=FALSE;

if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

   


    $pseudoExistant=$pdo->query("SELECT * FROM membre where pseudo = '$pseudo'");
    $mdpExistant=$pdo->query("SELECT  mdp FROM membre where pseudo = '$pseudo'");
    $result=$mdpExistant->fetch();
    $result2=$pseudoExistant->fetch(PDO::FETCH_ASSOC);
    


if($pseudoExistant->rowCount() == 0){
    $message.='Pseudo incorect<br>';
    $erreur=TRUE;

}
if(isset($result['mdp']) && password_verify($mdp, $result['mdp'])===false){

    $message.='mot de passe  incorect';
    $erreur=TRUE;
}

if($erreur==FALSE){
    $message.='connection reussi';
$_SESSION['id'] = $result2['id_membre'];
$_SESSION['pseudo'] = $result2['pseudo'];
$_SESSION['nom'] = $result2['nom'];
$_SESSION['prenom'] = $result2['prenom'];
$_SESSION['telephone'] = $result2['telephone'];
$_SESSION['email'] = $result2['email'];
$_SESSION['civilite'] = $result2['civilite'];
$_SESSION['statut'] = $result2['statut'];
$_SESSION['date_enregistrement'] = $result2['date_enregistrement'];




    header('location:profil2.php');

}



}
ob_end_flush()
?>
 
<section>
<h1>Connexion</h1>
<table class="table5">
    <form  action="" method="post" class="form">
        <tr><td><label for="pseudo">Pseudo</label></td>
        <td colspan="2"><input type="text" placeholder="Entrer pseudo" name="pseudo"></td></tr>

        <tr><td><label for="mdp">Mot de Passe</label></td>
        <td colspan="2"><input type="password"placeholder="Entrer password" name="mdp"></td></tr>
        <tr><td></td><td><input type="submit" id='submit' value='Valider' ></td><td><input type="Reset" id='Annuler' value='Annuler' ></td></tr>
                <?php
                echo $message;
                ?>
    </form>
</table>
</section>


<?php
    include_once("inc/footer.php");
?>

