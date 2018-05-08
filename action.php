<?php
          try
          {
          $bdd = new PDO('mysql:host=localhost;dbname=arduino2018', 'root', '');
          }
          catch(Exception $e)
          {
          die('Erreur : '.$e->getMessage());
          }
          $reponse = $bdd->query('SELECT information FROM luminosite order by idlum desc limit 1');
          if ($donnees = $reponse->fetch())
          {

          	if (69<=$donnees['information'] || $donnees['information']<=80 ) {
          		
          		//echo "<img src="LUMIERE2-03.png">";
          		echo "luminosite parfaite";
          	}
          	if($donnees['information']>81)
          	{
          		//echo "<img src="LUMIERE3-03.png">";
          		echo "luminosite tres elevee";
          	}
          	if($donnees['information']<69)
          	{
          		//echo "<img src="LUMIERE0-03.png">";
          		echo "luminosite tres faible";
          	}
          //echo $donnees['luminosite'];
          }
          $reponse->closeCursor();
?>
