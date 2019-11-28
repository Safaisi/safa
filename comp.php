<html>
<meta charset="utf-8" />
<?php 	
	for($compteur = 0; $compteur <= 100; $compteur++)
	{
		echo 'mon num' . $compteur . '<br/>';
		
	}	
	$panier=array('des pommes', 'des poires','des myrtilles','des mangues', 'des ananas');
	echo 'Mes frères et sœurs ont pris mon panier pour aller faire des courses. Ils l ont rempli avec : </br>' ;
	for($compteur = 0; $compteur <=4; $compteur++)
	{	
		echo '<ul> <li>' .$panier[$compteur] .'</li> </ul>' ;
	}
		
	foreach ($panier as $panier)
	{
			echo '<ul> <li>' .$panier. '</li> </ul>' ;
	}
	echo 'Descriptif de mon portefeuille </br>';
	$portefeuille = array (
		'prop' => 'safa',
		'couleur' => 'Noir',
		'Matière' =>'cuir',
		'Nb' => 5,
		'perdu:'=> 'Non');
	echo '<ol>';	
	foreach ($portefeuille as $pf)
	{
			echo '<li>' .$pf . '</li>' ;
			
	}
	 echo '<li>' .$somme= $portefeuille['Nb']*10 . '</li>';
	 echo '</ol>';
			
?>		
</html>