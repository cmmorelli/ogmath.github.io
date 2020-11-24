alert("Hello World")

document.getElementById("button").onclick = function(){
	document.getElementById("confirm").innerHTML = "Order placed. Check email for confirmation";
	document.getElementById("button").style.display = "none";
}


