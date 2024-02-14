<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>05 - PHP - Vormid</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>Tere!</h1>
    <nav>
        <menu>
            <a href="avaleht.php?leht=avaleht">Avaleht</a> |
            <a href="avaleht.php?leht=portfoolio">Portfoolio</a> |
            <a href="avaleht.php?leht=kaart">Kaart</a> |
            <a href="avaleht.php?leht=kontakt">Kontakt</a> |
        </menu>
    </nav>

    <?php
    if(!empty($_GET['leht'])) {
        $leht = $_GET['leht'];
        $lubatud = array('avalehy', 'portfoolio', 'kaart', 'kontakt');
        if(in_array($leht, $lubatud)) {
            include($leht . '.php');
        } else {
            echo 'Valitud lehte ei eksisteeri!';
        }
    }
    ?>
</body>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
