<?php 

return array(

	'product/([0-9]+)' => 'product/view/$1', //productcontroller actionview

	'catalog' => 'catalog/index', //catalogcontroller actionindex

	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //categorycontroller actioncategory
	'category/([0-9]+)' => 'catalog/category/$1', //catalogcontroller actioncategory

	'user/register' => 'user/register',//usercontroller actionregister

	'' => 'site/index', //sitecontrolle actionindex
	
);

?>