<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="./css/conditions.css">

    <title>Conditions PHP</title>
  </head>
  <body>

    <div id="cadre">

      <div class="element1">
        <h2>Condition dans PHP</h2>
        <br>
        <h><h1>Opérateurs</h1>
        <br>
        <br><h3>Pour exprimer tes conditions,
        <br>tu as à ta disposition
        <br>plusieurs types d'opérateur:
        <br>
        <br>== : égal à
        <br>!= : différent de
        <br>> : plus grand que
        <br>< : plus petit que
        <br>>= : plus grand ou égal à
        <br><= : plus petit ou égal à</h3>
        <br>
        <h4>$temperature=12;
        <br>
        <br>if( $temperature > 21 ) {
        <br>       // code à exécuter si la condition est TRUE
        <br>$vetement_du_jour = "T-shirt";
        <br>} else {
        <br>       // code à exécuter si la condition est FALSE
        <br>$vetement_du_jour="Pull-over";
        <br>}
        <br>echo $vetement_du_jour;
        <br></h4>
        <p>Réponse =</p>
        <h2>
        <?php

        $temperature=12;

        if( $temperature > 21 ) {
          // code à exécuter si la condition est TRUE
          $vetement_du_jour = "T-shirt";
         } else {
           // code à exécuter si la condition est FALSE
           $vetement_du_jour = "Pull-over";
         }
        echo $vetement_du_jour;

        // Exercice:
        //
        // Change la condition pour qu'elle devienne:
        // "si la température est plus grande ou égale à 15 degrés".
        ?>
        </h2>
      </div>


      <div class="element2">
        <h2>Condition dans PHP</h2>
        <br>
        <h><h1>Opérateurs</h1>
        <br>
        <br><h3>Pour exprimer tes conditions,
        <br>tu as à ta disposition
        <br>plusieurs types d'opérateur:
        <br>
        <br>== : égal à
        <br>!= : différent de
        <br>> : plus grand que
        <br>< : plus petit que
        <br>>= : plus grand ou égal à
        <br><= : plus petit ou égal à</h3>
        <br>
        <h4>$temperature=16;
        <br>
        <br>if( $temperature >= 15 ) {
        <br>$vetement_du_jour = "T-shirt";
        <br>} else {
        <br> $vetement_du_jour = "Pull-over";
        <br>}
        <br>echo $vetement_du_jour;
        <br></hr4>
        <br>
        <p>Réponse =</p>
        <h2>
        <?php
        $temperature=16;

        if( $temperature >= 15 ) {
          // code à exécuter si la condition est TRUE
          $vetement_du_jour = "T-shirt";
          } else {
           // code à exécuter si la condition est FALSE
           $vetement_du_jour = "Pull-over";
          }
        echo $vetement_du_jour;
         ?>
        </h2>
      </div>


      <div class="element3">
        <h2>Condition dans PHP</h2>
        <br>
        <h><h1>Combiner des conditions</h1>
        <h2>EXERCICE 1 :</h2>
        <h3>condition1 ET / OU condition2:
        <br>
        <br>Affiche un message de salutation <br>différent selon l'heure courante.
        <br>
        <br>Si l'heure est entre 05h01 et 9h00<br> du matin, affiche "<b>Bonjour!</b>".
        <br>
        <br>Si l'heure est entre 9h01 et 12h00<br> affiche "<b>Bonne journée!</b>".
        <br>
        <br>Si l'heure est entre 12h01 et 18h00<br> affiche "<b>Bon après-midi!</b>".
        <br>
        <br>Si l'heure est entre 18h01 et 21h00<br> affiche "<b>Bonne soirée!</b>".
        <br>
        <br>Si l'heure est entre 21h01 et 05h00<br> affiche "<b>Bonne nuit!</b>".
        <br>
        <br>Astuce: Exploite le fait que l'on <br>puisse combiner des conditions <br>(via les opérateurs AND / OR).
        <br>
        <br>&& 	= And_______ $x && $y
        <br>||  = Or __________ $x || $y
        <br></h3>
        <p>Réponse =</p>
        <h4>
        <?php
          // set timezone_location_get
          date_default_timezone_set('Europe/Paris');

          // display the date and time with a greeting

          function show_date(){
              return date('l, j F H:i');
          }

          function salutation(){
              $heure = date('H');
              if($heure > 5 && $heure <= 9 ){
                  $salutation = "Bonjour!";

              } else if($heure > 9 && $heure <= 12){
                  $salutation = "Bonne journée!";

              } else if($heure > 12 && $heure <= 18){
                  $salutation = "Bon après-midi!";

              } else if($heure > 18 && $heure <= 21){
                  $salutation = "Bonne soirée!";

              } else {
                  $salutation = "Bonne nuit!";}
            return $salutation; // traiter et mémoriser mais n'affiche pas encore la réponse !
          }
          echo show_date();     // afficher
          ?>
        </h4>
        <h2><b>
          <?php
          echo salutation();    // afficher
          ?></b>
        </h2>

      </div>

      <div class="element4">
        <h2>Condition dans PHP</h2>
        <br><h1>Combiner des conditions</h1>
        <h2>EXERCICE 2:</h2>
        <h3>Affiche une salutation différente <br>selon l'âge de l'utilisateur.
        <br>Crée un petit formulaire contenant <br>une seule question: <br>"Quel est votre âge ?"
        <br>
        <br>(champ de type Number).
        <br>Méthode: GET Affiche un message <br>différent selon la réponse au <br>formulaire.
        <br>
        <br>- Si l'âge est inférieur à 12 ans, <br>affiche "<b>Salut petit!</b>"
        <br>
        <br>- Si l'âge est entre 12 et 18 ans, <br>affiche "<b>Salut l'ado!</b>"
        <br>
        <br>- Si l'âge est entre 18 et 115 ans, <br>affiche "<b>Salut l'adulte!</b>"
        <br>
        <br>- Si l'âge est supérieur à 115 ans, <br>affiche "<b>Wow! Toujours vivant?</b>"
        </h3>
        <form action="" method="get">
          <h4><b>Bonjour, quel âge avez-vous ?</b></h4>
          <input type="number" name="agee">
          <input type="submit" name="Discovery" value="Donner réponse">
        </form>
        <br>
        <p>Réponse =</p>
        <h2>
        <?php

        if(isset($_GET['Discovery'])){
          $agee = $_GET["agee"];

          if($agee < 12 ){
            $resalutation = "Salut petit!";
          }elseif ($agee >= 12 && $agee < 18) {
            $resalutation = "Salut l'ado!";
          }elseif ($agee >= 18 && $agee < 115) {
            $resalutation = "Salut l'adulte!";
          }else {
            $resalutation = "Wow! Toujours vivant?";
          }
          echo $resalutation;
        }
         ?>
        </h2>
      </div>

      <div class="element5">
        <h2>Condition dans PHP</h2>
        <br><h1>Combiner des conditions</h1>
        <h2>EXERCICE 3:</h2>
        <h3>Affiche une salutation différente selon l'âge et le genre de l'utilisateur.
        <br>
        <br>Complète le formulaire de l'exercice précédent en ajoutant une deuxième question :
        "Homme ou Femme?" (champ de type Radio).
        <br>
        <br>Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
        <br>
        <br>Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche
        "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
        <br>Idem pour les autres tranches d'âge.
        <br>Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions.
        </h3>
  <!-- Modèle de bouton radio et Co pour aller dans une autre page PHP -->

  <!-- <form action="server.php" method="POST">
          <input type="text" name="ville" placeholder="Pays">
          <input type="number" name="max" placeholder="temp-max" >
          <input type="number" name="min" placeholder="temp-min" >
          <input type="submit" name="save" value="save">
        </form> -->

  <!-- Modèle de bouton radio accessible et calculé ici, donc sur la même page -->
        <!-- <body> -->
        <form action="" method="get">
          <h4><b>Bonjour, quel âge avez-vous ?</b></h4>
          <input type="number" name="age">
          <br>
          <h3><input type="radio" name="genre" value="homme">Homme</h3>
          <h3><input type="radio" name="genre" value="femme">Femme</h3>
          <h4>Pourriez-vous confirmer pour je puisse vous envoyer la réponse adéquate :</h4>
          <input type="submit" name="endeavour" value="Donner réponse">
          <!-- si click sur ce input, création $_GET['endeaver'] -->
        </form>
        <!-- </body> -->

        <p>Réponse =</p>
        <h2>

        <?php
          // if(strlen($genre) == null ){
          //   echo "Vous avez oublié d'indiquer votre genre.";
          // }
          // if(strlen($age) == null ){
          //   echo "Vous avez oublié d'indiquer votre age.";
          // }
          if(isset($_GET['endeavour'])){
            $age = $_GET["age"];
            $genre = $_GET["genre"];

            if($age < 12){
              if($genre == "femme")
                echo "Salut petite!";
              else echo "Salut petit!";

            }elseif($age >= 12 && $age < 18){
              if($genre == "femme")
                echo "Salut l'adolescente!";
              else echo "Salut l'adolescent!";

            }elseif($age >= 18 && $age < 115){
              if($genre == "femme")
                echo "Salut l'adulte!";
              else echo "Salut l'adulte!";

            }elseif($age >= 115){
              if($genre == "femme")
                echo "Wow! Toujours vivante?";
              else echo "Wow! Toujours vivant?";

            }
          }

         ?>
        </h2>
      </div>

      <div class="element6">
        <h2>Condition dans PHP</h2>
        <br><h1>Combiner des conditions</h1>
        <h2>EXERCICE 4:</h2>
        <h3><br>Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle.
        <br>
        <br>Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" <br>(champ de type Radio: réponses possibles: "yes" ou "non" ).
        <br>Adapte le traitement du formulaire en fonction:
        <br>
        <br>-Si l'âge est inférieur à <b>12 ans</b> et que l'utilisateur répond "yes", retourne: <b>"Hello boy!"</b> ou <b>"Hello Girl!"</b> selon son genre.
        <br>
        <br>-Si l'âge est entre <b>12 et 18 ans</b> et que l'utilisateur répond "yes", affiche <b>"Hello Teenage boy!"</b> ou <b>"Hello Teenage girl!"</b> selon son genre.
        <br>
        <br>Si l'âge est entre <b>18 et 115 ans</b> et que l'utilisateur répond "yes", affiche <b>"Hello Sir!"</b> ou <b>"Hello Lady!"</b> selon son genre.
        <br>
        <br>Si l'âge est supérieur à <b>115 ans</b> et que l'utilisateur répond "yes", affiche <b>"Wow! Still alive, old man?"</b> ou <b>"old lady?"</b> selon son genre.
        </h3>
        <br>
        <form action="" method="get">
          <h4><b>Bonjour, quelle langue parlez-vous ?
            <br> Do you speak english or french ?</b></h4>
            <h3><input type="radio" name="langue" value="français">FRANCAIS</h3>
            <h3><input type="radio" name="langue" value="anglais">ENGLISH</h3>
          <br>
          <h4><b>Quel âge avez-vous ?
          <br>How are old you ?</b></h4>
          <input type="number" name="lage">
          <br>
          <h3><input type="radio" name="gender" value="gentleman">Homme / Gentleman</h3>
          <h3><input type="radio" name="gender" value="lady">Femme / Lady</h3>
          <h4><b>Pourriez-vous confirmer pour je puisse vous envoyer la réponse adéquate :<b></h4>
          <input type="submit" name="Atlantis" value="Donner réponse">
        </form>
        <p>Réponse =</p>
        <h2>
        <?php

        if(isset($_GET["Atlantis"])){    //columbus est le nom de l'enregistrement

        $lage = $_GET["lage"];
        $gender = $_GET["gender"];
        $langue = $_GET["langue"];

          if ($lage < 12){
            if($langue == "français" and $gender == "lady"){
              echo "Salut petite!";
            }elseif($langue == "français" and $gender == "gentleman"){
              echo "Salut petit!";
            }elseif($langue == "anglais" && $gender == "lady"){
              echo "Hello Girl!";
            }else echo "Hello boy!";

          }elseif ($lage >= 12 && $lage < 18){
            if($langue == "français" and $gender == "lady"){
              echo "Salut l'adolescente!";
            }elseif($langue == "français" and $gender == "gentleman"){
              echo "Salut l'adolescent!";
            }elseif($langue == "anglais" && $gender == "lady"){
              echo "Hello Teenage girl!";
            }else echo "Hello Teenage boy!";

          }elseif ($lage >= 18 && $lage < 115){
            if($langue == "français" and $gender == "lady"){
              echo "Bonjour madame!";
            }elseif($langue == "français" and $gender == "gentleman"){
              echo "Bonjour monsieur!";
            }elseif($langue == "anglais" && $gender == "lady"){
              echo "Hello Lady!";
            }else echo "Hello Sir!";

          }elseif ($lage >= 115){
            if($langue == "français" and $gender == "lady"){
              echo "Wow! Toujours vivante!";
            }elseif($langue == "français" and $gender == "gentleman"){
              echo "Wow! Toujours vivant!";
            }elseif($langue == "anglais" && $gender == "lady"){
              echo "Wow! Still alive, old lady!";
            }else echo "Wow! Still alive, old man!";
          }
        }
        ?>
        </h2>
      </div>

      <div class="element7">
        <h2>Condition dans PHP</h2>
        <br><h1>Combiner des conditions</h1>
        <h2>EXERCICE 5:</h2>
        <h3><br>Retour à l'école de l'échec et du jugement
        <br>
        <br><b>Crée un petit formulaire qui réagit à la note de l'étudiant.</b>
        <br>
        <br>Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
        <br>
        <br>Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
        <br>
        <br>Si la note est égale à 10, affiche "Tout juste!"
        <br>
        <br>Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
        <br>
        <br>Si la note est 15, 16, 17, ou 18, affiche "Bravo!".
        <br>
        <br>Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!".
        </h3>
        <br>
  <form action="" method="get">
    <h4><b>Bonjour, quelle note avez-vous ?</b></h4>
        <br>
      <h3>
      <table>
        <tr>
          <b><th>NOTES SOUS 10</th>
          <th>NOTES AU-DESSUS DE 10</th></b>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=0>   0 / 20</td>
          <td><input type="radio" name="note" value=10> 10 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=1>    1 / 20</td>
          <td><input type="radio" name="note" value=11>  11 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=2>    2 / 20</td>
          <td><input type="radio" name="note" value=12>  12 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=3>    3 / 20</td>
          <td><input type="radio" name="note" value=13>  13 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=4>    4 / 20</td>
          <td><input type="radio" name="note" value=14>  14 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=5>    5 / 20</td>
          <td><input type="radio" name="note" value=15>  15 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=6>    6 / 20</td>
          <td><input type="radio" name="note" value=16>  16 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=7>    7 / 20</td>
          <td><input type="radio" name="note" value=17>  17 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=8>    8 / 20</td>
          <td><input type="radio" name="note" value=18>  18 / 20</td>
        </tr>
        <tr>
          <td><input type="radio" name="note" value=9>    9 / 20</td>
          <td><input type="radio" name="note" value=19>  19 / 20</td>
        </tr>
        <tr>
          <td><input type="submit" name="Enterprise" value="Donner réponse"></td>
          <td><input type="radio" name="note" value=20>  20 / 20</td>
        </tr>
      </table>
      </h3>
      <br>
  </form>

        <br>
        <p>Réponse =</p>
        <h2><b>
        <?php
          if(isset($_GET["Enterprise"])){

          $note = $_GET["note"];

            if($note == 0){echo "ça va, on n'a pas triché je vois, l'honneur est sauf pour toi mon petit fainéant.";
            }elseif($note >= 1 && $note <= 3){echo "Ce travail est nul.";
            }elseif($note >= 4 && $note <= 5){echo "Catastrophique, ton travail.";
            }elseif($note >= 6 && $note <= 9){echo "Ce travail n'est pas terrible.";
            }elseif($note == 10){echo "Tout juste.";
            }elseif($note >= 11 && $note <= 14){echo "C'est pas mal.";
            }elseif($note >= 15 && $note <= 18){echo "Bravo.";
            }else echo "Police! Arrêtez ce tricheur!";
          }
        ?>
        </b></h2>

      </div>

      <div class="element8">
        <h2>Condition dans PHP</h2>
        <br><h1>Combiner des conditions</h1>
        <h2>EXERCICE 6:</h2>
        <h3><br>La structure "Switch".
        <br>Dans le switch, on indique au début sur quelle variable on travaille.
        <br>On dit à PHP : Je vais analyser la valeur de '$note'.
        <br>Après, on utilise des 'case' pour analyser chaque cas ('case 0','case 10', etc.).
        <br>
        <br>Cela signifie : Dans le cas où la valeur est 0… Dans le cas où la valeur est 10…
        <br>
        <br>Avantage : on n'a plus besoin de mettre le double égal !
        <br>
        <br>Défaut : ça ne marche pas avec les autres symboles (< > <= >= !=).
        <br>
        <br>En clair, le switch ne peut tester que l'égalité.
        <br>
        <br>Puis, crée un nouveau fichier conditions-switch.php et refais l'exercice précédent
        mais en remplaçant ta structure if/else par une structure switch.
        <br>
        <br>
        </h3>
        <br>
        <form action="" method="get">
          <h4><b>Bonjour, quelle note avez-vous ?</b></h4>
              <br>
            <h3>
            <table>
              <tr>
                <th>NOTES SOUS 10</th>
                <th>NOTES AU-DESSUS DE 10</th>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=0>   0 / 20</td>
                <td><input type="radio" name="note" value=10> 10 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=1>    1 / 20</td>
                <td><input type="radio" name="note" value=11>  11 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=2>    2 / 20</td>
                <td><input type="radio" name="note" value=12>  12 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=3>    3 / 20</td>
                <td><input type="radio" name="note" value=13>  13 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=4>    4 / 20</td>
                <td><input type="radio" name="note" value=14>  14 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=5>    5 / 20</td>
                <td><input type="radio" name="note" value=15>  15 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=6>    6 / 20</td>
                <td><input type="radio" name="note" value=16>  16 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=7>    7 / 20</td>
                <td><input type="radio" name="note" value=17>  17 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=8>    8 / 20</td>
                <td><input type="radio" name="note" value=18>  18 / 20</td>
              </tr>
              <tr>
                <td><input type="radio" name="note" value=9>    9 / 20</td>
                <td><input type="radio" name="note" value=19>  19 / 20</td>
              </tr>
              <tr>
                <td><input type="submit" name="Pathfinder" value="Donner réponse"></td>
                <td><input type="radio" name="note" value=20>  20 / 20</td>
              </tr>
            </table>
            </h3>
            <br>
        </form>

        <br>
        <p>Réponse =</p>
        <h2><b>
        <?php
        if(isset($_GET["Pathfinder"])){

        $note = $_GET["note"];

          switch ($note) {
            case 0:
              echo "ça va, on n'a pas triché je vois, l'honneur est sauf pour toi mon petit fainéant.";
                break;
            case 1:
              echo "Ce travail est nul.";
                break;
            case 2:
              echo "Ce travail est nul.";
                break;
            case 3:
              echo "Ce travail est nul.";
                break;
            case 4 :
              echo "Catastrophique, ton travail.";
                break;
            case 5 :
              echo "Catastrophique, ton travail.";
                break;
            case 6:
              echo "Ce travail n'est pas terrible.";
                break;
            case 7:
              echo "Ce travail n'est pas terrible.";
                break;
            case 8:
              echo "Ce travail n'est pas terrible.";
                break;
            case 9:
              echo "Ce travail n'est pas terrible.";
                break;
            case 10:
              echo "Tout juste.";
                break;
            case 11:
              echo "C'est pas mal.";
                break;
            case 12:
              echo "C'est pas mal.";
                break;
            case 13:
              echo "C'est pas mal.";
                break;
            case 14:
              echo "C'est pas mal.";
                break;
            case 15:
              echo "Bravo.";
                break;
            case 16:
              echo "Bravo.";
                break;
            case 17:
              echo "Bravo.";
                break;
            case 18:
              echo "Bravo.";
                break;
            case 19:
              echo "Police! Arrêtez ce tricheur!";
                break;
            case 20:
              echo "Police! Arrêtez ce tricheur!";
                break;
          }
        }
        echo "<br>";
        $date = (new DateTime())->format('d m Y');
        echo "Écrit le : ",$date,".</br>";

            // empty() ?????????
            //
            // filter_var()   ??????????
            //
            // pre  pre
         ?>

      </div>

      <div class="element9">
        <h2>Condition dans PHP</h2>
        <br>

        <?php

         ?>

      </div>

      <div class="element10">
        <h2>Condition dans PHP</h2>
        <br>

        <?php

         ?>

      </div>

      <div class="element11">
        <h2>Condition dans PHP</h2>
        <br>

        <?php

         ?>

      </div>

    </div>

  </body>
</html>
