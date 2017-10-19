<?php 

return array(

	'product/([0-9]+)' => 'product/view/$1', //productcontroller actionview

	'catalog' => 'catalog/index', //catalogcontroller actionindex

	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //categorycontroller actioncategory
	'category/([0-9]+)' => 'catalog/category/$1', //catalogcontroller actioncategory

	'user/register' => 'user/register', //usercontroller actionregister
	'user/login' => 'user/login', //usercontroller actionlogin
	'user/logout' => 'user/logout', //usercontroller actionlogout
	
	'cabinet/edit' => 'cabinet/edit', //cabinetcontroller actionedit
	'cabinet' => 'cabinet/index', //cabinetcontroller actionindex

	'contacts' => 'site/contact', //sitecontroller actioncontact

	//'cart/add/([0-9]+)' => 'cart/add/$1', //cartcontroller actionadd
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', //cartcontroller actionaddAjax
	'cart/delete/([0-9]+)' => 'cart/delete/$1', //cartcontroller actiondelete
	'cart/checkout' => 'cart/checkout', //cartcontroller actioncheckout
	'cart' => 'cart/index', //cartcontroller actionindex

	//------------------- admin --------------------------//
	//products
	'admin/product/create' => 'adminProduct/create',
	'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
	'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
	'admin/product' => 'adminProduct/index',
	//categories
	'admin/category/create' => 'adminCategory/create',
	'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
	'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
	'admin/category' => 'adminCategory/index',
	//orders
	'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
	'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
	'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
	'admin/order' => 'adminOrder/index',

	'admin' => 'admin/index', //admincontroller actionindex
	//------------------- /admin -------------------------//

	'' => 'site/index', //sitecontrolle actionindex
	
);

?>