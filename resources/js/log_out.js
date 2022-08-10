const log_Out = document.querySelector('#user__item--log-out')
if (log_Out) {
  log_Out.addEventListener('click', (e) => {
    fetch(route.logOut)
      .then(data => data.json())
      .then(data => {
        console.log(data);
      })
    window.location.href = 'http://localhost/home'
   })
}
