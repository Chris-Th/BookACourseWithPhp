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
                Vorname: <?php 
                $fname = $_POST["fname"];
                if (!preg_match($letters, $fname) ) 
                {
                  echo "Liar!!";
                } 
                else 
                {
                  echo $fname;
                } ?><br>

                Nachname: <?php 
                $lname = $_POST["lname"];
                if (!preg_match($letters, $lname) ) 
                {
                  echo "reiss dich zusammen!"; 
                } 
                else 
                {
                  echo $lname; 
                } ?><br>


                Strasse: <?php echo $_POST["street"]; ?><br>
                Nummer: <?php echo $_POST["streetNr"]; ?><br>
                Nummernzusatz: <?php echo $_POST["nrAdd"]; ?><br>
                PLZ: <?php echo $_POST["plz"]; ?><br>
                Ort: <?php echo $_POST["ort"]; ?><br>

                Tel.P: <?php 
                $telP = $_POST["telP"];
                if (!preg_match($telInt, $telP) ) 
                {
                  echo "Nummer im internationalen Format bitte!!!"; 
                } 
                else 
                {
                  echo $telP; 
                } ?><br>
                
                Tel.G: <?php echo $_POST["telG"]; ?><br>
                Email-Adresse: <?php echo $_POST["email"]; ?><br>
                Geburtsdatum: <?php echo $_POST["birthdate"]; ?><br>
                Versicherung: Sie haben <?php echo $_POST["vers"]; ?> Versicherung abgeschlossen.<br>
                </p>

              <!--
                Form Data Cofirmation
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