function converteer() {
  var invoer = document.getElementById('invoer').value;
  var resultaat = forlooptester(invoer);
  document.getElementById('resultaat').innerHTML += resultaat + "<br>";
}
function forlooptester(inv) {
  var y = "";
  var resultaat = "";
  for (i = 0; i < inv.length; i++ ) {
    y = inv.charAt(i);
    y = vergelijker(y);
    resultaat += y;
  }
  return resultaat;
}

function vergelijker(inv) {
  var inv = inv
  if (inv == "a") {
    return "!"
  } else if (inv == "e") {
    return "@"
  } else if (inv == "o") {
    return "#"
  } else if (inv == "u") {
    return "$"
  } else if (inv == "i") {
    return "%"
  } else {
    return inv
  }
}
