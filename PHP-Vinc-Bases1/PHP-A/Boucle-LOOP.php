<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/boucle-LOOP.css">
    <title>Boucles-Loop</title>
  </head>
  <body>

    <div id="paysage">

      <div class="boucles">

        <h1>Les Boucles - LOOP</h1>

        <h5><b>Définition :</b></h5>
        <br>
        <h2><b>FOREACH</b> (Pour chaque élément)</h2>
        <h6>Ce foreach est une structure logique appelée boucle.
        <br>Une boucle permet de répéter une (ou plusieurs) opération(s) autant de fois que nécessaire.
        <br>
        <br>Voici un exemple pratique: imagine que tu reçoives une liste (un array)
        <br>de noms dans un tableau$names et que tu doives t'assurer que la première lettre de ces noms soit bien en majuscule.
        <br>Tu penses avec raison que la fonction PHP "ucfirst($nom);""  t'aidera.
        <br>Avec une boucle, c'est très simple.
        <br>
        <br>foreach ($names as $n){
        <br>	echo ucfirst($n);
        <br>}
        <br><b>L'instruction se lit:</b>
        <br>Pour chaque élément du tableau$name, met la première lettre en majuscule puis affiche-là.
        <br>
        <br><b>Variation: avec l'index</b>
        <br>
        <br>Parfois on a besoin de savoir quelle rangée exactement est en train d'être manipulée.
        <br>Voici la syntaxe nécessaire pour s'en sortir:

        <br><b>foreach ($names as $index => $n){
        <br>	echo "Prénom numéro $index : ";
        <br>	echo ucfirst($n);
        <br>}</b>

        <br>Cette syntaxe utilisant => te rappelle quelque chose ?
        <br>Les tableaux associatifs peut-être? Tout à fait!
        <br>C'est logique, puisqu'une boucle permet notamment de traverser un tableau de part en part.
        <br>Donc quand tu penses "tableau", pense "boucle", et inversément, car les deux vont très souvent ensemble.
        <br>
        </h6>
      </div>

      <div class="tableauETboucleForeach">
          <h2><b>Exercices démonstratif</b> <br>- Voici un array :</h2>
          <h6><br>$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');<br>
          <br>Construis une boucle qui affiche chaque élément de l'array à l'aide de foreach<br></h6>
          <h4><b>
          <.?php<br>
            $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');<br>
            var_dump ($pronoms_personnels);<br>
            foreach ($pronoms_personnels as $pronom_personnel){<br>
              echo "$pronom_personnel" ;<br>
            }<br>
          ?.><br></b>
          <?php
            $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
            var_dump ($pronoms_personnels);

            foreach ($pronoms_personnels as $pronom_personnel){
              echo "<h4>$pronom_personnel</h4>" ;
            }


            echo"<h6>Ensuite, dans ta boucle, conjuge le verbe 'coder' en fonction du pronom. (utilise une condition pour cela)</h6>";


            foreach ($pronoms_personnels as $pronom_personnel) {
              if ($pronom_personnel == 'Je'){
                echo "<h4> $pronoms_personnels[0] code,</h4>";
              }
              elseif ($pronom_personnel == 'Tu'){
                echo "<h4> $pronoms_personnels[1] codes,</h4>";
              }
              elseif ($pronom_personnel == 'Il/Elle'){
                echo "<h4> $pronoms_personnels[2] code,</h4>";
              }
              elseif ($pronom_personnel == 'Nous'){
                echo "<h4> $pronoms_personnels[3] codons,</h4>";
              }
              elseif ($pronom_personnel == 'Vous'){
                echo "<h4> $pronoms_personnels[4] codez,</h4>";
              }

              elseif ($pronom_personnel == 'Elles/Ils'){
                echo "<h4> $pronoms_personnels[5] codent </h4>";
              }
            }
          ?>
          </h4>
        <br>
      </div>

      <div class="uppercase">

        <div class="foreachformule">
          <h2>Formule de Foreach :</h2>
          <h3>
            <.?php<br>
            foreach ($.variable as $.key => $.value){<br>
            echo $.key;}<br>
            <br>
            ?.><br>
            <.?php endforeach; ?.><br>
          </h3>
        </div>
        <br><br>
        <div class="whileformule">
          <h2>Formule de While :</h2>
          <h3>$.a = xxx<br>
            <.?php while ($.a <= 114){<br>
              echo $.a;$.a++;}<br>
            ?.><br>
          </h3>
        </div>
        <br><br>
        <div class="forformule">
          <h2>Formule de For :</h2>
          <h3>
            <.?php<br>
            for($.z = 1; $.z <= 12 ;$.z ++ ){<br>
              echo $.z ;}<br>
            ?.><br>
          </h3>
        </div>
        <br><br>
        <div class="uppercas">
          <h6><b>   UPPERCASE</b></h6>
          <p><br>RAPPEL : Definition and Usage :
          <br>
          <br>The ucfirst() function converts the first character of a string to uppercase.
          <br>
          <br>Related functions:
          <br>
          <br>lcfirst() - converts the first character of a string to lowercase
          <br>ucwords() - converts the first character of each word in a string to uppercase
          <br>strtoupper() - converts a string to uppercase
          <br>strtolower() - converts a string to lowercase]
          </p>
        </div>
      </div>

      <div class="while">
        <h2><b>WHILE</b> (tant que les conditions...)</h2>
        <p>
          <.?php<br>
          $nombre_de_lignes = 1;<br>

          while ($nombre_de_lignes <= 10){<br>
          echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand j'apprends le PHP.';
          $nombre_de_lignes++;<br>
            // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;<br>
          }<br>
          ?.><br>
        </p>
        <h4>
          <?php
            $nombre_de_lignes = 1;
            while ($nombre_de_lignes <= 10) {
              echo $nombre_de_lignes .": Je ne dois pas regarder les mouches voler quand j'apprends le PHP.<br />";
                $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
            }
          ?>
        </h4>
      </div>

      <div class="for">

        <h2><b>FOR</b> (Pour) :</h2>
        <p>
        <br>Après le mot for, il y a des parenthèses qui contiennent trois éléments, séparés par des points-virgules ;.
        <br>
        <br>Décrivons chacun de ces éléments:
        <br>
        <br>Le premier sert à l'initialisation. C'est la valeur que l'on donne au départ à la variable (ici, elle vaut 1).
        <br>Le second, c'est la condition. Comme pour le while, tant que la condition est remplie, la boucle est réexécutée. Dès que la condition ne l'est plus, on en sort.
        <br>Enfin, le troisième c'est l'incrémentation, qui vous permet d'ajouter 1 à la variable à chaque tour de boucle.
        <br></p>
        <h4>
        <br>< ?php
        <br>  for ($nombre_de_lignes = 1; $nombre_de_lignes <= 10; $nombre_de_lignes++)
        <br>  {
        <br>    echo 'Ceci est la ligne n°' . $nombre_de_lignes.;
        <br>  }
        <br>? >
        <br><br>
        <?php
          for ($nombre_de_lignes = 1; $nombre_de_lignes <= 10; $nombre_de_lignes++){
            echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
          }
        ?>
        <br></h4>
      </div>

      <div class="exercicewhile">
        <h2>EXERCICE 1 :</h2>
        <p>Ecris une boucle qui affiche les numéros de 1 à 14 à l'aide de <b>WHILE</b></p><br>
        <h4>
        <br><b>J'ai utilisé la formule :<br><br> WHILE($.numéraire <= 14){echo "-".$.numéraire.;$.numéraire++;}</b><br><br>
        <?php
          $numéraire = 1;
          while ($numéraire <= 14){
            echo "-".$numéraire;$numéraire++;
        }
        ?>
        </h4>
      </div>

      <div class="exercicefor">
        <h2>EXERCICE 2 :</h2>
        <p>Ecris une boucle qui affiche les numéros de 1 à 12 à l'aide de <b>FOR</b></p><br>
        <h4>
        <br><b>J'ai utilisé la formule :<br><br>FOR($.numératis = 1; $.numératis <= 12 ;$.numératis ++ ){echo $.numératis."_"}</b><br><br>
        <?php
          for ($numératis = 1; $numératis <= 12 ;$numératis ++ ){
            echo $numératis."_" ;
          }
        ?>
        </h4>
      </div>

      <div class="prenom">
        <h2>EXERCICE 3 :</h2>
        <p>Crée un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une <b>boucle</b>.</p>
        <h4><br>
        <?php
          $prénomsdansLovelace = array("Vincent ", "Kevin ", "Caroline ", "Gaëtan ", "Sylviane ", "Mehdi ", "Ornella ", "Marvin ", "Laureen ", "Ilias ", "Marie-Ange ", "Kevin ", "Weichuan ", "Delphine ", "Jimmy ", "Axel ", "Nicolas ", "Nicolas ", "Thomas ", "Omar ", "Valérian ", "Antoine ", "Mutwakil ", "Steve ");
          // var_dump($prénomsdansLovelace);
          echo"<br><b>J'ai utilisé la formule :<br><br>FOREACH($.prenomsdansLovelace as $.prenom)</b><br><br>";
          foreach ($prénomsdansLovelace as $prenom){
            echo $prenom.", ";
          }
        ?>
        </h4>

        <!--
        <p>
        <table>
          <tr>
            <th><h6>Prénom</h6></th>
            <th><h6>Nom</h6></th>
            <th><h6>Pays</h6></th>
            <th><h6>Sexe</h6></th>
          </tr>
          <tr>
            <td>Vincent</td>
            <td>Nassaux</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Kevin</td>
            <td>Flabat</td>
            <td>Ile Maurice</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Caroline</td>
            <td>Bieuvelet</td>
            <td>Belgique</td>
            <td>Féminin</td>
          </tr>
          <tr>
            <td>Gaëtan</td>
            <td>Ribonnet</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Sylviane</td>
            <td>Alonsious</td>
            <td>Belgique</td>
            <td>Féminin</td>
          </tr>
          <tr>
            <td>Mehdi</td>
            <td>Trabelsi</td>
            <td>Tunisie</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Ornella</td>
            <td>Simba</td>
            <td>Afrique</td>
            <td>Féminin</td>
          </tr>
          <tr>
            <td>Marvin</td>
            <td>Louis</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Laureen</td>
            <td>Bataille</td>
            <td>Belgique</td>
            <td>Féminin</td>
          </tr>
          <tr>
            <td>Ilias</td>
            <td>Chergui</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Marie-Ange</td>
            <td>Bouchat</td>
            <td>Belgique</td>
            <td>Féminin</td>
          </tr>
          <tr>
            <td>Kevin</td>
            <td>Somao</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Weichuan</td>
            <td>Tran</td>
            <td>Chine</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Delphine</td>
            <td>Braive</td>
            <td>Belgique</td>
            <td>Féminin</td>
          </tr>
          <tr>
            <td>Jimmy</td>
            <td>Goossens</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Axel</td>
            <td>Fiolle</td>
            <td>Thailande</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Nicolas</td>
            <td>Van Roost</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Nicolas</td>
            <td>Belpois</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Thomas</td>
            <td>Point</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Omar</td>
            <td>Aiachi</td>
            <td>Egyptien</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Valerian</td>
            <td>Thomas</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Antoine</td>
            <td>Gjeloshaj</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Mutwakil</td>
            <td>Mo</td>
            <td>Soudan</td>
            <td>Masculin</td>
          </tr>
          <tr>
            <td>Steve</td>
            <td>Gravy</td>
            <td>Belgique</td>
            <td>Masculin</td>
          </tr>
        </table>
      </p>-->
      </div>

      <div class="exercicepays">
        <h2>EXERCICE 4 :</h2>
        <p>Crée un tableau contenant au moins 10 pays du monde. <br>Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.</p>
        <h4><b>J'ai utilisé la formule :</b> <br><br>FOREACH($.les10pays as $country){
          echo '<option value="'.$.country.'">'.$.country.'</option>';
        }<br>

          <?php
            $les10pays = array('allemagne','autriche','Belgique','Danemark','Espagne','Finlande','France','Grèce','Italie','Luxembourg');
            // var_dump($les10pays);
            // echo"<br>"."<br>";
          ?>
        </h4><br>

        <select>
          <?php
            foreach($les10pays as $country) {
              echo '<option value='.$country.'>'.$country.'</option>';
           // echo '<option value='.$country.'>'.$country.'</option>';
            }
          ?>
        </select>
        <br><br>
      </div>

      <div class="ISO">
        <h2>EXERCICE 5:</h2>
        <p>A présent, modifie ton tableau contenant les pays pour qu'il soit un tableau associatif: <br>
          la clef est le code ISO du pays, la valeur étant le nom du pays: <br>
          par exemple: $pays = array('BE'=>'Belgique'); au lieu de simplement $pays = array('Belgique');<br>
          Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html.</p>
        <h4><b>J'ai utilisé la formule :</b><br><br>
        Foreach ($.les10pays as $clef => $value){<br>
          echo'< option>'.$clef.'</ option>';}</h4>
        <select>
          <?php
            $les10pays = array ('DE'=>'allemagne','A'=>'autriche','BE'=>'Belgique','D'=>'Danemark','E'=>'Espagne','FIN'=>'Finlande','F'=>'France','GR'=>'Grèce','I'=>'Italie','L'=>'Luxembourg');
            foreach ($les10pays as $clef => $value) {
              echo '<option>'.$clef.'</option>';
            }
          ?>
        </select>
      </div>

    </div>
  </body>
</html>
