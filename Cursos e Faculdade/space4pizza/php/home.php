 <article>
    <div class="container-fluid" id="conteudo">
        <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
            </ol>
            
            <!-- Wrapper fo Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/pizza1.jpg" alt="Pizza">
                        <div class="carousel-caption">
                            <h3><?php echo $vetidioma[7]?></h3>
                            <p><?php echo $vetidioma[8]?></p>
                        </div>
                </div>
                <div class="item">
                    <img src="img/pizza2.jpg" alt="Pizza">
                        <div class="carousel-caption">
                            <h3><?php echo $vetidioma[9]?></h3>
                            <p><?php echo $vetidioma[10]?></p>
                        </div> 
                </div>
                <div class="item">
                    <img src="img/pizza3.jpg" alt="Pizza">
                        <div class="carousel-caption">
                            <h3><?php echo $vetidioma[11]?></h3>
                            <p><?php echo $vetidioma[12]?></p>
                        </div>
                </div>
                <div class="item">
                    <img src="img/pizza4.jpg" alt="Pizza">
                        <div class="carousel-caption">
                            <h3><?php echo $vetidioma[13]?></h3>
                            <p><?php echo $vetidioma[14]?></p>
                        </div>
                </div>
            </div>
            <!-- Left and Right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
    </div>
</article>
<!-- Links para outras páginas -->
<section>
    <div class="container" >
        <div class="col-md-6 col-sm-12"align="center">
        <div class="row"><div class="col-md-12"><h2 tabindex='18' style="text-align:center;"><?php echo $vetidioma[5]?></h2></div></div>
        <div class="row">
        <div class="col-md-6 col-sm-6">
            <img tabindex='19' src="img/pizzas/4queijos.jpg" class="img-rounded img-responsive" alt="imagem da Pizza" width="300px" height="200">
            <a tabindex='20' href="?page=special<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>"><button class="btn btn-lg btn-primary" style="z-index: 9999;background-color:#910000;"><?php echo $vetidioma[15]?></button></a> 
        </div>
        <div class="col-md-6 col-sm-6">
            <img tabindex='21' src="img/pizzas/goiabada.jpg" class="img-rounded img-responsive" alt="imagem da Pizza" width="300px" height="200">
            <a tabindex='22' href="?page=sweet<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>"><button class="btn btn-lg btn-primary" style="z-index: 9999;background-color:#910000;"><?php echo $vetidioma[15]?></button></a> 
        </div>
   
        </div>
            
        <div class="row">
        <div class="col-md-6 col-sm-6">
            <img tabindex='23' src="img/pizzas/americana.jpg" class="img-rounded img-responsive" alt="imagem da Pizza" width="300px" height="200">
            <a tabindex='24'  href="?page=special<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>"><button class="btn btn-lg btn-primary" style="z-index: 9999;background-color:#910000;"><?php echo $vetidioma[15]?></button></a> 
        </div>
        
        <div class="col-md-6 col-sm-6">
            <img tabindex='25' src="img/pizzas/vegetariana.jpg" class="img-rounded img-responsive" alt="imagem da Pizza" width="300px" height="200">
            <a tabindex='26' href="?page=special<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>"><button class="btn btn-lg btn-primary" style="z-index: 9999;background-color:#910000;"><?php echo $vetidioma[15]?></button></a> 
        </div>
        </div>
        </div>
        
        <!--Noticias e Dicas-->
        <div class="col-md-6">
        <div class="col-md-12"><h2 tabindex='27' style="text-align:center;"><?php echo $vetidioma[6]?></h2></div>
        <div class="row"></div>
        <div class="col-md-12 col-md-offset-1 panel" style="background-color:#9f0000;padding:10px;">
                <img tabindex='29' src="img/new2.jpg" class="home img-rounded img-responsive ">
            <a tabindex='28' href="?page=tips<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>"><h2 class="homemanchete"><?php echo $vetidioma[35][2]?></h2></a>
            </div>
        
        <div class="row"></div>
        <div class="col-md-12 col-md-offset-1 panel" style="background-color:#9f0000;padding:10px;">
                <img tabindex='31'  src="img/new3.jpg" class="home img-rounded img-responsive " width="600" height="200">
                <a tabindex='30' href="?page=tips<?php if(isset ($_GET['idioma'])){echo "&idioma=".$_GET['idioma'];};?>"><h2 class="homemanchete"><?php echo $vetidioma[35][4]?></h2></a> 
        
        </div>
        </div>
    </div>
         
</section>


