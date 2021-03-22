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
*/
echo pow(2,2);
/*
	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho
	*/

	$str = "Hello World!";
    echo $str . "<br>";
    echo chop($str,"World!");
	/*
	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

$t=array('malki','med','hamid');

foreach($t as $g)
{

echo $g." - ";

}
	


?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>