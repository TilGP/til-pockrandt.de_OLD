const navSlide = () => {
    console.log('2');
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    
    burger.addEventListener('click', ()=>{
        console.log('3');
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
    });
    
}

console.log('1');

navSlide();