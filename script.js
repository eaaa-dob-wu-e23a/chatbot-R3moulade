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

  })
  .catch(function (error) {
      console.log("Error: " + error);
  });
