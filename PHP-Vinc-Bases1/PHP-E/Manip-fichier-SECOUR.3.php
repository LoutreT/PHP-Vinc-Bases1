<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->
    <!--<link rel="stylesheet" href="./bootstrap-3.2.0-dist/css/demovincent.css">     Il faut mettre le lien de son dossier personnalisé sous le lien dossier de bootstrap -->
    <link rel="stylesheet" href="./Manip-fichier.css">


    <title>Manip de fichier en PHP</title>

  </head>
  <body>

    <div id="Base">

      <div class="row-one">
        <div class="li-Menu"> Menu </div>
        <div class="li-Exo"> Exercices PHP </div>
        <div class="li-Cours"> Cours PHP de Emily </div>
        <div class="Bouton"> Refresh </div>
      </div>
<hr>
      <div class="row-2">
      <h5>PAR EXEMPLE, CONSIDERONS QUE :
      <b>Pour le nom du fichier prenons texte.txt, le mode correspond à ce que l'on veut faire :</b><br>

      <br>
        "r" pour indiquer la lecture et <br>
        "a" ou "w" pour l'écriture.<br>
        "a" signifie qu'on ouvre et on se place à la fin du fichier et<br>
        "w" au début.<br>
      <br>
      A ces trois lettres on peut rajouter le signe "+" pour indiquer qu'il faut créer le <br>
      fichier s'il n'existe pas. Pour les fichiers de type binaire on rajoute aussi "b", donc<br>
      <h3>< ?php</h3>
      <br><b>POUR OUVRIR UN FICHIER PARMIS PLUSIEURS FICHIERS :<br>
      <h6>$fp=fopen("texte.txt","w+");</h6>
      <br>POUR ECRIRE DANS UN FICHIER (MAIS IL CREERA LE FICHIER S'IL N'EXISTE PAS):
      <h6>fwrite (ressource fichier, chaîne données [,entier longueur])</h6>
      <br>POUR REFERMER LE FICHIER APRES TRAITEMENT AUTOMATIQUE PAR L'INTERMEDIAIRE DE LA PROGRAMMATION PHP :
      <h6>fclose($fp);</h6> </b>
      <h3>? ></h3><br>
      <br>
      cela va créer un fichier texte.txt. Pour l'instant le fichier est vide.<br>
      Remarquez qu'un fois qu'on a fini de travailler sur un fichier, on le ferme avec fclose();"<br>
      <br>
      </h5>
      </div>
      <br>

      <div class="row-3">

      <br>

      <form class="" action="" method="POST">
Text:   <input type="text" name="texte" value="texte"><br><br>
Email:  <input type="email" name="email" value="email"><br><br> <!-- IL FAUT REMPLIR NAME ET PAS FORCEMENT VAL -->
Nombre: <input type="number" name="number" value="number"><br><br>
<!-- Image:  <input type="image" name="" value="image"><br><br> -->
<!-- fichier:<input type="file" name="" value="file"><br><br> -->
        <input type="submit" name="" value="Confirmer"><br><br>
        <input type="hidden" name="Migfirefox" value="form2"><br><br>
      </form>

