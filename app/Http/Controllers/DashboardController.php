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

    public function transactions()
    {
        return view('pages.transactions.index');
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
