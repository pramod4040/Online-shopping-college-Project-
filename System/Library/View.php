<?php

namespace System\Library;


class View
{
	public function load($view, $data = [])
	{
		extract($data);

		unset($data);

		include 'resources/views/' . $view . '.php';
	}
}