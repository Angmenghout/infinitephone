<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {

        $companiesItem = DB::table('companies')->get();
        return view('homepage', compact('companiesItem'));
    }

    public function showDetail($id) {

        $companiesItemDetail = DB::table('companies')->find($id);
        return view('company_detail', compact('companiesItemDetail'));

    }

}
