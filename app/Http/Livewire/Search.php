<?php

namespace App\Http\Livewire;

use App\Models\Contents;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $datalist = Contents::where('title','like', '%'.$this->search.'%')->get();

        return view('livewire.search', ['datalist' => $datalist, 'query'=>$this->search]);
    }

    #return view('livewire.search');
}
