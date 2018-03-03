<!-- THEORIE 1) :

$pronoms_personnels = array( 'je' , 'tu' , 'il' , 'nous' , 'vous' , 'ils' );

Array
  (
    [0] => je
    [1] => tu
    [2] => il
    [3] => nous
    [4] => vous
    [5] => ils
)

echo $pronoms_personnels[2];

  Affichera: "il"

Tu dois déclarer un tableau avec la fonction array().
$team = array();

Comme souvent en PHP, il existe une manière plus brève:
$team = [];

Tu peux dès sa création, mettre des éléments à l'intérieur.
$team = [ 'Vincent Company', 'Eden Hazard', 'Manneken Pis' ]; -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/array.css">
    <title>Array-PHP</title>
  </head>
  <body>


    <div id="fenetre">

      <h1>Exercice PHP en ARRAY = TABLEAU</h1>

<h3>en noir, les questions</h3>
<h4>en bleu, les réponses en php</h4>
      <div class="phparray">

      <h4>
        <?php
// Pratique : EXERCICES : Voici un array :
        $pays = array( 'Belgique', 'France' , "l'Allemagne", 'Pays-Bas', 'Ukraine' );
// Que va retourner ceci ?
        echo $pays[2];
        echo "<hr>";
        echo "Valeur de 2 dans le tableau des pays programmé dans mon PHP = l'Allemagne!";
        ?>
      </h4>

      </div>
      <hr> <!--pour marquer une mise à la ligne en coupant avec une ligne -->
      <h3>Essai des options des bordures de toutes les fenêtres</h3>
      <hr> <!--pour marquer une mise à la ligne en coupant avec une ligne -->
      <div class="boutons">

        <h3>test d'integration des fonctions de boutons (non opérationnel)</h3>
        <form action="server.php" method="POST">
          <input type="text" name="ville" placeholder="Pays">
          <input type="number" name="max" placeholder="temp-max" >
          <input type="number" name="min" placeholder="temp-min" >
          <input type="submit" name="save" value="save">
        </form>
      </div>

<!--
1) Ci-dessous, crée un array représentant ta famille.
2) Affiche son contenu avec la fonction print_r
-->
      <hr> <!--pour marquer une mise à la ligne  -->
      <div class="TableauExoFamille">
        <h3>réponse : </h3>
        <hr>
        <h4>
        <?php
          $famille = array("Père", "Mère", "Soeur", "Labrador", "Loup");
          print_r ($famille);
        ?>
        </h4>

      </div>
<!--
3) Crée un array décrivant tes plats préférés.
4) Affiche son contenu avec la fonction print_r-->
      <hr> <!--pour marquer une mise à la ligne  -->
      <div class="TableauPlatsPref">
        <h3>réponse : </h3>
        <hr><h4>
        <?php
          $platpref = array("pizza", "viande", "poulet", "pates", "gateaux");
          echo $platpref[2];
        ?>
        </h4>
      </div>

<!--
5) Crée un array listant tes films et séries préférés.
En utilisant cet array, affiche uniquement ton film/série préféré
-->
      <hr> <!--pour marquer une mise à la ligne  -->
      <div class="FilmPref">
        <h4>
        <?php
          $film = array("science-fiction", "aventure", "comédie", "série");
          print_r ($film);
          echo "<hr>";  //pour tracer une ligne
          echo $film [2];
        ?>
        </h4>
      </div>


    </div>

<!-- THEORIE 2) :
Remplacer la valeur d'une clef

Imagine que $person['papa']['firstname'] = 'Georgio';

Pour changer son prénom, il suffit de l'écraser:

