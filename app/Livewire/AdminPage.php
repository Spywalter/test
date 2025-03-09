<?php
namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminPage extends Component
{
    public function render()
    {
        return view('livewire.admin-page', [

            'users' => DB::table('users')->paginate(5),

        ])->title('Admin Page');
    }
}
