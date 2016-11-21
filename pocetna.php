<?php
include ('header.php');?><br><br><br>
<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slider1.jpg');"></div>
                <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h1>
                            	<span><strong>AUDICIJA 2016.</strong></span>
                            </h1>
                            <br>
                            <h2>
                            	<span>IFA "Perla" vrši upis novih članova</span>
                            </h2>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="audicija.php">PRIJAVI SE</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
            
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slika02.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slider3.jpg');"></div>
                <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h1>
                            	<span>STUPITE U KONTAKT</span>
                            </h1>
                            <br>
                            <h2>
                            	<span>SA NAMA</span>
                            </h2>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="kontakt.php">KONTAKTIRAJTE NAS</a></div>
                        </div>
                    
            </div>
            </div>
			
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
	<br><br>
	<script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>
	
	
	<div class="row">
        <div class="container" id="program">
        <h1><b>REPERTOAR</b></h1>
        <hr>
        <p>
        Izvođacki program ansambla ,,Perla“<br/> broji više od 30 koreografija<br/>
        izvorno-srpskog, balkanskog, ciganskog i internacionalnog sadržaja, <br/>čiji su autori istaknuti
        koreografi<br/>Milan Andrijanić, dr Dragoslav Džadžević i drugi...

        </p>

        <div class="col-md-12" id="program-slike">
        <div class="col-md-3"><img src="img/program01.png" alt="..." class="img-circle" width="200" height="200"> <h4>&#9900;&#9900;&#9900;IZVORNO-SRPSKI&#9900;&#9900;&#9900;</h4></div>
             <div class="col-md-3"><img src="img/program03.png" alt="..." class="img-circle" width="200" height="200"><h4>&#9900;&#9900;&#9900;BALKANSKI&#9900;&#9900;&#9900;</h4></div>
            <div class="col-md-3"><img src="img/program02.png" alt="..." class="img-circle" width="200" height="200"><h4>&#9900;&#9900;&#9900;CIGANSKI&#9900;&#9900;&#9900;</h4></div>
            <div class="col-md-3"><img src="img/program04.png" alt="..." class="img-circle" width="200" height="200"><h4>&#9900;&#9900;&#9900;INTERNACIONALNI&#9900;&#9900;&#9900;</h4></div>
        </div>

        </div>
    </div>





    <div class="row" id="citat">
        <div class="container" >
                  <p id="citat3"><h2> &#9900; &#9900; &#9899; &#9900; &#9900;</h2></p>
                  
                     <p id="citat2">
                    Radujte se igri, svakom zajedničkom trenutku koji ćete provesti. <br/>
                Radujte se životu, jer vas on svakoga dana uči da ste pobednici. <br/>
                Ali samo ako učinite sve sto je do vas, punim plućima, iskreno I punim srcem. 
                    I sa ljubavlju, koja je najvažnija.<br/>
                    Sve drugo će doći, pre, ili kasnije I biće rezultat te ljubavi.
                    </p>
                    
                    <i>Milan Andrijanić</i>
        </div>
    </div>
	<?php include('vesti.php');?>


<?php include('footer.php');?>




