# php-form-practice

## 概要
COACHTECH 教材 Tutorial 7-4「フォームとデータ受け渡し ハンズオン演習」で作成した成果物です。  
ユーザー登録サイトについて、そのユーザー情報の入力ページ・情報確認ページ・情報登録の完了ページの3つをPHP、HTML5（フォーム要素）で作成しました。

## 使用技術
- PHP 8.2.31
- HTML5（フォーム要素）

## 学んだこと
- 隠しフィールド(input type="hidden")を用いた確認ページでのデータの保持
- ユーザー入力を表示する際のhtmlspecialcharsによるエスケープ処理の重要性
- 入力フォームにおけるmethodの$POST、$GETの違いやその使い分けについて

## 開発の工夫
- 入力フォームの部分は情報登録に必須のため、すべてrequired属性を付属しました。
- 入力した情報の確認画面は見やすくなるよう、表要素（table）で整理しました。

## 動作確認
Docker環境下で http://localhost:8000/7-4-3_hands-on/practice/input.php にアクセス

## 画面キャプチャ
- 入力画面（input.php）
<img width="1208" height="1052" alt="Image" src="https://github.com/user-attachments/assets/61b8a1d7-32ef-4a93-a6fd-10d8d3d065ba" />

- 確認画面（confirm.php）
<img width="1208" height="1052" alt="Image" src="https://github.com/user-attachments/assets/7d50f8f9-d0da-42be-846e-58ba2f23e5e1" />
- 完了画面（complete.php）
<img width="1208" height="1052" alt="Image" src="https://github.com/user-attachments/assets/8c09f547-b5a4-42a6-a033-43931ee6a650" />
