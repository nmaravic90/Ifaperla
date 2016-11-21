<!DOCTYPE html>
<html>
  <head>
    <title>IFA Perla</title>
	<meta charset="UTF-8">
	<meta name="description" content="Internacionalni folklorni ansambl Perla">
	<meta name="keywords" content="ifa perla,ifaperla,perla,folk,serbia,beograd, ensemble, kolo">
	<meta name="author" content="IFA Perla">
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
	<link rel="shortcut icon" href="img/intro/icon.png">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	
	<!-- for Google -->
<meta name="description" content="website" />
<meta name="keywords" content="ifaperla,folklor,serbia,srbija,internacionalni,folklorni,ansambl" />

<meta name="author" content="ifaperla" />
<meta name="copyright" content="ifaperla" />


<!-- for Facebook -->          
<meta property="og:title" content="Internacionalni Folklorni Ansambl Perla" />
<meta property="og:type" content="website" />
<meta property="og:image" content="img/fb/02.jpg" />
<meta property="og:url" content="www.ifaperla.rs" />
<meta property="og:description" content="Internet prezentacija IFA Perla" />

<script src="js/sweetalert/dist/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="js/sweetalert/dist/sweetalert.css">

<script type="text/javascript">
function mailIndex(){


	var email = document.getElementById('mail-index');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    	swal({   title: "",   text: "Niste lepo uneli email adresu!",   type: "warning", confirmButtonColor: "#eec923",  confirmButtonText: "Ponovi" });
    	return false;
    }

else{

	swal({   title: "",   text: "Uspesno ste se prijavili!",   type: "success", confirmButtonColor: "#eec923",  confirmButtonText: "OK" });
	//return false;
	//document.getElementById('mail-index').value = "";
	//return false;


}

}
</script>

	
  </head>
  <body>
  
	<div class="bg-video">
		<video id="video" poster="img/intro/perlaCover.jpg" class="video-video" muted="muted"  preload="auto" autoplay="true" loop="loop">
			<source src="video/video.mp4" type="video/mp4"/>
		</video>
	</div>
	
	<div class="sadrzaj">
	
		<div class="container">

		<div class="row">
		<div class="container">
		<div class="logo">
			<img src="img/intro/logo.png" class="img-responsive"  />
		</div>
		</div>
		</div>

		<div class="row">
		<div class="container" id="ulaz">
		<a href="pocetna.php"><button type="button" class="btn btn-primary btn-lg" id="ulaz-btn">UDJITE NA SAJT ANSAMBLA</button></a>
		</div>
		</div>





		<div class="row" id="prijava">
		<div class="container">
						<p>Prijavite se za obaveštenja putem Email-a</p>
						
						<form method="POST" action="php/index-mail.php">
						<div class="input-group">
      					<input type="email" class="form-control input-lg" name="email" id="mail-index" placeholder="Vaša e-mail adresa...">
      					<span class="input-group-btn">
        				<button class="btn btn-secondary input-lg" type="submit"  onclick="return mailIndex();" id="button1" >PRIJAVA</button>
     			 		</span>
   		 				</div></form>
</div>
</div>



	  
		<div class="links">
		
			<ul>
			
				<li class="facebook"><a href="https://www.facebook.com/ifaperla" target="_blank">Facebook</a></li>
				<li class="youtube"><a href="https://www.youtube.com/watch?v=wnGcR2VypIw" target="_blank">Youtube</a></li>
				<li class="instagram"><a href="https://www.instagram.com/ifaperla/" target="_blank">Instagram</a></li>
				<li class="gplus"><a href="https://plus.google.com/107998501073720363966" target="_blank">Google</a></li>
				<p id="p-footer"> &nbsp &nbsp &nbsp &nbsp © IFA Perla 2016. - sva prava zadrzana</p>
			</ul>
		</div>
		
    </div>
	</div>
  </body>
</html>