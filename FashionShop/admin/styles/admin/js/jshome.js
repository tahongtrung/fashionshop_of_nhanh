
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex  += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    //setTimeout(showSlides, 1000); // Change image every 2 seconds
}


function loginPop(){
    //alert("asda");
    var test = document.getElementById("login-info");
    test.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == document.getElementById("login-info")) {
        window.alert("njd");
    }
}
