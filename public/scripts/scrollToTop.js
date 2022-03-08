//Get the button:
scrolltToTopBtn = document.getElementById('scrollToTopBtn');

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {showHideScrollToTopBtn()};

function showHideScrollToTopBtn() {
  if (document.body.scrollTop > 20 && getWidth() > 768 || document.documentElement.scrollTop > 20 && getWidth() > 768) {
    scrolltToTopBtn.classList.remove("d-none");
    scrolltToTopBtn.classList.add("d-block");
    
  } else {
    scrolltToTopBtn.classList.add("d-none");
    scrolltToTopBtn.classList.remove("d-block");
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function getWidth() {
  if (self.innerWidth) {
    return self.innerWidth;
  }else if (document.documentElement && document.documentElement.clientWidth){
    return document.documentElement.clientWidth;
  }else if(document.body){
    return document.body;
  }
}