function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();

	// Add 0 in front of the numbers less than 10
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('clock').innerHTML = h + ':' + m + ':' + s;
	t = setTimeout('startTime()', 500);
}

function checkTime(i) {
	if (i<10) {
		i = "0" + i;
	}
	return i;
}