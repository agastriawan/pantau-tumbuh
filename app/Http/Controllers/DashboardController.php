<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Monitoring;
use App\Models\Feedback;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role->id == 1) {
            $totalMonitoring = Monitoring::where('user_id', Auth::user()->id)->count();
            $totalFeedback = Monitoring::where('status', 'Selesai')
            ->where('user_id', Auth::user()->id)
            ->count();        
        } else {
            $totalMonitoring = Monitoring::count();
            $totalFeedback = Feedback::count();
        }

        return view('admin/dashboard', compact('totalMonitoring', 'totalFeedback'));
    }
}
