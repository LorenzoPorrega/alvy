<?php

namespace App\Livewire\Layout;

use App\Models\Request;
use Livewire\Component;

class Aside extends Component
{
  public $requests;

  // public function mount(){
  //   $this->requests = Request::all();
  // }

  public function render()
  {
    $this->requests = Request::all();
    return view('livewire.layout.aside');
  }
}
