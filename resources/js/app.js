import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
    }
    const pronunciationButtons = document.querySelectorAll(
        ".pronunciation-button"
    );

    pronunciationButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const text = this.dataset.text;
            alert("Pronunciation feature coming soon for: " + text);
        });
    });
});
