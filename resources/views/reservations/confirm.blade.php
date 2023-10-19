<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>予約情報入力</title>

        <!-- Fonts -->
    
        <link href="{{ secure_asset('css/confirms.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class ="header">
            <h1>予約情報入力画面</h1>
        </div>
        <div class ="main">
            <div class ="title-box capacity">
                <span class ="title">ご宿泊人数</span>
                <p>ご宿泊する人数：を表示させる</p>
            </div>
            <div class ="title-box room">
                <span class ="title">お部屋タイプ</span>
                <p>お部屋タイプを：表示させる</p>
            </div>
            <div class ="title-box date">
                <span class="title">チェックイン日</span>
                <p>チェックイン日を表示させる</p>
            </div>
            <div class ="title-box date">
                <span class="title">チェックアウト日</span>
                <p>チェックアウト日を表示させる</p>
            </div>
            <div class ="title-box plan">
                <span class="title">選択したプラン</span>
                <p>{{$plan->name}}</p>
            </div>
            <div class ="title-box price">
                <span class="title">料金</span>
                <p>{{$plan->price}}</p>
            </div>
        </div>
        <div class ="input">
            <form method="POST" action="/confirm_reservation">
                @csrf
                <table>
                    <tr>
                        <td class ="default">
                            <label for="name">名前（カタカナ）：</label>
                        </td>
                        <td class ="form">
                            <input type="text" name="name" placeholder="タナカ　タロウ" required>
                        </td>
                    </tr>
                    <tr>
                        <td class ="default">
                            <label for="address">住所：</label>
                        </td>
                        <td class ="form">
                            <input type="text" name="address" placeholder="東京都〇〇" required>
                        </td>
                    </tr>
                    <tr>
                        <td class ="default">
                            <label for="tellphone">電話番号：</label>
                        </td>
                        <td class ="form">
                            <input type="tel" name="phone" placeholder="00011114444" required>
                        </td>
                    </tr>
                    <tr>
                        <td class ="default">
                            <label for="email">メールアドレス：</label>
                        </td>
                        <td class ="form">
                            <input type="email" name="email" placeholder="sadou@gmail.com" required>
                        </td>
                    </tr>
                </table>
                <button type="submit">予約確定</button>
            </form>
        </div>
        
        <div class ="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>