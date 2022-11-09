var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");
    var videos = document.getElementsByClassName("videos");
    
    if(n > slides.length) { slideIndex = 1;  console.log('final'); }
    if(n < 1) { slideIndex = slides.length; }
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        slides[i].removeAttribute('id', 'isActive');
        videos[i].pause();
        videos[i].currentTime = 0;

        // slides[i].setAttribute('id', 'isActive');

    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex-1].style.display = "block";
    slides[slideIndex-1].setAttribute('id', 'isActive');
    videos[slideIndex-1].play();
    dots[slideIndex-1].className += " active";

    videos[slideIndex-1].onended = function(e) {
      plusSlides(1);
    }
  }