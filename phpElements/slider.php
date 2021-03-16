<div class="content">
            <div class="wrapper">
                    <div class="slides">
                        <img class="slides-item" src="img/f.gif" alt="j">
                        <img class="slides-item" src="img/sekiro.jpg" alt="k">
                        <img class="slides-item" src="img/gow.jpg" alt="p">
                        <img class="slides-item" src="img/sonic.jpg" alt="w">
                    </div>
                    
                        <a class="prev" onclick="minusSlide()">&#10094</a>
                        <a class="next" onclick="plusSlide()">&#10095</a>
                    
                    <div class="dots-block">
                        <span class="dots-item active" onclick="currentSlide(1)"></span>
                        <span class="dots-item" onclick="currentSlide(2)"></span>
                        <span class="dots-item" onclick="currentSlide(3)"></span>
                        <span class="dots-item" onclick="currentSlide(4)"></span>
                    </div>
                    </div>

<script>

var slideIndex = 1;
showSlides(slideIndex);

function plusSlide() {
    showSlides(slideIndex += 1);
}

function minusSlide() {
    showSlides(slideIndex -= 1);  
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides-item");
    var dots = document.getElementsByClassName("dots-item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
</script>