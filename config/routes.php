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

	'cart/add/([0-9]+)' => 'cart/add/$1', //cartcontroller actionadd
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', //cartcontroller actionaddAjax
	'cart' => 'cart/index', //cartcontroller actionindex

	'' => 'site/index', //sitecontrolle actionindex
	
);

?>