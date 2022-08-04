const display = document.querySelector('.display-nav');
const header = document.querySelector('#header');
const btnClose = document.querySelector('.btn-close');

display.addEventListener('click', () => {
  header.classList.add('display-active');
  display.style = 'display: none;'
});
btnClose.addEventListener('click', () => {
  header.classList.remove('display-active');
  display.style = 'display: block;'
});
