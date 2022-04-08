<?php

namespace App\Http\Livewire;

use DB;
use App\Models\Admin\TmMenu;
use Livewire\Component;

class Menu extends Component
{
    public $menuList = [];
    public function render()
    {
        $this->menuList = TmMenu::orderBy('urutan','ASC')->get();
        return view('livewire.menu');
    }
}
