<?php
        session_start();
        $sum = "";
        

        if(isset($_GET['sum'])) {
            $sum = strtolower($_GET['sum']);
            echo $_GET['sum'];
        }

        //$tal = rand(1,100);
        //$_SESSION["talHistory"] .= " " . $tal;
        //echo $tal;
        //echo "<br>";
        //echo $_SESSION["talHistory"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>
    <p><a href="dictionary.html">Dictionary</a></p>
                <form method="get" action="backend.php">
                    <input type="number" name="number1">
                    <input type="number" name="number2">
                    <input type="submit" name="add" value="Submit">
                    <p><?php echo $sum;
                    echo $_GET['test'] ?></p>
                </form>
</body>
</html>