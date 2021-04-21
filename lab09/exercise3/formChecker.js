document.getElementById('form').onsubmit = function() {

	const user = document.getElementById('user').value;
	var res = user.split("@");
	if (res.length != 2 || res[0] == "" || res[1] == "") {
		console.log("Must be a valid email");
		return false;
	} else {
		var res2 = res[1].split(".");
		if (res2.length != 2 || res2[0] == "" || res2[1] == "") {
			console.log("Must be a valid email");
			return false;
		}
	}

	const pass = document.getElementById('password').value;
	if (pass == "") {
		console.log("Password cannot be blank");
		return false;
	}

	const quantity1 = document.getElementById('item1').value;
	const quantity2 = document.getElementById('item2').value;
	const quantity3 = document.getElementById('item3').value;

	if (quantity1 == "" || quantity2 == "" || quantity3 == "") {
		console.log("Item quantities cannot be null");
		return false;
	}

	if (quantity1 < 0 || quantity2 < 0 || quantity3 < 0) {
		console.log("Item quantities cannot be negative");
		return false;
	}

	const ship1 = document.getElementById('free').value;
	const ship2 = document.getElementById('overnight').value;
	const ship3 = document.getElementById('three').value;

	if (!(ship1 || ship2 || ship3)) {
		console.log("Shipping object must be selected");
		return false;
	}
}