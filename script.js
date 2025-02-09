document.addEventListener("DOMContentLoaded", function () {
    // Animation d'apparition progressive des sections
    const sections = document.querySelectorAll("section");

    function fadeInSections() {
        sections.forEach(section => {
            if (section.getBoundingClientRect().top < window.innerHeight - 100) {
                section.style.opacity = 1;
                section.style.transform = "translateY(0)";
            }
        });
    }

    sections.forEach(section => {
        section.style.opacity = 0;
        section.style.transform = "translateY(50px)";
        section.style.transition = "opacity 0.8s ease-out, transform 0.8s ease-out";
    });

    window.addEventListener("scroll", fadeInSections);
    fadeInSections(); // Lancer à l'ouverture de la page

    // Effet hover sur les compétences
    const progressBars = document.querySelectorAll("progress");

    progressBars.forEach(bar => {
        bar.addEventListener("mouseover", function () {
            this.style.transition = "transform 0.3s ease-in-out";
            this.style.transform = "scale(1.1)";
        });

        bar.addEventListener("mouseout", function () {
            this.style.transform = "scale(1)";
        });
    });
});