$person['papa']['firstname'] = 'Georgio';
echo $person['papa']['firstname'];
$person['papa']['firstname'] = 'Sebastano';
echo '<br>';
echo $person['papa']['firstname']; // retourne "Sebastano"
-->

    <div class="Theorie2">

      <div class="AjoutNewKeyDansTableau">
        <h3>Quels étaient tes 2 sports d'Arts Martiaux dans ta jeunesse ? </h3>
        <h4>
        <?php
          $sport = array("judo","karate","football","ski","badminton","tennis");
          echo $sport[0];
          echo "    ET     ";
          $sport = array("judo","karate","football","ski","badminton","aikido", "tennis");
          array_push ($sport,'squash'); /* j'utilise une fonction qui intègre 'squash'
          dans le tableau */
          echo $sport[1];
          echo "<hr>";     //pour tracer une ligne
          echo "<h3>Affichage avec 'var_dump($...sport)' des éléments du tableau</h3>";
          var_dump($sport); /* var_dump($sport) est une formule pour voir le nouvel...
...élément intégré dans le tableau et de voir tous les autres éléments dans le tableau*/
          echo "<hr>";     //pour tracer une ligne
          array_push($sport, "kayak");// ici, j'utilise une fonction qui intègre "kayak"
        ?>
        </h4><br>
        <h3>
         "Affichage de 2 éléments du tableau avec les 2 nouveaux éléments rajoutés à la fin par la formule 'array_push()' :";
        </h3>

        <h4>
        <?php
          echo $sport[6];  // On regarde quel est l'élément 6 dans le tableau
          echo "<br>";
          echo $sport[7];  // On regarde quel est l'élément 7 dans le tableau
          echo "<br>";
          echo "<hr>";     // Pour tracer une ligne
          array_push($sport,'basket', 'handball', 'volleyball');
          echo "<h3>Affichage de tous les éléments du tableau avec la formule print_r($...sport) avec les 3 nouveaux éléments rajoutés à la fin par la formule 'array_push()' et visibles seulement dans la programmation :</h3><br><br>";
          print_r ($sport);
          echo "<br><br>";
          echo "<hr>";
          print "Et ici, j'affiche du texte avec print 'Hello World' c est différent de print_r($ sport) !";
         ?>
        </h4>

      <table>
        <tr>
          <td><b><?php echo $sport[0]?></b></td> <!--première cellule de la ligne  -->
          <td><b><?php echo $sport[1]?></b></td> <!--seconde cellule de la ligne   -->
          <td><b><?php echo $sport[2]?></b></td> <!--troisième cellule de la ligne -->
          <td><b><?php echo $sport[3]?></b></td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td><b><?php echo $sport[4]?></b></td> <!--première cellule de la ligne  -->
          <td><b><?php echo $sport[5]?></b></td> <!--seconde cellule de la ligne   -->
          <td><b><?php echo $sport[6]?></b></td> <!--troisième cellule de la ligne -->
          <td><b><?php echo $sport[7]?></b></td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td><p><?php echo $sport[8]?></p></td> <!--première cellule de la ligne  -->
          <td><p><?php echo $sport[9]?></p></td> <!--seconde cellule de la ligne   -->
          <td><p><?php echo $sport[10]?></p></td> <!--troisième cellule de la ligne -->
          <td><p><?php echo $sport[11]?></p></td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td></td> <!--première cellule de la ligne  -->
          <td></td> <!--seconde cellule de la ligne   -->
          <td></td> <!--troisième cellule de la ligne -->
          <td></td> <!--quatrième cellule de la ligne -->
        </tr>
      </table>
    </div>

    </div>

    <div class="Theorie3">

      <div class="ChangeNewVarDansTableau">
        <?php
          echo"<br>";
          $person['papa']['firstname'] = 'Georgio';
          echo $person['papa']['firstname'];
          $person['papa']['firstname'] = 'Sebastano';
          echo"<hr>";    // pour tracer une ligne
          echo"<br>";    // pour faire une mise à la ligne de texte.
          echo "transformation du prénom par une nouvelle égalité, par ";
          echo "<br>";
          echo "'égal à un autre prénom=Sebastano:' ";
          echo '<pre>';  // pour mettre à part
          echo $person['papa']['firstname']; // retourne "Sebastano"
          echo '</pre>';
        ?>

      </div>

