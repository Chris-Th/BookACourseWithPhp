<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        // Prüft, ob das Feld "name" im POST-Request (bzw. im Array $_POST) existiert 
        if(!array_key_exists('name', $_POST)) {
            echo "<p>Input Feld für Name fehlt im POST-Request!</p>"; 
        } 
        // Falls das Feld name existiert, prüfen wir, ob jemand mindestens ein Zeichen eingegeben hat, 
        // oder das Feld leer ist
        else if (!$_POST['name']) {
            echo "<p>Bitte Name eingeben</p>"; 
        } 
        // Als letztes prüfen wir z.B., ob der Name mindestens 3 Zeichen lang ist
        else if (strlen($_POST['name']) < 3) {
            echo "Name ist kleiner als 3 Zeichen lang! ";
        }
        
        print "<pre>"; 
        print_r($_POST); 

        // die exit() funktion bricht die Ausführung vom Script sofort ab (praktisch fürs Testing)
        //exit();  
        /*  
            echo "erster Teil ", $_POST['name'], " zweiter Teil"; 
            print("test"); 
            print "test"; 
        */

    ?>











    <?php
        /*
        foreach($_POST as $key => $value) {
            print "<div>$key = $value</div>"; 
        }*/
    ?>
    <!--
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
    -->

    
</body>
</html>