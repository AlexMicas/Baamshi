<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
  <!--Favicon-->
  <link rel="shortcut icon" href=".ico">
  <!-- Reset mise en page -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Feuilles de style-->
  <link rel="stylesheet" href="css/contact.css">
  <!-- Framework materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Fonts Icones google -->
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <!-- Logo -->
    <div id="logo" class="center-align">
      <img src="images/1Logo_BORDEAU.png" alt="logo">
    </div>

    <!-- Formulaire -->
    <div class="row">
      <div class="col s4 m4 l4" id="carte">
        <br><br>
        <form action="" method="post">
          <label for="">Votre nom</label>
          <input type="text" name="nom" required><br><br>
          <label for="">Votre email</label>
          <input type="email" name="email" required>
          <label for="">Votre message</label>
          <textarea name="message" required></textarea><br><br>
          <input type="submit">
        </form>
      </div>
    </div>

  <?php
          if(isset($_POST['message'])){
              $position_arobase=strpos($_POST['email'],'@');
              if($position_arobase===false)
                  echo '<p>Votre email doit comporter un arobase.</p>';
              else {
                  $retour=mail('alex.micas@free.fr','Envoi depuis page Contact', $_POST['message'], 'From : '.$_POST['email']);
                  if($retour)
                      echo '<p>Votre message a été envoyé.</p>';
                  else
                      echo '<p>Erreur.</p>';
              }
          }
          ?>





</body>
<script src="Script/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
