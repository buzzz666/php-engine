<?php 

return array(

	'product/([0-9]+)' => 'product/view/$1', //productcontroller actionview

	'catalog' => 'catalog/index', //catalogcontroller actionindex
	'category/([0-9]+)' => 'catalog/category/$1', //catalogcontroller actioncategory

	'' => 'site/index', //sitecontrolle actionindex
	
);

?>