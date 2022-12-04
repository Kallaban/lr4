<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="s">Contribution:</label>
    <input type="text" id="s"  name="s"required>
    <label for="r">Dep interest:</label>
    <input type="text" id="r" name="r"required>
    <label for="n">Number of payments:</label>
    <input type="text" id="n" name="n"required>
    <label for="m">Days:</label>
    <input type="text" id="m" name="m"required>
    <input type="submit">
</form>
 <?php
        include "../vendor/autoload.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $s = $_POST["s"];
            $r = $_POST["r"];
            $n = $_POST["n"];
            $m = $_POST["m"];
            $c=new \Yakov\Yavdoshchen\calc($s, $r, $n, $m);
            echo "<p>Simple interest - ".$c->Simple()."</p>";
            echo "<p>Hard interest - ".$c->Difficult()."</p>";
            echo "<p>Simple interest by days - ".$c->SimpleInDays()."</p>";
            echo "<p>Hard interest by days - ".$c->DifficultInDays()."</p>";
        }
    ?>   
</body>
</html>
