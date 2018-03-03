

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IntroductionPHP</title>
  </head>
  <body>

  <p><b>Exercices</b>
  Prends quelques minutes et joue avec ton fichier index.php. Mets-y une image.
  Crée une deuxième page dans le même dossier (cats.php) et ajoute un peu de contenu
  et surtout un lien sur chacune des deux pages permettant de passer de l'une à l'autre.
  Fait? Bravo, tu viens de créer ton premier site internet! </p>
    <br>
    <br>
    <a href="https://servimg.com/view/16993513/742" target="_blank" ><img  src="https://i68.servimg.com/u/f68/16/99/35/13/face_a11.jpg" border="0" alt="Image hébergée par servimg.com" /></a>
    <br>
    <br>
    <a href="https://servimg.com/view/16993513/439" target="_blank" ><img src="https://i19.servimg.com/u/f19/16/99/35/13/h27x_t10.jpg" border="0" alt="" /></a>
    <br>
    <br>
    <a href="https://servimg.com/view/16993513/246" target="_blank" ><img src="https://i56.servimg.com/u/f56/16/99/35/13/h27tou10.jpg" border="0" alt="" /></a>





  <p>Fait? Bravo, tu viens de créer ton premier site internet! </p>


  </body>
</html> -->
<br>
<br>
<input type="button" value="Aucun chat" class="homebutton" id="btnHome"
onClick="document.location.href='cats.php'" />


<?php
include('cats.php');
?>


<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/images.css">

    <title>IntroductionPHP</title>

  </head>
  <body>
    <br>
    <br>
    <p><b>Exercices :</b><br>
    <br>
    Prends quelques minutes et joue avec ton fichier index.php. <br>
    <br>Mets-y une image.<br>
    <br>Crée une deuxième page dans le même dossier (cats.php) et <br>
    <br>ajoute un peu de contenu et surtout un lien sur chacune des <br>
    <br>deux pages permettant de passer de l'une à l'autre.<br>
    <br>Fait? Bravo, tu viens de créer ton premier site internet! </p>
    <br>
    <br>
    <div id="include">
      <div class="image1">
        <a href="https://servimg.com/view/16993513/742" target="_blank" ><img src="https://i68.servimg.com/u/f68/16/99/35/13/face_a11.jpg" alt="E30 HARTGE";></a>
      </div>
      <br>
      <br>
      <div class="image2">
        <a href="https://servimg.com/view/16993513/439" target="_blank" ><img src="https://i19.servimg.com/u/f19/16/99/35/13/h27x_t10.jpg" alt="HARTGE H27X Touring";></a>
      </div>
      <br>
      <!-- <br> -->
      <div class="image3">
        <a href="https://servimg.com/view/16993513/246" target="_blank" ><img src="https://i56.servimg.com/u/f56/16/99/35/13/h27tou10.jpg" alt="H27X Touring E30";></a>
      </div>
      <br>
      <br>
      <div class="image4">
        <a href="https://servimg.com/view/16993513/747" target="_blank" ><img src="https://i68.servimg.com/u/f68/16/99/35/13/img_2911.jpg" alt="BMW";></a>
      </div>

    </div>
 <!-- <img src="/images/html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
 <img src="html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
 <img src="html5.gif" alt="HTML5 Icon" width="128" height="128"> -->



  <p>Fait? Bravo, tu viens de créer ton premier site internet! </p>




  <h2>PHP Form Validation Example</h2>
  required field
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>


  <?php
  echo "<h2>Your Input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $comment;
  echo "<br>";
  echo $gender;
  ?>

  </body>
</html>
