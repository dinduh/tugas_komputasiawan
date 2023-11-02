<?php

namespace App\Http\Controllers;

use App\Models\Dashbord;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Request $request)
    {
        //

        return view('dashbord');
    }


}
