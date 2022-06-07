<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="./css/index.css">
  <!-- <link rel="stylesheet" href="../Horloge/Horloge.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>MNS LOC</title>

  <style>
    body {
      background-color: #041937;
    }

    .header-navbar {
      background: #041937;


    }
  </style>
</head>
<form id="all">
  <div id="test">Loading</div>
  <div id="ttt"></div>
</form>

<body>
  <!-- Mise en place du Menu et logo -->
  <header>
    <nav class="navbar navbar-expand-lg navbar">
      <div class="container-fluid">
        <img src="./image/logo-mns-02.png" alt="" id="logo2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
          </li> -->
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="./Contact.html" class="button">Contact</a>
            <a href="./index.html" class="button">Accueil</a>
            </div>
          </form>
        </div>
      </div>
    </nav>
    <br><br>
    <?php if (isset($_SESSION['login']))
    {
      echo '<center><h2>Bonjour '.$_SESSION['login'].'</h2></center>';
    } 
    ?>
    <br><br>
    
    <!-- Mise en place des images est texte -->
    <div id="conteneur">
      <img src="./image/box-2-xxl.png" alt="BOX" id="boximg">
      <h1 class="texte2">MNS LOC</h1>
    </div>
    <div id="conteneur">
      <article>
        <img src="./image/videoprojecteur.jpg" alt="MNS">
        <div class="texte" id="Un">
          <h3>Videoprojecteur</h3>
          <!-- <p>Collaboratively administrate empowered markets via plug-and-play networks.</p> -->
        </div>                
        <button type="button" class="btn btn-outline-info">Fiche technique</button>
        <button onclick="location.href = '../PageLocation.html';">Demande d'emprunt</button>
      </article>
      <article>
        <img src="./image/Ordinateur.jpg" alt="MNS">
        <div class="texte" id="deux">
          <h3>Ordinateur</h3>
          <!-- <p>Dramatically engage seamlessly visualize quality intellectual capital without superior collaboration and
            idea-sharing.</p> -->
          </div>
          <button type="button" class="btn btn-outline-info">Fiche technique</button>
          <button onclick="location.href = '../PageLocation.html';">Demande d'emprunt</button>
        </article>
        <article>
          <img src="./image/Ecrans.jpg" alt="MNS">
          <div class="texte" id="trois">
            <h3>Ecrans</h3>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Vivamus
              sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p> -->
            </div>
            <button type="button" class="btn btn-outline-warning">Fiche technique</button>
            <button onclick="location.href = '../PageLocation.html';">Demande d'emprunt</button>
          </article>
          <article>
            <img src="./image/CasqueVR.jpg" alt="MNS">
            <div class="texte" id="quatre">
              <h3>Casque VR</h3>
              <!-- <p>Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis,
                est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p> -->
              </div>
              <button type="button" class="btn btn-outline-info">Fiche technique</button>
              <button onclick="location.href = '../PageLocation.html';">Demande d'emprunt</button>
            </article>
            <article>
              <img src="./image/webcam.png" alt="MNS">
              <div class="texte" id="cinq">
                <h3>Webcam</h3>
                <!-- <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna
                  mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p> -->
                </div>
                
                <button type="button" class="btn btn-outline-info">Fiche technique</button>
                <button onclick="location.href = '../PageLocation.html';">Demande d'emprunt</button>
              </article>
            </div>
            <p id="text">Par JEAN Maxime, SCARON Félix et VILLENEUVE Alexis</p>
  </header>
</body>
<script src="./js/app.js"></script>
<!-- <script src="../Horloge/Horloge.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>