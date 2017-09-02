<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourInfoController extends Controller
{
    public function index() {
      return view('pages.info.index');
    }

    public function malaria() {
      return view('pages.info.malaria');
    }

    public function itemsToBringToGhana() {
      return view('pages.info.itemsToBringToGhana');
    }
}
