<?php
ob_start();
include_once('inc/header.php');
    
    echo"<pre>";
    print_r($pdo);
    echo"</pre>";

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
if(isset($_GET['id'])){

    // $erreur=FALSE;

    // $pseudo=$_POST['pseudo'];
    // $mdp=$_POST['password'];
    // $nom=$_POST['nom'];
    // $prenom=$_POST['prenom'];
    // $email=$_POST['email'];
    // $phone=$_POST['telephone'];

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
        $suppression = $pdo->query("DELETE FROM membre WHERE id_membre = '$utilisateur_id'");

    // $modification->bindParam(':id_membre', $utilisateur_id, PDO::PARAM_STR);
    // $modification->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    // $modification->bindParam(':password', $mdp, PDO::PARAM_STR);
    // $modification->bindParam(':nom', $nom, PDO::PARAM_STR);
    // $modification->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    // $modification->bindParam(':phone', $phone, PDO::PARAM_STR);
    // $modification->bindParam(':email', $email, PDO::PARAM_STR);
    
        //   $modification->execute($pseudo,$mdp, $nom, $prenom, $phone, $email, $utilisateur_id);
        //$modification->execute(array($utilisateur_id));
        
/*        print_r($suppression);*/
        
     //header('location:connexion.php');

}
ob_end_flush();
?>


<main class="m-5">
       <h1>Page suppression profil</h1>
       <p>Le profil est bien supprimé</p>


        

        </main>


<?php
    include_once("inc/footer.php");
?>