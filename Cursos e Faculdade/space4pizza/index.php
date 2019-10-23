<?php 
    if(!isset($_GET['idioma'])){ $idioma = "p";} else {$idioma = $_GET['idioma'];};
    require("php/language.php");
    include_once("php/header.php");
    


    if(!isset($_GET['page'])){ $page = 'home';} else {$page = $_GET['page'];};

    if($page =='home'){include("php/home.php");};
    if($page =='history'){include("php/history.php");};
    if($page =='about'){include("php/about.php");};
    if($page =='tradicional'){include("php/tradicional.php");};
    if($page =='special'){include("php/special.php");};
    if($page =='sweet'){include("php/sweet.php");};
    if($page =='store'){include("php/store.php");};
    if($page =='products'){include("php/products.php");};
    if($page =='tips'){include("php/tips.php");};
    if($page =='contacts'){include("php/contacts.php");};   

    include_once("php/footer.php");
?>