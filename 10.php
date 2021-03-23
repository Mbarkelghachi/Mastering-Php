<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 6: Appelez la méthode AfficherTout
	
	*/
	// 1 
	class Chien{
		 public $couleur_du_fourrure;
		 public $couleur_des_yeux;

	function set_name($des_yeux_color, $fourrure_color)
{
		$this->name1 = $fourrure_color;
        $this->name2 = $des_yeux_color;
	}
	function get_name(){

		echo $this->name1 . "<br>";
        echo $this->name2;
		
	}
}
$haski = new chien();
$haski->set_name('black', 'red');
echo $haski->get_name();

	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>