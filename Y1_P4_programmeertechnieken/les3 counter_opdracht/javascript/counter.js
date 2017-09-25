var i = 0;
var x = 2;
var y = 2;
var run = setInterval(countTo100, 33.33);
function countTo100() {

    if (i < 100) {
        i += 1;
        res = i + "%";
        document.getElementById('count').innerHTML = res;
    } else if (i === 100) {
        clearInterval(run);
        x = 0;


        document.getElementById('countcss').className = "roundcount counthalfanima";
        i = 101;

        //runs an animation
        var run2 = setInterval(countTo100, 500);
        x = 1;

    } else if (x === 1) {
        clearInterval(run2);
        x = 2
        y = 0;
        //var run = setTimeout(countTo100, 1000);
        document.getElementById('countcss').className = 'roundcount countfullanima'
    }
}
//1. creëer tel variabel
//2. creëer setInterval

//3. creëer een functie
    //3.1 variabel kleiner is dan 100
        //3.1.1 telt 1 bij tel variablel op
        //3.1.2 print resultaat
    //3.2 als variabel 100 is
        //3.2.1 stop interval
        //3.2.2 run css effect

//4. creëer css effect
