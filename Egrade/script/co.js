document.addEventListener("DOMContentLoaded", (event) => {
	const profileType = localStorage.getItem("selectedProfile");
	if (profileType) {
		document.getElementById("profil-type").textContent = profileType;
	}
});

document.addEventListener("DOMContentLoaded", function () {
	const searchInput = document.querySelector(".search-bar input");
	const cards = document.querySelectorAll(".card");

	searchInput.addEventListener("input", function (e) {
		const query = e.target.value.toLowerCase();
		cards.forEach((card) => {
			const cardText = card.textContent.toLowerCase();
			if (cardText.includes(query)) {
				card.style.display = "flex";
			} else {
				card.style.display = "none";
			}
		});
	});
});

function togglePasswordVisibility() {
	var passwordInput = document.getElementById("password");
	var eyeIcon = document.getElementById("eye-icon");

	if (passwordInput.type === "password") {
		passwordInput.type = "text";
		eyeIcon.className = "fas fa-eye-slash";
	} else {
		passwordInput.type = "password";
		eyeIcon.className = "fas fa-eye";
	}
}
