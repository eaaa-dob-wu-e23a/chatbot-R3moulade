let userInput = document.getElementById("user-input");
let charCount = document.getElementById("char-count");
let charLimit = document.getElementById("char-limit");

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


  //FETCH
  fetch("backendindex.php")
  .then(function (response) {
      return response.json();
  })
  .then(function (data) {
      console.log(data);
      let keywords = data;

    //arrayKey = "female", "male" etc
    //keyword = arrays
    //key = "female", "woman", "girl", "lady" etc

// Iterate through categories and their associated keywords
for (const arrayKey in keywords) {
    if (keywords.hasOwnProperty(arrayKey)) {
        const keyword = keywords[arrayKey];
        
        // Iterate through keywords in the current category
        for (const value of keyword) {
            if (userInput.includes(value)) {
                console.log("Type: " + arrayKey);
                
                // Iterate through categories and their associated answers
                for (const category in answers) {
                    if (answers.hasOwnProperty(category) && arrayKey === category) {
                        console.log(answers[category]);
                        break;
                    }
                }
            }
        }
    }
};


  })
  .catch(function (error) {
      console.log("Error: " + error);
  });
