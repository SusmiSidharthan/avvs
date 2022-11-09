<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main/home';

$route['home'] = 'main/home';
$route['consulting'] = 'main/consulting';
$route['addconsulting'] = 'main/addconsulting';

$route['home2'] = 'main/home_copy';
$route['avvvs-speciality-clinic'] = 'main/avvvs_speciality_clinic';

$route['contact'] = 'main/contact';
$route['ayurvaram'] = 'main/ayurvaram';

$route['gallery'] = 'main/gallery';
$route['gallery2'] = 'main/gallery_copy';
$route['gallery-inner'] = 'main/gallery_inner';
$route['gallery-inner-news'] = 'main/gallery_inner_news';
$route['gallery-inner-news-factory'] = 'main/gallery_inner_news_factory';

$route['blog'] = 'main/blog';
$route['blog-details/(:any)'] = 'main/blog_details/$1';
$route['blog-inner'] = 'main/blog_inner';


$route['contact_mail'] = 'main/contact_mail';


$route['customer-care'] = 'main/customer_care';

$route['about'] = 'main/about';
$route['testimonials'] = 'main/testimonials';


$route['product-details/(:any)'] = 'main/product_details/$1';
$route['search'] = 'main/search';
$route['filter-list'] = 'main/filter_list';
$route['store-list'] = 'main/store_list';
$route['store-details/(:any)'] = 'main/store_details/$1';
$route['offer-details/(:any)'] = 'main/offer_details/$1';


$route['product-list'] = 'main/Product_list';

$route['product-list/(:any)'] = 'main/Product_list/$1';


$route['my-profile']           = 'account/index';
$route['my-order']             = 'account/order';
$route['my-appoinment']             = 'account/my_appoinment';

$route['wish-list']            = 'account/wish_list';
$route['notification']         = 'account/notification';
$route['manage-address']       = 'account/manage_address';

$route['view-cart']            = 'account/view_cart';
$route['checkout']             = 'account/checkout';
$route['order-placed']         = 'account/order_placed';
$route['cart-order-placed']    = 'account/cart_order_placed';
$route['offer-order-placed']   = 'account/offer_order_placed';
$route['add-to-cart/(:num)/(:num)']   = 'account/add_to_cart/$1/$2';
$route['buy-now/(:any)']       = 'account/buy_now/$1';
// $route['buy-now/(:any)']       = 'account/buy_now/$1';


$route['offer-buy-now/(:num)'] = 'account/offer_buy_now/$1';
$route['order_sucess/(:any)/(:any)']  = 'account/order_sucess/$1/$2';

$route['order-failed']         = 'account/order_failed';

$route['profile-update']       = 'account/profile_update';
$route['delivery-address-add'] = 'account/delivery_address_add';
$route['product-rating']       = 'account/product_rating';
$route['product-cancel']       = 'account/product_cancel';


$route['spine-joint']       = 'main/spine_joint';
$route['skin-disorders']       = 'main/skin_disorders';
$route['hair-scalp']       = 'main/hair_scalp';
$route['gallery-details/(:any)']       = 'main/gallery_details/$1';

////////////////////////////////////////

$route['cart/(:num)'] = 'main/cart/$1';

$route['cart_order'] = 'main/cart_order';

$route['checkout_cart/(:num)'] = 'main/checkout_cart/$1';

$route['logout'] = 'main/logout';

$route['sign-up'] = 'login/sign_up';


$route['products'] = 'main/products';


$route['contact'] = 'main/contact';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
