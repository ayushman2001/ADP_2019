var num1 = document.getElementById("num1");
var num2 = document.getElementById("num2");
var result = document.getElementById("result");

num1.addEventListener("input", add);
num2.addEventListener("input", add)

function add() {
    document.getElementById("result").innerHTML = Number(num1.value) + Number(num2.value);
    //document.getElementById("result").innerHTML ='Number(num1.value) + Number(num2.value)';

}
