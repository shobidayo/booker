<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>予約検索</title>

        <!-- Fonts -->
    
        <link href="{{ secure_asset('css/reservations.css') }}" rel="stylesheet">
    </head>
    <body>    
    <div class = "header">
        <h1>予約検索</h1>
    </div>
    <form action="/search/plans" method="post">
        @csrf
        <div class ="capacity">     
             <label for="capacity">人数:</label>
                <select name="people">
                    <option value="1">1名様</option>
                    <option value="2">2名様</option>
                </select>
        </div>       
        <div class ="room">     
             <label for="room">部屋の選択:</label>
                <select name="room_type">
                    <option value="未選択">選択してください</option>
                    <option value="シングルルーム">シングルルーム(最大1名利用)</option>
                    <option value="ダブルルーム">ダブルルーム(最大2名利用)</option>
                </select>
        </div>        
        <a href = "/plans">いったん次のページに遷移させるために配置</a>
 
        <div class = "date">
            <label for="checkin">チェックイン日</label>
            <input type="date" id="checkin" name="checkin_date" onchange="updateCheckoutDate()"><br>
    
            <label for="checkout">チェックアウト日</label>
            <input type="date" id="checkout" name="checkout_date"><br>
    
            <input type="submit" value="検索する">
        </div>
    </form>
     
    <a href ="/">戻る</a>
    <script src="{{ secure_asset('JavaScript/reservations.js') }}"></script>
    </body>
</html>