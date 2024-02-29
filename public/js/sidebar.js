// login error

const error = document.querySelector('.error')

setTimeout(() => {
    error.remove();
}, 3000);


// ingresar notas success
const mensajeIngresar = document.querySelector('.success');

setTimeout(() => {
    mensajeIngresar.remove();
}, 3000);



// sidebar
const btnMenu = document.querySelector('#sidebar')
const sidebar = document.querySelector('aside')
btnMenu.addEventListener('click', () => {
    console.log('cline en barra menu');
    sidebar.classList.toggle('active')
})