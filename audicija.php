<?php include('header.php')?>

<div class="row" id="naslovZuti">
	<div class="col-lg-12">
		<p id="podnaslov"><b><i>Audicija</i></b></p>
	</div>
</div>


<script src="js/sweetalert/dist/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="js/sweetalert/dist/sweetalert.css">



<script type="text/javascript">
function IsEmpty(){

	var email = document.getElementById('3');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


if(document.getElementById("1").value == ""||document.getElementById("2").value == ""||document.getElementById("3").value == ""||document.getElementById("4").value == ""||document.getElementById("5").value == ""||document.getElementById("6").value == ""||document.getElementById("7").value == ""||document.getElementById("8").value == "")

	{
	swal({   title: "Obaveštenje!",   text: "Morate popuniti sva polja!",   type: "warning", confirmButtonColor: "#eec923",  confirmButtonText: "Ponovi" });
	return false;
	}

else if (!filter.test(email.value)) {
    	swal({   title: "Obaveštenje!",   text: "Niste lepo uneli email adresu!",   type: "warning", confirmButtonColor: "#eec923",  confirmButtonText: "Ponovi" });
    	return false;
    }


else {

	swal({   title: "Obaveštenje!",   text: "Uspesno ste popunili prijavu",   type: "success", confirmButtonColor: "#eec923",  confirmButtonText: "OK" });
	
}

}
</script>
	<div class="container">

		<div id="audicija-naslov">
			<h1><b>PRIJAVA ZA AUDICIJU</b></h1>
			<h2>IFA Perla - 2016</h2><br/>
			<p>
				Ovim putem mozete izvršiti prijavu za:<p>
				<h3> &#9899;
				<b>IZVODJAČKI ANSAMBL</b> &#9899;
				<b>PRIPREMNI ANSAMBL</b>&#9899;
				<b>ORKESTAR</b>&#9899;
				</h3>
				<hr>
				<p><i><b>Molimo vas da popunite sva potrebna polja i pošaljete prijavu.<br/>
					O daljim informacijama bićete blagovremeno obavešteni.</b></i></p>

		</div>


				<form name="frm" class="form-horizontal" id="audicija-forma" action="php/audicija.php" method="post">

					<div class="form-group">
						<label class="control-label col-sm-2">Ime i prezime:</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="ime" id="1" required="required">
							<span class="help-block">Vaše ime i prezime</span>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2">Datum rodjenja:</label>
						<div class="col-md-10">
							<input type="date" class="form-control" name="datum" id="2" required="required">
							<span class="help-block">Unesite mesec, dan i godinu vašeg rodjenja</span>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2">Email:</label>
						<div class="col-md-10">
							<input type="email" class="form-control" name="email" id="3"  required="required">
							<span class="help-block">Vaša email adresa  putem koje Vas možemo kontaktirati</span>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2">Telefon:</label>
						<div class="col-md-10">
							<input type="tel" class="form-control" name="telefon" id="4" required="required">
							<span class="help-block">Vaš kontakt telefon</span>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2">Skola/Fakultet:</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="skola" id="5" required="required">
							<span class="help-block">Škola ili fakultet koji pohađate ili ste pohađali</span>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2">Zanimanje:</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="zanimanje" id="6" required="required">
							<span class="help-block">Čime se bavite</span>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2">Sekcija:</label>
						<div class="col-md-10">
							<select class="form-control" name="sekcija" id="7" required="required">
								<option value="" selected disabled>Izaberi sekciju</option>
								<option>Izvodjacki ansambl</option>
								<option>Pripremni ansambl</option>
								<option>Orkestar</option>
							</select>
							<span class="help-block">Izaberite sekciju za koju se prijavljujete za audiciju</span>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2">Igračko iskustvo:</label>
						<div class="col-md-10">
							<textarea class="form-control input-lg" rows="6" name="iskustvo" id="8" required="required"></textarea>
							<span class="help-block">Navedite Vaše ranije iskustvo u KUD-ovima.</span>
						</div>
					</div>




					<div class="form-group">
						<label class="control-label col-sm-2"></label>
						<div class="col-md-10">
							<button type="submit" onclick="return IsEmpty();" class="btn btn-primary center-block" id="btn" ><b>POŠALJI</b></button>
						</div>
					</div>


				</form>
			</div>







		<?php include('footer.php')?>
