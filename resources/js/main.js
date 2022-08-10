const pagination = document.getElementsByClassName('btn-pagination');
const paginationLength = pagination.length

for (let i = 0; i < paginationLength; i++) {
  pagination[i].addEventListener('click', () => {
    const formData = new FormData()
    formData.append('pageIndex', pagination[i].innerHTML);
    fetch(route.pagination, { method: 'POST', body: formData })
      .then(data => data.json())
      .then(data => {
        if (data.status === true) {
          window.location.reload();
        }
      })
  })
}
