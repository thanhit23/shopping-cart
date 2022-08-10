const selectProductBtn = document.querySelector('.cf_stardust-checkbox__box');
const selectProduct = document.querySelectorAll('input[name="select-product"]');
const selectLength = selectProduct.length
const checkboxProductBtn = document.getElementById('select-all-products');
const checkboxProduct = document.getElementsByClassName('product__checkbox');
const totalPriceInner = document.querySelector('#total-payments span').innerHTML;
const btnBuyProduct = document.getElementsByClassName('btn-buy-product');
const btnDelete = document.getElementsByClassName('__manipulation--delete');
const deleteLength = btnDelete.length

btnBuyProduct[0].addEventListener('click', () => {
  const formData = new FormData();
  const price = document.querySelector('#total-payments span').innerHTML;
  formData.append('total', price);
  fetch(route.buyProduct, { method: 'POST', body: formData })
    .then(data => data.json())
    .then(data => {
      console.log(data, 'data');
    })
})

for (let i = 0; i < selectLength; i++) {
  selectProduct[i].addEventListener('click', () => {
    const parentElement = selectProduct[i].parentElement.parentElement;
    const price = parentElement.querySelector('.product__amount_money span').innerHTML;
    const totalPrice = document.querySelector('#total-payments span');
    const totalPriceInner = document.querySelector('#total-payments span').innerHTML;

    if (selectProduct[i].checked) {
      const quantity = parentElement.querySelector('.input__product--selected').value;
      const priceProduct = Number(price.replace('.', '')) * Number(quantity);
      const totalPriceSelectProduct = (priceProduct + Number(totalPriceInner.replace(',', ''))).toLocaleString('en-US')
      totalPrice.innerHTML = totalPriceSelectProduct;
    } else {
      const quantity = parentElement.querySelector('.input__product--selected').value;
      const priceProduct = Number(price.replace('.', '')) * Number(quantity);
      const totalPriceSelectProduct = (Number(totalPriceInner.replace(',', '')) - priceProduct).toLocaleString('en-US')
      totalPrice.innerHTML = totalPriceSelectProduct;
    }
  })
}

for (let i = 0; i < deleteLength; i++) {
  btnDelete[i].addEventListener('click', () => {
    const id = btnDelete[i].parentElement.parentElement.dataset.id
    const formData = new FormData();
    formData.append('id_product', id);
    fetch(route.delete, { method: 'POST', body: formData })
      .then(data => data.json())
      .then(data => {
        if (data.status == true) {
          window.location.reload();
        }
      });
  })
}
