<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserList extends Component
{

    public $name;
    public $email;
    public $role;

    public function mount()
    {

        $this->name  = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->role  = Auth::user()->role;

    }

    public function render()
    {
        return view('livewire.user-list', [

            'users' => DB::table('users')->paginate(5),

        ]);
    }
}
