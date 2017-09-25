document.getElementById("inputfield").addEventListener("keyup", mainCount);
document.getElementById("button").addEventListener("click", toPascalCase);

function mainCount() {
    var input = document.getElementById("inputfield").value;
    var largestWord = getLargedWord(stringToArray(input));
    var amountOfChars = input.length;
    var amountOfCharsWithoutSpaces = countCharactersWithoutSpaces(input, amountOfChars);
    var amountOfWords = countWords(stringToArray(input));
    countSameWords(stringToArray(input));

    var res = "In het input veld staat --> " + input + " <--<br><br>";
    res += "Deze string bevat: <br> ";
    res += amountOfChars + " karakter(s) met spaties meegerekent. <br>"
    res += amountOfCharsWithoutSpaces + " karakter(s) zonder spaties meegerekent.<br>";
    res += amountOfWords + " woord(en) <br>";
    res += "en het " + "langste woord is --> " + largestWord + " <--";

    document.getElementById("result").innerHTML = res;
}
function getLargedWord(array) {
  var longestWord = 0;
  var positionInArray;
  for (var i = 0; i < array.length;) {

    if (longestWord < array[i].length) {
      longestWord = array[i].length;
      positionInArray = i;
    }
     i++;
  }
  if (array[0] === '') {
    return("");
  }
  else {
    return(array[positionInArray])
  }
}

function toPascalCase() {
    //Gets the  user input
    var input = document.getElementById("inputfield").value;

    //splits the words in an array
    var charArray = stringToArray(input);

    //loops through every word
    for (var x = 0; x < charArray.length; x++) {
        var i = charArray[x];

        // changes the first character of a word into an uppercase character
        i = charArray[x].charAt(0).toUpperCase();

        //loops through every char in a word exept char 0
        for (var y = 1; y < charArray[x].length; y++) {
            i += charArray[x].charAt(y);
        }
        charArray[x] = i;
    }

    // turns the data back into a single string
    var res = charArray[0];
    for (var i = 1; i < charArray.length; i++) {
        res += " " + charArray[i];
    }

    document.getElementById('inputfield').value = res;
    mainCount();
}
/**
 * Convert a string to array
 * @param  {[string]} string [description]
 * @return {[array]}         [description]
 */
function stringToArray(string) {
  var array = string.split(" ");
  return(array);
}

function countCharactersWithoutSpaces(input, amountOfCharsWithoutSpaces) {
    if (input.length > 0) {
        //count total words
        for (var i = 0; i < input.length; i++) {
            if (input.charAt(i) == " ") { // if a space is found in str
              amountOfCharsWithoutSpaces --; //decrement 1 char
            }
        }
    }
    return amountOfCharsWithoutSpaces;
}
function countWords(stringArray) {
    var amountOfWords = 0;

    if (stringArray.length > 1) {
        amountOfWords = stringArray.length;
    } else {
        if (stringArray[0] != "") {
            amountOfWords = 1;
        }
    }

    return amountOfWords;
}

function countSameWords(stringArray) {
    var counterArray = [];
    for (var a = 0; a < stringArray.length; a++) {
        counterArray[a] = 0;


        for (var b = 0; b < stringArray.length; b++) {
            if (stringArray[a] == stringArray[b]) {

                // Prevents the same data from being stores twice
                counterArray[a] = 0
                for (var c = a; c < stringArray.length; c++) {
                    if (stringArray[a] == stringArray[c]) {
                        counterArray[a] ++;
                    }
                }
            }
        }
    }

    var highestCountPos = 0
    for (var a = 0; a < counterArray.length; a++) {
        if (counterArray[a] < counterArray[highestCountPos]) {
            highestCountPos = counterArray[a];

        }
    }

    console.log(counterArray);
    //console.log(highestCountPos);
}
