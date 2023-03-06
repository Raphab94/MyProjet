<?php
include_once('inc/header.php');

?>


		
<section class="sectionResa">
		<h1>Page de Reservation</h1>
		<form action="" method="post" class="form">
			<table class="table3R">
			
			<tr><td><label for="Email">Email</label></td>
			<td colspan="2"><input type="Email" name="email"><br></td>
			<tr><td><label for="adresse">adresse</label></td>
			<td colspan="2"><input type="text" name="adresse"><br></td>

			<tr><td><label for="type_prestation">Type de Prestation</label></td>
			<td colspan="2"><select class="typePresta">
			<option value="">Type de prestation</option>

			<option type="text" name="MontageMeuble">Montage de meuble</option>
			<option type="text" name="Livraison">Livraison</option>
			
			</select></td>
			<tr><td></td><td><input type="submit" name="Envoyer"></td><td><input type="reset" name="Annuler" id="Annuler"></td></tr>
</table>
		</form>
</section>
<?php
include_once('inc/footer.php');

?>