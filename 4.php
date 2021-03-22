<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  
	Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

	Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

 */
//1  
function carre() {
	$num1 = 6;
	$num2 = 3;
	$sum = $num1 + $num2;
	return $sum;
  }
 echo "la somme est ". carre()."<br>";
 //2 
 function addNumbers($a,$b) {
	return $a + $b;
  }
 echo  addNumbers( 5,23)."<br>";

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>