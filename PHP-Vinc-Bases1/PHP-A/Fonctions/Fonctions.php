<!--  Consigne RAPPEL du professeur Alex.Pl. Toujours mettre les PHP de calcul AVANT le HTML-->
<?php
  if(isset($_POST['Pathfinder']) == "form2"){
    $nombre1=$_POST["number1"];
    $nombre2=$_POST["number2"];
  }
?>

<?php
  if(isset($_GET['action']) == 'form1'){
    $prenom = ucfirst($_GET["surname"]);}
?>


<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <link rel="stylesheet" href="../css/Fonctions.css">

    <title>Fonctions</title>

  </head>
  <body>
    <div id="Fonctions">

      <div class="Fonction1">
        <h1>Les Fonctions</h1>
      </div>

      <div class="Fonction2">

        <h4>
          -print_r($array) : sert à afficher le contenu d'un array.<br>
          -die("message") : sert à arrêter l'execution du script après avoir affiché le message indiqué en argument de la fonction.<br>
          -echo("texte à afficher"); : sert à afficher les arguments. Cette fonction ne nécessite pas les parenthèses.<br>
        <h3>
          <?php
            echo (date('d M Y'));
          ?>
        </h3>
        </h4>
        <b>function sanitize( $input ){</b><br>
      	//	...une série d'opérations manipulant les arguments...<br>
      	<b>return strip_tags( trim( $input) );}</b><br>
        <br>
        <br>L' argument (ici appelé $input ) est envoyé à la fonction trim() qui
        <br>retourne son résultat à la fonction strip_tags() qui retourne le résultat à
        <br>la fonction return qui... retourne le résultat hors de la fonction que
        <br>j'ai baptisée sanitize() (et qui me permet donc de faire à la fois trim et
        <br>strip_tags d'un seul coup).<br>

        <br>Temps 2. Utiliser la fonction (on dit: "appeler la fonction Untel") :
        <br>Une fois la fonction déclarée quelque part dans ton code, tu peux l'utiliser où tu le souhaites, et autant de fois que nécessaire.
        <br>
        <br>Reprenons cette fameuse fonction sanitize(), et utilisons-la. Voici un exemple concret:
        <br>// Si le formulaire a été soumis...
        <br><b>if (isset($_POST) && !empty($_POST) ){</b>
        <br>
      	<br>// sanitisation des inputs
      	<br><b>$name = sanitize( $_POST['name'] );</b>
      	<br><b>$email = sanitize( $_POST['email'] );</b>
        <br>
      	<br>//<b>validation...}</b>
        <br><br>
      </div>

      <div class="Fonction3">
        <b><h1>Exercices</h1></b>

<!-- je rajoute id="exo1" pour marquer le lieu de l'ancrage lorsqu'on appuie sur "return" -->

        <h5 id="exo1"><br>1) Utilise une fonction qui mette la première lettre de l'argument en majuscule.<br>
             Par ex: si l'input de la fonction est "emile", l'output sera "Emile".</h5>
        <h3>
<!-- je rajoute "#exo1"avec diese, ci-dessous pour obliger à rester à la page ancrée lorsque
qu'on appuye sur Return/Enter. Voir le commentaire caché ci-dessus-->
          <form class="" action="#exo1" method="get">
            <h4>Ecrivez un prénom :</h4>
            <input type="text" name="surname" value="">
            <input type="submit" name="" value="Donner majuscule au prénom">
            <input type="hidden" name="action" value="form1"/>
          </form>
        <h3>
          <?php
              if (isset($_GET['action']) && $_GET['action'] == "form1"){
                /*ici "isset permet de mettre à 0 la réponse pendant qu'on sollicite d'autres calculs, des autres exercices."*/
                echo $prenom;}
              else {echo "Pour une réponse, vous devez écrire un prénom ou un mot au hasard";}
          ?>
        </h3>
