
<?php include('header.php');?>

<div class="test">
					
                   <div class="fff" id="neparni4">
								<div class="thumbnail">
									<a href="aktuelnosti.php"><img src="img/01.jpg"  alt="" class="vestislika"></a>
								</div>
								<div class="caption">
									<h4>BELGIJA 2016</h4><hr>
									<p>Uspešna turneja na CIOFF-ovom festivalu folklora!</p>
									<a href="aktuelnosti.php" class="btn btn-default">SAZNAJ VIŠE</a>
								</div>
                            </div>
							<div class="fff" id="parni">
								<div class="thumbnail">
									<a href="aktuelnosti.php"><img src="img/04.jpg"  alt="" class="vestislika"></a>
								</div>
								<div class="caption">
									<h4>PERLA U RUSKOM DOMU</h4><hr>
									<p>Kozačka svetosavska akademija 28.1.2016</p>

									<a href="aktuelnosti.php" class="btn btn-default">SAZNAJ VIŠE</a>
								</div>
                            </div>
							<div class="fff" id="neparni3">
								<div class="thumbnail">
									<a href="#"><img src="img/02.jpg" alt="" class="vestislika"></a>
								</div>
								<div class="caption">
									<h4>UK PALILULA</h4><hr>
									<p>Prvi izlazak na scenu 30. Decembar 2015.</p>

									<a href="#" class="btn btn-default">SAZNAJ VIŠE</a>
								</div>
                            </div>
							<div class="fff" id="parni2">
								<div class="thumbnail">
									<a href="audicija.php"><img src="img/03.jpg" alt="" class="vestislika"></a>
								</div>
								<div class="caption">
									<h4>AUDICIJA 2016.</h4><hr>
									<p>IFA Perla organizuje audicju za <br>prijem novih članova</p>

									<a href="audicija.php" class="btn btn-default">SAZNAJ VIŠE</a>
								</div>
                            </div>
				  
  </div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
 $(document).ready(function(){
    $('.test').slick({
        dots: false,
        infinite: true,
        speed: 2500,
        slidesToShow: 2,
        slidesToScroll: 1,
		autoplay:true,
		easing:'linear',
		pauseOnHover: true,
		autoplaySpeed:1000
		
    });
});</script>