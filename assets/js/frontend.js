function ipflOpenForm() {
	if (pageMode == "1") { // If FullPage
		ipflOpenFullForm();
	} else if(pageMode == "0") { // If Popup
		ipflOpenPopupForm();
	}
}

function ipflCloseForm() {
	if (pageMode == "1") { // If FullPage
		ipflCloseFullForm();
	} else if(pageMode == "0") { // If Popup
		ipflClosePopupForm();
	}
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
        ipflCloseForm();
    }
};

// Popup experience

function ipflOpenPopupForm() {
	var x = window.matchMedia("(max-width: 600px)")

	if (x.matches) { // If Mobile
		document.getElementById("ipfl-myForm").style.display = "block";
		document.getElementById("ipfl-openButton").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "block";
		document.getElementById("ipfl-bg-full").style.display = "block";
		document.body.style.position = "fixed";
	} else {
		document.getElementById("ipfl-myForm").style.display = "block";
		document.getElementById("ipfl-openButton").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "block";
	}
}

function ipflClosePopupForm() {
	var x = window.matchMedia("(max-width: 600px)")

	if (x.matches) { // If Mobile
		document.getElementById("ipfl-myForm").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "none";
		document.getElementById("ipfl-openButton").style.display = "block";
		document.getElementById("ipfl-bg-full").style.display = "none";
		document.body.style.position = "static";
	} else {
		document.getElementById("ipfl-myForm").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "none";
		document.getElementById("ipfl-openButton").style.display = "block";
	}
}

// Full page experience

function ipflOpenFullForm() {
	var x = window.matchMedia("(max-width: 600px)")

	if (x.matches) { // If Mobile
		document.getElementById("ipfl-myForm-full").style.display = "block";
		document.getElementById("ipfl-fullpage-iframe").style.display = "block";
		document.getElementById("ipfl-openButton").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "block";
		document.getElementById("ipfl-bg-full-page-id").style.display = "block";
		document.body.style.position = "fixed";
	} else { // If not
		document.getElementById("ipfl-myForm-full").style.display = "block";
		document.getElementById("ipfl-fullpage-iframe").style.display = "block";
		document.getElementById("ipfl-openButton").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "block";
		document.body.style.overflow = "hidden";
		document.body.style.height = "100%";
		document.documentElement.style.overflow = "hidden";
		document.getElementById("ipfl-bg-full-page-id").style.display = "block";
	}
}

function ipflCloseFullForm() {
	var x = window.matchMedia("(max-width: 600px)")

	if (x.matches) { // If Mobile
		document.getElementById("ipfl-myForm-full").style.display = "none";
		document.getElementById("ipfl-fullpage-iframe").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "none";
		document.getElementById("ipfl-openButton").style.display = "block";
		document.getElementById("ipfl-bg-full-page-id").style.display = "none";
		document.body.style.position = "static";
	} else { // If not
		document.getElementById("ipfl-myForm-full").style.display = "none";
		document.getElementById("ipfl-fullpage-iframe").style.display = "none";
		document.getElementById("ipfl-closeButton").style.display = "none";
		document.getElementById("ipfl-openButton").style.display = "block";
		document.body.style.overflow = "visible";
		document.body.style.height = "100%";
		document.documentElement.style.overflow = "visible";
		document.getElementById("ipfl-bg-full-page-id").style.display = "none";
	}
}
