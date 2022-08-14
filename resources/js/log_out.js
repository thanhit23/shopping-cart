const log_Out = document.querySelector('#user__item--log-out')
const { origin } = window.location
if (log_Out) {
  log_Out.addEventListener('click', (e) => {
    fetch(route.logOut)
      .then(data => data.json())
      .then(data => {
        console.log(data);
      })
    window.location.href = `${origin}/home`
   })
}
