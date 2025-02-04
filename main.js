document.addEventListener("DOMContentLoaded", function () {
    // Name and site animation
    const siteTitle = document.createElement("h1");
    siteTitle.textContent = "Welcome to Ruth Massock's Portfolio";
    siteTitle.classList.add("animated-title");
    document.body.prepend(siteTitle);

    // Dark/Light mode toggle
    const toggleButton = document.createElement("button");
    toggleButton.textContent = "Toggle Dark Mode";
    toggleButton.classList.add("mode-toggle");
    document.body.prepend(toggleButton);

    toggleButton.addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");
    });
});


