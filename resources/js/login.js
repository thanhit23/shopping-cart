const email = document.querySelector('#form-email');
const password = document.querySelector('#form-password');
const btnSignIn = document.querySelector('.btn-sign-in');
email.addEventListener('input', () => {
  const errorMessage = email.nextElementSibling
  const emailValue = email.value;
  const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (regex.test(emailValue)) {
    email.parentElement.classList.remove('invalid');
    errorMessage.innerHTML = '';
  } else {
    email.parentElement.classList.add('invalid');
    errorMessage.innerHTML = 'Vui lòng nhập đúng Email';
  }
})
btnSignIn.addEventListener('click', () => {
  const formData = new FormData();
  const errorElement = document.querySelector('.error-container');
  const errorMessage = document.querySelector('.error-message-form');
  formData.append('email', email.value);
  formData.append('password', password.value);
  fetch(route.checkAuthorized, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(data => {
      if (!data.status) {
        errorMessage.innerHTML = data.message;
        errorElement.classList.remove('active-error');
      } else {
        window.location = 'http://localhost/home';
      }
    })
});
