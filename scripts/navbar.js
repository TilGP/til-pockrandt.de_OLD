const navSlide = () => {
    
  if (getWidth() < 768){
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    //toggle nav
    nav.classList.toggle('nav-active');

    //links fade
    navLinks.forEach((link, index) => {
        if(link.style.animation){
            link.style.animation = '';
        }else{
            link.style.animation = `navLinkFade 0.5s ease forwards ${index/5 + 0.3}s`;
        }
    });
  }
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