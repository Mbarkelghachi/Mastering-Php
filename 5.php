<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */
//1 
echo(acosh(7) . "<br>");
echo(acosh(56) . "<br>");
echo(acosh(2.45). "<br>"	);
//2 
$str = bin2hex("Hello World!");
echo($str)."<br>";
//3 
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,3));
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>