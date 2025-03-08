<?php
namespace App\Livewire;

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserRole extends Component
{

    public $name;
    public $email;
    public $role;

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }

    public function mount()
    {

        $this->name  = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->role  = Auth::user()->role;

    }
    public function render()
    {
        return view('livewire.user-role');
    }
}
