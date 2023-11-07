<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>プラン選択</title>

        <!-- Fonts -->
    
        <link href="{{ asset('css/plans.css') }}" rel="stylesheet">
        <script src ="{{ asset('JavaScript/plans.js') }}"></script>
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
                            <td rowspan="2"><a href="/plans/{{ $choice->id }}/reservation" class="reservation-button">予約する</a></td>
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
    <div class="footer">
        <a href="/reservations">戻る</a>
    </div>
</body>
</html>