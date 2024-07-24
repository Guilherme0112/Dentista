document.addEventListener('DOMContentLoaded', function(){
    const boxPerguntas = document.querySelectorAll('.box-perguntas');
    boxPerguntas.forEach(box => {
        box.addEventListener('click', (evento) => {
            const resposta = box.querySelector('.box-resposta-pergunta');
            const line = box.querySelector('.line-box');
            resposta.classList.toggle('show-resposta');
            line.classList.toggle('show-line');
        });
    });
});