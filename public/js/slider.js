let slideIndex = 1;
let slide = 0;

// Next/previous controls
function plusSlides(n) {
    showSlides((slideIndex += n));
}
// function automation() {
//     plusSlides(1);
//     setTimeout(automation, 1000);
// }
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add("hidden");
    }
    slides[slideIndex - 1].classList.remove("hidden");
    slides[slideIndex - 1].classList.add("block");
}
