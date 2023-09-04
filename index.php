<?php
    session_start();
    $_SESSION['sessionKey'] = "sessionKey";

    $responses = [
        "Hi" => "Hello",
        "What are you?" => "I'm a wizard",

    ];
    $userInput = $_GET['userInput'];
    if(isset($_GET['userInput'])) {
        echo $_GET['userInput'];
    }

    $response = "I'm sorry, I don't understand that";
    
    foreach ($responses as $question => $answer) {
        if (strcasecmp($userInput, $question) === 0) {
            $response = $answer;
            break;
        }
    }

    echo $response
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
                            <p><?php echo $answer ?></p>
                        </div>
                    </div>
                    <div class="userMessages">
                        <p>You</p>
                        <div class="userMessage message">
                            <p><?php echo $question ?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <form action="?" method="get">
                        <input type="text" name="userInput" id="user-input" placeholder="Type your message here">
                    </form>
                </div>
            </section>
            <div>

            </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>