<b>EXEMPLE de remplissage de la feuille avec la date d'aujourd'hui, le jour où s'ouvre ce fichier :</b>
  <h4>
        <?php
          // set timezone_location_get
          date_default_timezone_set('Europe/Paris');
          // display the date and time with a greeting
          function show_date(){
            return date('l, j F H:i');
          }
          echo show_date()."<br>";     // afficher date et heure

          $pagename = isset($_POST["texte"]) ? $_POST["texte"] : "no text";
          $email = isset($_POST["email"]) ? $_POST["email"] : "no E-mail";
          $number = isset($_POST["number"]) ? $_POST["number"] : "no number";
      //  $image = isset($_POST["image"]) ? $_POST["image"] : "pas d'image" ;

          $pagenames = "z_mypage";    //le nom du fichier à appeler.
          $emails = "z_emails";
          $numbers = "z_numbers";
      //  $images = "z_images";

          $newFileName = './'.$pagenames.".php"; //Le type de fichier en php à compléter.
          $newemail = './'.$emails.".php";
          $newnumber = './'.$numbers.".php";
      //  $newimage = './'.$images.".php";

          $moment = date('l, j F H:i');     //le contenu dynamique (l'heure) à mettre dans le fichier
          $newFileContent = "Testé le :".$moment ." ". $_POST["texte"] ."<br><br>"; // le contenu statique, inerte à mettre dans le fichier sélectionné
          $newFileMail = "Stocké le ".$moment." par l'adresse e-mail suivante ".($_POST["email"])."<br><br>";
          $newFileNumber = "Stocké le ".$moment." par le numéro suivant ".$_POST["number"]."<br><br>";
      //  $newFileimage = "Stocké le ".$moment." l'image suivante ".$image."<br><br>";

          $myfile = fopen($newFileName, "a+");
          fwrite($myfile, $newFileContent);

          $mycontactemail = fopen($newemail, "a+");
          fwrite($mycontactemail, $newFileMail);

          $mydoc = fopen($newnumber, "a+");
          fwrite($mydoc, $newFileNumber);

        ?>
        </h4>
          <!--  $mypicture = fopen($newimage, "a+");
                fwrite($mypicture, $newFileimage);

                if (file_put_contents($newFileName, $newFileContent) !== false) {
                echo "File created (" . basename($newFileName) . ")";
                } else {
                echo "Cannot create file (" . basename($newFileName) . ")";
                }

                copy($source, $dest) // Copie le fichier $source vers $dest et retourne true si succès ou false si echec -->


        <br>

        <br>
        <button id="refresh" onclick="document.location.reload(false)"> Rafraichir </button>

      </div>
      </h3>


      <div class="changements">
        <h5 id="part2"></h5>
        <h5>Voila mon fichier texte.txt contient du texte.
        <br>Voyons d'autres méthodes d'ajout :
        <br>
        <br>On peut aussi utiliser <b>fputs();
        <br>
        <br>$fp=fopen("texte.txt","a");
        <br>fputs($fp," est :");
        <br>fputs($fp,"\n");
        <br>fputs($fp,"cette portion de texte.");
        <br>fclose($fp)</b>;
        <br>
        a complété le formulaire et ESPACE A LA LIGNE
        <form class="" action="#part2" method="post">
          <input type="text" name="" value="">
          <input type="button" name="" value="OK, return!">
          <input type="hidden" name="Foxtrot" value="form2">
        </form>

          <?php
            // $pagename = isset($_POST["texte"]);
            $pagenames = "z_mypage";
            $newFileName = './'.$pagenames.".php";

            $myfile=fopen($newFileName,"a");
            fputs($myfile,"<br>");
            fputs($myfile," a complété le formulaire dans la partie 1.");
            fputs($myfile,"<br><hr><br>");
            fclose($myfile);
          ?>

        <br>On voit ici que fputs($fp,"\n"); sert à sauter une ligne. Il existe fseek(); qui permet de deplacer le pointeur ou on veut dans le fichier.
        <br>Voyons maintenant comment récupérer les infomations contenues dans le fichier "texte.txt"
        <br>
        <br>Pour lire le fichier tous simplement on fait :
        <br>
        <br><b>$fp = fopen("fichier.txt","r")</b>;
        <br>
        <br>Apres tout dépend de ce qu'on veut récupérer : **fread();**peut récupérer la quantité de caractères qu'on veut.
        <br>
        <br><b>$fichier_texte=fread($fp,"11");
        <br>echo"$fichier_texte"</b>;
        <br>
        <?php
          $fichier_myfile = fread ($newFileMail,"50");
          echo "$fichier_myfile";
        ?>
        <br><br>
        <br>ceci provoquera l'affichage de "Mon premier", il y a ausi fgets();
        <br>
        <br><b>$fichier_texte=fgets($fp,1024);
        <br>echo"$fichier_texte"</b>;
        <br>
        <br><b>fgets()</b>; prend la ligne complète soit "Mon premier ajout".
        <br>
        <br>
        <br>copy($source, $dest) Copie le fichier $source vers $dest et retourne true si succès ou false si echec</h5><br>
        <br></h5>

        <?php



        ?>
        <br>
        <h5>rename($source, $dest) Renomme le fichier $source en $dest et retourne true si succès ou false si echec</h5><br>
        <br>

      </div>



    </div>




    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script> -->

  </body>
</html>
