let slideIndex = 0;
showSlides();

// Tự động chuyển slide sau mỗi 3 giây
setInterval(function () {
    plusSlides(1);
}, 3000);

// Sự kiện khi di chuột vào slideshow-container
document.querySelector(".slideshow-container").addEventListener("mouseenter", function () {
    showNav(true);
    showHoverIcon(true);
});

// Sự kiện khi di chuột ra khỏi slideshow-container
document.querySelector(".slideshow-container").addEventListener("mouseleave", function () {
    showNav(false);
    showHoverIcon(false);
});

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");

    if (n !== undefined) {
        slideIndex = n;
    }

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex].style.display = "block";
}

function showNav(show) {
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");

    if (show) {
        prevButton.style.display = "block";
        nextButton.style.display = "block";
    } else {
        prevButton.style.display = "none";
        nextButton.style.display = "none";
    }
}

function showHoverIcon(show) {
    const slides = document.getElementsByClassName("mySlides");

    if (show) {
        for (let i = 0; i < slides.length; i++) {
            slides[i].addEventListener("mouseenter", function () {
                document.querySelector(".prev").style.display = "block";
                document.querySelector(".next").style.display = "block";
            });
        }
    } else {
        for (let i = 0; i < slides.length; i++) {
            slides[i].removeEventListener("mouseenter", function () {
                document.querySelector(".prev").style.display = "none";
                document.querySelector(".next").style.display = "none";
            });
        }
    }
}