<br><br>

      <table>
        <tr>   <!--pour créer une ou des lignes de tableau. 'r' signifie 'row' qui signifie ligne de tableau-->
          <th><h3>Prénom</h3></th> <!--première cellule de la ligne  -->
          <th><h3>Nom</h3></th> <!--seconde cellule de la ligne   -->
          <th><h3>Pays</h3></th> <!--troisième cellule de la ligne -->
          <th><h3>Sexe</h3></th> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Vincent</td> <!--première cellule de la ligne  -->
          <td>Nassaux</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Kevin</td> <!--première cellule de la ligne  -->
          <td>Flabat</td> <!--seconde cellule de la ligne   -->
          <td>Ile Maurice</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Caroline</td> <!--première cellule de la ligne  -->
          <td>Bieuvelet</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Féminin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Gaëtan</td> <!--première cellule de la ligne  -->
          <td>Ribonnet</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Sylviane</td> <!--première cellule de la ligne  -->
          <td>Alonsious</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Féminin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Mehdi</td> <!--première cellule de la ligne  -->
          <td>Trabelsi</td> <!--seconde cellule de la ligne   -->
          <td>Tunisie</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Ornella</td> <!--première cellule de la ligne  -->
          <td>Simba</td> <!--seconde cellule de la ligne   -->
          <td>Afrique</td> <!--troisième cellule de la ligne -->
          <td>Féminin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Marvin</td> <!--première cellule de la ligne  -->
          <td>Louis</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Laureen</td> <!--première cellule de la ligne  -->
          <td>Bataille</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Féminin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Ilias</td> <!--première cellule de la ligne  -->
          <td>Chergui</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Marie-Ange</td> <!--première cellule de la ligne  -->
          <td>Bouchat</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Féminin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Kevin</td> <!--première cellule de la ligne  -->
          <td>Somao</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Weichuan</td> <!--première cellule de la ligne  -->
          <td>Tran</td> <!--seconde cellule de la ligne   -->
          <td>Chine</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Delphine</td> <!--première cellule de la ligne  -->
          <td>Braive</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Féminin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Jimmy</td> <!--première cellule de la ligne  -->
          <td>Goossens</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Axel</td> <!--première cellule de la ligne  -->
          <td>Fiolle</td> <!--seconde cellule de la ligne   -->
          <td>Thailande</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Nicolas</td> <!--première cellule de la ligne  -->
          <td>Van Roost</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Nicolas</td> <!--première cellule de la ligne  -->
          <td>Belpois</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Thomas</td> <!--première cellule de la ligne  -->
          <td>Point</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Omar</td> <!--première cellule de la ligne  -->
          <td>Aiachi</td> <!--seconde cellule de la ligne   -->
          <td>Egyptien</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Valerian</td> <!--première cellule de la ligne  -->
          <td>Thomas</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Antoine</td> <!--première cellule de la ligne  -->
          <td>Gjeloshaj</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Mutwakil</td> <!--première cellule de la ligne  -->
          <td>Mo</td> <!--seconde cellule de la ligne   -->
          <td>Soudan</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td>Steve</td> <!--première cellule de la ligne  -->
          <td>Gravy</td> <!--seconde cellule de la ligne   -->
          <td>Belgique</td> <!--troisième cellule de la ligne -->
          <td>Masculin</td> <!--quatrième cellule de la ligne -->
        </tr>
        <tr>
          <td></td> <!--première cellule de la ligne  -->
          <td></td> <!--seconde cellule de la ligne   -->
          <td></td> <!--troisième cellule de la ligne -->
          <td></td> <!--quatrième cellule de la ligne -->
        </tr>
      </table>

          <h3>EXERCICES :
    <br><br>
          Rajoute tes hobbies sous forme de tableau dans ton tableau $moi
          Crée un deuxième tableau similaire au tien, qui décrive ton papa (ou une personne de ta famille): $papa.
          Assure-toi d'y avoir également décrit ses hobbies
          Ensuite, à ton tableau $moi, ajoute un élément dont la clef est 'papa' et la valeur équivaut à $papa.
          Affiche le contenu de $moi via.
          Relis ton code pour t'assurer de comprendre ce qui se passe à chaque ligne. </h3>

        <h4>
          <?php
            $moi = array('technologie', 'restauration classic-car', 'travaux découvertes', 'machnines à 3D', 'forum classic-car');
            $papa = array('créations','arts', 'lecture', 'Macintosh', 'films');
            array_push ($moi, '$papa');
            var_dump($moi);
            echo "<br>";
            echo "<br>";
          ?>
        </h4>
          <table>
            <tr>
              <th><p>passion 1</p></th> <!--première cellule de la ligne  -->
              <th><p>passion 2</p></th> <!--seconde cellule de la ligne   -->
              <th><p>passion 3</p></th> <!--troisième cellule de la ligne -->
            </tr>
            <tr>
              <td><?php echo $moi[0]; ?></td> <!--première cellule de la ligne  -->
              <td><?php echo $moi[1]; ?></td> <!--seconde cellule de la ligne   -->
              <td><?php echo $moi[2]; ?></td> <!--troisième cellule de la ligne -->
            </tr>
            <tr>
              <td><?php echo $moi[3]; ?></td>
              <td><?php echo $moi[4]; ?></td>
              <td><?php echo $moi[5]; ?></td>
            </tr>
            <tr>
              <td></td> <!--première cellule de la ligne  -->
              <td></td> <!--seconde cellule de la ligne   -->
              <td></td> <!--troisième cellule de la ligne -->
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>

          <h3>Manipuler des array : Compter :<br>
          -Tu veux savoir combien de hobbies a ton père.<br></h3>
          <h4>
            <?php
              $result = count($papa);
              print_r ($result);
              echo "<br>";
           ?>
         </h4>
        </div>

        <div class="Theorie5">
          <div class="ExerciceSynthetique">
            <h3>-Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.<br></h3>

          <a href="http://php.net/manual/en/function.count.php">http://php.net/manual/en/function.count.php</a>
