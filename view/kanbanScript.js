var changeToGreen = function () {
	if (document.getElementById('optionsRadios1').checked)
		document.getElementById('tr1').className("danger");
	//document.getElementById('tr1').innerHTML = '<tr id= "tr1" class="danger">';
}

var changeToRed = function () {
	if (document.getElementById('optionsRadios2').checked)
		document.getElementById('tr1').className("warning");
	//document.getElementById('tr1').innerHTML = '<tr id= "tr1" class="warning">';
}

var changeToOrange = function () {
	if (document.getElementById('optionsRadios3').checked)
		document.getElementById('tr1').className("success");
	//document.getElementById('tr1').innerHTML = '<tr id= "tr1" class="success">';
}