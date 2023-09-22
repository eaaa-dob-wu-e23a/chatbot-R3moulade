<?php
//SESSION
    session_start();
    $jsonData = "";
    if (!isset($_SESSION['jsonData'])) {

        // Modtag JSON-data fra anmodningen
        $data = json_decode(file_get_contents('php://input'), true);

        // Du kan nu gemme dataen i en sessionvariabel
        $_SESSION['jsonData'] = $data;

        // Opret et svar (dette er kun et eksempel; du kan tilpasse det)
        $responseData = [
        'message' => 'Data modtaget og gemt i sessionen',
        'data' => $data
        ];

        // Send svaret som JSON

        echo json_encode($responseData);
    } else {
        echo "Data not found";
    }
    $userInput = "";
    
    if(isset($_GET['userInput'])) {
        $userInput = strtolower($_GET['userInput']);
        echo $_GET['userInput'];
        echo "<br>";
    } else {
        echo "userInput key not valid";
    }

    $answer = "Speak english motherfucker";

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
            <p><a href="exercises/dictionary.html">Dictionary</a></p>
            <p><a href="exercises/calculator.php">Calculator</a></p>
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
                    <div class="userMessages">
                        <p>You</p>
                        <div class="userMessage message">
                            <p><?php echo $userInput ?></p>
                        </div>
                    </div>
                    <div class="chatbotMessages">
                        <p>Chatbot</p>
                        <div class="chatbotMessage message">
                            <p><?php echo $answer ?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <form action="backendindex.php" method="get">
                        <input type="text" maxlength="50" name="userInput" id="user-input" placeholder="Type your message here">
                        <p id="char-limit"><span id="char-count">0</span>/50</p>
                    </form>
                </div>
            </section>

        </section>
    </main>
    <footer></footer>
    <script src="script.js"></script>
</body>

</html>
