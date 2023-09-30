<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Plan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private function getPlans()
    {
        $plans = Plan::with('fiturs')->get();

        // return response()->json([
        //     'plans' => $plans
        // ]);

        return $plans;
    }

    private function getBidangs()
    {
        $bidangs = Bidang::all();

        return $bidangs;
    }

    public function index()
    {
        $bidangs = $this->getBidangs();
        $plans = $this->getPlans();

        return view('dashboard.userDashboard', ['bidangs' => $bidangs, 'plans' => $plans]);
    }
}