<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */
//1 

$num = "1";

if ($num == "1") {
  echo "I love greenchip";
} elseif ($num == "2") 
{
  echo "I Hate dgreenchip";
}
//2 
for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
  }
//3 
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
break;
  case "green":
    echo "Your favorite color is green!";
 break;
	case "black":
	echo  "Your favorite color is black";
break;
	case "white":
	echo  "Your favorite color is white ";
	break;	
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>







</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>