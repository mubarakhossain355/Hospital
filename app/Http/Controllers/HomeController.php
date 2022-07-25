<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctors = doctor::all();
                return view('user.home', compact('doctors'));
            } else {
                return view('admin.home');
            }
        } else {

        }
    }
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = doctor::all();
            return view('user.home', compact('doctors'));
        }

    }
}
