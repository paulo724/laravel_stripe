<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SubscriptionController extends Controller
{
    public function showPlan()
    {
        $user_id = auth()->user();
        $plan_id = $user_id->id;

        $data = Subscription::where('user_id', $plan_id)->first();

        if ($data) {
            $result = Plan::where('id', $data['name'])->first();
            $result->toArray();
            return view("dashboard", ['dataPlan' => $result]);
        }
        $result = [];
        return view("dashboard", ['dataPlan' => $result]);
    }
}
