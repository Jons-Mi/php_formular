<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nig</title>
</head>
<body>



<form>
    <label>je to prioritách:</label>
    <input type="text" name="priority">


    <br>
    <?php
    if (isset($_GET["priority"])) {
        if ($_GET["priority"] == "pravda" || $_GET["priority"] == "ano"){
            echo "<h1>máš pravdu</h1>";
        }
        elseif ($_GET["priority"] == "" ){
            echo "";
        }
        else{
            echo "<h1>jedniná správná odpověď je 'pravda'</h1>";
        }
    }
    ?>
    <br>

    <label>co máš k obědu:</label>
    <input type="text" name="obed">


    <br>
    <?php 
        if (isset($_GET["obed"] )) {
            echo "<h1>to je super, taky se těším na " . $_GET["obed"] . "</h1>";
        }
        else{
            echo "<h1>šel bych na oběd</h1>";
        }
    ?>
    <br>

    <label>máš rád kofolu:</label>
    <input type="text" name="kofola">
    <?php
    if (isset($_GET["kofola"])) {
        if ($_GET["kofola"] == "ano"){
            echo "<h1>super</h1>";
        }
        elseif ($_GET["kofola"] == "" ){
            echo "";
        }
        else{
            echo "<h1>nechápu, kofola je nejlepší</h1>";
        }
    }
    ?>
    <br>

    <button>Odeslat</button>
</form>







?>
</body>
</html>