document.addEventListener("DOMContentLoaded", (event) => {
	document.getElementById("menu").addEventListener("click", function () {
		document.getElementById("menu-side").classList.add("open");
		document.getElementById("menu").classList.add("hidden");
		document.getElementById("menu_icon").classList.remove("hidden");
	});
	document.querySelector(".menu_icon").addEventListener("click", function () {
		document.getElementById("menu-side").classList.remove("open");
		document.getElementById("menu").classList.remove("hidden");
		document.getElementById("menu_icon").classList.add("hidden");
	});
});
