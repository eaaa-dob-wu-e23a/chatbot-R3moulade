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
/*
//FETCH JSON DATA
async function fetchJsonData() {
const jsonData = 'messages.json';
// Use the fetch API to make a GET request to the JSON file
fetch(jsonData)
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then(jsonData => {
    return jsonData;
  })
  .catch(error => {
    // Handle any errors that occurred during the fetch
    console.error('Fetch error:', error);
  });


}*/



//arrayKey = "female", "male" etc
    //keyword = arrays
    //key = "female", "woman", "girl", "lady" etc
    keywords.forEach(function(arrayKey, keyword) {
      keyword.forEach(function(value) {
          if(userInput.includes(value)) {
              console.log("Type: " + arrayKey);
              Object.keys(answers).forEach(function(category) {
                  if (arrayKey == category) {
                      console.log(answers[category]);
                      return;
                  }
              });
          }
      });
  });

  
/*
async function phpFetch() {
  // Definer URL'en til din PHP-fil
const phpUrl = 'index.php';

// Opret en anmodningsobjekt med metoden 'POST', overskrifter og JSON-data som anmodningskrop
const requestOptions = {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(fetchJsonData())
};

// Brug fetch API til at foretage en POST-anmodning til PHP-filen
fetch(phpUrl, requestOptions)
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP-fejl! Status: ${response.status}`);
    }
    return response.json();
  })
  .then(responseData => {
    // Håndter svaret fra PHP-filen her
    return responseData;
  })
  .catch(error => {
    // Håndter eventuelle fejl, der opstod under anmodningen
    console.error('Fetch-fejl:', error);
  });
}*/
