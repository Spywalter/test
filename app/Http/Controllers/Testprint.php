<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use PDF;

class Testprint extends Controller
{
    //

    public function downloadPDF($id)
    {

        $users = DB::table('users')->where('id', '=', $id)->orderBy('id', 'DESC')->paginate(10);

        $data = [
            'title' => 'All Posts',
            'users' => $users,
        ];

// Generate PDF from Blade view
        $pdf = PDF::loadView('users-pdf', $data);

// Stream the PDF to the browser
        return $pdf->stream('posts.pdf');

    }

}
