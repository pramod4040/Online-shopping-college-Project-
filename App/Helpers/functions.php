<?php

function category_menu()
{	
	$layoutcomposer = new \App\Providers\LayoutComposer();

	$data = $layoutcomposer->composeCategoryMenu();

	return $data;
}

function user_info()
{
	
}