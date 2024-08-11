const header = document.querySelector('header');
const logo = document.querySelector('.logo img'); 
const scrollTrigger = 50; 

window.addEventListener('scroll', function() {
  if (window.scrollY >= scrollTrigger) {
    logo.src = "images/Logo-scroll.png"; 
    header.classList.add('header-scrolled');
  } else {
    logo.src = "images/Logo-scroll.png"; 
    header.classList.remove('header-scrolled');
  }
});
