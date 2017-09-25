// add event listener
document.getElementById("calculate").addEventListener("click", calculate);

function calculate() {

    // get input
    var str = document.getElementById('numbers').value;

    // seperate input into an array
    var charArray = str.split(",");

    // parse string to numbers
    for (var i=0; i < charArray.length; i++) {
        charArray[i] = parseFloat(charArray[i]);
    }

    // get operator
    var opr = document.getElementById('operation').value;

    // Loops true calculations
    var res = charArray[0];
    for (var i=1; i < charArray.length; i++) {
        res = calc(res, charArray[i], opr);
    }

    // calculates result
    function calc(nbrOne, nbrTwo, operator) {
        if (operator == '+') {
            res = nbrOne + nbrTwo;

        } else if (operator == '-') {
            res = nbrOne - nbrTwo;

        } else if (operator == '*') {
            res = nbrOne * nbrTwo;

        } else if (operator == '/') {
            res = nbrOne / nbrTwo;
        }
        return res;
    }

    // return result
    document.getElementById('result').innerHTML = res;

}
