<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class PortfolioController extends Controller
{
    public function index() {
      $staffs = Staff::all();
      return view('pages.portfolio.index', compact('staffs'));
    }

    public function team($id) {
      $staff = Staff::findOrFail($id);
      return view('pages.portfolio.team', compact('staff'));
    }
}
