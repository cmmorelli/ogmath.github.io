fetch("./test.html")
	.then(response => {
		return response.text()
	})
	.then(data => {
		document.querySelector("body").innerHTML = data;
	});

