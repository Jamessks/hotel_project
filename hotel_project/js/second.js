function myFunction() {

	var x = document.getElementById("heading-list");
	var v = document.getElementsByClassName("heading-item");

	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
	for (i = 0; i < v.length; i++) {
  	v[i].className += " fade";
	}
		// console.log(v);
	// setTimeout(removeFadeClass(v,3000));
	setTimeout(function(){
		for (k = 0;k < v.length; k++){
			 v[k].classList.remove("fade");
		}
	}, 1000);
}

// function removeFadeClass(wow) {
//
// }
