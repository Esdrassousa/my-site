

function togleMenu(){
  console.log("entrou")
  const nav = document.getElementById('navegacao');
  const headind = document.getElementById('heading-aux');
  nav.classList.toggle('active')
  headind.classList.toggle('active-heading')
  

}
const btnMobile = document.getElementById('btn-mobile');
//btnMobile.addEventListener('click', togleMenu);

window.addEventListener("click", (event) => {
  console.log("oi")
  const btnMobile = document.getElementById('btn-mobile');
  if (btnMobile){

    togleMenu()
    btnMobile.addEventListener('click' , togleMenu());
    
  }
  
});





