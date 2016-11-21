<?php include('header.php')?>



	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="js/sweetalert/dist/sweetalert.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="js/sweetalert/dist/sweetalert.css">


<script type="text/javascript">
function IsKontakt(){

	var email = document.getElementById('2');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if(document.getElementById("1").value == ""||document.getElementById("2").value == ""||document.getElementById("3").value == ""||document.getElementById("4").value == "")
{
    swal({   title: "Obaveštenje!",   text: "Morate popuniti sva polja!",   type: "warning", confirmButtonColor: "#eec923",  confirmButtonText: "Ponovi" });
	return false;
	
}
 if (!filter.test(email.value)) {
    	swal({   title: "Obaveštenje!",   text: "Niste lepo uneli email adresu!",   type: "warning", confirmButtonColor: "#eec923",  confirmButtonText: "Ponovi" });
    	return false;
    }
else{

	swal({   title: "Obaveštenje!",   text: "Uspesno ste se prijavili!",   type: "success", confirmButtonColor: "#eec923",  confirmButtonText: "OK" });
	

}


}</script>


<div class="row" id="naslovZuti">
	<div class="col-lg-12">
		<p id="podnaslov"><b><i>Kontakt</i></b></p>
	</div>
</div>





<div class="row">
	<div class="col-lg-12">
		<div style="text-decoration:none; overflow:hidden; height:500px; width:100%; max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Milentija+Popovića,+Belgrade&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<p id="naslov"><b>STUPITE U <span style="color: #eec923;">KONTAKT</span> SA NAMA</b></p><br/>
	</div>
</div>



<div class="container" id="br">
	<div class="col-lg-6" id="border-form">
		<form class="form-horizontal" method="post" action="php/kontakt.php">
			<div class="form-group">
				<div class="col-lg-6">
					<input type="text" class="form-control input-lg"   placeholder="Vaše ime" name="ime" id="1" required="required"/>
				</div>	
				<div class="col-lg-6">	
					<input type="email" class="form-control input-lg"   placeholder="Mail" name='email' id="2" required="required"/>
				</div>	
			</div>

			<div class="form-group">
				<div class="col-lg-12">
					<input type="text" class="form-control input-lg"   placeholder="Naslov" name='naslov' id="3" required="required"/>
				</div>	
			</div>

			<div class="form-group">
				<div class="col-lg-12">
					<textarea class="form-control input-lg" placeholder="Poruka" rows="6" name='poruka' id="4" required="required"></textarea></div>
				</div>



				<div class="form-group">
					<div class="col-lg-12 center-block">
						<button type="submit" onclick="return IsKontakt();" class="btn btn-primary center-block" id="btn" ><b>POŠALJI</b></button>
					</div>
				</div>
			</form>
		</div>
		
		

		<div class="col-lg-6" id="border-info">





			



			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-2">
						<i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-10" id="contact-text">
						Milentija Popovića 16,<br/>11070 Beograd, Novi Beograd 
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-2">
						<i class="fa fa-whatsapp fa-4x"  aria-hidden="true"></i>
					</div>
					<div class="col-lg-10" id="contact-text2">
						+381 63 742-63-15
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-2">
						<i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-10" id="contact-text3">
						office@ifaperla.rs
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	<?php include('footer.php')?>
