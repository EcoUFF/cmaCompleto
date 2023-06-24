const servico = document.getElementById("menu-item-18");
const url_atual_fc= window.location.href;
// Verifica se a variável "verificado" já está definida no localStorage
var verificado_fc = localStorage.getItem('verificado_fc');

// Se a variável "verificado" não estiver definida, define-a como 0
if (verificado_fc === null) {
    verificado_fc = 0;
}


console.log('oi')
if(url_atual_fc== "http://localhost:10011/"){
  const link = servico.querySelector('li a');
  link.onclick = scrollSuave;
  link.href='#scrollHere2'
  function scrollSuave(event) {
    event.preventDefault();
    
    const destino = document.querySelector(event.target.getAttribute('href'));
    
    window.scrollTo({
      top: destino.offsetTop,
      behavior: 'smooth'
    });
  }
}
if(url_atual_fc != "http://localhost:10011/"){

  const link = servico.querySelector('li a');
  link.onclick = scrollSuave;
  link.addEventListener('click', function(){
    verificado_fc = 1;
    // Armazena o valor de "verificado" no localStorage
    localStorage.setItem('verificado_fc', verificado_fc);
    console.log('clicou');
  });
  link.href='http://localhost:10011';
}
if(verificado_fc == 1){
  // Obtenha o elemento de destino pelo ID
  const destino = document.getElementById('scrollHere2');

  // Rola a página para o elemento de destino
  window.scrollTo({
    top: destino.offsetTop,
    behavior: 'smooth'
  });
  verificado_fc = 0;

  // Armazena o valor de "verificado" no localStorage
  localStorage.setItem('verificado_fc', verificado_fc);
}

