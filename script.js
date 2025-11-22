// script.js

// Example: Smooth scroll or alert button
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".btn");
    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            alert("Button clicked! You can link pages here.");
        });
    });
});
