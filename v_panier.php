<div class="container marketing">
		<center> <h2> Votre panier </h2> </center>
		<?php
		$nb=1;
		foreach( $lesProduitsDuPanier as $unProduit) 
		{
			$id = $unProduit['id'];
			$description = $unProduit['description'];
			$image = $unProduit['image'];
			$prix = $unProduit['prix'];
			$nb++;
			?>
			<hr class="featurette-divider">
			
			<div class="row featurette">
				<div class="col-md-7 <?phpif($nb % 2 == 0){?> col-md-push-5 <?php}?>">
					<h2 class="featurette-heading"><?php echo $description ?></h2>
					<p class="lead"> <?php echo $prix?> <span class="glyphicon glyphicon-euro"></span>
					<a href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit" onclick="return confirm('Voulez-vous vraiment retirer cet article frais?');"> <br/> <button class="btn btn-danger"><span class="glyphicon glyphicon-open"></span> </button> </a> </center> </p>


					<select name ="quantite[<?php echo $id ?>]" size = 2> //liste déroulante 
										                <option selected value="1">1</option>
										        <?php
										                for($i = 2; $i < 10; $i++)
										               {
										          ?>
										                <option value="<?php echo $i ?>"><?php echo $i ?></option>
										        <?php
										               }
										          ?>
										        </select>





					
				</div>
				<div class="col-md-5 <?phpif($nb % 2 == 0){?> col-md-pull-7 <?php}?>">
					<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="<?php echo $image ?>" alt=image />
				</div>
			</div>
			<?php
		}
		?>
		<br>
	<div class="container col-md-offset-5">
		<a href="index.php?uc=gererPanier&action=passerCommande"><button type="button" class="btn btn-primary btn-lg">Commander</button> </a>
	</div>
</div>