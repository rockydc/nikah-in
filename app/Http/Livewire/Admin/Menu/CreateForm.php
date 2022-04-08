<?php

namespace App\Http\Livewire\Admin\Menu;

use Livewire\Component;
use App\Models\Admin\TmMenu;

class CreateForm extends Component
{
    public $data = '';
    public $formAction = '';
    public function render()
    {
        return view('livewire.admin.menu.create-form');
    }
    public function mount($id = null){
       $this->action = route('menu.save');
       return $this->data = TmMenu::find($id);
    }
}
