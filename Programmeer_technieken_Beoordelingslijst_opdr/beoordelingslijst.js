function voegResultaatToe(invoerPara) {
	var invoer = document.getElementById(invoerPara).value;
	var beoordeling = bepaalCijfer(invoer);

	if (invoer / 100 * 100 == invoer && invoer > 0 && invoer < 101) { 
		document.getElementById("beoordelingslijst").innerHTML += print(invoerPara,invoer,beoordeling);
	}
}
function print(invoerPara,invoer,beoordeling) {
	if (invoerPara == 'invoer1') {
		var returnCommand = ("Het cijfer is " + invoer + " en is dus " + beoordeling + "<br>");
	} else {
		var returnCommand = ("De beoordeling is " + beoordeling + ", want het cijfer is " + invoer + "<br>");
	}
	return returnCommand;
}

function bepaalCijfer(invoer) {
	if (invoer > 0) {
		if (invoer < 50) {
			return("onvoldoende")
		}
		else if (invoer < 60) {
			return("matig")
		}
		else if (invoer < 75) {
			return("voldoende")
		}
		else if (invoer <= 100) {
			return("goed")
		}
	}
}
