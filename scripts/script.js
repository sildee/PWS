function showhide1(nr) {
	var x = document.getElementById(nr).style.display;
	if(x === 'none') {
		document.getElementById(nr).style.display = 'block'; 
	}
	else if (x === 'block') {
		document.getElementById(nr).style.display = 'none';
	}
}