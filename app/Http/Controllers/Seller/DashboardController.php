<?php

namespace App\Http\Controllers\Seller;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('client.home.index');
    }


}
