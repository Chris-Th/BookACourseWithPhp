<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--<script src="scripts/script.js"></script>-->
  <link href="styles/style.css" rel="stylesheet">
  <link href="styles/home-styles.css" rel="stylesheet">
  <!--<script src="scripts/confirm-script.js"></script>-->
</head>
<!--<body onload="document.bookingForm.fname.focus();" class="d-flex h-100 text-center text-white bg-dark">-->
<body onload="" class="d-flex h-100 text-center text-white bg-dark">
	<div class="cover-container d-flex w-100 h-100 my-0 px-0 py-3 mx-auto flex-column">
		<header class="mb-auto">
		  <div>
			<h3 class="float-md-start mb-0">Speak</h3>
			<nav class="nav nav-masthead justify-content-center float-md-end">

				<a class="nav-link" aria-current="page" href="home.html">Home</a>
				<a class="nav-link active" href="bookingForm.html">Anmelden</a>
				<a class="nav-link" href="confirm.html">Ihre Buchung</a>
			  </nav>
			</div>
		  </header>
		  <main class="px-2 py-5 text-white bg-dark">

            <!--<form action="confirm.html" onsubmit="return validateForm()" id="bookingForm" name="bookingForm">-->
			
			<form action="confirm.php" id="bookingForm" name="bookingForm" method="post">
			

				<!-- Vorname/Nachname-row-->
			<div class="row">
				<div class="col-sm mt-3">
					<input type="text" class="form-control" placeholder="Vorname" name="fname" id="fname">
				</div>
				<div class="col-sm mt-3">
					<input type="text" class="form-control" placeholder="Nachname" name="lname" id="lname">
				</div>
			</div>

				<!-- Strasse / Nr. / Zusatz - row -->
			<div class="row">
				<div class="col-sm">
					<div class="row">
						<div class="col-sm-6 mt-3">
							<input type="text" class="form-control" placeholder="Strasse" name="street" id="street">
						</div>
						<div class="col-sm-6 mt-3">
							<div class="row">
								<div class="col-7">
									<input type="text" class="form-control" placeholder="Nummer" name="streetNr" id="streetNr">
								</div>
								<div class="col-5">
									<input type="text" class="form-control" placeholder="Zusatz" name="nrAdd" id="nrAdd">
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>

				<!-- PLZ / Ort-row-->
			<div class="row">
				<div class="col-sm">
					<div class="row">
						<div class="col-sm-3 mt-3">
							<input type="text" class="form-control" placeholder="PLZ" name="plz" id="plz">
						</div>
						<div class="col-sm-9 mt-3">
							<input type="text" class="form-control" placeholder="Wohnort" name="ort" id="ort">
						</div>
					</div>
				</div>
			</div>

				<!-- Telefon G / Telefon P - row -->
			<div class="row">
				<div class="col-sm-6 mt-3">
					<input type="tel" class="form-control" placeholder="Tel. P. oder Mobil (+12 34 567 89 01)" name="telP" id="telP">
				</div>
				<div class="col-sm-6 mt-3">
					<input type="tel" class="form-control" placeholder="Tel. G. (+12 34 567 89 01) -optional" name="telG" id="telG">
				</div>
			</div>

				<!-- Email / Geburtsdatum - row -->
			<div class="row">
				<div class="col-sm-6 mt-3">
					<input type="email" class="form-control" placeholder="Email-Adresse" name="email" id="email">
				</div>
				<div class="col-sm-6 mt-3">
					<div class="row">
						<div class="col m-1">
							<label for="birthdate">Geburtstag: </label>
							<input type="date" id="birthdate" name="birthdate">
						</div>
					</div>
					
				</div>
			</div>

				<!-- AGB - checkbox  -->
			<div class="row">
				<div class="col-sm-6 mt-3">
					<input class="form-check-input" type="checkbox" id="agbCheck" name="agbCheck" value="AGB's gelesen" unchecked>
					<label class="form-check-label">Ich habe die AGB's gelesen und verstanden</label>
				</div> 

				<!-- Vers. Radio buttons-->
				<div class="col-sm-6 mt-3">
					<p>Haben Sie eine Annulationsversicherung abgeschlossen?</p>
					<input class="form-check-input" type="radio" name="vers" id="versJa" value="eine">
					<label for="versJa">Ja</label>
					<span>  </span>
					<input class="form-check-input" type="radio" name="vers" id="versNein" value="keine">
					<label for="versNein">Nein</label><br>
				</div>
			</div>

				<!-- Anmelde-Button-->
			<div class="row">
				<div class="col-sm-12 d-grid my-5">
					<input type="submit" value="Anmelden" class="btn btn-lg btn-primary fw-bold"> 
				</div>	
				         
			</div>
		</form>  
          </main>
		  <footer class="mt-auto text-white-50">
            <p>Sprich mit <a href="#" class="text-white">Speak</a> Sprachkursen, by <a href="#" class="text-white">@blahblah</a>.</p>
          </footer>
	
		

	</div>
	
</body>
</html>