<hr>
        <h5> 2) Utilise la fonction fournie par PHP te permettant d'afficher l'année en cours (dessous, avec le 3)
        <br>
        <br> 3) Affiche à présent la date, l'heure, les minutes et les secondes, en utilisant la même fonction.</h5>
        <h3>
          <?php
            function show_date(){
              return date('l, j F Y, H:i:s');
              }
            echo show_date();
          ?>
        </h3>
<hr>
        <h5 id="exo4"><br> 4) Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments.</h5>

        <form class="" action="Fonctions.php?action=form2#exo4" method="post">
          <input type="number" name="number1" value="un premier nombre">
          <input type="number" name="number2" value="un deuxième nombre">
          <input type="submit" name="" value="Calculer l'addition">
          <input type="hidden" name="Pathfinder" value="form2">
        </form>
        <h3>
        <?php
          if(isset($_POST['Pathfinder']) == "form2"){
            echo "Première donnée : ".($_POST['number1'])."<br>";
            echo "Deuxième donnée : ".($_POST['number2'])."<br>";
            echo "RESULTAT DE L'ADDITION = ".($argument=($nombre1+$nombre2));
          }else{
            echo '"Erreur, argument non numérique"';
          }
        ?>
        </h3>
        <h5> 5) Améliore la fonction précédente pour que si l'un des (ou les deux) arguments envoyés n'est pas une valeur numérique (int),
          la fonction retourne le message suivant: "Erreur, argument non numérique". </h5>
        <h3>Ok c'est fait, c'est programmé.</h3>
      </div>

      <div class="Fonction4">
        <h5 id="exo6"><br>6) Crée une fonction qui prend en argument une chaîne de caractères (plusieurs mots)
          et qui retourne les initiales de chaque mot en majuscule.
          (Exemple: "In code we trust!" devient: ICWT).<br><br>
            <form class="" action="#exo6" method="get">
              Ecrivez une phrase à abréger :
              <input type="text" name="abréviation" value="">
              <input type="submit" name="" value="Transformer phrase en initiales">
            </form>
          </h5>
          <h4>
          <b>la formule c'est : <br></h4>
          <h5>$texto = '? choisis ta phrase ?';<br>
            $separateur = explode(' ',$texto);<br>

            print_r ($separateur = explode(' ',$texto));<br>

            //ensuite faire une boucle par `FOR` pour tous les mots constituants la phrase :<br>
            for ($i=0; $i < count($separateur) ; $i++) { <br>
            $separateur[$i] = substr($separateur[$i], 0, 1); <br>
            echo $separateur[$i] . " "; <br>
            echo (ucfirst($ separateur[$i])) =</b><br>
          </h5>

          <h3>

          <?php
            if (isset($_GET['abréviation'])){
              $texto = ($_GET['abréviation']);
              $separateur = explode(' ',$texto);
              print_r ($separateur = explode(' ',$texto));
              for ($i=0; $i < count($separateur) ; $i++) {
              $separateur[$i] = substr($separateur[$i],0 ,1); //extraction de lettres après la première lettre de chaque mots d'un tableau.
              // echo $separateur[$i] . " ";
              echo(ucfirst($separateur[$i])) . " ";
              }
            }
          ?>
          <br>
          </h3>
<hr>
          <h5 id="exo7"><br>7) Invente une fonction qui remplace les lettres "a" et "e" par le caractère "æ"
            dans chacune des chaînes suivantes: "caecotrophie",
            "chaenichthys","microsphaera", "sphaerotheca".
            <form class="" action="#exo7" method="get">
              Ecrivez mot :
              <input type="text" name="graphème" value="">
              <input type="submit" name="" value="Transformer 'ae' vers 'æ'">
            </form>
          </h5>
          <h3>
          <?php
            if (isset($_GET['graphème'])){
              $graphème = ($_GET['graphème']);
              $ligaturer = str_replace('ae','æ',$graphème);
              echo "if (isset($ _GET['graphème'])){<br>
                $ graphèmes = ($ _GET['graphème']);<br>
                $ ligaturer = str_replace('ae','æ',$ graphèmes);<br>
                echo $ ligaturer;"."<br><br>"."= ".$ligaturer;
            }

          ?>
          </h3><br>
