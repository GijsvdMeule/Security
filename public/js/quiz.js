let number = localStorage.getItem('number') || 1;

window.addEventListener('load', function test() {
  const domElement = document.getElementById("poke-img");

  getData();

    async function getData() {
        try {
            let randomNumber = Math.floor(Math.random() * 151) + 1;
            const responseQuiz = await fetch("https://pokeapi.co/api/v2/pokemon/" + randomNumber);
            const jsonDataQuiz = await responseQuiz.json();
            domElement.innerHTML = `<img src="${jsonDataQuiz.sprites.front_default}">`;
            pokeName = jsonDataQuiz.name;
        } catch (error) {
            console.log('An error occurred:', error);
        }
    }


    let resetButton = document.getElementById('resetButton');

  resetButton.addEventListener('click', function() {
    resetNumber();
  });
});

function othername() {
  let input = document.getElementById("userInput").value;
  checkAnswer(input);
}

function clearValue() {
  document.getElementById("userInput").value = "";
}

function checkAnswer(input) {
  let color = document.getElementById("userInput");
  if (input === pokeName) {
    color.style.backgroundColor = "green";
    number++;
    localStorage.setItem('number', number);
    setTimeout(function () {
      clearValue();
      window.location.reload();
    }, 1000);
  } else {
    color.style.backgroundColor = "red";
  }
}

function resetNumber() {
  number = 1;
  localStorage.setItem('number', number);
}


