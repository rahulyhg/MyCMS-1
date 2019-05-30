/*
  Verificando se o user-agent é mobile
*/

const mobile = window.matchMedia('(max-width: 768px)');

if (mobile.matches) {
  console.log("Tela menor que 768px");
} else {
  console.log("Tela maior que 768px");
}