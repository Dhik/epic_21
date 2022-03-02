<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Sponsorship;
use App\Models\Exhibition;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index()
    {
        $count = array(
            'message' => Message::count(),
            'sponsorship' => Sponsorship::count(),
            'exhibition' => Exhibition::count(),
            'admin' => User::count()
        );

        return view('admin/home', ['count' => $count]);   
    }
}
