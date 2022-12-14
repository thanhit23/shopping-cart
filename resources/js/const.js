const { origin } = window.location
const BASE_URL = `${origin}/api`

var route = {
  checkAuth: `${BASE_URL}/check_auth.php`,
  checkAuthorized: `${BASE_URL}/check_authorized.php`,
  createUser: `${BASE_URL}/create_user.php`,
  addCart: `${BASE_URL}/add_cart.php`,
  logOut: `${BASE_URL}/log_out.php`,
  addPreSelectProductsCart: `${BASE_URL}/add_preSelect_product.php`,
  buyProduct: `${BASE_URL}/buy-products.php`,
  pagination: `${BASE_URL}/pagination.php`,
  delete: `${BASE_URL}/delete_product.php`,
};
