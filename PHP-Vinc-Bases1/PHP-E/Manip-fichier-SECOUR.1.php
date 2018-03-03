<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->
    <!--<link rel="stylesheet" href="./bootstrap-3.2.0-dist/css/demovincent.css">     Il faut mettre le lien de son dossier personnalisé sous le lien dossier de bootstrap -->
    <link rel="stylesheet" href="./CSS-Emily/Manip-fichier.css">


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
        <input type="button" name="Recettes1" value="">
        <input type="submit" name="" value="Confirmer"><br><br>
        <input type="hidden" name="Migfirefox" value="form2"><br><br>
      </form>

<b>EXEMPLE de remplissage de la feuille avec la date d'aujourd'hui, le jour où s'ouvre ce fichier :</b>
  <h4>
        <?php
        if (isset($_POST['Migfirefox'])=='form2')
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
          <input type="text" name="Pourufoputs" value="">Que voudriez-vous compléter dans texte ?
          <input type="submit" name="" value="OK, return!">
          <input type="hidden" name="" value="">
        </form>

           $file = fopen("/home/test/test.txt","r");

          <?php
            if(isset($_POST['Pourufoputs'])){
              $lunch = ($_POST["Pourufoputs"]);
              // $nombre2=$_POST["number2"];

            // $pagename = isset($_POST["Pourfputs"]) ? $_POST["Pourfputs"] : "no text";
            // $pagename = isset($_POST["texte"]);

            $sufputs = fopen($newFileName,"a");
            fputs($sufputs,"<br>");
            fputs($sufputs,$lunch);
            fputs($sufputs,"<br><hr><br>");
            // fclose($lunch);

            echo $lunch ;
            }
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
        <br><b>
        <?php
          $emails = "test2";
          $newemail = @fopen('./'.$emails.".php", "r");
          $fichier_myfile = fread($newemail,20);
          echo $fichier_myfile;
        ?></b>
        <br><br>
        <br>ceci provoquera l'affichage de "Mon premier", il y a ausi fgets();
        <br>
        <br><b>$fichier_texte=fgets($fp,1024);
        <br>echo"$fichier_texte"</b>;
        <br>
        <br><b>fgets()</b>; prend la ligne complète soit "Mon premier ajout".
        <br>
        <?php
          $emails = "test2";
          $newemail = @fopen('./'.$emails.".php", "r");
          $fichier_texte=fgets($newemail);
          echo $fichier_texte ;
        ?>

      </div>

      <div class="combinaisons">
        <h2 id=partunlink>Les formules pour les fichiers</h2>
        <br><hr><br>
        <h3><b>copy($source, $dest)</b> : Copie le fichier $source vers $dest et retourne true si succès ou false si echec</h3>
        <br><hr><br>
        <h3><b>rename($source, $dest)</b> : Renomme le fichier $source en $dest et retourne true si succès ou false si echec</h3>
        <br><br>
          <form class="" action="#partunlink" method="post">
            ici, quel nouveau nom voulez-vous donner au fichier d'e-mails ?<br><br>
            <input type="text" name="renamefile" value="">
            <input type="submit" name="" value="Ok, return">
            <input type="hidden" name="renamefileact" value="formrename">
          </form>
        <br>
          <?php
            if(isset($_POST['renamefileact'])=='formrename'){
              if('z_emails.php'== True){
              $emails = "z_emails";
              $newemail = './'.$emails.".php";
              $emailsil = $_POST['renamefile'];
              $newemailsil = './'.$emailsil.".php";
              rename($newemail,$newemailsil);
              echo "nouveau nom du fichier : ".($_POST['renamefile']);
            }else if ('z_emails.php'== False) {
              unset($_POST);
            }
            }

          ?>
      <br><hr><br>
      <h3><strong>unlink($file)</strong>  : Supprime le fichier $file et retourne true si succès ou false si echec</h3>
        <br><form class="" action="#partunlink" method="get">
      <br><br><input type="radio" name="textes1" value="textes1"> Supprimer fichier texte (z_mypage.php)
      <br><br><input type="radio" name="emails1" value="emails1"> Supprimer fichier e-mails (z_emails.php)
      <br><br><input type="radio" name="nombres1" value="nombres1"> Supprimer fichier nombres (z_numbers.php)
      <br><br><h4><input type="submit" name="" value="OK, return!">  Avec les boutons radio on ne peut supprimer qu'un seul élément !</h4>
              <input type="hidden" name="Foxtrotiit" value="formunlink">
            </form>

            <form class="" action="#partunlink" method="get">
      <br><br><input type="checkbox" name="textes1" value="textes1"> Supprimer fichier texte (z_mypage.php)
      <br><br><input type="checkbox" name="emails1" value="emails1"> Supprimer fichier e-mails (z_emails.php)
      <br><br><input type="checkbox" name="nombres1" value="nombres1"> Supprimer fichier nombres (z_numbers.php)
      <br><br><h4><input type="submit" name=""          value="OK, return!">  Avec les checkpoint on peut supprimer plusieurs fichiers !</h4>
              <input type="hidden" name="Foxtrotoot" value="formnumlink">
            </form>

          <?php
            if(isset($_GET['Foxtrotiit']) == "formunlink"){
              if ($_GET["textes1"]){
                unlink('z_mypage.php');
              }else if($_GET["emails1"]){
                unlink('z_emails.php');
              }else if($_GET["nombres1"]){
                unlink('z_numbers.php');
              }
            }

            // unset('textes1','emails1','nombres1');

            if(isset($_GET['Foxtrotoot']) == "formnumlink"){
              if($_GET["textes1"]){
                unlink('z_mypage.php');
              }
            }
            if(isset($_GET['Foxtrotoot']) == "formnumlink"){
              if($_GET["emails1"]){
                unlink('z_emails.php');
              }
            }
            if(isset($_GET['Foxtrotoot']) == "formnumlink"){
              if($_GET["nombres1"]){
                unlink('z_numbers.php');
              }
            }
          ?>

        <br><hr><br>
        <h3><b>mkdir($dir, $mode)</b> : Créée le dossier $dir avec les droits unix $mode (exprimés en octal) et retourne true si succès ou false si echec.</h3>
        <br><hr><br>
        <h3><b>rmdir($dir)</b> : Supprime le dossier $dir et retourne true si succès ou false si echec</h3>
        <br><hr><br>
        <h3><b>fileatime($file)</b> : Retourne la date à laquelle le fichier $file a été accédé pour la dernière fois ou false si échec</h3>
        <br><hr><br>
        <h3><b>filectime($file)</b> : Retourne l'heure à laquelle le fichier $file a été accédé pour la dernière fois ou false si échec</h3>
        <br><hr><br>
        <h3><b>filemtime($file)</b> : Retourne la date de dernière modification du fichier $file ou false si échec</h3>
        <br><hr><br>
        <h3><b>fileperms($file)</b> : Retourne les permissions associées au fichier $file ou false si échec</h3>
        <br><hr><br>
        <h3 id=size><b>filesize($file)</b> : Retourne la taille du fichier $file (en octets) ou false si échec</h3>
            <form class="" action="Manip-fichier.php#size" method="get">
      <br><br><input type="radio" name="textes2" value="textes2">  Mesurer en octet taille du fichier texte (z_mypage.php)
      <br><br><input type="radio" name="emails2" value="emails2">  Mesurer en octet taille du fichier E-mails (z_emails.php)
      <br><br><input type="radio" name="nombres2" value="nombres2">  Mesurer en octet taille du fichier nombres (z_numbers.php)
      <br><br><input type="submit" name=""          value="OK, return!">
              <input type="hidden" name="Foxtrottuut" value="formsizefile">
            </form>

          <?php
            if(isset($_GET['Foxtrottuut'])=='formsizefile'){
              // $sizetexte = ($_GET["textes1"]){
              if ($_GET["textes2"]){
                echo filesize('z_mypage.php');
              }else if($_GET["emails2"]){
                echo filesize('z_emails.php');
              }else if($_GET["nombres2"]){
                echo filesize('z_numbers.php');
              }
            }
          ?>


        <br><hr><br>
        <h3><b>filetype($file) </b> : Retourne le type du fichier $file (fifo, char, dir, block, link, file, unknown) ou false si échec</h3>
        <br><hr><br>
        <h3><b>is_dir($file) </b> : Retourne true si $file est un répertoire ou false sinon</h3>
        <br><hr><br>
        <h3><b>is_executable($file) </b> : Retourne true si $file est exécutable ou false sinon</h3>
        <br><hr><br>
        <h3><b>is_file($file) </b> : Retourne true si $file est un fichier ou false sinon</h3>
        <br><hr><br>
        <h3><b>is_link($file) </b> : Retourne true si $file est un lien symbolique ou false sinon</h3>
        <br><hr><br>
        <h3><b>is_readable($file) </b> : Retourne true si $file est accessible en lecture ou false sinon</h3>
        <br><hr><br>
        <h3><b>is_writable($file) </b>Retourne true si $file est accessible en écriture ou false sinon</h3>
        <br><hr><br>
        <h3><b>touch($file) </b>Change la date de dernière modification du fichier $file en maintenant</h3>
        <br><hr><br>

      </div>

    </div>




    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script> -->

  </body>
</html>
