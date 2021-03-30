<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Customer as CustomerData;

class Customer extends Component
{
      use WithPagination;
    public $searchTerm;

    public function render()
    {
           $searchTerm = '%'.$this->searchTerm.'%';


         return view('livewire.customer',[
            'customers' => CustomerData::where('Cons_No','like', $searchTerm)->paginate(10)
        ]);
    }
}
