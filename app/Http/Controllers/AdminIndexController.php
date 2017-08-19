<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Joshbooking;
use App\Package;

class AdminIndexController extends Controller
{
    public function index() {
      $totalBookings = Joshbooking::all()->count();
      $totalUsers = User::all()->count();
      $totalPackages = Package::all()->count();
      $totalEmployees = User::all()->where('role_id', 2)->count();
      $totalAdmins = User::all()->where('role_id', 1)->count();
      $totalSubscribers = User::all()->where('role_id', 3)->count();



      return view('admin.index', compact('totalBookings', 'totalUsers', 'totalPackages', 'totalEmployees', 'totalAdmins', 'totalSubscribers'));
    }


    public function admins() {
      $admins = User::all()->where('role_id', 1);
      return view('admin.users.admins', compact('admins'));
    }

    public function emloyees() {
      $employees = User::all()->where('role_id', 2);
      return view('admin.users.employees', compact('employees'));
    }

    public function subscribers() {
      $subscribers = User::all()->where('role_id', 3);
      return view('admin.users.subscribers', compact('subscribers'));
    }

}
