document
	.getElementById("select-all-button")
	.addEventListener("click", function () {
		const checkboxes = document.querySelectorAll(".student-checkbox");
		checkboxes.forEach((checkbox) => {
			if (!checkbox.checked) {
				checkbox.checked = true;
			} else {
				checkbox.checked = false;
			}
		});
	});
