<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>茶道旅館｜泊まれて日本の文化を味わえる</title>

        <!-- Fonts -->
    @vite(['resources/css/hotels.css'])
    </head>
    <body>    
     <div class = "header">
     <div class = "header-logo">
         @foreach ($hotels as $hotel)
           {{ $hotel->name }}
         @endforeach
     </div>
        <div class = "header-list">
            <ul>
                <li>お部屋タイプ</li>
                <li>{{ $hotel->event }}</li>
                <li>{{ $hotel->information }}</li>
                <li>{{ $hotel->FAQ }}</li>
                    @auth
                        <li class = "reservations"><a href = "/reservations">ご宿泊予約</a></li>
                        <li class = "reservation-check"><a href = "/reservation_check">ご予約確認</a></li>
                        <p class ="login">ログイン:{{ Auth::user()->name }}</p>
                    <div class="button-container">
                        <button class="mypage">
                          <a href="{{ route('profile.edit') }}">プロフィール</a>
                        </button>
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                        <button class="logout">
                        ログアウト
                        </button>
                    </form>
                    </div>
                    @else
                        <button class="register_button">
                             <a href="{{ route('register') }}">新規登録</a>
                        </button>
                        <button class="login_button">
                             <a href="{{ route('login') }}">ログイン</a>
                        </button>
                    @endauth
            </ul>
        </div>
     </div>
     
    <div class = "conteiner">
        <h1>茶道旅館</h1>
        <p>泊まれて日本の文化を味わえる</p>
        <img src="{{ Vite::asset('resources/images/picture4.jpg') }}" alt="風景">
    <div class ="main">    
        <h2>茶道旅館について</h2>
        <p>
        {{ $hotel->description }}
        </p>
    </div>    
    <div class = "footer">
    <h3 class =footer-list>
        <ul>
            <li>お問い合わせ</li>
            <li>会社名○○</li>
            <li>メールアドレス○○</li>
            <li>電話番号○○</li>
        </ul>
    </h3>   
    </div>
    </body>
</html>
