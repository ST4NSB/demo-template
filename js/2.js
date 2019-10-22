document.getElementsByTagName("button")[0].onclick = function() {
	let elem = document.getElementsByTagName("h1")[0];
	elem.id = "changed";
	elem.style.backgroundColor = "red";
};