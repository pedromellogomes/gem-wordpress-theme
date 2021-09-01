// NAVBAR SCRIPT

const btnHamburger = document.querySelector('#btnHamburger');
const mobileLinks = document.querySelector('#mobile_link');
const body = document.querySelector('body');
const header = document.querySelector('.header');
const fadeElems = document.querySelectorAll('.has-fade');

btnHamburger.addEventListener('click', openCloseMobileMenu);
mobileLinks.addEventListener('click', openCloseMobileMenu);

function openCloseMobileMenu() {
  if(header.classList.contains('open')) { // Close Hamburger Menu
    header.classList.remove('open');    
    fadeElems.forEach(function(element){
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
    });
  }
  else { // Open Hamburger Menu
    body.classList.add('noscroll');
    header.classList.add('open');
    fadeElems.forEach(function(element){
      element.classList.remove('fade-out');
      element.classList.add('fade-in');
    });
  }
}

// CAROUSEL SCRIPT
$('.carousel').carousel();