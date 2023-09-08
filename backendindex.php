<?php
    $input = "Your input: " . $_GET['myInput'];
    header('location: index.php?response=' . $input);
    exit;
?>