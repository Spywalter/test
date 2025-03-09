<?php
namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Livewire\Component;

class PrintPage extends Component
{

    public $invoice;
    public function mount()
    {
        $this->invoice = "asd";
    }

    public function printPDF()
    {
        return response()->download(
            $this->invoice->file_path, 'invoice.pdf'
        );

    }

    public function render()
    {
        return view('livewire.print-page', [

            'users' => DB::table('users')->orderBy('id', 'DESC')->paginate(10),
        ])->title('Print Page');
    }

}
