<?php

namespace App\Models;

class Menu
{
	/**
	 * Get a list of the menu items.
	 *
	 * @return array
	 */
	public function getMenuList()
	{
		return [
			'home' => 'Home',
			'services' => 'Services',
			'about' => 'About',
			'contact' => 'Contact',
		];
	}

	/**
	 * Get the current page.
	 *
	 * @return string|null
	 */
	public function getCurrentPage()
	{
		$viewSections = view()->getSections();
		return $viewSections['current-page'] ?? null;
	}
}
