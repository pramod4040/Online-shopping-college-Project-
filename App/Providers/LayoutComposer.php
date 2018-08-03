<?php

namespace App\providers;

use App\Models\Category;

class LayoutComposer
{
	public function composeCategoryMenu()
	{
		$category = new Category();

		$rootcategories = $category->findRootCategory();

		$categories = [];

		foreach ($rootcategories as $key=>$rc)
		{
			$categories[$key] = $rc;

			$subcategories = $category->findChildCategory($rc['id']);
			$categories[$key]['child'] = $subcategories;
		}
		return $categories;


	}
}