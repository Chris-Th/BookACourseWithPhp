<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Confirmation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!--<script src="scripts/script.js"></script>
      <script src="scripts/confirm-script.js"></script>-->
      <link href="styles/home-styles.css" rel="stylesheet">
    </head>

<body class="d-flex h-100 text-center text-white bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-3">Speak</h3>
              	<nav class="nav nav-masthead justify-content-center float-md-end">
					<a class="nav-link" aria-current="page" href="home.html">Home</a>
					<a class="nav-link" href="bookingForm.html">Anmelden</a>
					<a class="nav-link active" href="confirm.html">Ihre Buchung</a>
              	</nav>
            </div>
        </header>
        <?php 

          // regex for some form inputs

          $letters = '/^[A-Za-zäöüÄÖÜ ]+$/';
          $oneLetter = '/^[A-Za-z]{1}$/';
          $numbers = '/^[0-9]+$/';
          $fourDigits = '/^[0-9]{4}$/';
          $telInt = '/^\+?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{3})[-. ]?([0-9]{2})[-. ]?([0-9]{2})$/';
          $emailRegex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';

        ?>
    
      <main class="p-5">
        <h5>Herzlichen Dank für Ihre Anmeldung!</h5>
                <p>Sie haben bei Ihrer Anmeldung untenstehende Angaben genacht. Bitte prüfen Sie sie nochmals auf ihre Richtigkeit:<br>
                
				Vorname: 
				<!-- Vorname verification -->
				<?php 
                $fname = $_POST["fname"];
                if (!preg_match($letters, $fname) ) 
                {
                  echo "Beim Vornamen bitte nur Buchstaben oder Leerschläge eingeben";
                } 
                else 
                {
                  echo $fname;
                } ?><br>

                Nachname: 
				<!-- Nachname verification -->
				<?php 
                $lname = $_POST["lname"];
                if (!preg_match($letters, $lname) ) 
                {
                  echo "Beim Nachnamen bitte nur Buchstaben oder Leerschläge eingeben"; 
                } 
                else 
                {
                  echo $lname; 
                } ?><br>

                Strasse: 
				<!-- Strasse verification -->
				<?php 
				$street = $_POST["street"];
				if (!preg_match($letters, $street))
				{
					echo "Beim Strassennamen nur Buchstaben oder Leerschläge eingeben";	
				}
				else
				{
					echo $street;
				} ?><br>

                Nummer: 
				<!-- Nummer verification -->
				<?php 
				$streetNr = $_POST["streetNr"]; 
				if (!preg_match($numbers, $streetNr))
				{
					echo "Als Hausnummer bitte eine ganze Zahl angeben. Ein allfälliger Buchstabenzusatz können Sie im nächsten Feld eingeben";
				}
				else
				{
					echo $streetNr;
				} ?><br>

                Nummernzusatz: 
				<!-- Nummernzusatz verification -->
				<?php
				$nrAdd = $_POST["nrAdd"]; 
				if (!preg_match($oneLetter, $nrAdd))
				{
					echo "Bitte hier nur einen Buchstabenzusatz (z.B. \"a\") eingeben";
				}
				else
				{
					echo $nrAdd;
				} ?><br>

                PLZ: 
				<!-- PLZ verification -->				
				<?php
				$plz = $_POST["plz"]; 
				if (!preg_match($fourDigits, $plz))
				{
					echo "Bitte eine vierstellige Postleitzahl eingeben!";
				}
				else
				{
					echo $plz;
				} ?><br>

                Ort:
				<!-- Ort verification -->
				<?php
				$ort = $_POST["ort"]; 
				if (!preg_match($letters, $ort))
				{
					echo "Bitte Ortsnamen (nur Buchstaben) eingeben!";
				}
				else
				{
					echo $ort;
				} ?><br>

                Tel.P: 
				<!-- Tel P. verification -->
				<?php 
                $telP = $_POST["telP"];
                if (!preg_match($telInt, $telP) ) 
                {
                  echo "Telefonnummer im internationalen Format (+01 23 456 78 90) bitte!!!"; 
                } 
                else 
                {
                  echo $telP; 
                } ?><br>
                
                Tel.G: 
				<!-- Tel G. verification -->
				<?php 
                $telG = $_POST["telG"];
                if (empty($_POST["telG"])) {
					$telGEmpty = "Sie haben keine Geschäftsnummer angegeben<br>";
					echo $telGEmpty;
				  }
				elseif (!preg_match($telInt, $telG) ) 
                {
                  echo "Telefonnummer im internationalen Format (+01 23 456 78 90) bitte!!!"; 
                } 
                else 
                {
                  echo "Tel G.: $telG"; 
                } ?><br>

				<!--$birthdErr = "";
				if (empty($_POST["birthdate"])) {
					$birthdErr = "Bitte Geburtsdatum angeben<br>";
					echo $birthdErr;
				  } else {
					$birthd = $_POST["birthdate"];
					echo "Sie sind am $birthd
					geboren.<br>";
				  }*/-->


                Email-Adresse: 
				<!-- email verification -->
				<?php 
                $email = $_POST["email"];
                if (!preg_match($emailRegex, $email) ) 
                {
                  echo "Bitte eine gültige Email-Adresse eingeben!"; 
                } 
                else 
                {
                  echo $email; 
                } ?><br>


                <!-- Geburtsdatum verification -->
				<?php
				// $birthd = $_POST["birthdate"]; ?>
                <?php
				$birthdErr = "";
				if (empty($_POST["birthdate"])) {
					$birthdErr = "Bitte Geburtsdatum angeben<br>";
					echo $birthdErr;
				  } else {
					$birthd = $_POST["birthdate"];
					echo "Sie sind am $birthd
					geboren.<br>";
				  }
				  ?>
				
				
				<!-- Versicherung (radio buttons) verification/feedback -->
				<?php /*
				$checkedJa = $_POST["versJa"];
				$checkedNein = $_POST["versNein"];

				// $checkedJa = false;
				// $checkedNein = false;
				*/
				

				// $checkedJa = $_POST["versJa"];
				// $checkedNein = $_POST["versNein"];
				// $vers = $_POST["vers"];
				
				/*if ((isset($vers) && $vers == $checkedJa) || (isset($vers) && $vers == $checkedNein)) {
					echo "Versicherung: Sie haben $vers
					Versicherung abgeschlossen.<br>";
				}
				else {
					echo "Bitte unter \"Versicherung\" eine Auswahl treffen!";
				}*/

				$versErr = "";
				if (empty($_POST["vers"])) {
					$versErr = "Bitte eine Angabe zur Versicherung machen!<br>";
					echo $versErr;
				  } else {
					$vers = $_POST["vers"];
					echo "Sie haben $vers
					Versicherung abgeschlossen.<br>";
				  }
				
				/*
				if ($checkedJa) {
					echo "Sie haben $checkedJa Versicherung abgeschlossen.";
				}
				elseif ($checkedNein) {
					echo "Sie haben $checkedNein Versicherung abgeschlossen.";
				}
				else
				{
					echo 'Bitte bei "Annulationsversicherung" "ja" oder "nein" auswählen.'
				} */ ?> <br>
                </p> 
				
              <!--
                Form Data Confirmation
                <div id="dataConfirmation" role="alert"></div>
            
                <script>const letters = /^[A-Za-z]+$/;
	const oneLetter = /^[A-Za-z]{1}$/;
	const numbers = /^[0-9]+$/;
	const fourDigits = /^[0-9]{4}$/;
	const telInt = /^\+?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{3})[-. ]?([0-9]{2})[-. ]?([0-9]{2})$/;
	const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                confirmUserData();
                </script>  
              -->
      </main>
    
      <footer class="mt-auto text-white-50">
        <p>Sprich mit <a href="#" class="text-white">Speak</a> Sprachkursen, by <a href="#" class="text-white">@blahblah</a>.</p>
      </footer>
    </div>
    
    
        
      


            
    </div>
  </div>
    
</body>
</html>