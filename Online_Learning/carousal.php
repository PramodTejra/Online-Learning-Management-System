<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Slideshow</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        .slideshow-container {
            /* border: 2px solid red; */
            width: 100%;
            position: relative;
            margin: auto;
}

.slide {
    display: flex;
    justify-content: center;

}
img{
    width: 100%;
}
.fade {
    animation: fade 4s ease-in;
    /* animation-name: fade;
    animation-duration: 2s; */
}

@keyframes fade {
    0% {
        opacity: 0.4;
    }
    20% {
        opacity: 0.9;
    }
    100% {
        opacity: 1;

    }
}

    </style>
</head>
<body>
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="https://iiitbhopal.ac.in/Document/Slider/1_page.jpg" alt="Image 1">
        </div>
        <div class="slide fade">
            <img src="https://iiitbhopal.ac.in/Document/Slider/3_WhatsApp%20Image%202024-01-10%20at%2011.00.37.jpg" alt="Image 2">
        </div>
        <div class="slide fade">
            <img src="https://iiitbhopal.ac.in/Document/Slider/4_2_national%20sports%20day%202023.jpg" alt="Image 3">
        </div>
    </div>
    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";  
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}

    </script>
</body>
</html>