<hr>
          <h3>-Compte tes propres hobbies<br></h3>
          <h4>
            <?php
              $result = count($moi);
              print_r ($result);
            ?>
          </h4>
<hr>
          <h3>-Additionne les deux et affiche le résultat<br></h3>
          <h4>
            <?php
              $totalMoiPapa = count($moi)+count($papa);
  //ici on voit comment afficher le résultat avec echo "$" !
              echo $totalMoiPapa;
              echo "<br>";
              echo "<br>";
              echo "ici, à cause du tableau, je ne peux pas additionner comme ça :
              $ resultat= $ moi + $ papa parce qu'il s'agit de 2 tableaux,
              donc j'ai dû additionner de cette façon : $ resultat = count($ moi) + count($ papa)";
              echo "<br>";
              echo "<br>";
            ?>
          </h4>
<hr>
          <h3>-Ci-dessous, AJOUTER /<br>Un ami t'a fait découvrir les joies de la taxidermie. Trouve la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".<br></h3>
          <br>
          <h4>
            <?php
              array_push ($moi, 'taxidermie');
              var_dump ($moi);
            ?>
          </h4>
<hr>
          <h3>-Ci-dessous : REMPLACER/
          <br>Tu te disputes avec ton père et tu décides de changer de nom de famille.
          Ta contestation n'a d'autre objet que de faire chier le système et de faire parler de toi dans les médias. Tu choisis donc de porter un autre nom.
          Comment mettre à jour ton tableau pour refléter ce changement de nom de famille?
          <br>
          </h3>
          <h4>
            <?php
              $NASSAUX = $moi;
              var_dump ($NASSAUX);
            ?>
          </h4>
          <br>
            <table>
              <tr>
                <th><p>passion 1</p></th> <!--première cellule de la ligne  -->
                <th><p>passion 2</p></th> <!--seconde cellule de la ligne   -->
                <th><p>passion 3</p></th> <!--troisième cellule de la ligne -->
              </tr>
              <tr>
                <td><?php echo $NASSAUX[0]; ?></td> <!--première cellule de la ligne  -->
                <td><?php echo $NASSAUX[1]; ?></td> <!--seconde cellule de la ligne   -->
                <td><?php echo $NASSAUX[2]; ?></td> <!--troisième cellule de la ligne -->
              </tr>
              <tr>
                <td><?php echo $NASSAUX[3]; ?></td>
                <td><?php echo $NASSAUX[4]; ?></td>
                <td><?php echo $NASSAUX[5]; ?></td>
              </tr>
              <tr>
                <td><?php echo $NASSAUX[6]; ?></td> <!--première cellule de la ligne  -->
                <td></td> <!--seconde cellule de la ligne   -->
                <td></td> <!--troisième cellule de la ligne -->
              </tr>
            </table>
          

          <table>
            <tr>
              <th><p>passion 1</p></th> <!--première cellule de la ligne  -->
              <th><p>passion 2</p></th> <!--seconde cellule de la ligne   -->
              <th><p>passion 3</p></th> <!--troisième cellule de la ligne -->
            </tr>
            <tr>
              <td><?php echo $NASSAUX[0]; ?></td> <!--première cellule de la ligne  -->
              <td><?php echo $NASSAUX[1]; ?></td> <!--seconde cellule de la ligne   -->
              <td><?php echo $NASSAUX[2]; ?></td> <!--troisième cellule de la ligne -->
            </tr>
            <tr>
              <td><?php echo $NASSAUX[3]; ?></td>
              <td><?php echo $NASSAUX[4]; ?></td>
              <td><?php echo $NASSAUX[5]; ?></td>
            </tr>
            <tr>
              <td><?php echo $NASSAUX[6]; ?></td> <!--première cellule de la ligne  -->
              <td></td> <!--seconde cellule de la ligne   -->
              <td></td> <!--troisième cellule de la ligne -->
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>

          <h3>Et voilà, on voit la différence entre les 2 derniers tableaux ci-dessus,
            il y a le mot 'papa' qui a disparu de sa cellule
          </h3>
      </div>
    </div>

      <br>

    <div class="Theorie6">
      <div class="IntersectionFusion">
        <h3>Un jour, tu rencontres ton $ame_soeur.
           Décris-la sous forme d'un Tableau $toi .

           Quels seront le ou les hobbies que votre enfant aura?

           Il se trouve que tu as vu un documentaire à la télé dans lequel un spécialiste en
           génétique héréditaire, expliquait qu'il y a 2 possibilités:

           soit l'intersection (les hobby communs aux deux array),
           soit la fusion (tous les hobby de chaque array).

           Devine le nom des 2 fonctions PHP correspondantes dans la documentation de PHP
           (indice: elles commencent toutes deux par array_) et teste leur syntaxe.
           Affiche le résultat de chacune via la fonction print_r().</h3>

          <table>
            <tr>
              <th>les passions de Julie</th>
              <th>les passion de Vincent</th>
            </tr>
            <tr>
              <td>oenologie</td>
              <td>sommelier</td>
            </tr>
            <tr>
              <td>sommelier</td>
              <td>sorties</td>
            </tr>
            <tr>
              <td>sorties</td>
              <td>restauration classic-cars</td>
            </tr>
            <tr>
              <td>musiques</td>
              <td>technologies</td>
            </tr>
          </table>
        <br>
        <h3>parmis les passions des 2 personnes, quelles sont les passions communes ? :</h3>
        <h4>
        <?php
          $je = array('oenologie', 'sommelier', 'sorties', 'musiques');
          $toi= array('sommelier', 'sorties', 'restauration classic-cars','technologies');
          $enfant = array_intersect ($je, $toi);
          print_r ($enfant);
        ?>
        </h4>
        <br>
<hr>
        <br>
        <h3>Et l'ensemble des passions affichées avec print_r : </h3>
        <h4>
        <?php
          $reponse = array_merge($je, $toi);
          print_r($reponse);
         ?>
        </h4>
      </div>
    </div>


  </body>
</html>
