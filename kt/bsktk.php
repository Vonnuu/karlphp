
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP ja Bootstrap KT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- update existing v5 CSS to use v6 icons and assets -->
<link href="/your-path-to-fontawesome/css/v5-font-face.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Kmasing.ee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="minuMenyy">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-darkfw-bold me-3" href="bs4.html">Avaleht</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="tooted.html">Tooted</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="teenused.html">Teenused</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="kontakt.html">Kontakt</a>
            </li>
            <li>
            <i class="fa-solid fa-bag-shopping"></i>
            </li>
          </ul>
          
            </div>
        </div>
    </div>
</nav>
</div>
</div>
<?php
$rndmImages = ["https://metshein.com/kordamine/bs/Ylesanne02_ePood/img/b17.jpg", "https://metshein.com/kordamine/bs/Ylesanne02_ePood/img/b10.jpg", "https://metshein.com/kordamine/bs/Ylesanne02_ePood/img/b4.jpg", "https://metshein.com/kordamine/bs/Ylesanne02_ePood/img/b7.jpg", "https://metshein.com/kordamine/bs/Ylesanne02_ePood/img/b18.jpg"];
$rndmTexts = [
    "<p class=\"card-text text-light mb-0\"><b>parim pakkumine</b></p>
    <h2 class=\"card-text text-light mb-0\">osta 1 saad 1</h2>
    <p class=\"card-text text-light mb-0\">The best classic dress is on sale at cora</p>",
    "<p class=\"card-text text-light mb-0\"><b>kevad/suvi</b></p>
    <h2 class=\"card-text text-light mb-0\">kõik rohelised</h2>
    <p class=\"card-text text-light mb-0\">20% sootsamalt</p>",
    "<p class=\"card-text text-light mb-0\"><b>sügis/talv</b></p>
    <h2 class=\"card-text text-light mb-0\">joped meestele ja naistele</h2>
    <p class=\"card-text text-light mb-0\">30% sootsamalt</p>",
    "<p class=\"card-text text-light mb-0\"><b>KÕRVARÕNGAD</b></p>
    <h2 class=\"card-text text-light mb-0\">ägedad kõrvarõngad</h2>
    <p class=\"card-text text-light mb-0\">Need on ilusad(vist)</p>",
    "<p class=\"card-text text-light mb-0\"><b>osta 2 saad 10</b></p>
    <h2 class=\"card-text text-light mb-0\">kinkekottid juhhu</h2>
    <p class=\"card-text text-light mb-0\">Neid on erinevaid värve</p>"
];
$rndmImage = $rndmImages[array_rand($rndmImages)];
$rndmImage2 = $rndmImages[array_rand($rndmImages)];
$rndmText = $rndmTexts[array_rand($rndmTexts)];
$rndmText2 = $rndmTexts[array_rand($rndmTexts)];
?>

<div class="container">
    <div class="row">
        <div style="height: 300px;width: 48%; background-image: url('<?php echo $rndmImage; ?>');" class="col-sm-6 mt-4 p-3 mr-4">
            <?php echo $rndmText; ?>
        </div>
        <div style="height: 300px; width: 48%; background-image: url('<?php echo $rndmImage2; ?>');" class="col-sm-6 mt-4 p-3 ml-4">
            <?php echo $rndmText2; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h1 class="fw-bold text-center mt-5">Parimad Pakkumised

<div class="container">
    <div class="row">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<br>
