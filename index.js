//window.alert("Site ainda em desenvolvimento!")

// Seleciona os links e o span
const projetosLink = document.getElementById('projetos');
const vejaMaisLink = document.getElementById('vejaMais');
const mensagemSpan = document.getElementById('mensagem');

// Função para exibir a mensagem e ocultá-la após 3 segundos
function mostrarMensagem() {
    mensagemSpan.innerHTML = "Esta página está em desenvolvimento!";
    mensagemSpan.style.display = "block"; // Torna o span visível
    
    // Oculta a mensagem após 3 segundos (3000 ms)
    setTimeout(() => {
        mensagemSpan.style.display = "none";
    }, 3000);
}

// Adiciona o evento de clique nos links
projetosLink.addEventListener('click', (e) => {
    e.preventDefault(); // Evita a navegação
    mostrarMensagem(); // Exibe a mensagem
});

vejaMaisLink.addEventListener('click', (e) => {
    e.preventDefault();
    mostrarMensagem();
});

