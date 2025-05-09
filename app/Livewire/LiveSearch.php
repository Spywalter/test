<?php
namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LiveSearch extends Component
{

    public $searchName;
    public $nameresults = [];

    public $search;

    public function render()
    {
        return view('livewire.live-search', [

            'users' => DB::table('users')->where('name', 'like', "%" . $this->search . "%")->orderBy('id', 'DESC')->paginate(10),
        ])->title('Live Search Page');
    }
}
