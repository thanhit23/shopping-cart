const headerElement = document.querySelector('#header');
const productElement = document.querySelector('.panel__list');
const searchElement = document.querySelector('.search__box');
const searchBox = document.querySelector('.search--box');
const product = document.querySelectorAll('.product__link');
const pageProduct = document.querySelector('#page-product')

if (searchElement) {
  searchElement.addEventListener('mouseover', () => {
    searchBox.style.width = '280px';
  })
  searchElement.addEventListener('mouseout', () => {
    searchBox.style.width = '40px';
  })
}

// for (let i = 0; i < product.length; i++) {
//   product[i].addEventListener('click', () => {
//     const idProduct = product[i].dataset.id;
//     localStorage.setItem('productDetail', idProduct)
//   })
// }

// const pageProductDetail = document.querySelector('#main-product-detail')
// function rederingImgProduct() {
//   const addToCart = document.querySelector('.add--cart');
//   addToCart.addEventListener('click', () => {
//     const quantity = document.querySelector('.input__product--selected');
//     const cartId = cart.length + 1
//     const html = `{"id": "${cartId}","name": "${dataProduct.name}","src": "${dataProduct.src.srcImg_1}","priceNew": "${dataProduct.price.price_new}","priceOf": "${dataProduct.price.price_of}","quantity": "${quantity.value}"}`
//     localStorage.setItem('addToCart', html)
//   })
// }


