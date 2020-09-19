window.addEventListener('click', function(e) {
	if (!document.getElementById('NavBar__List').contains(e.target) && (!document.getElementById('NavBar__Button').contains(e.target))){
		var NavList = document.getElementById("NavBar__List");
		var NavButton = document.getElementById("NavBar__Button");
		var NavButton1 = document.getElementById("NavBar__Button-Style1");
		var NavButton2 = document.getElementById("NavBar__Button-Style2");
		var NavButton3 = document.getElementById("NavBar__Button-Style3");
		var NavBarPhone = document.getElementById("Icon__Phone");
		var NavBarLogo = document.getElementById("Logo__Slogive");

		NavList.className = "NavBar__List Open";
		NavButton.className = "NavBar__Button Open Item__No-Select";
		NavButton1.className = "NavBar__Button-Style1";
		NavButton2.className = "NavBar__Button-Style2";
		NavButton3.className = "NavBar__Button-Style3";
		NavBarPhone.className = "Icon Icon__Phone Open";
		NavBarLogo.className = "Icon Logo__Slogive Open";
	} 
})

function NavBarButton() {
	var NavList = document.getElementById("NavBar__List");
	var NavButton = document.getElementById("NavBar__Button");
	var NavButton1 = document.getElementById("NavBar__Button-Style1");
	var NavButton2 = document.getElementById("NavBar__Button-Style2");
	var NavButton3 = document.getElementById("NavBar__Button-Style3");
	//var NavBar = document.getElementById("NavBar__Container");
	var NavBarPhone = document.getElementById("Icon__Phone");
	var NavBarLogo = document.getElementById("Logo__Slogive");
	if (NavList.className === "NavBar__List Open") {
		NavList.className = "NavBar__List Close";
		NavButton.className = "NavBar__Button Close Item__No-Select";
		NavButton1.className = "NavBar-Toggle NavBar__Button-Style1";
		NavButton2.className = "NavBar-Toggle NavBar__Button-Style2";
		NavButton3.className = "NavBar-Toggle NavBar__Button-Style3";
		NavBarPhone.className = "Icon Icon__Phone Close";
		NavBarLogo.className = "Icon Logo__Slogive Close";
	} else {
		NavList.className = "NavBar__List Open";
		NavButton.className = "NavBar__Button Open Item__No-Select";
		NavButton1.className = "NavBar__Button-Style1";
		NavButton2.className = "NavBar__Button-Style2";
		NavButton3.className = "NavBar__Button-Style3";
		NavBarPhone.className = "Icon Icon__Phone Open";
		NavBarLogo.className = "Icon Logo__Slogive Open";
	}
}

// Form Count
function count_up(obj) {
	document.getElementById("form-message").innerHTML = obj.value.length;
}

function count_down(obj) {
	var element = document.getElementById("form-message-count");

	element.innerHTML = 500 - obj.value.length;

	if (500 - obj.value.length < 0) {
		element.style.color = "red";
	} else {
		element.style.color = "grey";
	}
}

/* ///////////////////////////////////////////////////////////////////////////////////////////// */

setTimeout(function(){document.getElementById("IAni__Cursor").className = "TabRemoved";}, 35000);
//setTimeout(function(){document.getElementById("IAni__Text0").style.display = "inline";}, 25500);
//setTimeout(function(){document.getElementById("IAni__Br0").style.display = "inline";}, 25500);
