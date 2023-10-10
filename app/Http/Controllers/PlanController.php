<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function search(Request $request, Plan $plans)
    {
        $peopleNumber= $request->input('people');
        $roomSelect=$request->input('room_type');
        
        $selected_plans = $plans->whereHas('rooms', function($q) use($peopleNumber,$roomSelect){
            $q->where('capacity','>=', $peopleNumber)->where('type','=',$roomSelect);
        })->get();
        
        return redirect('/plans');
        //{{ $selected_plans->rooms->capacity }}
        //次のmtgの時に下で部屋の選択ができるか確認。

        // チェックイン魏、チェックアウト日の入力フォームを使ってプラン一覧画面にリダイレクト
        // ・これはsearchメソッド内で書くのか確認。多分書くと思うのでsearchメソッドに書くと想定
        // $checkinDate=$request->input('checkin_date');
        // $selected_plans = $plans->whereHas('reservations',function($q) use($checkinDate){
        //     $q->where('checkin_date','=',$checkinDate); 
        // });    
        // $checkoutDate=$request->input('checkout_date');
        // $selected_plans = $plans->whereHas('reservations',function($q) use($checkoutDate){
        //     $q->where('checkout_date','=',$checkoutDate);
        // }); 
    }
    
    public function choices(Plan $plan)
    {
        return view('plans.choose')->with(['choices'=>$plan->getPaginateBylimit(3)]);
        
    }
}
