<?php

namespace App\Http\ViewComposers;

use App\Models\Menu;
use Illuminate\View\View;

class MenuComposer
{
	/**
	 * @var \App\Models\Menu
	 */
	private $menu;

	/**
	 * Create an instance of the composer.
	 *
	 * @param  \App\Models\Menu  $menu
	 * @return void
	 */
	public function __construct(Menu $menu)
	{
		$this->menu = $menu;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  \Illuminate\View\View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view->with('menu', $this->menu->getMenuList());
		$view->with('currentPage', $this->menu->getCurrentPage());
	}
}
