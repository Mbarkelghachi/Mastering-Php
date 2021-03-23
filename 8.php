<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  
	Étape 1 - Créer une variable avec du texte comme valeur

	Étape 2 - Utilisez la fonction crypt() pour le crypter

	Étape 3 - Attribuez le résultat de cryptage à une variable

	Étape 4 - Échoyez de la variable 
	*/
	//1 
	$txt = "Testing";
	//2 
   crypt($txt,'Mbark') ;
   // 3 
   $cryption = crypt($txt,'Mbark');
   // 4 
   echo $cryption;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>