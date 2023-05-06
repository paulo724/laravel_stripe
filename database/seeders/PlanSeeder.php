<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run()
    {
        $plans = [
            [
                'name' => '+ Plus',
                'slug' => 'plano_plus',
                'stripe_plan' => 'price_1LmB1SCXbPPKAWayGsb1DAkq',
                'price' => 109,
                'description' => 'Vantagens Ilimitadas'
            ],
            [
                'name' => '+ Premium',
                'slug' => 'plano_premium',
                'stripe_plan' => 'price_1LnwbTCXbPPKAWay3ByKpcfq',
                'price' => 20,
                'description' => 'Vantagens Ilimitadas'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
