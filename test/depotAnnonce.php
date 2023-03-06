<?php
    include_once("inc/header.php");

    
    echo"<pre>";
    print_r($pdo);
    echo"</pre>";

?>










<main>
    <form>
        <label for="Titre">Titre</label>
        <input type="text">

        <label for="DescCourte">Description Courte</label>
        <input type="textarea">

        <label for="DescLongue">Description Longue</label>
        <input type="textarea">

        <label for="Prix">Prix</label>
        <input type="text">

        <label for="Categorie">Categorie</label>
        <select>
            <option value="cat1"></option>
        </select>

        <label for="photo">Photo</label>
        <input type="img">
        
        <label for="pays">Pays</label>
        <select>
            <option value="pays1"></option>
        </select>

        <label for="Adresse">Adresse</label>
        <input type="text">

        <label for="CP">Code Postal</label>
        <input type="text">

        <label for="Enregister">Enregistrer</label>
        <input type="submit">
    </form>
</main>


<?php
    include_once("inc/footer.php");
?>