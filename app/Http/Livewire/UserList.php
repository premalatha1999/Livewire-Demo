<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $search = '';
    public $sort = 'created_at';
    public $sortOrder = 'asc';
    public function sortBy($sortField){
        if($sortField!="" && !empty($sortField)){
            $this->sort = $sortField;
        }else{
            $this->sort = 'created_at';
        }
    }

    public function render()
    {
        $users = User::orderBy($this->sort,$this->sortOrder)->simplePaginate(10);
        return view('livewire.user-list',compact('users'));
    }
}
