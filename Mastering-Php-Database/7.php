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
                                                             			//la bade de donne est cree (php myAdmin)
	Étape 2 - Créez un tableau comme celui de la conférence
                                                                    	// le table est cree (php myAdmin)
	Étape 3 - Insérez des données
                                                                      // lesdonnes est inserer(php myAdmin)
	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	
	$host="localhost";
    $user="root";
    $pass="";
    $db="testdb";


     $cnx=mysqli_connect( $host,$user,$pass, $db);
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
