<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>予約情報確認画面</title>

        <!-- Fonts -->
    
        <link href="{{ secure_asset('css/confirms.css') }}" rel="stylesheet">
    </head>
    <body>
    <form action="/posts/{{ $reservation->id }}" id="form_{{ $reservation->id }}" method="post">
        @csrf
        <div class ="header">
            <h1>予約情報確認画面</h1>
        </div>
        <div class ="main">
            <div class ="title-box capacity">
                <span class ="title">ご宿泊人数</span>
                <p>{{ $inputPeople }}</p>
                <input type="hidden" name="inputPeople" value="{{ $inputPeople }}">
            </div>
            <div class ="title-box room">
                <span class ="title">お部屋タイプ</span>
                <p>{{ $inputRoom }}</p>
                <input type="hidden" name="inputRoom" value="{{ $room_id }}">
            </div>
            <div class ="title-box date">
                <span class="title">チェックイン日</span>
                <p>{{ $inputCheckin }}</p>
                <input type="hidden" name="inputCheckin" value="{{ $inputCheckin }}">
            </div>
            <div class ="title-box date">
                <span class="title">チェックアウト日</span>
                <p>{{ $inputCheckout }}</p>
                <input type="hidden" name="inputCheckout" value="{{ $inputCheckout }}">
            </div>
            <div class ="title-box plan">
                <span class="title">選択したプラン</span>
                <p>{{$plan->name}}</p>
                <input type="hidden" name="inputPlanTitle" value="{{ $plan->id }}">
            </div>
            <div class ="title-box price">
                <span class="title">料金</span>
                <p>{{$price}}</p>
            </div>
            <div class ="title-box body">
                <span class="title">選択したプラン内容</span>
                <p>{{$plan->body}}</p>
            </div>
        </div>
        <input type="submit" value="予約確定" />
    </form>
<div class ="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>    