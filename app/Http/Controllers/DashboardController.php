<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function instructions()
    {
        return view('pages.instructions.index');
    }

    public function orders()
    {
        return view('pages.orders.index');
    }

    public function finance()
    {
        return view('pages.finance.index');
    }

    public function supplies()
    {
        return view('pages.supplies.index');
    }

    public function settings()
    {
        return view('pages.settings.index');
    }
}
