
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
    
    var login = document.getElementById("login-info");
    login.style.display = "block";
    
    var res = document.getElementById("register-info");
    res.style.display = "none";
    
    //document.getElementsBy("txtUser").focus();
    window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
        }
    }
}
function bagPop(){
    var bag = document.getElementById("bag-info");
    bag.style.display = "block";
    
    window.onclick = function(event) {
    if (event.target == bag) {
        bag.style.display = "none";
        }
    }
}
function resiPop(){
    var login1 = document.getElementById("login-info");
    var res = document.getElementById("register-info");
    login1.style.display = "none";
    res.style.display = "block";
    
    window.onclick = function(event) {
    if (event.target == res) {
        res.style.display = "none";
        }
    }
    
}
window.onclick = function(){
    alert("njd");
//    var sd = document.getElementById("login-info");
//    if (event.target == sd) {
//        alert("njd");
//    }
}
