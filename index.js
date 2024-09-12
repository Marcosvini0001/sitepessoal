
//const projetosLink = document.getElementById('projetos');
const vejaMaisLink = document.getElementById('vejaMais');
const mensagemSpan = document.getElementById('mensagem');


function mostrarMensagem() {
    mensagemSpan.innerHTML = "Esta página está em desenvolvimento!";
    mensagemSpan.style.display = "block"; 
    
    
    setTimeout(() => {
        mensagemSpan.style.display = "none";
    }, 3000);
}


/*projetosLink.addEventListener('click', (e) => {
    e.preventDefault(); 
    mostrarMensagem(); 
}); */

vejaMaisLink.addEventListener('click', (e) => {
    e.preventDefault();
    mostrarMensagem();
});

