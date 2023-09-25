let userInput = document.getElementById("user-input");
let charCount = document.getElementById("char-count");
let charLimit = document.getElementById("char-limit");

let botAnswer = "Speak english, motherfucker.";

userInput.addEventListener('input', updateCharacterCount);



function updateCharacterCount() {
    let inputText = userInput.value;
    let count = inputText.length;
    charCount.textContent = count;

    if (count == 50) {
        charLimit.style.color = "grey";
    }
    else {
        charLimit.style.color = "black";
    }
  };

  const form = document.querySelector('form');

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting
    botAnswer = "Speak english, motherfucker.";
  
    fetch('backendindex.php')
      .then(function(response) {
        return response.json();
      })
      .then(function(data) {
        console.log(data);
        // Do something with the data
        let keywords = data.keywords;
        let answers = data.answers;

        //arrayKey = "female:", "male:" etc
        //keyword = arrays
        //key = "female", "woman", "girl", "lady" etc
    
    // Iterate through categories and their associated keywords
    for (const arrayKey in keywords) {
        
        if (keywords.hasOwnProperty(arrayKey)) {
            const keyword = keywords[arrayKey];
            console.log("keywords[arrayKey]: " + keywords[arrayKey]);
            
            // Iterate through keywords in the current category
            for (const value of keyword) {
                if (userInput.value.includes(value)) {
                    console.log("arrayKey: " + arrayKey);
                    console.log("value: " + value);
                    console.log("userInput.value: " + userInput.value);
                    console.log("keyword: " + keyword);

                    
                    // Iterate through categories and their associated answers
                    for (const category in data.answers) {
                        if (answers.hasOwnProperty(category) && arrayKey === category) {
                            console.log("answers[category]:" + answers[category]);
                            botAnswer = answers[category];
                            break;
                        }
                    }
                } 
            }
        } 
    };

    let newBotAnswer = `
    <div class="chatbotMessages">
        <p>Chatbot</p>
        <div class="chatbotMessage message">
            <p> ${botAnswer} </p>
        </div>
    </div>
    `;
    // Select the .userMessages element
    let chatWindow = document.querySelector('#chatWindow');

    // Append the new div to the .userMessages element
    chatWindow.innerHTML += newBotAnswer;

    
    //MAKE A NEW USER CHAT BUBBLE WITH USERINPUT
    // Create new div
    let newUserQuestion = `
    <div class="userMessages">
    <p>You</p>
    <div class="userMessage message">
        <p>${userInput.value}</p>
    </div>
    </div>
    `;
    // Select the .userMessages element
    let chatWindow1 = document.querySelector('#chatWindow');

    // Append the new div to the .userMessages element
    chatWindow1.innerHTML += newUserQuestion;

      })
      .catch(function(error) {
        console.error(error);
      });
  });