<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>予約情報入力</title>

        <!-- Fonts -->
    
        <link href="{{ secure_asset('css/reservations.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class ="header">
            <h1>予約情報入力</h1>
        </div>
        <div class ="main">
            <div class ="capacity">
                ご宿泊人数：
            </div>
            <div class ="room">
                お部屋タイプ
            </div>
            <div class ="date">
                <label for="checkin">チェックイン日</label>
                <label for="checkin">チェックアウト日</label>
            </div>
            <div class ="plan">
                選択したプランと料金
            </div>
        </div>
        <div class ="input">
            <form method="POST" action="/confirm_reservation">
                @csrf
                <label for="name">名前（カタカナ）：</label>
                <input type="text" name="name" placeholder="タナカ　タロウ" required><br>
            
                <label for="address">住所：</label>
                <input type="text" name="address" placeholder="東京都〇〇" required><br>
            
                <label for="tellphone">電話番号：</label>
                <input type="tell_number" name="phone" placeholder="00011114444" required><br>
            
                <label for="email">メールアドレス：</label>
                <input type="email" name="email" placeholder="sadou@gmail.com" required><br>
            
                <button type="submit">予約確定</button>
            </form>
            
        </div>
        
        <div class ="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>