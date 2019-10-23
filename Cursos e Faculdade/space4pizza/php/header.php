<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>SPACE 4 PIZZA</title>
<meta charset="utf-8">
<link rel="icon" href="pizzaicon.ico">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
<!--Accesskey -->
<a tabindex='0' href="#conteudo" accesskey="c" style="position:absolute; left:-99999999px;">Pular para o conteúdo [alt]+[c]</a>
<!--bandeirinha-->
<div class="container-fluid" style="background-color:#910000">
    <div class="col-md-10"></div>
    <div class="col-md-2">
   
    <a tabindex='2' href="?<?php if(isset ($_GET['page'])){echo "page=".$_GET['page'];};?>&idioma=p"> <img src="img/p.png" alt="Idioma de Português"></a>
    <a tabindex='3' href="?<?php if(isset ($_GET['page'])){echo "page=".$_GET['page'];};?>&idioma=i"> <img src="img/i.png" alt="Idioma de Inglês"></a>
    <a tabindex='4' href="?<?php if(isset ($_GET['page'])){echo "page=".$_GET['page'];};?>&idioma=e"> <img src="img/e.png" alt="Idioma de Espanhol"></a>
    </div>
</div>
<!-- Menu -->
<div class="container-fluid" style="background-color:#910000">
    <div class="col-md-8 col-sm-4">
        <a href='index.php?<?php if(isset ($_GET['idioma'])){echo "idioma=".$_GET['idioma'];};?>' style="color:#000" <?php if( $page = 'index') echo 'class="active"'?>><img tabindex='1' src="img/logo.png" alt="logo do portal Space 4 Pizza" style="margin:5px 0px 5px 0px;"></a>
    </div>
    <div class="col-md-4 col-sm-8" style="margin:7px 0px 7px 0px">
        <form class="navbar-form navbar-right" role="search">
    <div class="input-group add-on">
      <input tabindex='5' class="form-control" placeholder="<?php echo $vetidioma[2]; ?>..." name="?page=result<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>&resultado" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
        </form>
    </div>
    <div class="col-md-12 col-sm-12">
        <nav class="navbar navbar-default" style="background-color:#ffffff;">
         <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a tabindex='6' class="navbar-brand" href='index.php?<?php if(isset ($_GET['idioma'])){echo "idioma=".$_GET['idioma'];};?>' style="color:#000" <?php if( $page = 'index') echo 'class="active"'?>><span class="glyphicon glyphicon-home"></span>&nbsp<?php echo $vetidioma[1][0]; ?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li tabindex='7' class="dropdown">
                <a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#000" ><?php echo $vetidioma[1][1]; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex='8' href="index.php?page=history<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000"><?php echo $vetidioma[1][7]; ?></a></li>
                  <li><a tabindex='9' href="index.php?page=about<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000"><?php echo $vetidioma[1][8]; ?></a></li>
                </ul>
              </li>
                <li tabindex='10'  class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#000"><?php echo $vetidioma[1][2]; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex='11' href="index.php?page=tradicional<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000" ><?php echo $vetidioma[1][9]; ?></a></li>
                  <li><a tabindex='12' href="index.php?page=special<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000" ><?php echo $vetidioma[1][10]; ?></a></li>
                  <li><a tabindex='13' href="index.php?page=sweet<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000" ><?php echo $vetidioma[1][11]; ?></a></li>
                </ul>
              </li>
              <li><a tabindex='14' href="index.php?page=store<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000"><?php echo $vetidioma[1][3]; ?></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a tabindex='15' href="index.php?page=products<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000"> <?php echo $vetidioma[1][4]; ?></a></li>
              <li><a tabindex='16' href="index.php?page=tips<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000" > <?php echo $vetidioma[1][5]; ?></a></li>
              <li><a tabindex='17' href="index.php?page=contacts<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>" style="color:#000" > <?php echo $vetidioma[1][6]; ?></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
</div>