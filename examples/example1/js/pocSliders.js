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
  var slides = document.getElementsByClassName("poc-mySlides");
  var dots = document.getElementsByClassName("poc-dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


var slideIndexCover = 1;
showSlidesCover(slideIndexCover);

function plusSlidesCover(n) {
  showSlidesCover(slideIndexCover += n);
}

function currentSlideCover(n) {
  showSlidesCover(slideIndexCover = n);
}

function showSlidesCover(n) {
  var i;
  var slidesCover = document.getElementsByClassName("poc-mySlidesCover");
  var dotsCover = document.getElementsByClassName("poc-dotCover");
  if (n > slidesCover.length) {slideIndexCover = 1}
  if (n < 1) {slideIndexCover = slidesCover.length}
  for (i = 0; i < slidesCover.length; i++) {
      slidesCover[i].style.display = "none";
  }
  for (i = 0; i < dotsCover.length; i++) {
      dotsCover[i].className = dotsCover[i].className.replace(" active", "");
  }
  slidesCover[slideIndexCover-1].style.display = "block";
  dotsCover[slideIndexCover-1].className += " active";
}

$(function(){
    $('.rotating-slider').rotatingSlider({
		slideHeight : Math.min(360, window.innerWidth -80),
		slideWidth : Math.min(480, window.innerWidth -80),
	});
});
