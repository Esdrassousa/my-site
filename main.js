const btnMobile = document.getElementById('btn-mobile');


//btnMobile.addEventListener('click', togleMenu);

window.addEventListener("click", (event) => {
  const btnMobile = document.getElementById('btn-mobile');
  if (btnMobile) {
    btnMobile.addEventListener('click', togleMenu);
  }
});

function togleMenu(){
  console.log("oi")
  const nav = document.getElementById('navegacao');
  nav.classList.toggle('active')

}

