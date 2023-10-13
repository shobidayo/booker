<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>プラン選択</title>

        <!-- Fonts -->
    
        <link href="{{ secure_asset('css/plans.css') }}" rel="stylesheet">
        <script src ="{{ secure_asset('JavaScript/plans.js') }}"></script>
    </head>
    <body>    
      <div class ="header">
       <h1>プラン選択一覧画面</h1>
      </div>
    
<div class="main">
    @foreach ($choices as $choice)
    <table border="0"> <!-- border="0" でテーブルの枠線を削除 -->
        <tr>
            <td class="heading">プラン名:{{ $choice->name }}</td>
        </tr>
        <tr>
            <td>
                <div class="plan-detail">
                    プランの内容
                    <button class="plan-detail-button" id ="showPopup">プランの詳細</button>
                </div>
            </td>
        </tr>
        <tr>
            <td class="plan-description">
                {{ $choice->body }}
            </td>
        </tr>
        <!-- 料金テーブル -->
        <tr>
            <td>
                <table border="2" class="price-table"> <!-- border="2" で料金テーブルの枠線を太く -->
                    <tr>
                        <td class="price_heading" colspan="3">料金:</td>
                    </tr>
                    <tr>
                        <td class="room-name">シングルルーム</td>
                        <td class="room-price">¥{{ $choice->price }}</td>
                        <td rowspan="2"><button class="reservation-button">予約するボタンを追加</button></td>
                    </tr>
                    <tr>
                        <td class="room-name">ツインルーム</td>
                        <td class="room-price">¥{{ $choice->price1 }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    @endforeach
</div>
<div class="paginate">
    <ul class="pagination">
        {{ $choices->links() }}
    </ul>
    次へ
</div>
<div class="footer">
    <a href="/">戻る</a>
</div>
    </body>
</html>