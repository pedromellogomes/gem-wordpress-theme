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
document.getElementById("btnTeste").addEventListener("click",()=>testeButton());
function testeButton(){
 

  let erase =document.getElementById("eraseDiv");
  erase.parentNode.removeChild(erase);

  let divAnswer = document.createElement("div");
  divAnswer.className="testando"

  let spanText1 =document.createElement("span");
  spanText1.className="textSpan1";

  let textH1 =document.createTextNode("Agora voce vai aprender muito mais sobre a economia do mar.");
  spanText1.appendChild(textH1);

  let spanText2 = document.createElement("span");
  spanText2.className="textSpan2";
  

  let textH2 =document.createTextNode("Obrigado por assinar!Fique de olho na sua caixa de entrada para não eprder as novidades.Se não receber nada dentro de um mês, confira sua caixa de spam ou refaça sua assinatura.");
  spanText2.appendChild(textH2)

  let img = document.createElement("img");
  img.className="fishImg";
img.src= "";

  divAnswer.appendChild(spanText1);
  divAnswer.appendChild(spanText2);
  divAnswer.appendChild(img);

  let divAtual = document.getElementById("newsletter");
  divAtual.appendChild(divAnswer);

}
// CAROUSEL SCRIPT 
$('.carousel').carousel();