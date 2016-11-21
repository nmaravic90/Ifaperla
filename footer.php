

<script src="js/sweetalert/dist/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="js/sweetalert/dist/sweetalert.css">

<script type="text/javascript">
function mailFooter(){


	var email = document.getElementById('maifooter');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    	swal({   title: "Obaveštenje!",   text: "Niste lepo uneli email adresu!",   type: "warning", confirmButtonColor: "#eec923",  confirmButtonText: "Ponovi" });
    	return false;
    }

else{

	swal({   title: "Obaveštenje!",   text: "Uspesno ste se prijavili!",   type: "success", confirmButtonColor: "#eec923",  confirmButtonText: "OK" });
	
	

}

}
</script>




<div class="row" id="social-footer">
<div class="container">
<div class="col-md-12">
<div class="col-md-3 " id="facebook"><a href='https://www.facebook.com/ifaperla/?fref=ts' target="_blank"><i class="fa fa-facebook-f fa-4x" aria-hidden="true"></i></a></div>
<div class="col-md-3 " id="instagram"><a href='https://www.instagram.com/ifaperla/' target="_blank"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i></a></div>
<div class="col-md-3 " id="gplus"><a href='https://plus.google.com/107998501073720363966' target="_blank"><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a></div>
<div class="col-md-3 " id="youtube"><a href='https://www.youtube.com/channel/UChBHbBfhUSo9Tp5UW6URpfg' target="_blank"><i class="fa fa-youtube-play fa-4x" aria-hidden="true"></i></a></div>
</div>
</div>
</div>


<div class="row" id="prijava">
<div class="container">
<p>Prijavite se za obaveštenja putem Email-a</p>
						
						<form method="post" action="php/footer-mail.php">
						<div class="input-group">
      					<input type="email" class="form-control input-lg" name="email" id="maifooter" placeholder="Vaša e-mail adresa...">
      					<span class="input-group-btn">
        				<button class="btn btn-secondary input-lg" type="submit"  onclick="return mailFooter();" id="btn-m">PRIJAVA</button>
     			 		</span>
   		 				</div></form>
</div>
</div>








<div class="row" id="menu-footer">
<div class="container">
<div class="col-md-12">
<div class="col-md-6" id="id">
	<div class="footer-left">

				<p class="footer-company-about">
					<span><img src="img/logo-footer.png" class="img-responsive" width="90" height="60" /></span>
					IFA "Perla" je internacionalni folklorni ansambl koji neguje igru naroda sveta, kojoj se bezuslovno predaje i kojoj se divi. Nošeni idejom o važnosti povezivanja među ljudima, kulturama i nacijama, kao jedinom putu da se međusobno uvažavaju različitosti, raduje tuđem kulturnom bogatstvu, poštujući svoje, grupa mladih ljudi odlučila je da krene putem koji će obogatiti njih same i oplemeniti one kojima će podariti najlepši i najiskreniji deo svoje mladosti

				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/ifaperla" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/ifaperla/" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="https://plus.google.com/107998501073720363966" target="_blank"><i class="fa fa-google-plus"></i></a>
					<a href="https://www.youtube.com/channel/UChBHbBfhUSo9Tp5UW6URpfg" target="_blank"><i class="fa fa-youtube-play"></i></a>

				</div>

			</div>
			</div>


<div class="col-md-3">
		
		
			
				
				<p class="footer-links" id="br">

					&#9900; <a href="pocetna.php"> Početna</a>
					<br/>
					&#9900; <a href="onama.php"> O nama</a>
					<br/>
					&#9900; <a href="aktuelnosti.php"> Aktuelnosti</a>
					<br/>
					&#9900; <a href="rukovodstvo.php"> Rukovodstvo</a>
					<br/>
					&#9900; <a href="galerija.php"> Galerija</a>
					<br/>
					&#9900; <a href="kontakt.php"> Kontakt</a>
				</p>
		
				
			
	
</div>

<div class="col-md-3" id="id3">

<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Milentija Popovića 16</span>Novi Beograd</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+381 63 742-63-15</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p>office@ifaperla.rs</p>
				</div>

			</div>
	
</div>
</div>
</div>

</div>

<div class='row'>
<div class='col-md-12' id="copyright">© IFA Perla 2016. - sva prava zadrzana</div>
</div>



<script type="text/javascript" src="js/js1.js"></script>
<script type="text/javascript" src="js/js2.js"></script>
<script type="text/javascript" src="js/js3.js"></script>

</body>
</html>



