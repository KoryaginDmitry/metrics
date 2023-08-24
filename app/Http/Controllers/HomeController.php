<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('statistics', [
            'clicks' => Click::all()->groupBy('button_name')
        ]);
    }
}
