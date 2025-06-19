<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserResponse;
use PDF;    

class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = UserResponse::findOrFail($id);
        $pdf = PDF::loadView('user_response_form', compact('user'));
        return $pdf->download('user_' . $user->id . '.pdf');
    }
}
