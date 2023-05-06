<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PlanController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $plans = Plan::get();

        return view("plans", compact("plans"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact("plan", "intent"));
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);


        $user_id = auth()->user();
        $user_id->plan = $plan->id;

        return view("subscription_success")->with('msg', 'Ihull... Parabéns!, você fez assinatura do seu plano de Telemedicina.');
    }

    public function showPlan()
    {
        $user_id = auth()->user();
        $plan_id = $user_id->id;
        $data = User::find($plan_id);
        if ($data) {
            $result = $data->toArray();

            return view("dashboard", ['dataPlan' => $result]);
        }
        $result = [];
        return view("dashboard", ['dataPlan' => $result]);
    }
}