<hr>
          <h5 id="exo8"><br>8) Crée la fonction inverse, qui remplace le caractère "æ" par "ae" dans les chaines suivantes:
            <br> cæcotrophie, chænichthys, microsphæra, sphærotheca
            <form class="" action="#exo8" method="get">
              Ecrivez mot :
              <input type="text" name="graphèma" value="">
              <input type="submit" name="" value="Transformer 'æ' vers 'ae' ">
            </form>
          </h5>
          <h3>
            <?php
              if (isset($_GET['graphèma'])){
                $graphème = ($_GET['graphèma']);
                $ligaturer = str_replace('æ','ae',$graphème);
                echo "if (isset($ _GET['graphèma'])){<br>
                  $ graphèmæs = ($ _GET['graphèma']);<br>
                  $ ligaturer = str_replace('æ','ae',$ graphèmæs);<br>
                  echo $ ligaturer;"."<br><br>"."= ".$ligaturer;
              }
            ?>
          </h3>
        </div>
        <div class="Fonction5">
          <h4>9) Crée une fonction te permettant de gérer des messages envers l'utilisateur
          <br>grâce à deux arguments:</h4>
          <br>le premier argument est le message, le second permet de spécifier un
          <br>attribut de classe html qui sera utilisée par le CSS (par exemple: "info",
          <br>"error", "warning"). Grâce à cette fonction, on pourra écrire en php:
          <br><br>
          <br>echo feedback("adresse email incorrecte", "warning");
          <br>ce qui provoquera cette injection d'html:
          <br>< div class="warning"> "Adresse email incorrecte."</ div>

        <h3>
          <?php
            $msgAlerte = "Adresse email incorrecte";
            $classCss = "warning";
            function feedback($msgAlerte, $classCss)
            {
            return "<div class=$classCss>$msgAlerte.</div>";
            }
            echo feedback($msgAlerte, $classCss);
          ?>
        </h3>
<hr>

          10) Trouve par toi-même dans la documentation php comment modifier ta <br>
          fonction pour que, si le second argument n'est pas spécifié, sa valeur soit égale à "info".

<hr>
          <h4 id="exo11"><br>11) Crée un générateur de mots aléatoires, générant deux mots: <br></h4>
          un allant de 1 à 5 lettres,<br>
          l'autre allant de 7 à 15 lettres.<br>
          L'écran ne montrera que ceci: Un titre invitant l'utilisateur à générer un nouveau mot, <br>
          ensuite: les deux mots générés, ensuite: un bouton permettant de rafraichir la page (et <br>
          donc de recréer deux mots).<br>
          <h3>
          <?php
            function word_generator($min,$max){
              $nbr_letter=rand($min,$max);
              $word_array=[];
              while ($nbr_letter>0) {
                $nbr_letter--;
                array_push($word_array,chr(rand(97,122)));
              }
              return implode($word_array);
            }
            echo "1) ".word_generator(1,5);
            echo "<br><br>";
            echo "2) ".word_generator(7,15);
          ?>
          </h3>

      <button id="refresh" onclick="document.location.reload(false)"> Rafraichir </button>
