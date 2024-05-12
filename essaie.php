<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php

    $enf=[
            ["nom"=>"ALOUKO","prenom"=>"Awal","sexe"=>"M","date"=>"12/06/2005","matr"=>"aa05"],
            ["nom"=>"KONDO","prenom"=>"Bénédicte","sexe"=>"F","date"=>"14/02/2006","matr"=>"bb06"],
            ["nom"=>"LASSANI","prenom"=>"Gracia","sexe"=>"M","date"=>"10/01/2007","matr"=>"cc07"],
            ["nom"=>"LOZES","prenom"=>"Issan","sexe"=>"M","date"=>"01/05/2000","matr"=>"dd00"],
            ["nom"=>"SESSINOU","prenom"=>"Deen","sexe"=>"M","date"=>"11/07/2005","matr"=>"ee05"]
        ];
        for ($ligne=0; $ligne<4; $ligne++) {
            echo '<ul>';
             for ($col=0; $col<=1; $col++) {
                if ($enf[$ligne]['sexe']=="M") {
                     echo "<li> Monsieur ".$enf[$ligne]['nom']." ".$enf[$ligne]['prenom']." est né le ".$enf[$ligne]['date']."</li>";
                 } else {
                     echo "<li> Madame ".$enf[$ligne]['nom']." ".$enf[$ligne]['prenom']." est né le ".$enf[$ligne]['date']."</li>";
                 }

                 date(d/m/a);
                 
             }
            echo '</ul>';
        } ?> 




</body>
</html>