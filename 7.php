<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	// 1 
	$mysqli = new mysqli("localhost", "root", "", "test");
    $mysqli -> set_charset("utf8");

    $requete = "SELECT * FROM test";
    $resultat = $mysqli -> query($requete);

    while ($ligne = $resultat -> fetch_assoc()) {
        echo $ligne['id'] . ' ' . $ligne['name'] ;
        
    }
    $mysqli->close();
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