<hr>
      <br><h4><br>
        12) Convertis la chaîne suivante: "ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!!!" en lettres minuscules, sans toucher à la première lettre. </h4>
      <h3>
        <?php
          $string = "ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
          $string = ucfirst(strtolower($string));
          echo $string;
        ?>
      </h3>
      <!--
        $en_minuscule=strtolower("ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
        function reverse_string($stringToReverse){
            $stringToReverse=str_split($stringToReverse);
            $reversed=[];
            for ($i=count($stringToReverse)-1; $i >=0 ; $i--) {
              array_push($reversed,$stringToReverse[$i]);
            }
            return implode($reversed);
        }
        echo reverse_string("truc");
        echo "<br><br>"; -->

      </div>

      <div class="Fonction6">
        <h4 id="exo13"><br><b>13) Dans ton nouveau boulot, tu récupères du code du développeur précédent:</b></h4>
        <br>
        <br>// Calcul du volume d'un cône de rayon 5 et de hauteur 2
        <br>$volume = 5 * 5 * 3.14 * 2 * (1/3);
        <br>echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';
        <br>// Calcul du volume d'un cône de rayon 3 et de hauteur 4
        <br>$volume = 3 * 3 * 3.14 * 4 * (1/3);
        <br>echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';

        <br>Afin qu'il te laisse tranquille, crée une fonction volume_dun_cone, qui
        <br>va calculer le volume du cône en fonction du rayon et de la hauteur.
        <br>Cette fonction ne va rien afficher, on veut juste qu'elle nous renvoie le
        <br>volume qu'on cherche.
        <br>Voici un schéma, pour bien t'embrouiller (Ben oui, en réalité, les
        <br>informations utiles à cette mission sont dans le code ci-dessus...)Cone

      <form class="" action="#exo13" method="GET">
        <br>Donnez la valeur du rayon de ce cône : <br><input type="float" name="rayoncone" value=""><br>
        <br>Donnez la valeur de la hauteur de ce cône : <br><input type="float" name="hauteurcone" value=""><br>
        <br><b><input type="submit" name="" value="Calculer le volume">
        <input type="hidden" name="conique" value="formulecone">
      </form>
        <br><br><br><br>

<!--
echo round(1241757, -3) = 1242000 , ici, quand c'est avant la virgule on fait moins (-3, pour changer à mille)
echo round(5.045, 2)    = 5.05  , là quand c'est après la virgule, on fait alors (+1, pour une hexadécimale)
-->


        Calcul du volume du cône =<br></b>
      <h3>
      <?php
        if(isset($_GET['conique'])=='formulecone'){
          $hauteurcone = ($_GET['hauteurcone']);
          $rayoncone = ($_GET['rayoncone']);
          echo round(($volume = (M_PI*($rayoncone*$rayoncone)*$hauteurcone)/3),2)."  cm³";;
          // echo ($volumerreel);
        }else{echo "valeurs non entrées ou non complètes";}
      ?>
      </h3>

<hr><br><br><br>
        <h4 id="exo14"><br>
          14) Invente une fonction reverse_string($ stringToReverse) qui réécrit une chaine de caractères à l'envers.</h4>
          <br>
          <form class="" action="#exo14" method="post">
            <b>Quelle phrase voulez-vous mettre à l'envers ?</b>
            <input type="text" name="inverseur" value="">
            <input type="submit" name="" value="Inverser">
          </form>

          <h3>
          <?php
            if(isset($_POST['inverseur'])){
              $inverseur = strrev($_POST['inverseur']);
              echo $inverseur;
            }
          ?></h3>

        </div>


        <div class="Fonction7">

        15) En Wallonie, les mouvements de jeunesse ont une chanson populaire intitulée
        "Buvons un coup ma serpette est perdue".
        Utilise la fonction str_replace avec
        $substitutions = array( E, I, O, U, OU, É, È, OI, UI, OUI, AN, IN, ON, UN, OIN);
        pour transformer automatiquement les voyelles du couplet selon chaque
        élément de l'array et ainsi générer les paroles complètes de la chanson
        (le couplet avec chaque diphtongue remplacée).
        <h3>
        <?php
          $chanson1 = "Buvons un coup ma serpette est perdue";
          $vowels = array("a", "e", "i", "o", "u", "y");
          $substitutions = array('E','I','O','U','OU','É','È','OI','UI','OUI','AN','IN','ON','UN','OIN');
          echo "<br>";

          foreach ($substitutions as $consonnes) {
            echo str_replace($vowels,$consonnes, "Buvons un coup ma serpette est perdue")."<br><br>";
          }

        ?>

        </h3>

      </div>

    </div>

  </body>
</html>
