<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fonction-Pagination</title>
    <link rel="stylesheet" href="./CSS-Emily/Fonction-Pagination.css">
  </head>
  <body>
    <div class="Pagination">
      <h1>Création fonction pagination();</h1>
      <br>
      <h4>Voilà, avec la variable ci-dessus, créer une fonction pagination();<br>
        Le contenu de cette variable équivaut à un résultat venant d'une DB;<br>
        <br>
        Utiliser la fonction créée pour paginer le contenu de la variable $contenu.<br>
        Afficher 4 articles par pages.<br>
        <br>
        <br>Astuces: Attention avec des nombres decimaux, chercher à les convertir en entier.
        <br>
        <br>Pour cela les fonction comme ceil() si division il y a, ou
        <br>ctype_digit() pour verifier si la variable est un entier positif.
        <br>N'oubliez pas de compter le nombre d'article qu'il y a dans $contenu avec un count();
        <br>
        <br>count
        <br>(dans PHP 4, PHP 5, PHP 7)
        <br>
        <br>count — Compte tous les éléments d'un tableau ou quelque chose d'un objet
        <br>Description
        <br><b>int count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] )</b>
        <br>
        <br>Pas de services minimum, Utiliser vos connaissances front-end pour rendre la page ZOLIE...</h4>
        <br>
          <!-- function pagination(); -->
          <?php
            // déclaration d'une variable de contenu, équivalent à un résultat venant d'une DB
            $contenu = array(
              1 => array(
                  "titre"=>"Chou rouge aux grains d'anis vert",
                  "letexte"=>"Un pique-nique aussi facile à préparer qu’agréable à picorer ? Les recettes se concentrent en temps, pas en plaisir, pour rester plus longtemps sur l’herbe que devant les fourneaux !
        				Vite faites, bien faites, les surprises du panier font appel aux magiciens de la cuisine express pour régaler sans compliquer.
        				Zéro prise de tête pour les rois de la nappe à carreaux, misez sans complexes sur des idées faciles et transpirez sous le soleil plutôt que sous le tablier !.",
                  "ladate"=>"2013-11-02 21:15:00",
                  "Bonjour"=>"essai de quatrieme element"
                ),
              2 => array(
                  "titre"=>"Tarte aux pommes à la compote",
                  "letexte"=>"Un pique-nique aussi facile à préparer qu’agréable à picorer ? Les recettes se concentrent en temps, pas en plaisir, pour rester plus longtemps sur l’herbe que devant les fourneaux !
        				Vite faites, bien faites, les surprises du panier font appel aux magiciens de la cuisine express pour régaler sans compliquer.
        				Zéro prise de tête pour les rois de la nappe à carreaux, misez sans complexes sur des idées faciles et transpirez sous le soleil plutôt que sous le tablier !",
                  "ladate"=>"2013-11-15 18:20:00"
                ),
              3 => array(
                  "titre"=>"Cake  aux tomates sechées",
                  "letexte"=>"Si le pique-nique se veut rapide, c’est pour mieux profiter du grand air et du soleil. Une excellente raison, donc, pour déballer les jokers de la recette !
		            En tête desquels la tomate, rouge, ronde et gorgée de soleil, prête à aligner sur les carreaux de la nappe des bruschettas colorées de tomate au fromage frais.",
                  "ladate"=>"2014-18-02 21:15:00"
                ),
              4 => array(
                  "titre"=>"Tartelettes express aux tomates cerises",
                  "letexte"=>"Me mini tartelettes express aux tomates cerise ou des pâtes aux tomates cerise et basilic en bocal…
		            à moins de choisir la version séchée en cake doré aux tomates séchées, pignons de pin et jambon, ou terrine d’agneau aux tomates séchées.",
                  "ladate"=>"2013-11-02 21:15:00"
                ),
              5 => array(
                  "titre"=>"Madeleines au beurre et citrons",
                  "letexte"=>"De quoi entamer comme il se doit les incontournables recettes bouchères et charcutières, sans stress et sans prise de tête !
        		    Impossible de se tromper avec un sandwich au jambon et crudités, pas question de zapper le club sandwich au brie et salam.",
                  "ladate"=>"2013-11-02 21:15:00"
                ),
              6 => array(
                "titre"=>"Couscous au citron rouge",
                "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois.
              Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                "ladate"=>"2013-11-02 21:15:00",
              ),
              7 => array(
                  "titre"=>"Poissons empoisonnés à l'arsenic",
                  "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois.
                Plutôt que d'écrire plusieurs fois le même morceau de code,
				        on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.
				        De quoi entamer comme il se doit les incontournables recettes bouchères et charcutières, sans stress et sans prise de tête !
				        Impossible de se tromper avec un sandwich au jambon et crudités, pas question de zapper le club sandwich au brie et salami",
                "ladate"=>"2013-11-02 21:15:00"
                ),
              8 => array(
                  "titre"=>"Les septs citrons à la mangue bleu mauve",
                  "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois.
                Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction,
		            et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                  "ladate"=>"2013-11-02 21:15:00"
                ),
              9 => array(
                  "titre"=>"Neuf",
                  "letexte"=>"De quoi entamer comme il se doit les incontournables recettes bouchères et charcutières, sans stress et sans prise de tête !
				        Impossible de se tromper avec un sandwich au jambon et crudités, pas question de zapper le club sandwich au brie et salamiUne fonction est un bloc de code PHP
				        destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction,
				        et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                  "ladate"=>"2013-11-02 21:15:00"
                ),
              10 => array(
                  "titre"=>"Dix",
                  "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois.
          		  Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                  "ladate"=>"2013-11-02 21:15:00"
              ),
              11 => array(
                  "titre"=>"Onze",
                  "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                  "ladate"=>"2013-11-02 21:15:00"
              ),
              12 => array(
                  "titre"=>"Douze coup de midi à la sauce piquante",
                  "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                  "ladate"=>"2013-11-02 21:15:00"
              ),
              13 => array(
                  "titre"=>"Treize patates et une sexy cuisinière",
                  "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois.
                Plutôt que d'écrire plusieurs fois le même morceau de code,
                on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                  "ladate"=>"2013-11-02 21:15:00"
              ),
              14 => array(
                  "titre"=>"La sauce ndole à l'eau brulé",
                  "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois.
                Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction,
                et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
                  "ladate"=>"2013-11-02 21:15:00",
                  "Bonjour"=>"essai de qautrieme element"
              )
            );
            echo "<b><br><br>Il existe ";
            echo count($contenu)." tableaux sous-jacents dont :</b>".'<br><br><br>';
            // var_dump($contenu);


            $cpt = 0;
            foreach ($contenu as $contient){
              $pagier1 = count($contient);
              $cpt++;
              foreach ($contient as $key => $value){
                  echo $value . "<br/>" ;
              }
              echo "<br><br>";
            }

            echo "<br><br><br>";

            $cpt = 0;
            foreach ($contenu as $contient){
              $pagier1 = count($contient);
              $cpt++;
              echo 'Le contenu n° '.$cpt." du tableau principal possède ". $pagier1 ." éléments dans la case."."<br><br>";
            }
        ?>



          <h4 id="BoutonsRecettes"></h4>
          <form class="" action="Fonction-Pagination.php?action=form2#BoutonsRecettes" method="get">
            <input class="button1" type="button" name="Recettes1" value="01 à 04 sur 14"><br>
            <input type="button" name="Recettes2" value="05 à 08 sur 14"><br>
            <input type="button" name="Recettes3" value="09 à 12 sur 14"><br>
            <input type="button" name="Recettes4" value="13 à 14 sur 14"><br><br>
            <input type="submit" name="Conf" value="Confirmation"><br>
            <input type="hidden" name="Migfirefox" value="form2"><br>
          </form>

          <?php
            if(isset($_GET['Migfirefox']) == "form2"){
              $conteneur=fread($contenu[1],"11")($_GET['Recette1'])."<br>";
            }
          ?>

    </div>

    <br><br>

    <div class="image">
      <div class="Hex0">
        <div class="Hex1">
          <div class="Hex2">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <a class="btn btn-1">Hover me</a><br><br>
      <a class="btn btn-2">Hover me</a><br><br>
      <a class="btn btn-3">Hover me</a><br><br>
      <a class="btn btn-4">Hover me</a><br><br>
      <a class="btn btn-5">Hover me</a>
    </div>
  </div>

    <div class="formulaireBouton">
      <h3>objet</h3>
    </div>


  </body>
</html>
