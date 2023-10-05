<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function search(Request $request, Plan $plans)
    {
        $peopleNumber= $request->input('people');
        $selected_plans=$plans->rooms()->where('capacity',$peopleNumber)->get();
        //{{ $selected_plans->rooms->capacity }}
    }
    
    public function choices(Plan $plan)
    {
        return view('plans.choose')->with(['choices'=>$plan->getPaginateBylimit(3)]);
    }
}
