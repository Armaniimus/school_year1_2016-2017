var elem = document.getElementById("block")
var pos_y = 40
var pos_x = 40
var numb = 0 // 0=links 1=rechts 2=omhoog	3=omlaag 4=linksom	5=rechtsom


function linkss(){
	elem.style.webkitTransform = "translateX(0px)"
}
function rechts(){
	elem.style.webkitTransform = "translateX(100px)"
}
function omhoog(){
	elem.style.webkitAnimation = "duration 3s"
	elem.style.webkitTransform = "translateY(0px)"
}	
function omlaag(){
	elem.style.webkitTransform = "translateY(100px)"
}
function linksom(){
	elem.style.webkitTransform = "rotate("+360+"deg)"
}
function rechtsom(){
	elem.style.webkitTransform = "rotate(-"+360+"deg)"
}