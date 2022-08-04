const selectedColor = document.querySelectorAll('.__color-item');
const reduceBtn = document.querySelector('.btn-reduce');
const increaseBtn = document.querySelector('.btn-increase');
const inputSelected = document.querySelector('.input__product--selected');
const briefing = document.querySelector('.product-briefing');
const nameProduct = document.querySelector('._name--title')
document.title = nameProduct.innerHTML;
const imageItem = document.querySelectorAll('.image__item');
const imageShow = document.querySelector('.image__shown');
const priceNew = document.querySelector('.price-new');
const priceOf = document.querySelector('.price-of');
const quantitySelected = document.querySelector('.input__product--selected');
const imageItemShow = document.querySelector('.image__shown img').src;
const addToCart = document.querySelector('.add--cart')

for (let i = 0; i < imageItem.length; i++) {
  imageItem[i].addEventListener('mousemove', () => {
    imageShow.childNodes[1].setAttribute('src', imageItem[i].childNodes[1].src)
  })

  imageItem[i].addEventListener('mouseout', () => {
    imageShow.childNodes[1].setAttribute('src', imageItemShow)
  })
}

addToCart.addEventListener('click', (e) => {
  var formData = new FormData();
  const url_string = window.location.href;
  const url = new URL(url_string);
  console.log(url);
  const id = url.searchParams.get("id");
  // console.log(id, 'id');
  formData.append('check_auth', true);
  fetch(route.checkAuth, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(data => {
      if (!data.status) {
        window.location.href = `http://localhost/pages/authen/register.php?idProductAdded=${id}&quantity=${inputSelected.value}`
      } else {
        addCart();
      }
    })
});

function addCart() {
  const formData = new FormData();
  formData.append('quantity', inputSelected.value);
  formData.append('idProduct', briefing.dataset.id);

  fetch(route.addCart, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(data => {
      console.log(data);
    })
}

reduceBtn.addEventListener('click', () => {
  if (inputSelected.value == 1) {
    inputSelected.value = 1;
  } else {
    inputSelected.value = inputSelected.value - 1;
  }
})
increaseBtn.addEventListener('click', () => {
  inputSelected.value = Number(inputSelected.value) + 1;
})
