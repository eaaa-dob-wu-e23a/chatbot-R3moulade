<?php
    include("variables.php");
    $userInput = "";
    session_start();

    $responses = [
        "Hi" => "Hello",
        "What are you?" => "I'm a wizard",

    ];
    if(isset($_GET['userInput'])) {
        $userInput = strtolower($_GET['userInput']);
        echo $_GET['userInput'];

    } else {
        echo "userInput key not valid";
    }
/*
    $response = "I'm sorry, I don't understand that";
    $question = ""; // Initialize an empty question

    // Check if the user input matches predefined responses and store the question
foreach ($responses as $q => $answer) {
    if (strcasecmp($userInput, $q) === 0) {
        $response = $answer;
        $question = $q;
        break;
    }
}

    // Define an array of keywords to match
    $keywords = ['age', 'how old'];

// If none of the predefined responses were found, check for specific keywords
if ($response === "I'm sorry, I don't understand that") {
    $keywords = ['age', 'how old'];
    foreach ($keywords as $keyword) {
        if (strpos($userInput, $keyword) !== false) {
            $answer = "I am 100 years old.";
            $response = $answer;
            break; // Stop checking once a keyword is found
        }
    }
}

if ($response === "I'm sorry, I don't understand that") {
    foreach ($responses as $question => $answer) {
        if (strcasecmp($userInput, $question) === 0) {
            $response = $answer;
            break;
        }
    }}

    echo $response;
    */

    $reply = "Speak english motherfucker";
    $keywords = [
        "female" => ["female", "woman", "girl", "lady"],
        "male" => ["male", "man", "boy", "lad"]
    ];

    //arrayKey = "female", "male" etc
    //keyword = arrays
    //key = "female", "woman", "girl", "lady" etc
    foreach($keywords as $arrayKey => $keyword) {
        foreach($keyword as $key) {
            if($key == $userInput) {
                echo "Type: " . $arrayKey;
            }
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <p><a href="dictionary.html">Dictionary</a></p>
            <p><a href="calculator.php">Calculator</a></p>
        </nav>
    </header>
    <main>
        <section id="chatBox-container">
            <div></div>
            <section id="chatBox">
                <div>
                    <h2>Chatbot</h2>
                </div>
                <div id="chatWindow">
                    <div class="chatbotMessages">
                        <p>Chatbot</p>
                        <div class="chatbotMessage message">
                            <p><?php echo $reply ?></p>
                        </div>
                    </div>
                    <div class="userMessages">
                        <p>You</p>
                        <div class="userMessage message">
                            <p><?php echo $userInput ?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <form action="?" method="get">
                        <input type="text" maxlength="50" name="userInput" id="user-input" placeholder="Type your message here">
                        <p id="char-limit"><span id="char-count">0</span>/50</p>
                    </form>
                </div>
                <div>
                <details id="int-test">
                    <summary><?php echo $intVar1 . " + " . $intVar2 ?></summary>
                    <hr>
                    <p><?php echo $intResult ?></p>
                </details>
            </div>
            </section>

        </section>
    </main>
    <footer></footer>
</body>
<script src="script.js"></script>
</html>
