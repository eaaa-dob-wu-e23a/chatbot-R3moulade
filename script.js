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

  const form = document.querySelector('form');

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting
  
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
                            break;
                        }
                    }
                }
            }
        }
    };

      })
      .catch(function(error) {
        console.error(error);
      });
  });