<?php
ob_start();
include_once('inc/header.php');
    
    echo"<pre>";
    print_r($pdo);
    echo"</pre>";
    $message="";
    if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])  && isset($_POST['civilite']) && isset($_POST['statut']) && isset($_POST['Adresse']) && isset($_POST['cp']) && isset($_POST['ville'])){

        
       $erreur=FALSE;
       

    $pseudo=htmlspecialchars(trim($_POST['pseudo']));
    $mdp=htmlspecialchars(trim($_POST['password']));
    $nom=htmlspecialchars(trim($_POST['nom']));
    $prenom=htmlspecialchars(trim($_POST['prenom']));
    $email=htmlspecialchars(trim($_POST['email']));
    $phone=htmlspecialchars(trim($_POST['telephone']));
    $civil=htmlspecialchars(trim($_POST['civilite']));
    $statut=htmlspecialchars(trim($_POST['statut']));
    $adresse=htmlspecialchars(trim($_POST['Adresse']));
    $cp=htmlspecialchars(trim($_POST['cp']));
    $ville=htmlspecialchars(trim($_POST['ville']));
   

    

    $doublon1 =$pdo->query ("SELECT * FROM membre where pseudo ='$pseudo'");
    $doublon2 =$pdo->query ("SELECT * FROM membre where email ='$email'");
    $statut1 =$pdo->query ("SELECT * FROM membre where statut ='$statut'");
   
        if($doublon1->rowCount() !=0){
            $message.='changer de pseudo<br>';
            $erreur=true;
        }
        if($doublon2->rowCount() !=0){
            $message.='changer de mail';
            $erreur=true;
        }
      
        
    

    if(empty($pseudo) || iconv_strlen($pseudo)>=20 ){
        $erreur=TRUE;
         $message.="pas de pseudo rentré<br>";
        }
    if(iconv_strlen($mdp) < 8 || iconv_strlen($mdp)>16 )
    {
        $erreur=TRUE;
     $message.="mot de pas non valide<br>";}
    if(!is_numeric($phone)){ 
        $erreur=TRUE;
        $message.="pas de caractere numerique<br>";
    }
    if(filter_var($email , FILTER_VALIDATE_EMAIL)==FALSE)
    {
        $erreur=TRUE;
        $message.="format non valide";
    }
    


    if($erreur==FALSE || $statut=="Batman01"){
        $mdp=password_hash($mdp, PASSWORD_DEFAULT);
    $enregistrement = $pdo->prepare("INSERT INTO membre (id_membre, pseudo, mdp , nom, prenom, telephone, email, Adresse, cp, ville, civilite, statut, date_enregistrement) VALUES ( NULL, :pseudo, :password, :nom, :prenom, :phone, :email , :Adresse, :cp, :ville, :civilite,1,NOW())");


    $enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $enregistrement->bindParam(':password', $mdp, PDO::PARAM_STR);
    $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $enregistrement->bindParam(':phone', $phone, PDO::PARAM_STR);
    $enregistrement->bindParam(':email', $email, PDO::PARAM_STR);
    $enregistrement->bindParam(':civilite', $civil, PDO::PARAM_STR);
    $enregistrement->bindParam(':Adresse', $adresse, PDO::PARAM_STR);
    $enregistrement->bindParam(':cp', $cp, PDO::PARAM_STR);
    $enregistrement->bindParam(':ville', $ville, PDO::PARAM_STR);
    
    $enregistrement->execute();

    header('location:connexion.php');

    } else{
        $mdp=password_hash($mdp, PASSWORD_DEFAULT);
    $enregistrement = $pdo->prepare("INSERT INTO membre (id_membre, pseudo, mdp , nom, prenom, telephone, email, Adresse, cp, ville, civilite, statut, date_enregistrement) VALUES ( NULL, :pseudo, :password, :nom, :prenom, :phone, :email , :Adresse, :cp, :ville, :civilite,2,NOW())");


    $enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $enregistrement->bindParam(':password', $mdp, PDO::PARAM_STR);
    $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $enregistrement->bindParam(':phone', $phone, PDO::PARAM_STR);
    $enregistrement->bindParam(':email', $email, PDO::PARAM_STR);
    $enregistrement->bindParam(':civilite', $civil, PDO::PARAM_STR);
    $enregistrement->bindParam(':Adresse', $adresse, PDO::PARAM_STR);
    $enregistrement->bindParam(':cp', $cp, PDO::PARAM_STR);
    $enregistrement->bindParam(':ville', $ville, PDO::PARAM_STR);
    
    $enregistrement->execute();

    header('location:connexion.php');
    }
}


    ob_end_flush();

?>




<section>
    <h1>Inscription</h1>
    <?php echo $message ?>
    <form action="" method="post" class="form">
        <table class="table4">
            <tr><td>
        <label for="Pseudo">Pseudo</label></td>
        <td><input type="text" name="pseudo" id="Pseudo"></td></tr>

        <tr><td><label for="mdp">Mot De Passe</label>
        <td><input type="password" name="password"></td></tr>

        <tr><td><label for="nom">Nom</label></td>
        <td><input type="text" name=nom></td></tr>

        <tr><td><label for="Prenom">Prenom</label></td>
        <td><input type="text" name=prenom></td></tr>

        <tr><td><label for="Email">Email</label>
        <td><input type="Email" name=email></tr>

        <tr><td><label for="Telephone">Telephone</label>
        <td><input type="text" name=telephone></tr>

        <tr><td><label for="Adresse">Adresse</label>
        <td><input type="text" name=Adresse></tr>

        <tr><td><label for="cp">Code Postal</label>
        <td><input type="text" name=cp></td></tr>

        <tr><td><label for="ville">Ville</label></td>
        <td><input type="text" name=ville></tr>

        
        <tr><td><label for="civilite">Civilite</label></td>
        <td><select name="civilite">
            <option value="m">Homme</option>
            <option value="f">Femme</option>
        </select></td></tr>

        <tr><td><label for="statut">Statut</label></td>
        <td><input type="password" name=statut></td></tr>
        

        <tr><td></td><td><input type="submit" name="envoyer" class="envoyer" id="Valider"></td></tr><tr><td></td><td><input type="reset" name="Annuler" class="annuler" id="Annuler"></td></tr>
        </table>
    </form>
</section>




<?php include_once('inc/footer.php');?>
