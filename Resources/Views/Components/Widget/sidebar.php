<?php

namespace App\View\Components\widget;

use Illuminate\View\Component;
use App\Models\Navigation\Menu;
use App\Models\Navigation\MenuItem;

class sidebar extends Component {

    public $menu;
    public array $menuItems = [];
    public array $parent = [];

    public function __construct($menu = 'sidebar') {
        $this->menu = $menu;
        $this->getMenu();
    }

    public function render() {
        return view('components.widget.sidebar');
    }

    public function getMenu() {
        $menu = Menu::where('title', $this->menu)->firstOrFail();
        $menuItems = MenuItem::where('menu_id', $menu->id)->get();
        array_push($this->menuItems, $menuItems);
        return $menuItems;
    }

    public function getChildren($parent_id = null) {
        $menu = Menu::where('title', $this->menu)->firstOrFail();
        $menuItems = MenuItem::where('parent_id', $parent_id)->get();
    }
}
