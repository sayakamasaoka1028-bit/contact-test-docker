# COACHTECH 基礎学習ターム  
## 確認テスト：お問い合わせフォーム

本リポジトリは、COACHTECH 基礎学習タームの確認テストとして作成した  
「お問い合わせフォーム」アプリケーションです。

---

## 📌 機能一覧

### ▼ フロント側（ユーザー）

1. **入力画面（/）**
   - 姓・名
   - 性別（男性 / 女性 / その他）
   - メールアドレス
   - 電話番号
   - 住所
   - 建物名（任意）
   - お問い合わせ種類（カテゴリー）
   - お問い合わせ内容

2. **確認画面（/contact/confirm）**
   - 入力内容を一覧表示
   - 「修正」「送信」ボタンあり

3. **完了画面（/contact/thanks）**
   - 「Thank you」表示
   - HOME へ戻る

---

### ▼ 管理画面（/admin）
- 氏名検索（姓・名・フルネーム部分一致 OK）
- 性別検索
- お問い合わせ種類検索
- 登録日検索
- メール送信可否（可 / 不可）
- 一覧表示（ページネーション対応）
- 詳細表示
- 削除機能（単体 / 一括）

---

## 🗂 使用技術

| 種類       | 内容                     |
|------------|--------------------------|
| フレームワーク | Laravel 10.x          |
| 言語       | PHP 8.2                 |
| DB         | SQLite                  |
| CSS        | TailwindCSS             |
| 認証       | Breeze（ログインのみ） |


---

## 🧱 ER 図
### contacts
- id
- last_name
- first_name
- gender
- email
- tel
- address
- building
- category_id
- detail
- created_at
- updated_at

### categories
- id
- content
- created_at
- updated_at


---

## 📄 画面構成（7画面）

1. 入力画面
2. 確認画面
3. 完了画面
4. 管理一覧
5. 管理詳細 
6. 管理削除（確認） 
7. ログイン画面（Breeze）

---

## 📝 セットアップ方法

```bash
git clone https://github.com/sayakamasaoka1028-bit/contact-test.git
cd contact-test
composer install
cp .env.example .env
php artisan key:generate

touch database/database.sqlite

php artisan migrate --seed
npm install
npm run build

php artisan serve --port=8001
```
👩‍💻 作成者

COACHTECH 受講生
脇山 沙弥華
