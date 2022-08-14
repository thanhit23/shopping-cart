const btnSubmit = document.querySelector('.btn-submit');
const { origin } = window.location

btnSubmit.addEventListener('click', () => {
  const formData = new FormData();
  const name = document.getElementById('name').value;
  const src_img = document.getElementById('src_img').value;
  const price_of = document.getElementById('price_of').value;
  const price_new = document.getElementById('price_new').value;
  const percentage = document.getElementById('percentage').value;
  const quantity_sold = document.getElementById('quantity_sold').value;
  formData.append('name', name);
  formData.append('price_of', price_of);
  formData.append('src_img', src_img);
  formData.append('price_new', price_new);
  formData.append('percentage', percentage);
  formData.append('quantity_sold', quantity_sold);
  fetch(`${origin}/update_product.php`, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(data => {
      console.log(data);
    })
})
