<?php 
    $array = [
        [
            "firstName"=> "Karlach,",
            "title" => "My Beloved,",
            "message" => "Thy engine heart hath coiled mine soul.",
            "greeting" => "Sincerely Yours,",
            "from" => "Dyrby",
            "smiley" => ":^)"
        ],
        [
            "firstName"=> "Astarion,",
            "title" => "My Hater,",
            "message" => "No words can describe my mutual hatred for you.",
            "greeting" => "Sincerely Not Yours,",
            "from" => "Dyrby",
            "smiley" => ">:^)"
        ]

    ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>
    <table>
        <thead>
            <tr>
                <th>First name</th>
                <th>Title</th>
                <th>Message</th>
                <th>Greeting</th>
                <th>From</th>
                <th>Smiley</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($array as $person => $value) {
                    if ($person % 2 == 0) {
                    echo "<tr style=background-color:lightgrey>";
                    echo "<td>{$value['firstName']}</td>";
                    echo "<td>{$value['title']}</td>";
                    echo "<td>{$value['message']}</td>";
                    echo "<td>{$value['greeting']}</td>";
                    echo "<td>{$value['from']}</td>";
                    echo "<td>{$value['smiley']}</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    echo "<td>{$value['firstName']}</td>";
                    echo "<td>{$value['title']}</td>";
                    echo "<td>{$value['message']}</td>";
                    echo "<td>{$value['greeting']}</td>";
                    echo "<td>{$value['from']}</td>";
                    echo "<td>{$value['smiley']}</td>";
                    echo "</tr>";
                }
                }
            ?>
        </tbody>
    </table>

    <?php 
    for($i = 0; $i < 10; $i++) {
        echo $i;
        echo " ";
    };
    ?>

</body>
</html>