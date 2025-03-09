<?php
namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LiveSearch extends Component
{

    public $searchName;
    public $nameresults = [];

    public $name;
    public $email;
    public $role;
    public function updated($property)
    {

        if ($property === 'searchName') {

            if (strlen($this->searchName) >= 1) {
                # code...
                $this->nameresults = User::where('name', 'like', "%" . $this->searchName . "%")
                    ->limit(7)
                    ->get();

            }

        }

    }

    public function selectName($id)
    {

        $result = DB::table('users')
            ->where('id', '=', $id)->first();

        $this->name  = $result->name;
        $this->email = $result->email;
        $this->role  = $result->role;

        $this->searchName = $this->name;

    }

    public function render()
    {
        return view('livewire.live-search', [

            'users' => DB::table('users')->orderBy('id', 'DESC')->paginate(10),
        ])->title('Live Search Page');
    }
}
