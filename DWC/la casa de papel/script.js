// Define the questions and answers
const names = [
    "tokyo", 
    "moscu", 
    "profesor",
];

const btn = document.querySelector("#txt");

document.querySelector("#check").addEventListener('click', function(){
    if (btn.nodeValue == "") {
        alert.console.warn("No seas bago y escribe algo.");
    } else {
        names.forEach(n => {
            if (btn.nodeValue == n) {
                alert.inf("Tonto");
            }
        });
    }
});