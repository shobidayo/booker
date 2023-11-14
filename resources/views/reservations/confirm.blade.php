<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>予約情報確認</title>

        <!-- Fonts -->
        @vite(['resources/css/confirms.css'])
    </head>
    <body>
    <form method="POST" action="/confirm_reservation">
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
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="submit" value="予約確定" />
        
        
    </form>
        <!--<div class ="input">-->
        <!--    <form method="POST" action="/confirm_reservation">-->
        <!--        @csrf-->
        <!--        <table>-->
        <!--            <tr>-->
        <!--                <td class ="default">-->
        <!--                    <label for="name">名前（カタカナ）：</label>-->
        <!--                </td>-->
        <!--                <td class ="form">-->
        <!--                    <input type="text" name="users[name]" placeholder="タナカ　タロウ" required>-->
        <!--                </td>-->
        <!--            </tr>-->
        <!--            <tr>-->
        <!--                <td class ="default">-->
        <!--                    <label for="address">住所：</label>-->
        <!--                </td>-->
        <!--                <td class ="form">-->
        <!--                    <input type="text" name="users[address]" placeholder="東京都〇〇" required>-->
        <!--                </td>-->
        <!--            </tr>-->
        <!--            <tr>-->
        <!--                <td class ="default">-->
        <!--                    <label for="tellphone">電話番号：</label>-->
        <!--                </td>-->
        <!--                <td class ="form">-->
        <!--                    <input type="tel" name="users[tell_number]" placeholder="00011114444" required>-->
        <!--                </td>-->
        <!--            </tr>-->
        <!--            <tr>-->
        <!--                <td class ="default">-->
        <!--                    <label for="email">メールアドレス：</label>-->
        <!--                </td>-->
        <!--                <td class ="form">-->
        <!--                    <input type="email" name="users[email]" placeholder="sadou@gmail.com" required>-->
        <!--                </td>-->
        <!--            </tr>-->
        <!--        </table>-->
        <!--        <input type="submit" value="予約確定" />-->
        <!--    </form>-->
        <!--</div>-->
        
        <div class ="footer">
            <a href="/reservations">戻る</a>
        </div>
    </body>
</html>