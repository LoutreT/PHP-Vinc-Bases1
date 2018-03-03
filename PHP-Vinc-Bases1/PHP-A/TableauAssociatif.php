<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/tableauAssociatif.css">
    <title>Tableaux associatifs</title>
  </head>
  <body>

  </body>
</html>

<br><h1><b>Tableaux associatifs</b></h1>
<br>
<br>Jusqu'à présent, les tableaux que nous créons utilisent une clef numérique (autrement dit: un chiffre).
<br>
<br>Les tableaux associatifs fonctionnent sur le même principe, sauf qu'au lieu de numéroter les étages,
<br>on va les étiqueter en leur donnant à chacun un nom différent.
<br>
<br>Par exemple, supposons que je veuille, dans un seul array, enregistrer les
<br>coordonnées de quelqu'un (nom, prénom, adresse, ville, etc.). Si l'array est
<br>numéroté, comment savoir que le n°0 est le nom,
<br>le n°1 le prénom, le n°2 l'adresse… ? C'est là que
<br>les tableaux associatifs deviennent utiles.
<br><br><h2>Construire un tableau associatif</h2>
<br>Pour en créer un, on utilisera la fonction array (ou sa version raccourcie [] ) comme tout à l'heure,
<br>mais on va mettre l'étiquette (la clef) devant chaque information :
<br>
<?php
$utilisateur = array(
    'prenom' => 'Juan',
    'nom' => 'Pablo',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Bruxelles'
    );
 ?>
<br>
<br>Note 1: il n'y a ici qu'une seule instruction (un seul point-virgule). J'aurais pu tout mettre sur la même ligne, mais rien ne m'empêche de séparer ça sur plusieurs lignes pour que ce soit plus facile à lire.
<br>
<br>Note 2: remarque qu'on écrit une flèche (=>) pour dire « associé à ». Par exemple, on dit « ville » associée à « Bruxelles ».
<br>
<br>Du coup, pour afficher le contenu d'un étage, c'est plus intuitif:
<br>
<br><?php
echo $utilisateur['ville'];
 ?>

<br>
<br><h2><b>Exercice :</b></h2>
<br>
<br>Décris-toi dans une tableau associatif: $moi.
<br>Utilise au moins deux valeurs de chaque type:
<br>texte (par exemple prenom),
<br>booléenne (par exemple aime_le_foot)
<br>et Int (par exemple: age).
<br>
<br>
<br>
<br>
<br>
<?php
echo 'PRESENTATION SOUS .PRE. : ';
echo '<pre>';
$moi = array('prenom' => 'Vincent','nom' => 'NASSAUX', 'age' => 40, 'Date de naissance' => "21/04/1977", 'Ville' => 'Bruxelles', 'Métier' => 'Electromécanicien', 'belge'=> TRUE);

var_dump($moi);
echo "<br><br>var-dump($ moi) <br>echo $ moi['nom'];";
echo "<br><br>par exemple mon nom : <br><br>"; // imbrication de plusieurs éléments dans le écho !!
echo $moi['nom'];
echo "<br>";

print_r($moi);
echo '</pre>';
 ?>

<h1><b>A suivre avec  multidimensionnel</b></h1>
