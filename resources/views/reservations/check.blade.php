<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>予約情報確認画面</title>

        <!-- Fonts -->
    
        <link href="{{ secure_asset('css/confirms.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class ="header">
            <h1>予約情報確認画面</h1>
        </div>
        <div class ="main">
            @foreach ($reservations as $reservation)
            <div class ="title-box capacity">
                <span class ="title">ご宿泊人数</span>
                <p>{{$reservation->reserver_people}}</p>
                <input type="hidden" name="inputPeople">
            </div>
            <div class ="title-box room">
                <span class ="title">お部屋タイプ</span>
                <p>お部屋タイプ</p>
                <input type="hidden" name="inputRoom">
            </div>
            <div class ="title-box date">
                <span class="title">チェックイン日</span>
                <p>{{$reservation->checkin_date}}</p>
                <input type="hidden" name="inputCheckin">
            </div>
            <div class ="title-box date">
                <span class="title">チェックアウト日</span>
                <p>{{$reservation->checkout_date}}</p>
                <input type="hidden" name="inputCheckout">
            </div>
            <div class ="title-box plan">
                <span class="title">選択したプラン</span>
                <p>選択したプラン</p>
                <input type="hidden" name="inputPlanTitle">
            </div>
            <div class ="title-box price">
                <span class="title">料金</span>
                <p>料金</p>
            </div>
            <div class ="title-box body">
                <span class="title">選択したプラン内容</span>
                <p>選択したプラン内容</p>
            </div>
        </div>
        <input type="submit" value="予約確定" />
        @endforeach
        <div class='paginate'>
            {{ $reservations->links() }}
<div class ="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>    