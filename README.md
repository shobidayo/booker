## Enhance Your Travel Experience with Seamless Reservations
You colud book for confortable, Wishing you a wonderfor journey.
![25D7CD9F-3A13-42DB-A65A-A6E7F828B785](https://github.com/shobidayo/new_repository/assets/142150831/624a1278-979e-4cd1-b73e-ca76085cfb16)


## サービスのURL
https://confort-booking.com/

## サービスの概要
快適にホテル予約を行えるようにするためのアプリケーションです。

## アプリケーションへの想い
思い出作りや旅行をする際にホテルは重要な場所。  
ホテルを予約するには手間がかかってしまうことや、予約の方法が難しいというお声が気になっています。  
そのような方々でも簡単に予約ができ、快適に旅行を楽しめるようにしたいという想いから作成しました。

## ER図
![スクリーンショット 2023-11-13 201026](https://github.com/shobidayo/new_repository/assets/142150831/8d27762a-e8a1-432e-95e0-02ab50db7696)
[ER図.pdf](https://github.com/shobidayo/new_repository/files/13334140/ER.pdf)

## 機能一覧
| TOP画面  | ユーザー登録画面 |
| --- | --- | 
| ![スクリーンショット 2023-11-14 104805](https://github.com/shobidayo/new_repository/assets/142150831/e8e58352-ef36-433c-96cd-25d21bd8111a) | ![スクリーンショット 2023-11-14 105117](https://github.com/shobidayo/new_repository/assets/142150831/55ae4a66-4752-4203-817e-251bb23b4bdf)
| TOPを開いた際に雰囲気が伝わるように華やかさを表現。<br>また、各情報にアクセスしやすいようにしました。 |簡単にログインするために、必要最低限の項目を入力するようにしました。<br>また、入力された情報は重要なのでバリデーション機能を追加した。|  

| ログイン画面  | プロフィール画面 |
| --- | --- |
|![スクリーンショット 2023-11-14 105139](https://github.com/shobidayo/new_repository/assets/142150831/0c8336c5-0caf-4469-a887-668de8cd8508)|![スクリーンショット 2023-11-14 110132](https://github.com/shobidayo/new_repository/assets/142150831/94045d40-8dea-49a2-ae80-7a474558866d)|
| メールアドレスとパスワードで簡単にログインできるようにしました。 |プロフィール編集、パスワード更新、アカウント削除ができるように実装しました。|  

| ログイン後の一覧画面  | 予約検索画面 |
| --- | --- |
|![スクリーンショット 2023-11-14 111418](https://github.com/shobidayo/new_repository/assets/142150831/4191b60b-8187-44e6-8d21-ff3beb8ed2e2)|![スクリーンショット 2023-11-14 111457](https://github.com/shobidayo/new_repository/assets/142150831/6374d85e-c5a0-4856-b7c0-81a51641bc4e)|
|ログイン後「ご予約確認」と「ご宿泊予約」ボタンが表示されるようにしました。予約に色を付けて、一目で予約ができるのがわかるように工夫しました。|泊まりたい人数、お部屋のタイプを簡単に選択できるようにしました。<br>また、チェックイン日から最大７日まで選択できるように工夫して実装しました。|  

|プラン選択画面|予約情報確認画面|
| --- | --- |
|![スクリーンショット 2023-11-14 111523](https://github.com/shobidayo/new_repository/assets/142150831/a5351aca-8a01-4881-b44d-0eee9287daab)|![スクリーンショット 2023-11-14 111600](https://github.com/shobidayo/new_repository/assets/142150831/b58be372-d062-48a8-bb0b-ff765870f112)|
|予約のプランが沢山だとわかりずらいため、プランを一覧で確認することを可能にした。<br>また、選択したいプランを一目で把握できるようにｋ予約のプランが沢山だとわかりずらいため、プランを一覧で確認することを可能にした。<br>また、選択したいプランを一目で把握できるように工夫した。|入力した情報が正しいか再確認できるようにフォーム情報をセッションで保持し、予約確認画面できるように実装しました。|　　

|予約確定画面|予約情報確認画面|
| --- | --- |
|![スクリーンショット 2023-11-14 111613](https://github.com/shobidayo/new_repository/assets/142150831/704447b9-b20a-40fa-bc95-79ea5b4c2721)|![スクリーンショット 2023-11-14 174706](https://github.com/shobidayo/new_repository/assets/142150831/dd62adc3-f1f1-40d2-bbbc-09fbd3c9b3a4)|
|ユーザーが予約を確定したか不安にならないように、予約確定画面を表示することで安心するように工夫。|ユーザーの予約を一覧で確認できるようにしました。<br>また、それぞれの予約にキャンセル機能をつけることでユーザーが自由に予約をキャンセルできるように実装しました。|

## 使用技術
#### インフラストラクチャー
- Amazon Lightsail
#### フロントエンド
- HTML
- CSS
- JavaScript
#### バックエンド
- PHP 
- Laravel9
#### データベース
- Mysql(10.2.38-MariaDB)

## 今後追加する機能
お客様が快適にご予約できることも重要ですが、管理者側も操作が簡単なるようにしていきたいと考えております。

- 管理者側（ダッシュボード、予約編集・削除などの機能など）
- お客様側（自動メール、予約のこだわり検索機能など）