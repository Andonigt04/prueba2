class Number {
    id = null;
    name;
    notak = Array();

    constructor(id, name, notak = null) {
        this.id = id;
        this.name = name;
        this.notak = notak;
    }
}

function algo(...que) {
  return que.length;
}

algo(1, 12, 3, 3, 553, 4);
// Define the questions and answers
const questions = [
  "¿Cuál es el nombre del desierto de México?",
  "¿Quién ganó el mundial de fútbol de 2010?",
  "¿A qué banda de música metal pertenece el disco Master of Puppets?",
  "¿De qué obra de Shakespeare forma parte el soliloquio “Ser o no ser, esa es la cuestión”?",
  "¿Cuál es la velocidad de la luz?",
];
const answers = {
  1: [
    { name: "Sonora", value: 1 },
    { name: "Sahara", value: 0 },
    { name: "Karoo", value: 0 },
    { name: "Danakil", value: 0 },
  ],
  2: [
    { name: "La selección Inglesa", value: 0 },
    { name: "La selección Francesa", value: 0 },
    { name: "La selección Española", value: 1 },
    { name: "La selección Alemana", value: 0 },
  ],
  3: [
    {
      name: "Fue Queen la banda que lanzó este álbum en el año 1974.",
      value: 0,
    },
    {
      name: "Fue Metallica la banda que lanzó este álbum en el año 1986.",
      value: 1,
    },
    {
      name: "Fue The Rolling Stones la banda que lanzó este álbum en el año 1972.",
      value: 0,
    },
    {
      name: "Fue Deep Purple la banda que lanzó este álbum en el año 1996.",
      value: 0,
    },
  ],
  4: [
    {
      name: "Este soliloquio, uno de los más conocidos del dramaturgo francés, forma parte de la obra Alphonse Allais.",
      value: 0,
    },
    {
      name: "Este soliloquio, uno de los más conocidos del dramaturgo inglés, forma parte de la obra Hamlet.",
      value: 1,
    },
    {
      name: "Este soliloquio, uno de los más conocidos del dramaturgo estadounidense, forma parte de la obra Arnold H. Glasow.",
      value: 0,
    },
    {
      name: "Este soliloquio, uno de los más conocidos del dramaturgo estadounidense, forma parte de la obra Jon Bon Jovi.",
      value: 0,
    },
  ],
  5: [
    { name: "La luz viaja aproximadamente a 300.000.000 km/s", value: 1 },
    { name: "La luz viaja aproximadamente a 300.000.000 m/s", value: 0 },
    { name: "La luz viaja aproximadamente a 200.000.000 m/s", value: 0 },
    { name: "La luz viaja aproximadamente a 250.000.000 km/s", value: 0 },
  ],
};

let quesPos = 1;
let correct = 0;
let incorrect = 0;

window.onload = function () {
  showQuestions();
};

function showQuestions() {
  if (quesPos < questions.length) {
    document.querySelector("#questions").textContent = questions[quesPos];

    const radioButtonsContainer = document.querySelector(".checks");
    radioButtonsContainer.innerHTML = "";

    if (answers[quesPos]) {
      answers[quesPos].forEach((answer) => {
        const label = document.createElement("label");
        const radioButton = document.createElement("input");
        radioButton.type = "radio";
        radioButton.name = "checks";
        radioButton.value = answer.name;
        label.appendChild(radioButton);
        label.appendChild(document.createTextNode(answer.name));
        radioButtonsContainer.appendChild(label);
        radioButtonsContainer.appendChild(document.createElement("br"));
      });

      document
        .querySelectorAll('.checks input[name="checks"]')
        .forEach((radioButton) => {
          radioButton.addEventListener("click", correctDo);
        });
    }
  }
}

function correctDo() {
  const checked = document.querySelector(
    '.checks input[name="checks"]:checked'
  );
  if (!checked) return;

  const selectedValue = checked.value;

  const correctAnswer =
    answers[quesPos] &&
    answers[quesPos].some(
      (answer) => answer.name === selectedValue && answer.value === 1
    );

  if (correctAnswer) {
    document.querySelector("#corrections").textContent = "Correct";
    correct++;
  } else {
    document.querySelector("#corrections").textContent = "Incorrect";
    incorrect++;
  }

  if (incorrect >= 3) {
    document.querySelector("#finish").textContent = "YOU LOST";
  }
  if (correct >= 4) {
    document.querySelector("#finish").textContent = "¡¡¡YOU WON!!!";
  }
}

document.querySelector("#Next").addEventListener("click", next);

function next() {
  if (incorrect >= 3) {
    document.querySelector("#finish").textContent = "YOU LOST";
  }
  if (correct >= 4) {
    document.querySelector("#finish").textContent = "¡¡¡YOU WON!!!";
  }
  if (quesPos < questions.length - 1) {
    const selectedRadioButtons = document.querySelectorAll(
      '.checks input[name="checks"]:checked'
    );

    if (selectedRadioButtons.length > 0) {
      quesPos++;
      document.querySelector("#corrections").textContent = "";

      if (quesPos < questions.length) {
        showQuestions();
      } else {
        document.querySelector("#questions").textContent = "No more questions.";
        document.querySelector("#corrections").textContent = "";
      }
      document
        .querySelectorAll('.checks input[name="checks"]')
        .forEach((radioButton) => {
          radioButton.checked = false;
        });
    }
  }
}

function clearSelection() {
  document
    .querySelectorAll('.checks input[name="checks"]')
    .forEach((radioButton) => {
      radioButton.checked = false;
    });
}

function resetQuiz() {
  clearSelection();
  quesPos = 1;
  correct = 0;
  incorrect = 0;
  document.querySelector("#finish").textContent = "";
  showQuestions();
}
