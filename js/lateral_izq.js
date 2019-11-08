ik = 0;
function openNav() {
	if(ik==0){
		document.getElementById("mySidenav").style.width = "250px";
		//document.getElementById("app").style.marginLeft = "250px";
		document.getElementById("app").style.visibility = "hidden";
		//document.getElementById("lateralizq").style.backgroundColor = "rgba(0,0,0,0.01)";
		ik = 1;
		document.getElementById("foto1").style.visibility = "visible";
		document.getElementById("foto1").style.position = "absolute";
		document.getElementById("foto1").style.top = "0";
	}
	else{
		document.getElementById("mySidenav").style.width = "0";
		//document.getElementById("app").style.marginLeft= "0";
		document.body.style.backgroundColor = "white";
		document.getElementById("app").style.visibility = "visible";
		document.getElementById("foto1").style.visibility = "hidden";
		document.getElementById("foto1").style.position = "absolute";
		document.getElementById("foto1").style.top = "-9999px";
		ik = 0;
	}
}
