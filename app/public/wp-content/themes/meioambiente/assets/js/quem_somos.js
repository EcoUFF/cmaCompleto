var service = document.getElementById("menu-item-16");
var url_atual = window.location.href;
// Verifica se a variável "verificado" já está definida no localStorage
var verificado = localStorage.getItem('verificado');

// Se a variável "verificado" não estiver definida, define-a como 0
if (verificado === null) {
  verificado = 0;
}


console.log('oi')
if(url_atual == "http://localhost:10011/"){
  const link = service.querySelector('li a');
  link.onclick = scrollSuave;
  link.href='#scrollHere'
  function scrollSuave(event) {
    event.preventDefault();
    
    const destino = document.querySelector(event.target.getAttribute('href'));
    
    window.scrollTo({
      top: destino.offsetTop,
      behavior: 'smooth'
    });
  }
}
if(url_atual != "http://localhost:10011/"){

  const link = service.querySelector('li a');
  link.onclick = scrollSuave;
  link.addEventListener('click', function(){
    verificado = 1;
    // Armazena o valor de "verificado" no localStorage
    localStorage.setItem('verificado', verificado);
    console.log('clicou');
  });
  link.href='http://localhost:10011';
}
if(verificado == 1){
  // Obtenha o elemento de destino pelo ID
  const destino = document.getElementById('scrollHere');

  // Rola a página para o elemento de destino
  window.scrollTo({
    top: destino.offsetTop,
    behavior: 'smooth'
  });
  verificado = 0;

  // Armazena o valor de "verificado" no localStorage
  localStorage.setItem('verificado', verificado);
}
console.log(verificado);
// const link = service.querySelector('li a');
//   link.href='http://localhost:10046#scrollHere';