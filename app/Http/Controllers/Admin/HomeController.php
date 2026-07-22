<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalProduct = Product::count();
        $popularProduct = Product::where('is_popular', true)->take(10)->get();
        $totalCustomer = User::where('role', 'customer')->count();
        return view('admin.home', compact('totalProduct', 'totalCustomer', 'popularProduct'));
    }
}
