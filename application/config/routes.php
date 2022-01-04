<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['homepage']     = 'Author/index';
$route['add_product'] = 'ProductController/index';
$route['add_new_product'] = 'ProductController/product_insert';
$route['all_product']     = 'ProductController/selectAllProduct';
$route['update_product/(.+)'] = 'updateProduct_Controller/index/$1';

$route['product_view/(.+)'] = 'ProductController/product_view/$1'; 
$route['product_update_byid'] = 'updateProduct_Controller/updateMethod';
$route['product_update_view'] = 'updateProduct_Controller/update_from_view';
$route['delete_product/(.+)']       = 'ProductController/product_delete/$1'; 










