var slideIndex = 1;
 
showDivs(slideIndex);
	
  
function plusDivs(n) {
	showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

//function showDivs(n) {
//	var i;
//	var x = document.getElementsByClassName("articleSlides");
//	if (n > x.length) {slideIndex = 1}
//	if (n < 1) {slideIndex = x.length}
//	for (i = 0; i < x.length; i++) {
//		 x[i].style.display = "none";  
//	}
//	x[slideIndex-1].style.display = "block";  
//}

function showDivs(n) {
  var i;
  var slides = document.getElementsByClassName("articleSlides");
  var dots = document.getElementsByClassName("imgSelectDot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" imgSelectDotActive", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " imgSelectDotActive";
} 

	
	
	
	//lightbox
	
 // Open the Modal
function openModal() {
  document.getElementById("articleLightBoxContainer").style.display = "block";
}

//Close the Modal
function closeModal() {
  document.getElementById("articleLightBoxContainer").style.display = "none";
}

// Close the Modal clicking outside of image
//function closeModal(){
//	document.getElementById('articleLightBoxContainer').addEventListener('click', function(event){
//		if(event.originalTarget.classList.contains('lightboxArticleSlidesImg') ||
//			 event.originalTarget.classList.contains('articleLightBoxPrev') ||
//			 event.originalTarget.classList.contains('articleLightBoxNext') ||
//			 event.originalTarget.classList.contains('caption-container')){
//			//do nothing
//            console.log("a");
//		} else {
//             console.log("b");
//			document.getElementById("articleLightBoxContainer").style.display = "none";
//		}
//	});
//}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("lightboxArticleSlides");
	var captions = document.getElementsByClassName("lightboxArticleCaptions");
	var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
	document.getElementById("lightboxArticleDisplayedCaption").innerHTML = captions[slideIndex-1].innerHTML;
} 



