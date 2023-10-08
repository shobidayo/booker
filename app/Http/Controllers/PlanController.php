<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function search(Request $request, Plan $plans)
    {
        $peopleNumber= $request->input('people');
        $selected_plans = $plans->whereHas('rooms', function($q) use($peopleNumber){
            $q->where('capacity','=', $peopleNumber);
        })->get();
       dd($selected_plans);
        return redirect('/plans');
        // if ($selected_plans->isEmpty()){
        //     return redirect('/reservations')->with('error','該当するプランが見つかりませんでした');
        // }
        // $selected_planId=$selected_plans->first()->id;
        //{{ $selected_plans->rooms->capacity }}
    }
    
    public function choices(Plan $plan)
    {
        return view('plans.choose')->with(['choices'=>$plan->getPaginateBylimit(3)]);
        
    }
}
